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
    


<div class='container'>
<h3> Listagem de Produtos</h3>      
  <table class="striped">
        <thead>
          <tr>    
          <th>#</th>
          <th>Nome</th>
              <th>descricao</th>
              <th>valor</th>
              <th>quantidade</th>
              <th>img</th>
              <th>data</th>
          </tr>
        </thead>
<!--
        <tbody>
          <?php foreach($usuarios as $usu ) { ?>
            <tr>
            <td> <?=$usu['idUsuario']?></td>    
            <td> <?=$usu['nome']?></td>
                <td> <?=$usu['login']?></td>
                <td> <?=$usu['senha']?></td>
                <td> <?=$usu['cargo']?></td>
                <td>
                    <a href="<?= base_url()?>Usuario/delete<?=$usu['idUsuario'] ?>" > 
                    <i class="small material-icons">delete</i>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        -->
      </table>
      <a href="produto/formulario_produto" class="right btn-floating btn-large waves-effect waves-light red">
          <i class="material-icons">add</i></a>
            
          </div>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#">Login</a></li>
  </ul>

    </body>
</html>

