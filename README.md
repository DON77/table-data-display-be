# Initial setup

```bash
    cp .env.example .env
```
Set the db info after

```bash
    php artisan migrate
    php artisan db:seed
```

Seeding the database multiple times, will result adding new fresh random data each time the command is called
