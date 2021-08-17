<?php
    class ReceitasAddController{
        
        
        public function enviar(){
            require './models/conexaoBDO.php';
            $usuario = new user();
            $receitas = $usuario->listaReceitas();
        }

        public function adicionar(){
            require './models/conexaoBDO.php';
            require './views/cadastroReceitas.php';
        }
    }