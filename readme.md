# Docker-Alpine-Php7 (with nginx and maridb and non dockerfile)

| type | value |
|------|-------|
| VirtualMachine | Docker |
| front | nginx:1.11.13-alpine |
| | h2o-http2-server:v2.2.0 (alpine base) |
| app   | php:7.1.3-fpm-alpine |
| | hhvm:fastcgi:latest (not alpine: debian/jessie) |
| db    | mariadb:10.1.22 (not alpine: debian/jessie) |
|storage| busybox |


Usage:

1. Git clone this repository  
    ```
    git clone https://github.com/mkgask/dap7
    ```  
    (If the git repository is not required, the zip or tar.gz file download & unzip)

2. Check your docker-machine ip address.
    ```
    docker-machine ip
    ```  

3. Set docker-machine ip address in hosts file  
    192.168.xx.xxx dap7.local  

    (If change access domain, changes to storage/etc/nginx/conf.d/localhost.conf)

4. Choose php7 or hhvm use.

    If you choose hhvm, setting change localhost.conf (use nginx) or h2o.conf (use h2o)

5. Up to dokcer-compose
    ```
    docker-compose up -d nginx-php
    ```  
    or
    ```
    docker-compose up -d nginx-hhvm
    ```  
    or
    ```
    docker-compose up -d h2oweb-php
    ```  
    or
    ```
    docker-compose up -d h2oweb-hhvm
    ```  

6. Access localhost web site
    ```
    http://localhost
    ```  
7. HYAAAAAAA!!!!!!! Enjoy php7 programing!!!!!
