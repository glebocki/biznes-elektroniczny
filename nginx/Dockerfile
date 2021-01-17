FROM nginx
COPY nginx.conf /etc/nginx/nginx.conf
COPY ssl/apache.crt /etc/pki/tls/certs/my-app.cer
COPY ssl/apache.key /etc/pki/tls/private/my-app.key
RUN chown -R www-data:www-data /var/log/nginx
RUN chmod -R 777 /var/log/nginx
