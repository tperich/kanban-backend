### Steps to deploy

- Make sure you have git, docker and docker-compose installed
- Ports 3306 (mariadb) and 8000 (laravel) should be free

1. Run `docker-compose up -d`
2. Run `docker exec kanban-laravel ./vendor/bin/phpunit` to run tests

Additional info:

- If you encounter `permission denied` to storage while opening localhost:800 in browser,
  run `docker exec kanban-laravel chown -R www-data:www-data /app` to fix the problem.

- Run `docker exec kanban-laravel php artisan migrate --seed` to migrate
  and seed the DB.
