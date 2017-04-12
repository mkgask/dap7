server {
    listen       80;
    server_name  dap7.local;
    root         /var/www/html;
    index        web.php;

    #charset koi8-r;
    #access_log  /var/log/nginx/log/host.access.log  main;
    charset utf-8;

    location / {
        try_files $uri $uri/ @webapp;
    }

    #error_page  404              /404.html;

    # redirect server error pages to the static page /50x.html
    #
    error_page   500 502 503 504  /err/50x.html;
    location = /50x.html {
        #root   /usr/share/nginx/html;
        root   /var/www/html;
    }

    # proxy the PHP scripts to Apache listening on 127.0.0.1:80
    #
    #location ~ \.php$ {
    #    proxy_pass   http://127.0.0.1;
    #}

    # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
    #
    #location ~ \.php$ {
    #    root           html;
    #    fastcgi_pass   127.0.0.1:9000;
    #    fastcgi_index  index.php;
    #    fastcgi_param  SCRIPT_FILENAME  /scripts$fastcgi_script_name;
    #    include        fastcgi_params;
    #}
    location ~ \.php$ {
        fastcgi_pass   php:9000;
        fastcgi_index  web.php;
        #fastcgi_param  SCRIPT_FILENAME  /scripts$fastcgi_script_name;
        fastcgi_param  SCRIPT_FILENAME  /var/www/html$fastcgi_script_name;
        #fastcgi_param  SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param  PATH_INFO $fastcgi_script_name;
        include        fastcgi_params;
    }

    location @webapp {
        fastcgi_pass   php:9000;
        fastcgi_index  web.php;
        fastcgi_split_path_info ^(.+\.php)(.*)$;
        fastcgi_param  SCRIPT_FILENAME  /var/www/html/web.php;
        include        fastcgi_params;
    }

    # deny access to .htaccess files, if Apache's document root
    # concurs with nginx's one
    #
    #location ~ /\.ht {
    #    deny  all;
    #}
    location ~ /\.ht {
        deny  all;
    }

}
