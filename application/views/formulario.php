<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    ?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Lista Usuarios </title>
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
                </ul>
            </div>
        </nav>
        <div class='container'>
            <h1> Cadastro de Usuarios</h1>
            <?php if(isset($usuario)) : ?>
            <form action="<?= base_url()?>usuario/update/<?= $usuario['idUsuario'] ?>" method="post"> 
                <?php else : ?>
            <form action="<?= base_url()?>usuario/store" method="post">
                <?php endif; ?>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="nome" type="text" name="nome" class="validate" required value="<?= isset($usuario) ? $usuario['nome'] : "" ?>">
                        <label class="active" for="nome">Nome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input  id="login" type="text" name="login" class="validate" required value="<?= isset($usuario) ? $usuario['login'] : "" ?>">
                        <label class="active" for="login">Login</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input  id="senha" type="password" name="senha" class="validate" required value="<?= isset($usuario) ? $usuario['senha'] : "" ?>">
                        <label class="active" for="senha">Senha</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input  id="idCargo" type="text" name="idCargo" class="validate" required value="<?= isset($usuario) ? $usuario['idCargo'] : "" ?>">
                        <label class="active" for="idCargo">Cargo</label>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn waves-effect waves-light">Gravar
                    <i class="material-icons right">send</i>
                    </button>
                    <a href="<?= base_url() ?>usuario" class="btn waves-effect waves-light" style="background-color:blueviolet;"> Cancelar
                    <i class="material-icons right">clear</i></a>
                </div>
            </form>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="#">Login</a></li>
        </ul>
    </body>
</html>
