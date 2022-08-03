# Rodar o projeto 
* Laravel v9.5.1 (PHP v8.1.8)
* primeiramente baixar o projeto
* segundo baixar o laradock
* terceiro configurar o laradock no arquivo .env
* quarto usar o comando pra levantar o docker dentro do laradock, eu uso apenas dois containers :
* $docker-compose up -d nginx mysql 
* para acessar o projeto coloque localhost e a porta que você colocou no nginx 

# acessadno o workspace do projeto para rodar o artisan
* use o seguinte comando:
* $ docker-compose exec --user=laradock workspace bash 
* agora você vai está dentro do container e poderá usar os comandos do php artisan 

## caso de erro ao usar o php artisan dentro do workspace
* no meu caso ao entrar no workspace a versão do php era a 7.4 então foi incompativel com a que estou usando no projeto (8.0.2)
* então eu procurei o docker que está o nginx e entrei nele e rodei o php artisan migrate e deu certo.
# criando o banco
* php artisan migrate 

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
