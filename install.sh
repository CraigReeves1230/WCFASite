#!/usr/bin/env bash

echo "-- Updating Apt-Get --"
sudo apt-get update

echo "-- Installing MySQL --"
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password password password'
sudo debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password password'
sudo apt-get -y install mysql-server

echo "-- Installing node, git, Java and other dependencies --"
sudo apt-get -y install nodejs-legacy vim lsof git-core default-jre curl zlib1g-dev build-essential
libssl-dev libreadline-dev libyaml-dev libsqlite3-dev sqlite3 libxml2-dev libxslt1-dev libcurl4-openssl-dev
python-software-properties libffi-dev

echo "-- Installing NGinX --"
sudo apt-get install -y nginx
sudo ufw allow 'Nginx HTTP'
sudo rm /etc/nginx/nginx.conf 
sudo rm /etc/nginx/sites-available/default 
sudo ln -s /var/www/nginx-default /etc/nginx/sites-available/default 
sudo ln -s /var/www/nginx-config /etc/nginx/nginx.conf

echo "-- Installing PHP and Composer --"
sudo apt install -y php7.0-fpm php7.0-mcrypt php7.0-mbstring php7.0-xml php7.0-xmlrpc php7.0-mysql php7.0-common php7.0-gd php7.0-json php7.0-cli php7.0-curl 
sudo apt-get install -y php-zip
sudo apt-get install -y imagemagick
sudo systemctl start php7.0-fpm
sudo apt-get install -y composer

sudo usermod -a -G sudo www-data
sudo service nginx restart










