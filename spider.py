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

    def parse_product(self, response):
        name = response.xpath('//div/h2/text()').extract_first()
        product_reference = response.xpath(
            '//p[contains(@id, "product_reference")]/span[@class="editable undertitle"]/text()').extract_first()
        price = response.xpath(
            '//div[contains(@class, "extra-product clearfix")]/span/@content').extract_first()
        
        yield {
            'Nazwa': name,
            'Cena': price,
            'Nr referencyjny': product_reference,            
        }


       
            
            
            