# Biznes Elektroniczy

## Sklep z butami

### Installation

Requires: `Docker` and `Docker Compose`

``` bash
docker-compose build
docker-compose up
```

Then go to [localhost:8080](http://localhost:8080).
```
server: db
user: root
password: Biznes
database: prestashop
```

And import database from file `./dump/postgres.sql`

After import is complete you can finally go to store [localhost](http://localhost).

### Stopping

```
docker-compose down 
```

### Admin page

```
email: polibudamichal@gmail.com
pass: Biznes123
```

### Enable Dev mode

In `prestashop/config/defines.inc.php` change `_PS_MODE_DEV_` to `true`

```php
define('_PS_MODE_DEV_', true);
```
