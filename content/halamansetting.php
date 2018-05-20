 <!-- Main content -->
<section class="content container-fluid">
<?php
  $query = "truncate table jawabsiswa";
  $hasil = mysqli_query($connect, $query);
  $query = "insert into jawabsiswa values (null, 1, 0, 0, 0, 'Belum bisa'),(null, 2, 0, 0, 0, 'Belum bisa'),(null, 3, 0, 0, 0, 'Belum bisa');";
  $hasil = mysqli_query($connect, $query);
?>
</section>