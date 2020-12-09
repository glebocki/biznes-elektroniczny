import scrapy
category_name = ''


class SpiderSpider(scrapy.Spider):
    name = 'kategorie'
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
            yield {
            'kategoria': category_name,              
            }