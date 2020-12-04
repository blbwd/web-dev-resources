# Remove Directory 

rm command syntax to delete directories recursively 
The syntax is as follows: 
rm -r dirName 
OR 
rm -r folderName 
OR 
rm -rf folderName 
Examples 
In this example, recursively delete data folder: 
rm -r /home/vivek/data/ 
The specified /home/vivek/data/ will first be emptied of any subdirectories including their subdirectories and files and then data directory removed. The user is prompted for removal of any write-protected files in the directories unless the -f (force) option is given on command line: 
rm -rf dirname-here 
OR 
rm -r -f /path/to/folder/ 
To remove a folder whose name starts with a -, for example '--dsaatia', use one of these commands: 
rm -rf -- --dsaatia 
OR 
rm -rf ./--dsaatia 

