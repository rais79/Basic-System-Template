  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>student</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> 
            <span>Log LI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Student/log"><i class="fa fa-plus-square-o"></i>Rekod Log</a></li>
            <li><a href="<?php echo base_url();?>Student/listlog"><i class="fa fa-bars"></i>Senarai Log</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>menu 2</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> 1</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> 2</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> 3</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> 4</a></li>
          </ul>
        </li>
        <li class="header">User</li>
        <li><a href="<?php echo base_url('Welcome/logout');?>"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>