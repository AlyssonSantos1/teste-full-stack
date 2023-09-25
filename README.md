Olá esse é o meu codigo para o teste da Aquidev e vou mostrar o passo a passo pra voces logo Abaixo.

1- Eu dei o fork do repositorio e em seguida o clonei na minha maquina <br>
2- Ai eu dei o comando do laravel pra criar o projeto e com isso criei o Aquidevtest atraves desse comando -> composer create-project laravel/laravel Aquidevteste <br>
3- Instalei o Composer
4- Antes de tudo fui no arquivo .env e nomeei o DB_DATABASE com um nome de minha preferencia e criei no Mysql um banco com nome identico <br>
5- entrei na pasta e em seguida criei a migration onde cria-se a tabela pra registrar no banco de dados onde cria o schmea e os dados que voce quer nela <br>
6-Como boa pratica é sempre bom criar a tabela no plural pra criar a model no singular o que veremos mais a frente <br>
7- criada a migration é hora de ir para as rotas em web.php onde ('/') apos a barra vc definira o nome da rota que ira passar no navegador e chamar as funçoes <br>
8- criar os formularios em seguida na blade.php onde vale lembrar get é para pegar um arquivo no banco de dados, Post é para enviar e put é para atualizar um dado la no banco <br>
9-Uma pratica Importante nos formularios da blade é depois do form action= "/" é deixar o nome da rota que vai chamar e deixar um token chamado @csrf para autorizar a exibiçao na tela <br>
10- Eu fiz esse codigo basicamente de um cadastro de cervejas de uma loja onde eu posso Criar, Editar, Atualizar, Deletar e Por ultimo mostrar Todos os itens CAdastrados no sistema <br>
11-Observacao:: Eu criei uma rota extra de mostrar itens usando o id onde so vai mostrar aquele item em especifico ex: depois da rota o Id for 1, exibe o que for id1 no banco de dados,
a rota é;'/mostrar-cervejas/{id_da_cerveja}' <br>
11- As rotas deles Sao:'/cadastro-cervejas', /editar-cervejas/{id_da_cerveja}, /atualizar-cervejas/{id_da_cerveja}, /excluir-cervejas/{id_da_cerveja}, /exibir-cervejas <br>
12- Resumidademente primeiro eu fiz a migration, depois rotas, depois o form,depois criei a model, depois fiz o migration pro banco de dados e por ultimo atualizei e exclui os cadastros pelo formulario <br>
13- e por ultimo dei o php artisan serve e tudo funcionou corretamente: <br>
14- em algumas etapas utilizei o debud die ou o famoso dd() para saber por etapas se tava passando dados pra ai eu avancar com o codigo <br>
