<div class="nav-tabs-custom">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Recomended</a></li>
    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Basic Knowledge</a></li>
    <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">All</a></li>
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


          $jumBisa = 0;
          $counter = 0;
          $query3 = "select a.id_dependen, b.materi, c.kesimpulan from materi b, materidependansi a, jawabsiswa c where a.id_materi=$id_materi and a.id_dependen=b.id and c.id_materi=b.id;";
          $hasil3 = mysqli_query($connect, $query3);

          while($data3 = mysqli_fetch_array($hasil3)) {
            if($data3['kesimpulan'] == "Sudah Bisa") {
              $jumBisa += 1;
            }
            $counter += 1;
          }
          if(is_null($data3) && $counter == 0) {
            // echo "None";
          }

          if($counter == 0) {
            $counter = 1;
            $jumBisa = 1;
          }
          $persentase = ($jumBisa / $counter) * 100;

          if ($persentase < 100) {
            $icon = "fa-lock";
            $bg = 'bg-red';
          }else {
            $icon = "fa-unlock-alt";
            $bg = 'bg-green';
          }

          if ($persentase >= 100 && $data2['kesimpulan'] != "Sudah Bisa") {
      ?>
          <div class="attachment-block clearfix">
            <img class="attachment-img" src="dist/img/photo1.png" alt="Attachment Image">

            <div class="attachment-pushed">
              <h4 class="attachment-heading">
                <a href="download.php?materi=<?php echo $data['materi']; ?>.pdf"><?php echo $data['materi']; ?></a>
              </h4>

              <div class="attachment-text">
                <?php echo $data['Deskripsi']; ?>
                <br>
                <a href="soal.php?id=<?php echo $data['id']; ?>&no=1">more</a>
              </div>
              <!-- /.attachment-text -->
            </div>
            <!-- /.attachment-pushed -->
          </div>
      <?php
          }
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
                <a href="download.php?materi=<?php echo $data['materi']; ?>.pdf"><?php echo $data['materi']; ?></a>
              </h4>

              <div class="attachment-text">
                <?php echo $data['Deskripsi']; ?>
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