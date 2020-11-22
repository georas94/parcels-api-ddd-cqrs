# Installation

```
$ composer install
```

```
$ symfony server:start port=8080
```

## Create the database

Penser à changer le port de la base de données. La mienne étant 8889
```
$  php bin/console doctrine:database:create 
```

```
$  php bin/console make:migration
```

```
$  php bin/console doctrine:migrations:migrate
```


## Load fixtures to use

```
$  php bin/console doctrine:fixtures:load 
```

## 2 endpoints 

```
$  api/login_check  
```

```
$  api/parcels/{trackingId}  
```

## OpenApi documentation link

[localhost:8080/swagger/index.html](http://127.0.0.1:8080/swagger/index.html) 