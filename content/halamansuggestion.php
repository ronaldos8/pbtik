<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Materi</a></li>
    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Test</a></li>
    <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Preferences</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab_1">
      <!-- Recomended -->
      <?php
        $query = "select * from materi";
        $hasil = mysqli_query($connect, $query);    
        while($data = mysqli_fetch_array($hasil)) {
          $id_materi = $data['id'];
          $query2 = "select * from jawabsiswa where id_materi=$id_materi";
          $hasil2 = mysqli_query($connect, $query2);
          $data2 = mysqli_fetch_array($hasil2);
      ?>
          <div class="attachment-block clearfix">
            <img class="attachment-img" src="dist/img/photo1.png" alt="Attachment Image">

            <div class="attachment-pushed">
              <h4 class="attachment-heading">
                <a href="soal.php?id=<?php echo $data['id']; ?>&no=1"><?php echo $data['materi']; ?></a>
              </h4>

              <div class="attachment-text">
                Description about the attachment can be placed here.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                <br>
                <a href="soal.php?id=<?php echo $data['id']; ?>&no=1">more</a>
              </div>
              <!-- /.attachment-text -->
            </div>
            <!-- /.attachment-pushed -->
          </div>
      <?php
        }
              
      ?>
      <!-- /.box -->
    </div>
    <!-- /.tab-pane -->
    <div class="tab-pane" id="tab_2">
      <!-- basic knowledge -->
      <?php
        $query = "select * from materi";
        $hasil = mysqli_query($connect, $query);    
        while($data = mysqli_fetch_array($hasil)) {
          $id_materi = $data['id'];
          $query2 = "select * from jawabsiswa where id_materi=$id_materi";
          $hasil2 = mysqli_query($connect, $query2);
          $data2 = mysqli_fetch_array($hasil2);
      ?>
          <div class="attachment-block clearfix">
            <img class="attachment-img" src="dist/img/photo1.png" alt="Attachment Image">

            <div class="attachment-pushed">
              <h4 class="attachment-heading">
                <a href="soal.php?id=<?php echo $data['id']; ?>&no=1"><?php echo $data['materi']; ?></a>
              </h4>

              <div class="attachment-text">
                Description about the attachment can be placed here.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                <br>
                <a href="soal.php?id=<?php echo $data['id']; ?>&no=1">more</a>
              </div>
              <!-- /.attachment-text -->
            </div>
            <!-- /.attachment-pushed -->
          </div>
      <?php
        }
              
      ?>
    </div>
    <!-- /.tab-pane -->
    <div class="tab-pane" id="tab_3">
      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
      when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      It has survived not only five centuries, but also the leap into electronic typesetting,
      remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
      sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
      like Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <!-- /.tab-pane -->
  </div>
  <!-- /.tab-content -->
</div>