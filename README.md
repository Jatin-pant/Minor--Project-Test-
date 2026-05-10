# Minor-Project

## Live hosting database setup

The database connection is configured in `db.php`.

For XAMPP/local development, the default settings are:

```php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'tictactoe';
```

On live hosting, create a MySQL database and database user from your hosting
panel, then update `db.php` with the values from the host. Shared hosting often
uses prefixed names, for example:

```php
$dbHost = 'localhost';
$dbUser = 'cpanelusername_dbuser';
$dbPass = 'your_database_user_password';
$dbName = 'cpanelusername_tictactoe';
```

Also import `tictactoe.sql` into the live database using phpMyAdmin or your
hosting panel's database import tool.
