# Change PHP file upload limit 

Open PHP info to check the path of php.ini file 
Now open php.ini file and change the values of these 2 fields. 
upload_max_filesize 
post_max_size 
Set the values as: 
upload_max_filesize = 25M 
post_max_size = 25M 
Now restart the apache server: 
service apache2 restart 

