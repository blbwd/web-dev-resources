# Virtual Host Modrewrite 

1. Create directory for the domain 
sudo mkdir -p /var/www/yourdomainname.com/html 
##  

2. Add User / assign user for that directory 
sudo chown -R $USER:$USER /var/www/yourdomainname.com/html 
** sanjay:sanjay -> username:group 
sudo chown -R sanjay:sanjay /var/www/yourdomainname.com/html 
or 
Change the ownership of that directory to www-data 
sudo chown -R www-data:www-data /var/www/yourdomainname.com 
##  

3. Give permisssion to the user 
sudo chmod 755 -R /var/www/yourdomainname.com 
sudo chmod -R g+w /var/www/yourdomainname.com 
  
4. Create a test HTML file (optional) 
sudo nano /var/www/yourdomainname.com/html/index.html 
##  

5. Open the new file with root privileges in your editor: 
sudo nano /etc/nginx/sites-available/yourdomainname.com 
##  

6. Add the following code in the file 
server { 
listen 80; 
listen [::]:80; 
root /var/www/yourdomainname.com/html; 
index index.php index.html index.htm; 
server_name _www.yourdomainname.com_; 
location / { 
index index.php index.html index.htm; 
try_files $uri $uri/ /index.php?$args; 
} 
location ~ \.php$ { 
try_files $uri =404; 
fastcgi_split_path_info ^(.+\.php)(/.+)$; 
fastcgi_pass unix:/run/php/php7.0-fpm.sock; 
fastcgi_index index.php; 
fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name; 
include fastcgi_params; 
} 
} 
server { 
server_name yourdomainname.com; 
return 301 $scheme://www.yourdomainname.com$request_uri; 
} 
##  

7. Create symbolic link to enable virtual host 
sudo ln -s /etc/nginx/sites-available/yourdomainname.com /etc/nginx/sites-enabled/ 
##  

8. Restart Nginx 
sudo service nginx restart 
##  

9. Add new domain in virtual host file (optional) 
sudo nano /etc/hosts 

