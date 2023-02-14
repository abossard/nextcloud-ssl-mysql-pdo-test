# Start Nextcloud Docker Image

docker run -p 8080:80 --env-file env.list --mount 'type=bind,src=./config/dbssl.config.php,dst=/var/www/html/config/dbssl.config.php' nextcloud:25-apache

docker cp . 21deb9f64d97:/var/www/html/config
docker exec -ti 21d bash

file /var/www/html/config/DigiCertGlobalRootCA.crt.pem
vi config/config.php
cat /var/log/apache2/error.log
tail /var/log/apache2/error.log
vi config/dbssl.config.php
cp config/DigiCertGlobalRootCA.crt.pem /tmp
ls /tmp
cp config/DigiCertGlobalRootCA.crt.pem /usr/local/share/ca-certificates/DigiCertGlobalRootCA.crt.
vi config/dbssl.config.php
cat config/config.
cat config/config.php
file /usr/local/share/ca-certificates/DigiCertGlobalRootCA.crt.pem