<div class="box box-info">
  <div class="box-header ui-sortable-handle" style="cursor: move;">
    <i class="fa fa-edit"></i>

    <h3 class="box-title"><?php echo $materi['materi']; ?></h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
        <i class="fa fa-times"></i></button>
    </div>
    <!-- /. tools -->
  </div>
  <div class="box-body">
    <p>
      <?php echo $materi['deskripsi']; ?>
    </p>
  </div>
  <div class="box-footer clearfix" align="right">
    <a href="modul/<?php echo $materi['materi']; ?>.pdf" class="btn btn-info">Download File</a>
  </div>
</div>