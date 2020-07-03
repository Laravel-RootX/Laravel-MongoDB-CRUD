#### MongoDB PHP driver installed
Make sure you have the MongoDB PHP driver installed. You can find installation instructions at 
http://php.net/manual/en/mongodb.installation.php

For Windows: https://pecl.php.net/package/mongodb/1.7.4/windows

#### .env
```text
MONGO_DB_HOST=127.0.0.1
MONGO_DB_PORT=27017
MONGO_DB_DATABASE=mongodatabase
MONGO_DB_USERNAME=
MONGO_DB_PASSWORD=
```

#### Add array details on database.php config file. (config/database.php)

```text
 'mongodb' => 
[
    'driver'   => 'mongodb',
    'host'     => env('MONGO_DB_HOST', 'localhost'),
    'port'     => env('MONGO_DB_PORT', 27017),
    'database' => env('MONGO_DB_DATABASE'),
    'username' => env('MONGO_DB_USERNAME'),
    'password' => env('MONGO_DB_PASSWORD'),
    'options'  => []
],
```

#### Install Package:
> composer require jenssegers/mongodb

Laravel-mongodb package via the Composer package manager

