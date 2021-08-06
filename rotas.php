<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'HomeController@index');
Router::get('/home', 'HomeController@index');
Router::get('/home/cadastrar', 'HomeController@cadastrar');
Router::get('/home/logar', 'HomeController@logar');
Router::get('/myReceitas', 'ReceitasController@index');
Router::get('/myReceitas/adicionar', 'ReceitasController@adicionar');
Router::get('/myReceitas/deslogar', 'ReceitasController@deslogar');

Router::start();