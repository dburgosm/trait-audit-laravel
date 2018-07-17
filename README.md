# trait-audit-laravel

Test to create a laravel audit.

# Install

- composer install

# Configure SQLITE

- Create database with command:

```sh
$ cd /path/audit/database
$ sqlite3 database.db
```
- Rename .env.example to .env and change DB_DATABASE

```sh
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=/path/audit/database/database.db
DB_USERNAME=homestead
DB_PASSWORD=secret
```

# Run migration


```sh
php artisan migrate:refresh
```

# Test URL

```sh
http://audit.test/users
```
