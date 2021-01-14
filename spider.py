'''
Skrypt robiony na statku.
nastepuje przekierowanie na strone en. Nalezy zamienic "color:"" na "kolor:"" oraz "ON EQUEST"
'''


import scrapy


class SpiderSpider(scrapy.Spider):
    name = 'spider'
    allowed_domains = ['baldowski.pl']
    start_urls = ['https://baldowski.pl/pl/buty-damskie/']

    def parse(self, response):
        all_products = response.xpath('//article[@class=" product-miniature js-product-miniature"]')
        
        for product in all_products:
            product_url = product.xpath('.//div/div/a/@href').extract_first()
            yield scrapy.Request(product_url, callback=self.parse_product)
        
        next_page_url = response.xpath('//a[@rel="next"]/@href').extract_first()
        if next_page_url:
            yield scrapy.Request(next_page_url, callback=self.parse)

    def parse_product(self, response):
        name = response.xpath('//div/h2/text()').extract_first()
        product_reference = response.xpath(
            '//p[contains(@id, "product_reference")]/span[@class="editable undertitle"]/text()').extract_first()
        price = response.xpath(
            '//div[contains(@class, "extra-product clearfix")]/span/@content').extract_first()
        price_no_discount = response.xpath(
            '//section[contains(@class, "regular-price")]/span/@content').extract_first()
        price_after_discount = response.xpath(
            '//section[contains(@class, "regular-price")]/span/@content').extract_first()
        photo_url = response.xpath(
            '//section[contains(@id, "content")]/a/@href').extract_first()
        size = response.xpath(
            '//select/option/@title').extract()
        full_description = response.xpath(
            '//div[contains(@class, "product-description")]/p/span/text()')
        description = full_description.extract()[0] 
        material = full_description.extract()[1] 
        kolor = full_description.extract()[2].replace('color:', '')
        
        yield {
            'Nazwa': name,
            'Cena': price,
            'Nr referencyjny': product_reference,          
            'Adres zdjecia' : photo_url, 
            'Rozmiary' : size,
            'Cena przed obnizka' : price_no_discount,
            'Cena po obnizce' : price_after_discount,
            'Opis' : description,
            'Material wykonania' : material,
            'Kolor' : kolor,
        }


       
            
            
            