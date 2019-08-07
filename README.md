### Steps to deploy

1. Make sure you have git, docker and docker-compose installed
2. Ports 3306 (mariadb) and 8000 (laravel) should be free
3. Run `docker-compose up -d`
4. Run `docker exec -it kanban-laravel php artisan migrate` to migrate the database
