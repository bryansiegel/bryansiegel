
 \<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:2:"50";s:11:"post_author";s:1:"2";s:9:"post_date";s:19:"2011-05-29 23:35:00";s:13:"post_date_gmt";s:19:"2011-05-29 23:35:00";s:12:"post_content";s:2658:"I'm working on my wife's eCommerce site and had to enable ssl for the admin and shopping cart. I've put together a quick guide on how you can enable ssl with Apache on Ubuntu 10.04. These instructions were used with Snow Leopard but you can use them with any linux flavors you'd like. I'm using a self signed ssl certificate for testing purposes on my VPS.
<h2>How to generate your ssl self signed certificate</h2>
I had to ssh into my server to make this happen on my website

the ssh command is ssh -222 root@youipaddress

enter your password after you hit enter

Open up your terminal and from the shell prompt enter these commands

a2enmod ssl
mkdir /etc/apache2/ssl
openssl req -new -x509 -days 365 -nodes -out /etc/apache2/ssl/apache.pem -keyout /etc/apache2/ssl/apache.key

Next you'll be asked a few configuration values I've copied my output below

Generating a 1024 bit RSA private key
...................................++++++
..............................++++++
writing new private key to '/etc/apache2/ssl/apache.pem'
-----
You are about to be asked to enter information that will be incorporated
into your certificate request.
What you are about to enter is what is called a Distinguished Name or a DN.
There are quite a few fields but you can leave some blank
For some fields there will be a default value,
If you enter '.', the field will be left blank.
-----
Country Name (2 letter code) [AU]:US
State or Province Name (full name) [Some-State]:New Jersey
Locality Name (eg, city) []:Absecon
Organization Name (eg, company) [Internet Widgits Pty Ltd]:SoftwareDev, LLC
Organizational Unit Name (eg, section) []:Web Services
Common Name (eg, YOUR name) []:mydomain.com
Email Address []:support@mydomain.com
<h2>How to configure Apache to use your self signed certificate</h2>
Make sure your still logged into your server with ssh.
type in the following

nano /etc/apache2/ports.conf

add this below your NameVirtualHost *:80
NameVirtualHost *:443
press crtl + x then press enter
press shift + Y then press enter

Now you have one more step to make this happen

from your terminal type

cd /etc/apache2/sites-available/
nano default

You should have aentry. Below theat the bottom of the page I added the following
SSLEngine On
SSLCertificateFile /etc/apache2/ssl/apache.pem
SSLCertificateKeyFile /etc/apache2/ssl/apache.key

ServerAdmin webmaster@mydomain.com
ServerName mydomain.com
DocumentRoot /var/path to your application you can get this from the portion above

press crtl + x then press enter
press shift + y then press enter

now restart apache

/etc/init.d/apache2 restart

and there you should have it. Now you can navigate to https:";s:10:"post_title";s:46:"How to enable ssl with Apache and Ubuntu 10.04";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:46:"how-to-enable-ssl-with-apache-and-ubuntu-10-04";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-04-25 04:38:29";s:17:"post_modified_gmt";s:19:"2013-04-25 04:38:29";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:28:"http://bryansiegel.com/?p=50";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}