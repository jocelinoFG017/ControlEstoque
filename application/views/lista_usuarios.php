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

<?php 
    $this->load->view('\templates\header');
?>
    



<div class='container'>
<h3> Listagem de Usuarios</h3>      
  <table class="striped">
        <thead>
          <tr>    
          <th>#</th>
          <th>Nome</th>
              <th>login</th>
              <th>senha</th>
              <th>cargo</th>
              <th>Ação</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($usuarios as $usu ) { ?>
            <tr>
            <td> <?=$usu['idUsuario']?></td>    
            <td> <?=$usu['nome']?></td>
                <td> <?=$usu['login']?></td>
                <td> <?=$usu['senha']?></td>
                <td> <?=$usu['cargo']?></td>
                <td> action</td>
            </tr>
            <?php } ?>
        </tbody>
      </table>
      <a href="usuario/formulario" class="right btn-floating btn-large waves-effect waves-light red">
          <i class="material-icons">add</i></a>
            
          </div>

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

