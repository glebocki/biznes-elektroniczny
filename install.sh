rm -Rf /var/wwww/html/prestashop;
cp ./prestashop /var/html/prestashop;
find /var/www/html/prestashop -exec chown apache:apache {} \;
chown /var/www/html/prestashop apache:apache;
