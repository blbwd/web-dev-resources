###ADD SSl / HTTPS
1. Go to Settings-->General and 'https://' for website address and site address fields.
2. In wp-config.php file add the following code before
/* That's all, stop editing! Happy blogging. */
define('FORCE_SSL_ADMIN', true);
3. Add following code in .htaccess file
```
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteCond %{HTTPS} !=on
RewriteRule ^ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
# BEGIN WordPress
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
```
###Update WordPress Automatically Without Using FTP
1. Open /wp-config.php
2. Paste the following code to your wp-config.php file, preferably just below every other line of code.
define('FS_METHOD','direct');

###WordPress add parameters to the custom URL structure
Add the following code snippet in functions.php
```
// Custom URL rewriting for profiles
add_action('init', function(){
add_rewrite_rule(
'^profiles/([^/]+)([/]?)(.*)',
'index.php?pagename=profiles&user=$matches[1]',
'top'
);
});
add_filter('query_vars', function( $vars ){
$vars[] = 'profiles';
$vars[] = 'user';
return $vars;
});
```
Now on the page where we need to get variables add the following code
$member_username = get_query_var( 'user' );
Ref: https://stackoverflow.com/questions/40886630/using-custom-wordpress-url-link-parameter-instead-of-get-value-in-url
​
