<div class="sidebar">
    
        <nav class="sidebar-nav">  
          <ul class="nav">
            @role('SuperAdmin')
              <li class="nav-item">
                <a class="nav-link" href="SuperAdmin-home">
                  <i class="nav-icon icon-home"></i> Home
                <!--  <span class="badge badge-primary">NEW</span> -->
                </a>
              </li>
            @endrole 
            @role('Administrador')
              <li class="nav-item">
                <a class="nav-link" href="Admin-home">
                  <i class="nav-icon icon-home"></i> Home
                <!--  <span class="badge badge-primary">NEW</span> -->
                </a>
              </li>
            @endrole 
            @role('Propietario')
              <li class="nav-item">
                <a class="nav-link" href="Propietario-home">
                  <i class="nav-icon icon-home"></i> Home
                <!--  <span class="badge badge-primary">NEW</span> -->
                </a>
              </li>
            @endrole
            @role('Encargado')
            <li class="nav-item">
              <a class="nav-link" href="Encargado-home">
                <i class="nav-icon icon-home"></i> Home
              <!--  <span class="badge badge-primary">NEW</span> -->
              </a>
            </li>
          @endrole 
          
            
            @role('SuperAdmin')
            <li class="nav-title">Seguridad</li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link" href="usuario-admin">
                <i class="nav-icon icon-cursor"></i> Usuarios</a>
              <ul class="nav-dropdown-items">
              </ul>
            </li>
          
            <li class="nav-item nav-dropdown">
              <a class="nav-link" href="usuario-admin">
                <i class="nav-icon icon-cursor"></i> Roles</a>
              <ul class="nav-dropdown-items">
              </ul>
            </li>
            <li class="nav-title">Administrativa</li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link" href="usuario-admin">
                <i class="nav-icon icon-cursor"></i>Datos del sector</a>
              <ul class="nav-dropdown-items">
              </ul>
            </li>
            @endrole
            @role('Administrador')
          
            
            <li class="nav-item nav-dropdown">
              <a class="nav-link" href="tiponegocio">
                <i class="nav-icon icon-cursor">
                </i>Sector / Tipo de negocio</a>
              <ul class="nav-dropdown-items">
             
              </ul>
              
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link" href="negocio?cate=1">
                <i class="nav-icon icon-cursor"></i> Negocio</a>
              <ul class="nav-dropdown-items">
            
              </ul>
            </li>
            
            <li class="nav-item nav-dropdown">
              <a class="nav-link" href="sucursal?cate=1">
                <i class="nav-icon icon-cursor"></i>Sucursal</a>
              <ul class="nav-dropdown-items">
             
              </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="sucursal?cate=1">
                  <i class="nav-icon icon-cursor"></i>Papelera de reciclaje</a>
                <ul class="nav-dropdown-items">
               
                </ul>
              </li>
           
            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="usuario">
                  <i class="nav-icon icon-user"></i>Usuario</a>
                <ul class="nav-dropdown-items">
               
                </ul>
              </li>
              @endrole  
              <!--
            <li class="nav-item">
              <a class="nav-link" href="charts.html">
                <i class="nav-icon icon-pie-chart"></i> Promociones</a>
            </li>
            <li class="nav-item nav-dropdown">
              <a class="nav-link " href="#">
                <i class="nav-icon icon-star"></i> Opinion</a>
              <ul class="nav-dropdown-items">
                
              </ul>
            </li>-->
           
            
              @role('Encargado')
                <li class="nav-item nav-dropdown">
                  <a class="nav-link " href="categoria">
                    <i class="nav-icon icon-puzzle"></i>Repertorio</a>
                  <ul class="nav-dropdown-items">
                
                  </ul>
                </li>
                <li class="nav-item nav-dropdown">
                  <a class="nav-link" href="detalle">
                    <i class="nav-icon icon-cursor"></i> Productos</a>
                  <ul class="nav-dropdown-items">
                
                  </ul>
                </li>
              @endrole
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div> 