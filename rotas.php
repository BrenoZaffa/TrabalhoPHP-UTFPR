<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'HomeController@index');
Router::get('/home', 'HomeController@index');
Router::post('/home/cadastrar', 'HomeController@cadastrar');
Router::post('/home/logar', 'HomeController@logar');
Router::get('/myReceitas', 'ReceitasController@index');
Router::get('/myReceitas/adicionar', 'ReceitasAddController@adicionar');
Router::post('/myReceitas/enviar', 'ReceitasAddController@enviar');
Router::get('/myReceitas/deslogar', 'ReceitasController@deslogar');

Router::start();