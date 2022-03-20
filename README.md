## Stack

-   Laravel 9
-   Livewire
-   Laravel Scout
-   Meilisearch
-   PostgreSQL

## Data

https://drive.google.com/file/d/1e0bjGc-_aGFfJWaci7VstUg1-Ecr6hWw/view?usp=sharing

## Setup

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

cp .env.example .env
sail up -d
sail artisan key:generate
sail artisan storage:link
sail artisan data:import
sail artisan scout:import
```
