# Installare LAMP
```
sudo apt-get install tasksel
sudo tasksel install lamp-server
```
# Editare i files nella directory di default
```
sudo chown -R claudio:claudio /var/www/html
cd /var/www/html
mv index.html login.html
gedit login.html (vedi slide 38)
gedit verify.php (vedi slide 39)
```
# Ottenere una shell mysql come super-user
```
sudo mysql
```
## Dalla shell mysql 
### creare un utente
```
CREATE USER 'ecommerce'@'localhost' IDENTIFIED WITH mysql_native_password BY 'cicciobello';
```
### creare un database
```
CREATE DATABASE my_ecommerce;
```
### fornire i privilegi necessari all utente sul database
```
GRANT ALL PRIVILEGES ON my_ecommerce.* to 'ecommerce'@'localhost';
exit;
```

# Collegarsi a mysql con l'utente appena creato
```
mysql -u ecommerce -p -h localhost
```
## Dalla shell mysql creare una tabella dentro il database e inserire un record
```
use my_ecommerce;
 CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO users (username, name, password) VALUES ("claudio", "Claudio Benvenuti", "benve");
```
# Visualizzare i logs di apache
tail -f /var/log/apache2/error.log
