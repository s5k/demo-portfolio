## Installation

```sh
Clone the repo.

Move to repo directory.

Copy .env.example to .env and configure variables inside .env (i.e: set the APP_URL to http://localhost)

Install packages:
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

Run docker containers:
./vendor/bin/sail up -d
```

After done all steps above, you can go to the browser (i.e: localhost) to check is alive.

### Built themes

```sh
Nails Salon:
Leonie Theme: http://localhost/leonie
```
