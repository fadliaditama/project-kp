
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url()?>assets2/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets2/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url()?>assets2/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url()?>assets2/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets2/dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>assets2/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url()?>assets2/dist/css/skins/_all-skins.min.css">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <script type="text/javascript" src="<?=base_url()?>assets/dashboard/js/plugins/lesscss/less.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/login/js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.3.js"></script>

    <script>
        $(window).load(function(){
        $("#harga").on("change", function(){
            var nilai = $("#harga :selected").attr("data-harga");
            $("#hasil").val(nilai);
        });
        });
    </script>
    <script>
        $(window).load(function(){
        $("#harga3").on("change", function(){
            var nilai = $("#harga3 :selected").attr("data-harga3");
            $("#hasil3").val(nilai);
        });
        });
    </script>
    <script>
        $(window).load(function(){
        $("#harga1").on("change", function(){
            var nilai = $("#harga1 :selected").attr("data-harga1");
            $("#hasil1").val(nilai);
        });
        });
    </script>
    <script>
        $(window).load(function(){
        $("#harga2").on("change", function(){
            var nilai = $("#harga2 :selected").attr("data-harga2");
            $("#hasil2").val(nilai);
        });
        });
    </script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="<?=base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>OS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">PT. Pos Indonesia</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          
          
          <li class="dropdown user user-menu">
              <a href="#" class="toggle" data-toggle="modal" data-target="#modal-danger">
              <i class="fa fa-sign-out"></i>
            </a>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nama ?></p>
          <a><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo $status?>">
          <a href="<?=base_url()?>dashboard/index">
            <i class="fa fa-dashboard"></i> <span>Pengajuan</span>
          </a>
        </li>
        <li class="treeview">
            <li class="<?php echo $status5?>">
                <a href="<?=base_url()?>dashboard/data_upt">
                <i class="fa fa-files-o"></i> <span>Data Pengajuan</span>
                </a>
            </li>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>