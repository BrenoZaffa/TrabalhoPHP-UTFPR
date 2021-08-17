<?php


class ReceitasController{

    public function deslogar(){
        require './models/conexaoBDO.php';
        $usuario = new user();
        $usuario->deslogar();
        header('Location: /home');
    }

    public function index(){
        require './models/conexaoBDO.php';
        $usuario = new user();
        $receitas = $usuario->listaReceitas();
        require './views/minhaReceita.php';
    }
}
