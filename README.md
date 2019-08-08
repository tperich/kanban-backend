### Steps to deploy

- Make sure you have git, docker and docker-compose installed
- Ports 3306 (mariadb) and 8000 (laravel) should be free

1. Run `docker-compose up -d`
2. Run `docker exec -it kanban-laravel php artisan migrate --seed` to migrate and seed the database

The api should now be live at `http://localhost:8000`
