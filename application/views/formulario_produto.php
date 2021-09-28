<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    ?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Cadastro Produtos </title>
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
            <h1> Cadastro de Produtos</h1>
            <?php if(isset($produto)) : ?>
            <form action="<?= base_url()?>produto/update/<?= $produto['idProduto'] ?>" method="post"> 
                <?php else : ?>
            <form action="<?= base_url()?>produto/store" method="post">
                <?php endif; ?>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="nome" type="text" name="nome" class="validate" required value="<?= isset($produto) ? $produto['nome'] : "" ?>">
                        <label class="active" for="nome">Nome</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input  id="descricao" type="text" name="descricao" class="validate" required value="<?= isset($produto) ? $produto['descricao'] : "" ?>">
                        <label class="active" for="descricao">Descricao</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input  id="valor" type="numeric" name="valor" class="validate" required value="<?= isset($produto) ? $produto['valor'] : "" ?>">
                        <label class="active" for="valor">Valor</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input  id="quantidade" type="text" name="quantidade" class="validate" required value="<?= isset($produto) ? $produto['quantidade'] : "" ?>">
                        <label class="active" for="quantidade">Quantidade</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input  id="data_cadastro" type="date" name="data_cadastro" class="validate" required value="<?= isset($produto) ? $produto['data_cadastro'] : "" ?>">
                        <label class="active" for="data_cadastro">Data Cadastro</label>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn waves-effect waves-light">Gravar
                    <i class="material-icons right">send</i>
                    </button>
                    <a href="<?= base_url() ?>produto" class="btn waves-effect waves-light" style="background-color:blueviolet;"> Cancelar
                    <i class="material-icons right">clear</i></a>
                </div>
            </form>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="#">Login</a></li>
        </ul>
    </body>
</html>
