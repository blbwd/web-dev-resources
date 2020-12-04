# Increase File upload limit and execution time 

1. Open 
sudo nano /etc/php/7.0/fpm/php.ini 
2. Change the following values to 
post_max_size = 100M 
upload_max_filesize = 100M 
memory_limit = 128M 
max_execution_time = 60 
3. Restart PHP FPM and Nginx 
sudo systemctl restart php7.0-fpm 
sudo service nginx restart 
4. Open 
sudo nano /etc/nginx/nginx.conf 
Put the following text into the http section 
client_max_body_size 100M; 
5. Reload Nginx 
sudo systemctl reload nginx 

