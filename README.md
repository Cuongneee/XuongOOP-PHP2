# XuongOOP-PHP2
Thực hành xưởng PHP2

PACKAGE USING
Route: https://github.com/bramus/router

View: https://github.com/EFTEC/BladeOne

Model: https://github.com/doctrine/dbal/

3.1. Lệnh cài: composer require doctrine/dbal

3.2. Tài liệu sử dụng: https://www.doctrine-project.org/projects/doctrine-dbal/en/4.0/reference/introduction.html

Validate: https://github.com/rakit/validation

ENV: https://github.com/vlucas/phpdotenv

.htaccess:

RewriteEngine On
RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . index.php [L]
