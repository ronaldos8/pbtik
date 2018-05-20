<?php
  require 'function.php';
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | ITS</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/AdminLTE.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition lockscreen">
  <!-- Automatic element centering -->
  <div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
      <a href="#"><b>Login</b> Ke Sistem</a>
    </div>
    <div class="help-block text-center" id="notif">
      <!-- Enter your password to retrieve your session -->
      <!-- <div class="callout callout-success" style="padding: 5px;">
        <p>Login berhasil...</p>
      </div> -->
    </div>
    <!-- User name -->
    <div id="nama_user" class="lockscreen-name">Type your username</div>

    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item">
      <!-- lockscreen image -->
      <div class="lockscreen-image">
        <img src="<?php echo base_url(); ?>dist/img/user1-128x128.jpg" alt="User Image">
      </div>
      <!-- /.lockscreen-image -->

      <!-- lockscreen credentials (contains the form) -->
      <form class="lockscreen-credentials">
        <div class="input-group">
          <input type="password" name="password" class="form-control hide" onkeypress="return cekLogin_enter(event)" placeholder="password" autofocus required >
          <input type="text" class="form-control" name="username" onkeypress="return next_enter(event)" placeholder="username" autofocus required >

          <div class="input-group-btn">
            <button title="Next" type="button" onclick="next()" id="btn1" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
            <button title="Login" type="button" onclick="cekLogin()" id="btn2" class="btn hide"><i class="fa fa-arrow-right text-muted"></i></button>
          </div>
        </div>
      </form>
      <!-- /.lockscreen credentials -->

    </div>
    <!-- /.lockscreen-item -->
    <div class="help-block text-center">
      Enter your password to retrieve your session
    </div>
    <div class="text-center">
      <a href="#" onclick="reset()">Or sign in as a different user</a>
    </div>
    <div class="lockscreen-footer text-center">
      Copyright © 2014-2016 <b><a href="https://adminlte.io" class="text-black">Almsaeed Studio</a></b><br>
      All rights reserved
    </div>
  </div>
  <!-- /.center -->

  <!-- jQuery 3 -->
  <script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="<?php echo base_url(); ?>dist/js/cookie.js"></script>

  <script type="text/javascript" charset="utf-8" async defer>
    
    var nama_user = getCookie("username");
    
    if (nama_user != "") {
      $('#nama_user').text('Hello, '+nama_user+'!');
      $("input[type=text][name=username]").val(nama_user);
      $("input[type=text][name=username]").addClass('hide');
      $("input[type=password][name=password]").removeClass('hide');
      $("input[type=password][name=password]").addClass('fade in')
      $('#btn1').addClass('hide');
      $('#btn2').removeClass('hide');
    }

    function reset()
    {
      $('#notif').html('');
      $("input[type=text][name=username]").removeClass('hide');
      $("input[type=password][name=password]").removeClass('hide');
      $("input[type=password][name=password]").addClass('hide');
      $('#nama_user').text('Type your username');
      $('#btn1').removeClass('hide');
      $('#btn2').removeClass('hide');
      $('#btn2').addClass('hide');
      $("input[type=text][name=username]").val('');
    }

    function next_enter(e)
    {
      if (e.keyCode == 13) {
        next();
      }
    }

    function next()
    {
      nama_user = $("input[type=text][name=username]").val();
      $('#nama_user').text('Hello, '+nama_user +'!');
      $("input[type=text][name=username]").addClass('hide');
      $("input[type=password][name=password]").removeClass('hide');
      $("input[type=password][name=password]").addClass('fade in')
      $('#btn1').addClass('hide');
      $('#btn2').removeClass('hide');
    }

    function cekLogin_enter(e)
    {
      if (e.keyCode == 13) {
        cekLogin();
      }
    }

    function cekLogin()
    {
      var uname = $("input[type=text][name=username]").val();
      var passw = $("input[type=password][name=password]").val();
      $.ajax({
       type: "post",
       url: "<?php echo base_url('api/login.php?method=cekLogin'); ?>",
       data: {username:uname, password:passw},
       success: function(data) {
        var a = JSON.parse(data);
        if (a.success == true) {
          var el = '<div class="callout callout-success" style="padding: 5px;"><p>Login berhasil...</p></div>';
          $('#notif').html(el);

          var now = new Date();
          var time = now.getTime();
          var expireTime = time + 30*2400*36000;
          now.setTime(expireTime);
          // var tempExp = 'Wed, 31 Oct 2012 08:50:17 GMT';

          document.cookie = "log=true;expires='"+now.toGMTString()+"'";
          document.cookie = "username="+a.data['username']+";expires='"+now.toGMTString()+"'";
          document.cookie = "nama="+a.data['nama']+";expires='"+now.toGMTString()+"'";
          document.cookie = "level="+a.data['level']+";expires='"+now.toGMTString()+"'";
          setTimeout(window.location.href = '<?php echo base_url(); ?>', 30000);
        }else {
          var el = '<div class="callout callout-danger" style="padding: 5px;"><p>Login gagal</p></div>';
          $('#notif').html(el);
        }
       },
       error: function(data) {
        msg = JSON.stringify(data)
        alert(msg);
       }
      });
    }
  </script>

  </body>
</html>