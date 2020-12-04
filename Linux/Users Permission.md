# Users Permission 

Login as root 
1. Create User: 
sudo adduser newusername 
Fill up all the details and hit enter. 
2. Add the new user to sudo group 
sudo usermod -aG sudo newusername 
Delete any user from sudo group 
sudo deluser username sudo 
3. Switch to new user account 
su - newusername 
4. Check sudo status of the new user (list root directory) 
sudo ls -la /root 
5. Adding user to particular group (www-data is the group name) 
sudo usermod -a -G www-data newusername 
6. Set owner group of any specific directory 
sudo chown -R www-data:www-data /var/www/directoryname 
7. Set permission of the user on its group 
sudo chmod -R g+w /var/www/directoryname 
8. Set home directory of a user 
sudo usermod -m -d /path/to/new/home/dir newusername 
9. Disable any use to login via SSH 
sudo nano /etc/ssh/sshd_config 
Then add the following lines at the end of the file: 
  
**Deny users (space delimited)** 
DenyUsers username1 username2 username3 
Restart SSH 
sudo service sshd restart 
  
  
**Make the user www-data the owner of the docroot:** 
sudo chown -R www-data:www-data /var/www 
  
**Make the ftp user a member of the www-data group** 
sudo usermod -a -G www-data sajnay 
  
**Make the www-data user a member of the ftp user's group** 
sudo usermod -a -G sanjay www-data 
  
**Make the all the files under the target directories writable by the group:** 
chmod -R g+w /var/www/sanjaybhowmick.com/html 
  
**Check under which groups a current user is:** 
groups sanjay 
  
**Create new sudo user** 
Log in to your server as the root user. 
ssh root@server_ip_address 
Use the adduser command to add a new user to your system. 
Be sure to replace username with the user that you want to create. 
adduser username 
Set and confirm the new user's password at the prompt. A strong password is highly recommended! 
Set password prompts: 
Enter new UNIX password: 
Retype new UNIX password: 
passwd: password updated successfully 
Follow the prompts to set the new user's information. It is fine to accept the defaults to leave all of this information blank. 
User information prompts: 
Changing the user information for username 
Enter the new value, or press ENTER for the default 
Full Name []: 
Room Number []: 
Work Phone []: 
Home Phone []: 
Other []: 
Is the information correct? [Y/n] 
Use the usermod command to add the user to the sudo group. 
usermod -aG sudo username 
By default, on Ubuntu, members of the sudo group have sudo privileges. 
Test sudo access on new user account 
Use the su command to switch to the new user account. 
su - username 
As the new user, verify that you can use sudo by prepending "sudo" to the command that you want to run with superuser privileges. 
sudo command_to_run 
For example, you can list the contents of the /root directory, which is normally only accessible to the root user. 
sudo ls -la /root 
The first time you use sudo in a session, you will be prompted for the password of the user account. Enter the password to proceed. 
Output: 
[sudo] password for username: 
  
**Disable Root access** 
sudo nano /etc/ssh/sshd_config 
setting PermitRootLogin to no, and then restarting ssh: 
sudo service ssh restart 
  
**Change the ownership / group of directory or sub-directories** 
sudo chown -R newuser:newuser /new direcory path 
Example: 
sudo chown -R sanjay:sanjay /usr/share/nginx/html 
For WordPress: 
Open the folder as terminal 
sudo chown -R www-data:www-data dev 
sudo chmod -R 755 dev 
** dev is a sub folder which is set write permissions 
Changing the owner and group of a directory : 
sudo chown -R www-data:www-data /var/www/yourdomainname.com/html 
Adding user to a particular group: 
sudo usermod -a -G www-data sanjay 
sudo chown -R www-data:www-data /var/www/ 
sudo chmod -R g+w /var/www 
  
**Create new MySQL user** 
1. Login to PHPMyAdmin 
2. Open SQL tab and put the following codes 
CREATE USER 'sanjay'@'localhost' IDENTIFIED BY 'password'; 
GRANT ALL PRIVILEGES ON * . * TO 'sanjay'@'localhost'; 
FLUSH PRIVILEGES; 
** 'sanjay '- new username & 'password' - password of sanjay 
Grant privilages to a particular database: 
CREATE USER 'sanjay'@'localhost' IDENTIFIED BY 'password'; 
GRANT ALL PRIVILEGES ON your_databasename. * TO 'sanjay'@'localhost'; 
FLUSH PRIVILEGES; 

