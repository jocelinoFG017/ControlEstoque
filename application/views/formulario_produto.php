<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Lista Produtos </title>
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
      <li><a href="<?=base_url('pages\usuario')?>">Usuarios</a></li>
         <li><a href="<?=base_url('pages\produto')?>">Produtos</a></li>
      </ul>
    </div>
  </nav>

  <h1> Cadastro de Produtos</h1>
  
<form method="post" action="gravar"> 
  
<div class="row">
    <div class="input-field col s6">
      <input  id="txtNome" type="text" name="nome" class="validate">
      <label class="active" for="txtNome">Nome</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s6">
      <input  id="txtLogin" type="text" name="login" class="validate">
      <label class="active" for="txtLogin">Login</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s6">
      <input  id="txtSenha" type="text" name="senha" class="validate">
      <label class="active" for="txtSenha">Senha</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s6">
      <input  id="txtCargo" type="text" name="cargo" class="validate">
      <label class="active" for="txtCargo">Cargo</label>
    </div>
  </div>
  <div class="row">
  <button class="btn waves-effect waves-light" type="submit" name="action">Gravar
    <i class="material-icons right">send</i>
  </button>
  </div>
        

</form>




  <ul class="sidenav" id="mobile-demo">
    <li><a href="#">Login</a></li>
  </ul>
          
        
<!--
    <nav class="nav-extended black">
            <div class="nav-wrapper">
                <a href="home" class="brand-logo center">Estoque</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
            nav>-->

  <!--
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="saint">Personagens</a></li>
                    <li class="tab"><a href="home/login">Login</a></li>
                    <li class="tab"><a class="active" href="<?=base_url('saint/formulario')?>">Cadastro</a></li>
                    <li class="tab"><a class="active" href="<?=base_url('saint/sobre')?>">Sobre</a></li>
                </ul>
            </div>
        </nav>
       
        <ul class="sidenav" id="mobile-demo">
            <li class="tab"><a href="saint">Personagens</a></li>
            <li class="tab"><a class="active" href="<?=base_url('saint/formulario')?>">Cadastro</a></li>
            <li class="tab"><a class="active" href="<?=base_url('saint/sobre')?>">Sobre</a></li>
            <img src="images/uni.jpg" style="width: 100%; height: 80%; position: absolute;" />
            
        </ul> -->
<!--        <img src="images/img2.jpg" style="width: 100%; height: 100%;" />-->
    

    </body>
</html>
