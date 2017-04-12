listen: 80
access-log: /dev/stdout
error-log: /dev/stderr

file.custom-handler:
  extension: .php
  fastcgi.connect:
    host: php
    port: 9000
    type: tcp

file.index: [ 'web.php', 'index.html' ]

hosts:
  dap7.local:
    paths:
      /:
        file.dir: /var/www/html
        file.dirlisting: OFF
        redirect:
          url: /web.php/
          internal:YES
          status:307
