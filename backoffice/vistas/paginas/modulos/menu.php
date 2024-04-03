<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="inicio" class="brand-link">
  <img src="vistas/img/plantilla/shinobo1.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Academy Shinobu</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
     
      <?php if ($usuario["foto"] == ""): ?>

         <img src="vistas/img/usuarios/default/shinobo1.jpg" class="img-circle elevation-2" alt="User Image">

      <?php else: ?>

        <img src="<?php echo $usuario["foto"] ?>" class="img-circle elevation-2" alt="User Image">
        
      <?php endif ?>

      </div>
      <div class="info">
        <a href="perfil" class="d-block"><?php echo $usuario["nombre"] ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
          <a href="inicio" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Inicio</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="perfil" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Mi perfil</p>
          </a>
        </li>

        <?php if ($usuario["perfil"] == "admin"): ?>

          <li class="nav-item">
            <a href="usuarios" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Usuarios</p>
            </a>
          </li>
          
        <?php endif ?>

      

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-graduation-cap"></i>
            <p>
            Academia
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="cuerpo-activo" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cuerpo Activo</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="mente-sana" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Mente Sana</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="espiritu-libre" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Espíritu Libre</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-sitemap"></i>
            <p>
            Mi red
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="uninivel" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Red uninivel</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="binaria" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Red binaria</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="matriz" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Red matriz 4x4</p>
              </a>
            </li>
          </ul>
        </li>

         <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-money-check-alt"></i>
            <p>
            Ingresos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="ingresos-uninivel" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ingresos uninivel</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="ingresos-binaria" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ingresos binaria</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="ingresos-matriz" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Ingresos matriz 4x4</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="plan-compensacion" class="nav-link">
            <i class="nav-icon fas fa-gem"></i>
            <p>Plan de compensación</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="soporte" class="nav-link">
            <i class="nav-icon fas fa-comments"></i>
            <p>Soporte</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="salir" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Cerrar sesión</p>
          </a>
        </li>




      </ul>

    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>