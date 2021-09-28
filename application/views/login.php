<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    ?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
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
        <style type="text/css">
            * { margin: 0; padding: 0; font-family:Tahoma; font-size:9pt;}
            #divCenter { 
            width: 800px; 
            height: 150px; 
            left: 50%; 
            margin: -130px 0 0 -210px; 
            padding:10px;
            position: absolute; 
            top: 50%; }
        </style>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper center">
                <a href="#!" class="brand-logo">Login</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        <form action="<?= base_url()?>login/store/" method="post">
            <div id='divCenter' >
                <div class="row" >
                    <div class="input-field col s6 center">
                        <input id="login" type="email" name="login" class="validate">
                        <label class="active" for="login">Login</label>
                    </div>
                </div>
                <div class="row" >
                    <div class="input-field col s6">
                        <input  id="senha" type="password" name="senha" class="validate" required>
                        <label class="active" for="senha">Senha</label>
                    </div>
                </div>
                <div class="row" >
                    <button type="submit" class="btn waves-effect waves-light">Login
                    <i class="material-icons right">send</i>
                    </button>
                </div>
        </form>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="#">Login</a></li>
        </ul>
    </body>
</html>

