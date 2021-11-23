<nav class="navbar navbar-expand navbar-light text-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link  text-dark bg-light" href="<?php echo site_url("auth/principal"); ?>"><i class="bi bi-graph-up-arrow">  </i> Inversiones  <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link  text-dark bg-light dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bi bi-person-fill"></i> <?php echo ($usuario_logueado); ?>
        </a>
        <div class="dropdown-menu   text-dark bg-light dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item  text-dark bg-light" href="<?php echo site_url("main/nuevainversion"); ?>">Nueva inversion</a>
          <div class="dropdown-divider  text-dark bg-light"></div>
          <a class="dropdown-item  text-dark bg-light" href="<?php echo site_url("main/inversiones"); ?>">Ver mis inversiones</a>
          <div class="dropdown-divider  text-dark bg-light"></div>
          <a class="dropdown-item  text-dark bg-light" href="<?php echo site_url("main/cambiarpass"); ?>">Cambiar contraseña</a>
          <div class="dropdown-divider  text-dark bg-light"></div>
          <a class="dropdown-item  text-dark bg-light" href="<?php echo site_url("auth/salir"); ?>">Salir</a>
     
          
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>