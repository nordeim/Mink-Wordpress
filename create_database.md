```sql
CREATE USER 'u385792050_OeRMX'@'localhost' IDENTIFIED BY 'rA8YckTqTw';
CREATE USER 'u385792050_OeRMX'@'127.0.0.1' IDENTIFIED BY 'rA8YckTqTw';
GRANT ALL PRIVILEGES ON u385792050_3gn7O.* TO 'u385792050_OeRMX'@'localhost';
GRANT ALL PRIVILEGES ON u385792050_3gn7O.* TO 'u385792050_OeRMX'@'127.0.0.1';
FLUSH PRIVILEGES;
EXIT;
```

```bash
rsync -avz -e "ssh -p 65002" u385792050@109.28.112.2:~/public_html/ /home/greenyellow-mink/
```

```bash
mysql -u root -p < /home/greenyellow-mink/u385792050_3gn7O.sql
mysql -u root -p u385792050_3gn7O -e "show tables;"
```

```sql
UPDATE `wp_users`
SET 
  `user_pass` = '$2y$10$6/VdcOMfMCwT81A3fTMGuOmt2RQoDyBemmrP1/40rlj3zYemOF2cS',
  `user_email` = 'wpadmin@localhost.localdomain',
  `user_url` = 'https://greenyellow-mink.com'
WHERE `ID` = 1;
```
