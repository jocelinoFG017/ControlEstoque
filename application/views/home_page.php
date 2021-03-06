<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    
    
    ?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Home </title>
        <!-- jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> 
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Materialize Necesssary items-->
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".sidenav").sidenav();
            });
        </script>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Controle de Estoque</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?=base_url('usuario')?>">Usuarios</a></li>
                    <li><a href="<?=base_url('produto')?>">Produtos</a></li>
                    <li><a href="<?=base_url('login/logout')?>">Sair</a></li>
                </ul>
            </div>
        </nav>
        <ul class="sidenav" id="mobile-demo">
        <li><a href="<?=base_url('usuario')?>">Usuarios</a></li>
                    <li><a href="<?=base_url('produto')?>">Produtos</a></li>
                    <li><a href="<?=base_url('login/logout')?>">Sair</a></li>
        </ul>
    </body>
</html>

