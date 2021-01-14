# Biznes Elektroniczy

## Sklep z butami

### Installation

Requires: `Docker` and `Docker Compose`

``` bash
docker-compose build
docker-compose up
```

Then go to [localhost:8080](localhost:8080).
```
server: db
user: root
password: Biznes
database: prestashop
```

And import database from file `./dump/postgres.sql`

After import is complete you can finally go to store `http://localhost/prestashop`

### Stopping

```
docker-compose down 
```

### Admin page

```
email: polibudamichal@gmail.com
pass: Biznes123
```