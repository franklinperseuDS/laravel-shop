# Comando para rodar o projeto
##  >:docker-compose up


# Comando para listar os container rodando
## >: docker ps  ou docker-compose ps

# comando para entrar no terminal do container
## >: docker exec -it id do container


# para criar migrations 
## https://laravel.com/docs/5.6/migrations 
## php artisan make:migration nome do documento --create= nome da tabela

# para rodar as migrations
## php artisan migration

# criar seeder
## >: php artisan make:seeder nome_da_seeder

# rodar a seeder
## >: php artisan db:seed --class=nome_da_seeder
