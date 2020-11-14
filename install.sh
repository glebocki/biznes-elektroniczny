rm -Rf /var/wwww/html/prestashop;
cp ./prestashop /var/www/html/prestashop;
find /var/www/html/prestashop -exec chown apache:apache {} \;
chown apache:apache /var/www/html/prestashop;

# ausearch -c 'sendmail' --raw | audit2allow -M my-sendmail
# semodule -i my-sendmail.pp

# ausearch -c 'postdrop' --raw | audit2allow -M my-postdrop
# semodule -i my-postdrop.pp

# ausearch -c 'httpd' --raw | audit2allow -M my-httpd
# semodule -i my-httpd.pp

# ausearch -c 'gdm-session-wor' --raw | audit2allow -M my-gdmsessionwor
# semodule -i my-gdmsessionwor.pp

# setenforce 0
