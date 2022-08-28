## Quick Project Setup

Follow the steps below to setup:

However, instead of repeatedly typing vendor/bin/sail to execute Sail commands, you may wish to configure a shell alias that allows you to execute Sail's commands more easily:

-   `alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'`

-   Run
    ` sail up -d`
-   From the projects root run `cp .env.example .env`
-   Run `sail composer update`
-   Run Migration & Seeds `sail artisan migrate:install && sail artisan migrate && sail artisan db:seed`
-   Run `sail yarn install && sail yarn dev`

Open your web browser and go to `http://localhost/vullnerabilities`

## Vullnerabilities Task URL's (routes)

-   List `/vullnerabilities`
-   Create Page `/vullnerabilities/create`
-   Vullnerability single page `vullnerabilities/{vullnerability}`
-   Vullnerability edit page `vullnerabilities/{vullnerability}/edit`
-   Vullnerability delete `vullnerabilities/{vullnerability}` [DELETE]
-   Vullnerability create `vullnerabilities` [POST]
-   Vullnerability update `vullnerabilities/{vullnerability}` [PUT|PATCH]

## Run Tests

`sail artisan test`
