import scrapy
category_name = ''


class SpiderSpider(scrapy.Spider):
    name = 'produkty'
    allowed_domains = ['baldowski.pl']
    start_urls = ['https://baldowski.pl/pl/',]    

    def parse(self, response):        
        all_categories = response.xpath('//ul[@class="mega-nav"]/li[@data-title="1"]')   
        for category in all_categories:
            category_name = category.xpath('.//text()').extract_first()
            category_name = category_name.upper()
            #DISREGARDING FAKE CATEGORIES
            if category_name == 'OFERTA' or category_name == 'DISCOUNT' or category_name == 'DESCRIPTION' or category_name == 'OUTLET':           
                continue
            if category_name == 'SALE':
                category_url = 'https://baldowski.pl'+category.xpath('.//a/@href').extract_first()
            else:
                category_url = category.xpath('.//a/@href').extract_first()+'?page=1'
                yield scrapy.Request(category_url, callback=self.parse2, cb_kwargs=dict(categor_name=category_name))
    
    def parse2(self, response,categor_name):        
        all_products = response.xpath('//article[@class=" product-miniature js-product-miniature"]')        
        
        for product in all_products:                        
            product_url = product.xpath('.//div/div/a/@href').extract_first()            
            yield scrapy.Request(product_url, callback=self.parse_product, cb_kwargs=dict(categor_name=categor_name))
        
        next_page_url = response.xpath('//a[@rel="next"]/@href').extract_first()
        if next_page_url != response.url:
            yield scrapy.Request(next_page_url, callback=self.parse2,cb_kwargs=dict(categor_name=categor_name))

    def parse_product(self, response, categor_name):        
        #NAME
        name = response.xpath('//div/h2/text()').extract_first()
        #SERIAL NO
        product_reference = response.xpath(
            '//p[contains(@id, "product_reference")]/span[@class="editable undertitle"]/text()').extract_first()
        #PRICE
        price = response.xpath(
            '//div[contains(@class, "extra-product clearfix")]/span/@content').extract_first()
        
        #PRICE BEFORE DISCOUNT
        isExists = response.xpath( '//div[@class="product-discount"]/span[@class= "regular-price"]/text()').extract_first(default='not-found')
        if( isExists == 'not-found'):
            price_no_discount =''            
        else:
            price_no_discount = response.xpath('//div[@class="product-discount"]/span[@class= "regular-price"]/text()').extract_first()
            price_no_discount = price_no_discount.replace('zł','')        
        
        #PHOTOS URL
        photo_url = [ response.xpath('//section[contains(@id, "content")]/a/@href').extract_first()]        
        isExists = response.xpath( '//div[contains(@class,"product-div-mobile")]/a/@href').extract_first(default='not-found')        
        if( isExists == 'not-found'):
            pass            
        else:
            photo_url.append( response.xpath('//div[contains(@class,"product-div-mobile")]/a/@href').extract_first() )               
        #SIZES                
        size = response.xpath('//select/option/@title').extract()
        
        #DESCRIPTION, MATERIAL & COLOR
        full_description = response.xpath('//div[contains(@class, "product-description")]//text()').extract()
        
        full_description = [ele for ele in full_description if ele !=['\r\b']]
        full_description = [ele for ele in full_description if ele !=['\r\n']]
        full_description = [ele for ele in full_description if ele !=['']]
        lista=[]
        for full_description2 in full_description:
            full_description2 = full_description2.strip('\r\n')
            full_description2 = full_description2.strip('\r\b')
            full_description2 = full_description2.strip('\xa0')   
            lista.append(full_description2)
        full_description = lista
        lista = list(filter(None,full_description))
        full_description = lista
        #DESCRIPTION
        description = full_description[0]
        description = description.lower()
        description = description.capitalize()
        #MATERIAL & COLOR
        material = full_description[1] 
        material = material.lower()
        if material.find('kolor') != -1:
            start=material.find('kolor')
            material=material[0:start]             
            kolor=material[start:]   
            kolor = kolor.lower()          
            if kolor.find('kolor') == 0:                
                kolor = kolor.replace('kolor:', '')
                if kolor =='\xa0':
                    kolor = full_description[2]  
                    kolor = kolor.lower()
                    if kolor.find('kolor') == 0:                
                        kolor = kolor.replace('kolor:', '') 
        else:
            kolor = full_description[2]                  
            kolor = kolor.lower()
            if kolor.find('kolor') == 0:                
                kolor = kolor.replace('kolor:', '')
            if kolor =='\xa0':
                kolor = full_description[3]
                kolor = kolor.lower()
                if kolor.find('kolor') == 0:                
                    kolor = kolor.replace('kolor:', '')           
        material= material.capitalize()
        obnizka = 0
        price_no_discount=price_no_discount.replace('\xa0','')
        price_no_discount=price_no_discount.replace(',','.')
        price=price.replace('\xa0','') 
        if price_no_discount !='':        
            
            obnizka = float(price_no_discount) - float(price)
        if obnizka == 0:
            obnizka = ''
        wyprzedaz = 0
        wyprzedaz_od =''
        wyprzedaz_do =''
        if obnizka != '':
            wyprzedaz = 1
            wyprzedaz_od = '2020-11-01'
            wyprzedaz_do = '2021-06-01'
        producent = 'Bałdowski'
        utworzono = '2020-09-01'
        if categor_name == 'NOWOSCI':
             utworzono = '2020-12-11'
        magazyn ='Glówny magazyn'

        #PREPARING FOR CSV
        yield {
            'Kategoria': categor_name,              
            'Nazwa': name,
            'Cena obecna': price,
            'Obnizka' : obnizka,
            '#Indeks': product_reference,          
            'Obraz' : photo_url, 
            'Rozmiary' : size,
            'Opis' : description,
            'Podsumowanie' : material,
            'Kolor' : kolor,
            'Aktywny': 1,
            'Regula podatkowa': 1,
            'Cana regularna przed obnizka': price_no_discount,
            'Wyprzedaz': wyprzedaz,   
            'Wyprzedaz od': wyprzedaz_od,
            'Wyprzedaz do': wyprzedaz_do,
            'Producent':  producent,
            'Ilosc': 50,
            'Minimalna ilosc': 1,
            'Mala ilosc w magazynie': 4,
            'Powiadom gdy w magazynie mało': 1,
            'Utworzono' : utworzono,  
            'Magazyn': magazyn,
            'Dostepne': 1,
            'Pokaż cene': 1,
            'Tekst alternatywny': name,
            'Tekst gdy na stanie': "Dostępne",
            'Pokaz cene': 1,
            

        }
        
       