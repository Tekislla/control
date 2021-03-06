<?php

/* Controlador de páginas
 *
 * Aqui você contruirá as suas páginas
 *
 * $data é um array onde voce pode colocar informações como título da pagina ou então id de um produto
*/

    require_once 'engine/Construct.php';

    class Controller extends Construct
    {
        public function error_404(){
            $data['titulo_pagina'] = 'Error 404';
            $this->loadView('error_404.php', $data);
        }

        public function index(){
            $data['titulo_pagina'] = 'Bem Vindo';
            $this->loadView('inicio.php', $data);
        }
    }