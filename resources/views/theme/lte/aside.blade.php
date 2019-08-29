<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <form class="sidebar-form">
          <div class="user-panel">
            <div class="input-group">
 {{--<img src="{{asset("assets/$theme/dist/img/icons.png")}}" class="img-circle" alt="User Image">--}}
                <a>Administrador</a><br>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
        </form>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Buscar">
                  <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                  </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" data-widget="tree">
           {{-- <li class="header">MAIN NAVIGATION</li>
          --}}  
          <li>
              <a href="../../admin/home">
                <i class="fa fa-home"></i> <span>Home</span>
                
              </a>
            </li>
          
          
          <li class="treeview">
              <a href="#">
                <i class="fa fa-cutlery"></i> <span>Menú</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../admin/menu/dishes"><i class="fa fa-circle-o"></i> Platos</a></li>
                <li><a href="../../index2.html"><i class="fa fa-glass"></i> Bebidas</a></li>
                <li><a href="../../index2.html"><i class="fa fa-gratipay"></i> Postres</a></li>
                <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Combinaciones</a></li>
              </ul>
            </li>
            
            <li>
              <a href="../../admin/promotions">
                <i class="fa fa-bullhorn"></i> <span>Promociones</span>
                <span class="pull-right-container">
                  <small class="label pull-right bg-red">especial</small>
                </span>
              </a>
            </li>
            <li>
                <a href="../../admin/opinions">
                  <i class="fa fa-comments-o"></i> <span>Opiniones</span>
                  
                </a>
              </li>
            
        
           
         
        </section>
        <!-- /.sidebar -->
      </aside>