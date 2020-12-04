# Git Commands

**Git basic**

1. Go to the project folder using Terminal.
2. Initialize Git, it will create a .git directory that contains all the Git-related information for your project.
git init
 
3. We need to configure our name and email. You can do it as follows, replacing the values with your own name and email.
 
git config --global user.name 'sanjay'
git config --global user.email 'yourname@youremail.com'
git config --global color.ui 'auto'
 
4. Check the Status of Your Repository.
git status
 
5. Add files to Git
Single file: git add my_file_name
Multiple files: git add myfile2 myfile3
All files & folders in a directory: git add *
All newly created files only: git add -a
 
6. Remove file from Git
git rm --cached [file_name]
 
Update Git cache for all delted files at once
git add -u 
 
7. Commit changes
git commit -m "My first commit"
 
8. Now after commit if we change any coding of the files then it will be tracked by Git and we can check the status by typing:
git status
 
9. For seeing any difference of the changed file contents just type:
git diff filename
 
10. To add all the changed files in Git staging type:
git add -u
 
11. Final commit via user interface
git commit
 
12. Check Git log
git log
 
13. Transfer the code in cloud like Github:
git remote add origin _https://github.com/user/my_git_project.git_

git push -u origin master
 
14. Clone a remote git repository
git clone _https://github.com/user/my_git_project.git_

 
15. Clone contents of a git repository (without the folder itself)
git clone _https://github.com/user/my_git_project.git_ .
(space dot)
 
**GIT Branches**

 
Create a new branch:
git checkout -b feature_branch_name
 
Edit, add and commit your files.
 
Push your branch to the remote repository:
git push -u origin feature_branch_name
 
**GIT - Firewall Configuration**

 
Firewall configuration for Bitbucket
so on ubuntu open /etc/hosts file
and add 104.192.143.3 bitbucket.org in first line

