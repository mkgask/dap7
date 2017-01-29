# Docker-Alpine-Php7 (with nginx and maridb and non dockerfile)

| type | value |
|------|-------|
| VirtualMachine | Docker |
| front | nginx:1.11.9-alpine |
| app   | php:7.1.1-fpm-alpine |
| db    | mariadb:10.1.21 (not alpine) |
|storage| busybox |


Usage:

1. Git clone this repository  
    ```
    git clone https://github.com/mkgask/dap7.git
    ```  
    (If the git repository is not required, the zip or tar.gz file download & unzip)

2. Check your docker-machine ip address.
    ```
    docker-machine ip
    ```  

3. Set docker-machine ip address in hosts file  
    192.168.xx.xxx localhost  

    (If change access domain, changes to ./storage/etc/nginx/conf.d/localhost.conf)

4. Up to dokcer-compose
    ```
    docker-compose up -d nginx php mariadb
    ```  

5. Access localhost web site
    ```
    http://localhost
    ```  
6. HYAAAAAAA!!!!!!! Enjoy php7 programing!!!!!
