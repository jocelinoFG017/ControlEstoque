<nav>
   <div class="nav-wrapper container">
      <a href="#!" class="brand-logo">Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger">
          <i class="material-icons">menu</i>
      </a>
      <ul class="right hide-on-med-and-down">
         <li><a href="<?=base_url('usuario')?>">Usuarios</a></li>
         <li><a href="<?=base_url('produto')?>">Produtos</a></li>
         <li><a href="<?=base_url('login/logout')?>">Sair</a></li>
      </ul>
     
      <ul class="sidenav" id="mobile-demo">
         <li style="color:black;text-align:center;padding:15px;"> Controle de Estoque</li>
         <li><a href="<?=base_url('usuario')?>">Usuarios</a></li>
         <li><a href="<?=base_url('produto')?>">Produtos</a></li>
      </ul>
   </div>
</nav>

