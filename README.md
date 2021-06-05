#2. Email Github timeline updates
Github Updates is a webapp which fetches the Github Public Timeline and mails it to 
you every 5 minutes. 


## Technologies used
The webapp is written in PHP, with HTML, CSS, and Vanilla Javascript. Cron jobs
were used to send emails. <br>

WebApp URl : http://wh891613.ispot.cc 

Open Xampp Start Mysql and Apache
```
3. Start Apache and MySQL <br>
4. Go to PHPMyAdmin <br>
5. Create a new database <br>
6. Create a new table:
```
CREATE TABLE `<database>`. ( `email` VARCHAR(256) NOT NULL , 
`verify_token` VARCHAR(256) NOT NULL , `verified` INT(2) NOT NULL , 
`verified_on` TIMESTAMP NOT NULL );
``` 
6. Configure /resources/db-conf.php:
```
$con = mysqli_connect("<host>", "<username>", "<password>", "<database>");
```
7. Configure /resources/config.php
```
$_SESSION['email_username'] = '<email id>';
$_SESSION['password'] = '<semail_password>';
$_SESSION['smtp_host'] = '<smtp host | example: smtp.gmail.com>';
$_SESSION['fetch_url'] = 'https://github.com/timeline';
$_SESSION['limit_results'] = <number of items per fetch>;
$_SESSION['root_url'] = '<path/domain | example: C:/xampp/htdocs/php-danish17>';
```

