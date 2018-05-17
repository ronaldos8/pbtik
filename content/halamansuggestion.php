<?php echo $__head; ?>

<?php echo $__header; ?>

<?php echo $__sidebar; ?>

<?php include "connect.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $__pageTitle; ?>
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <!--<?php echo $__content; ?>-->

        <table style="margin-top:70px;" class="table table-borderless table-hover">
              <tr>
                <td style="padding-bottom:20px; font-size:20px;"><b>Materi</b></td>
                <td style="padding-left:20px; padding-bottom:20px; font-size:20px;"><b>Requirement</b></td>
                <td style="padding-left: 30px; padding-bottom:20px; font-size:20px;"><b>Kesiapan Siswa</b></td>
              </tr>
            <?php


            $query = "select * from materi";
            $hasil = mysqli_query($connect, $query);


            
            
            while($data = mysqli_fetch_array($hasil)) {
              $id_materi = $data['id'];
              
          ?>
              
              <tr>
                <td style="padding-top:20px;"><a href="soal.php?id=<?php echo $data['id']; ?>&no=1"> <?php echo $data['materi']; ?> </a></td>
                <td style="padding-top:20px; padding-left:20px;">
                  <?php

                    $jumBisa = 0;
                    $counter = 0;

                    $query2 = "select a.id_dependen, b.materi, c.kesimpulan from materi b, materidependansi a, jawabsiswa c where a.id_materi=$id_materi and a.id_dependen=b.id and c.id_materi=b.id;";
                    $hasil2 = mysqli_query($connect, $query2);
                    

                    while($data2 = mysqli_fetch_array($hasil2)) {
                      echo $data2['materi'];
                      echo ",";
                      
                      if($data2['kesimpulan'] == "Sudah Bisa") {
                        $jumBisa += 1;
                      }

                      $counter += 1;
                    }

                    if(is_null($data2) && $counter == 0) {
                      echo "None";
                    }


                  ?>
                </td>
                <td style="padding-left:30px; padding-top:20px;">
                  <?php
                    
                    if($counter == 0) {
                      $counter = 1;
                      $jumBisa = 1;
                    }


                    $persentase = ($jumBisa / $counter) * 100;

                    echo $persentase;
                    echo "%";

                  ?>
                </td>
              </tr>

              <?php
            }
              
          ?>
        </table>
			  

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php echo $__footer; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>