<?php
  $id_materi = $_GET['id'];
  $no = $_GET['no'];

  $query = "select * from soal where id_materi='$id_materi' and no_soal='$no'";
  $hasil = mysqli_query($connect, $query);
  $data = mysqli_fetch_array($hasil);

?>
<!-- iCheck -->
<div class="box box-success">
  <form action="cekjawaban.php" method="POST">
    <div class="box-header">
      <div class="container">
        <h3 class="box-title">Pertanyaan</h3>
      </div>
    </div>
    <div class="box-body">
      <div class="container">
        <!-- Minimal style -->
        <p>
          <?php echo $data['pertanyaan']; ?>
        </p>
        <!-- radio -->
        <div class="form-group">
          <label>
            <input type="radio" name="jawaban" value="<?php echo $data['opsia']; ?>" class="flat-red">
            <?php echo $data['opsia']; ?>
          </label>
          <br>
          <label>
            <input type="radio" name="jawaban" value="<?php echo $data['opsib']; ?>" class="flat-red">
            <?php echo $data['opsib']; ?>
          </label>
          <br>
          <label>
            <input type="radio" name="jawaban" value="<?php echo $data['opsic']; ?>" class="flat-red">
            <?php echo $data['opsic']; ?>
          </label>
          <br>
          <label>
            <input type="radio" name="jawaban" value="<?php echo $data['opsid']; ?>" class="flat-red">
            <?php echo $data['opsid']; ?>
          </label>
          <br>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <div class="form-group" align="right">
        <input type="hidden" name="idsoal" value="<?php echo $data['id']; ?>">
        <input type="submit" class="btn btn-primary" name="submit" value="Next"/>
      </div>
    </div>
  </form>
</div>