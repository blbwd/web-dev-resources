# Git Ignore WordPress

Create a file named .gitignore and add the following snippet as per requirement. 
##Ignore everything in the root except the "wp-content" directory.
 
## /*

## !.gitignore

## !wp-content/

 
### Ignore everything in the "wp-content" directory, except the "plugins" and "themes" directories.
 
## wp-content/*

## !wp-content/plugins/

## !wp-content/themes/

 
### Ignore everything in the "plugins" directory, except the plugins you specify (see the commented-out examples for hints on how to do this.)
 
## wp-content/plugins/*

## !wp-content/plugins/my-single-file-plugin.php

## !wp-content/plugins/my-directory-plugin/

 
 
# Ignore everything in the "themes" directory, except the themes you specify (see the commented-out example for a hint on how to do this.)
 
## wp-content/themes/*

## !wp-content/themes/npb/
