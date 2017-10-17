 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="https://lh3.googleusercontent.com/--phcKd9Bao4/AAAAAAAAAAI/AAAAAAAAADg/f2o-kX0RWns/s60-p-no/photo.jpg" height="16px" width="160px" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Romesh Shil</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-tags"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <router-link tag="li" to="/category_create"><a> <i class="fa fa-circle-o"></i> Category Create</a></router-link>
            <router-link tag="li" to="/category"><a> <i class="fa fa-circle-o"></i> Category List</a></router-link>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-tags"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <router-link tag="li" to="/blog_create"><a> <i class="fa fa-circle-o"></i> Blog Create</a></router-link>
            <router-link tag="li" to="/blog"><a> <i class="fa fa-circle-o"></i> Blog List</a></router-link>
          </ul>
        </li>

       

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>