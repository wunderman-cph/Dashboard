<?php include('log.php'); ?>
<?php

  /* Neolane PDump */
  $nlpdump = getCommand('sudo -i -u neolane bash -c ". nl6/env.sh;/usr/local/neolane/nl6/bin/nlserver pdump"');
  $catalinalog = getCommand('tail -n 1000 $(/bin/ls -1t /usr/local/neolane/nl6/var/logs/* | /bin/sed q)');

  if (strpos($nlpdump,'web@') !== false) {
    $nlstatus = "Running";
  } else {
    $nlstatus = "Not Running";
  }

  $c = getCommand('sudo -i -u neolane bash -c ". nl6/env.sh;/usr/local/neolane/nl6/bin/nlserver web -version"');
  if (preg_match("/for (.*?) o/i", $c, $matches)) {
    $nlversion = $matches[1];
  } else {
    $nlversion = $c;
  }


?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adobe VM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>VM</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">Adobe <b>VM</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include("sidebar.php") ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">

          <!-- Content -->
          <h1>
            Adobe Campaign
          </h1>

          <!-- Breadcrumb -->
          <ol class="breadcrumb">

          </ol>

        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Controls -->
        <div class="row">
          <div class="col-md-5">
            <div class="box box-primary">
              <table class="table">
                <tr>
                  <td>
                    Campaign Version
                  </td>
                  <td>
                    <?= $nlversion ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    Client URL
                  </td>
                  <td>
                    http://<?=$_SERVER['HTTP_HOST']?>:8080
                  </td>
                </tr>  
                <tr>
                  <td>
                    Client Download
                  </td>
                  <td>
                    Download from <a href="https://eshare.wunderman.com/dl/3TiJGaBTKw">here</a>
                  </td>
                </tr>  


                <tr>
                  <td>
                    Username and Password
                  </td>
                  <td>
                    admin/admin
                  </td>
                </tr>                            
                <tr>
                  <td>
                    Status
                  </td>
                  <td>
                    <?= $nlstatus ?>
                  </td>
                </tr>                
                <tr>
                  <td>
                    Launch
                  </td>
                  <td>
                    <a href="http://<?=$_SERVER['HTTP_HOST']?>:8080/view/home"><button type="button" class="btn btn-block btn-success">Launch</button></a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <!-- Logs -->
        <div class="row">
          <div class="col-md-12">
            <div class="nav-tabs-custom" style="cursor: move;">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right ui-sortable-handle">
                <li class=""><a href="#log" data-toggle="tab" aria-expanded="true">Catalina</a></li>
                <li class="active"><a href="#pdump" data-toggle="tab" aria-expanded="false">Pdump</a></li>
                
                <li class="pull-left header"><i class="fa fa-file-text"></i>Logs</li>
              </ul>
              <div class="tab-content">
                <!-- PDump -->
                <div class="tab-pane active" id="pdump" style="position: relative; min-height: 100px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                <pre><?= $nlpdump ?></pre>
                </div>
                <div class="tab-pane" id="log" style="position: relative; min-height: 100px;">
                <pre><?= $catalinalog ?></pre>
                </div>
              </div>
            </div>
          </div>
        </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


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
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
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
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
