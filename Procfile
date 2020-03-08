web: vendor/bin/heroku-php-nginx public/
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
