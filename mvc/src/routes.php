<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/cadastro', 'CadastroController@cadastro');
$router->post('/cadastroAction', 'CadastroController@cadastroAction');
