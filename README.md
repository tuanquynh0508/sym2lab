symlab
======

A Symfony project created on January 15, 2016, 1:53 pm.

Virtual Host
============

```
<VirtualHost *:80>
        ServerName sym2lab.local
        ServerAlias sym2lab.local
        DocumentRoot /home/nntuan/Gits/sym2lab/web
        SetEnv sfEnv dev
        <Directory /home/nntuan/Gits/sym2lab/web>
                #Options Indexes FollowSymLinks
                AllowOverride all
                Require all granted
                <IfModule mod_rewrite.c>
                        RewriteEngine On
                        RewriteCond %{REQUEST_FILENAME} !-f
                        RewriteRule ^(.*)$ app_dev.php [QSA,L]
            RewriteCond %{HTTP:Authorization} ^(.*)
                        RewriteRule .* - [e=HTTP_AUTHORIZATION:%1]
                </IfModule>
        </Directory>
        ErrorLog ${APACHE_LOG_DIR}/error-sym2lab.log
        CustomLog ${APACHE_LOG_DIR}/access-sym2lab.log combined
</VirtualHost>
```
