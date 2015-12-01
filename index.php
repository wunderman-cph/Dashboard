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
            Adobe Virtual Machine Dashboard
          </h1>

          <!-- Breadcrumb -->
          <ol class="breadcrumb">

          </ol>

        </section>

        <!-- Main content -->
        <section class="content">

          <!-- KPI's -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>

          <!-- Charts -->
          <div class="row">

            <!-- Left Side -->
            <div class="col-md-8">
                <div class="box">
                  <div class="box-header with-border">
                    <h3 class="box-title">Monthly Recap Report</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <div class="btn-group">
                        <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-8">
                        <p class="text-center">
                          <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                        </p>
                        <div class="chart">
                          <!-- Sales Chart Canvas -->
                          <canvas id="salesChart" style="height: 100%; width: 487px;" width="487" height="202"></canvas>
                        </div><!-- /.chart-responsive -->
                      </div><!-- /.col -->
                      <div class="col-md-4">
                        <p class="text-center">
                          <strong>Goal Completion</strong>
                        </p>
                        <div class="progress-group">
                          <span class="progress-text">Add Products to Cart</span>
                          <span class="progress-number"><b>160</b>/200</span>
                          <div class="progress sm">
                            <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                          </div>
                        </div><!-- /.progress-group -->
                        <div class="progress-group">
                          <span class="progress-text">Complete Purchase</span>
                          <span class="progress-number"><b>310</b>/400</span>
                          <div class="progress sm">
                            <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                          </div>
                        </div><!-- /.progress-group -->
                        <div class="progress-group">
                          <span class="progress-text">Visit Premium Page</span>
                          <span class="progress-number"><b>480</b>/800</span>
                          <div class="progress sm">
                            <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                          </div>
                        </div><!-- /.progress-group -->
                        <div class="progress-group">
                          <span class="progress-text">Send Inquiries</span>
                          <span class="progress-number"><b>250</b>/500</span>
                          <div class="progress sm">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                          </div>
                        </div><!-- /.progress-group -->
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                  </div><!-- ./box-body -->
                  <div class="box-footer">
                    <div class="row">
                      <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                          <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                          <h5 class="description-header">$35,210.43</h5>
                          <span class="description-text">TOTAL REVENUE</span>
                        </div><!-- /.description-block -->
                      </div><!-- /.col -->
                      <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                          <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                          <h5 class="description-header">$10,390.90</h5>
                          <span class="description-text">TOTAL COST</span>
                        </div><!-- /.description-block -->
                      </div><!-- /.col -->
                      <div class="col-sm-3 col-xs-6">
                        <div class="description-block border-right">
                          <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                          <h5 class="description-header">$24,813.53</h5>
                          <span class="description-text">TOTAL PROFIT</span>
                        </div><!-- /.description-block -->
                      </div><!-- /.col -->
                      <div class="col-sm-3 col-xs-6">
                        <div class="description-block">
                          <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                          <h5 class="description-header">1200</h5>
                          <span class="description-text">GOAL COMPLETIONS</span>
                        </div><!-- /.description-block -->
                      </div>
                    </div><!-- /.row -->
                  </div><!-- /.box-footer -->
                </div><!-- /.box -->
            </div>

            <!-- Right Side -->
            <div class="col-md-4">

                <!-- Browser Usage -->
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Browser Usage</h3>
                    <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                      <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-8">
                        <div class="chart-responsive">
                          <canvas id="pieChart" height="160" width="133" style="width: 133px; height: 160px;"></canvas>
                        </div><!-- ./chart-responsive -->
                      </div><!-- /.col -->
                      <div class="col-md-4">
                        <ul class="chart-legend clearfix">
                          <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
                          <li><i class="fa fa-circle-o text-green"></i> IE</li>
                          <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
                          <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
                          <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
                          <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
                        </ul>
                      </div><!-- /.col -->
                    </div><!-- /.row -->
                  </div><!-- /.box-body -->
                  <div class="box-footer no-padding">
                    <ul class="nav nav-pills nav-stacked">
                      <li><a href="#">United States of America <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                      <li><a href="#">India <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a></li>
                      <li><a href="#">China <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                    </ul>
                  </div><!-- /.footer -->
                </div><!-- /.box -->
            </div>            

          </div><!-- End Row -->

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
<script src="dist/js/app.min.js"></script>
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/chartjs/Chart.min.js"></script>


    <!-- Create the charts -->
    <script>

      $(function () {

        'use strict';

        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //-----------------------
        //- MONTHLY SALES CHART -
        //-----------------------

        // Get context with jQuery - using jQuery's .get() method.
        var salesChartCanvas = $("#salesChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var salesChart = new Chart(salesChartCanvas);

        var salesChartData = {
          labels: ["January", "February", "March", "April", "May", "June", "July"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgb(210, 214, 222)",
              strokeColor: "rgb(210, 214, 222)",
              pointColor: "rgb(210, 214, 222)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgb(220,220,220)",
              data: [65, 59, 80, 81, 56, 55, 40]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data: [28, 48, 40, 19, 86, 27, 90]
            }
          ]
        };

        var salesChartOptions = {
          //Boolean - If we should show the scale at all
          showScale: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: false,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - Whether the line is curved between points
          bezierCurve: true,
          //Number - Tension of the bezier curve between points
          bezierCurveTension: 0.3,
          //Boolean - Whether to show a dot for each point
          pointDot: false,
          //Number - Radius of each point dot in pixels
          pointDotRadius: 4,
          //Number - Pixel width of point dot stroke
          pointDotStrokeWidth: 1,
          //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          pointHitDetectionRadius: 20,
          //Boolean - Whether to show a stroke for datasets
          datasetStroke: true,
          //Number - Pixel width of dataset stroke
          datasetStrokeWidth: 2,
          //Boolean - Whether to fill the dataset with a color
          datasetFill: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%=datasets[i].label%></li><%}%></ul>",
          //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: true,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true
        };

        //Create the line chart
        salesChart.Line(salesChartData, salesChartOptions);

       //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: 700,
            color: "#f56954",
            highlight: "#f56954",
            label: "Chrome"
          },
          {
            value: 500,
            color: "#00a65a",
            highlight: "#00a65a",
            label: "IE"
          },
          {
            value: 400,
            color: "#f39c12",
            highlight: "#f39c12",
            label: "FireFox"
          },
          {
            value: 600,
            color: "#00c0ef",
            highlight: "#00c0ef",
            label: "Safari"
          },
          {
            value: 300,
            color: "#3c8dbc",
            highlight: "#3c8dbc",
            label: "Opera"
          },
          {
            value: 100,
            color: "#d2d6de",
            highlight: "#d2d6de",
            label: "Navigator"
          }
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 1,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: false,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
          //String - A tooltip template
          tooltipTemplate: "<%=value %> <%=label%> users"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
        //-----------------
        //- END PIE CHART -
        //-----------------        

      });

    </script>


  </body>
</html>
