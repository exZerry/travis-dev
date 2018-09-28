$Env:COMPOSE_CONVERT_WINDOWS_PATHS=1
docker build -t dinarys/php:7.2 .
docker-compose up -d