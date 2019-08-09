### Steps to deploy

- Make sure you have git, docker and docker-compose installed
- Ports 3306 (mariadb) and 8000 (laravel) should be free

1. Run `docker-compose up -d`
2. Run `docker exec kanban-laravel ./vendor/bin/phpunit` to run tests

The api should now be live at `http://localhost:8000`
