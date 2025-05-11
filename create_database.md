# wrA8YckTqTwp
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
USE u385792050_3gn7O;
UPDATE `wp_users`
SET 
  `user_pass` = '$2y$10$6/VdcOMfMCwT81A3fTMGuOmt2RQoDyBemmrP1/40rlj3zYemOF2cS',
  `user_email` = 'wpadmin@localhost.localdomain',
  `user_url` = 'https://greenyellow-mink.com'
WHERE `ID` = 1;
```

mysql -u u385792050_OeRMX -p -h 127.0.0.1
```sql
USE u385792050_3gn7O;
UPDATE wp_options SET option_value = 'https://greenyellow-mink.com' WHERE option_name = 'siteurl';
UPDATE wp_options SET option_value = 'https://greenyellow-mink.com' WHERE option_name = 'home';
EXIT;
```

```sql
use u385792050_3gn7O;
select option_value from wp_options where option_name = 'home' or option_name = 'siteurl';
```

+---------------------------------------------------+
| option_value                                      |
+---------------------------------------------------+
| https://greenyellow-mink-583150.hostingersite.com |
| https://greenyellow-mink-583150.hostingersite.com |
+---------------------------------------------------+


```sql
USE u385792050_3gn7O;
SELECT u.user_login
FROM wp_users u
JOIN wp_usermeta m ON u.ID = m.user_id
WHERE m.meta_key = 'wp_capabilities'
  AND m.meta_value LIKE '%administrator%';
```
