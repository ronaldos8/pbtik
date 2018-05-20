  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama']; ?></p>
          <!-- Status -->
          <a href="#">
            <i class="fa fa-user text-success"></i>
            <?php
              if ($_SESSION['level'] == 1) {
                echo "Guru";
              }else echo "Siswa";
            ?>
          </a>
        </div>
      </div>

      <!-- search form (Optional) -->
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li <?php echo (isset($v_active) && $v_active == 'dashboard') ? "class='active'" : ""; ?>><a href="index.php"><i class="fa fa-link"></i> <span>DASHBOARD</span></a></li>
        <li <?php echo (isset($v_active) && $v_active == 'learn') ? "class='active'" : ""; ?>><a href="learn.php"><i class="fa fa-link"></i> <span>LEARN</span></a></li>
        <li <?php echo (isset($v_active) && $v_active == 'test') ? "class='active'" : ""; ?>><a href="test.php"><i class="fa fa-link"></i> <span>TEST</span></a></li>
        <li <?php echo (isset($v_active) && $v_active == 'suggestion') ? "class='active'" : ""; ?>><a href="suggestion.php"><i class="fa fa-link"></i> <span>SUGGESTION</span></a></li>
        <li <?php echo (isset($v_active) && $v_active == 'setting') ? "class='active'" : ""; ?>><a href="setting.php"><i class="fa fa-link"></i> <span>SETTING</span></a></li>
        <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
