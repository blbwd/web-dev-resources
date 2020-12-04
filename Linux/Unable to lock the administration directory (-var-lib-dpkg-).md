# Unable to lock the administration directory (/var/lib/dpkg/) 

search for processes. 
ps -A | grep apt-get 
then see if there any process running as apt-get 
kill that process it by using: 
sudo kill -9 <process-id> 
for example if process id is 2345 
sudo kill -9 2345 
then run the sudo apt-get update 

