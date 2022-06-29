--- 
customlog: 
  - 
    format: combined
    target: /etc/apache2/logs/domlogs/quantifyuniversity.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /etc/apache2/logs/domlogs/quantifyuniversity.com-bytes_log
documentroot: /home/olufmdppx6pn/public_html
group: olufmdppx6pn
hascgi: 1
homedir: /home/olufmdppx6pn
ip: 72.167.69.26
owner: gdresell
phpopenbasedirprotect: 1
port: 80
scriptalias: 
  - 
    path: /home/olufmdppx6pn/public_html/cgi-bin
    url: /cgi-bin/
serveradmin: webmaster@quantifyuniversity.com
serveralias: mail.quantifyuniversity.com www.quantifyuniversity.com
servername: quantifyuniversity.com
usecanonicalname: 'Off'
user: olufmdppx6pn
