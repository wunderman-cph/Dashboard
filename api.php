<?php

  // Debug
  ini_set('display_errors', 'On');

  /* Callback Functions */

  // If parameter for a callback function exists then use that instead of rendering the page.

  // SOAP Action URL
  $url = "http://".$_SERVER['HTTP_HOST'].":8080/nl/jsp/soaprouter.jsp";

  if(isset($_GET['call'])) {
    
     try {

        /* Get Security Token */

        $client = new SoapClient("http://".$_SERVER['HTTP_HOST']."/wsdl/xtk.session.wsdl", array(
            'location' => $url
        ));

        $result = $client->Logon(array(
            'sessiontoken' => '',
            'strLogin' => 'admin',
            'strPassword' => 'admin',        
            'elemParameters' => ''
        ));

        $securityToken = $result->pstrSecurityToken;
        $sessionToken = $result->pstrSessionToken;

      } catch (SoapFault $exception) {
        echo ($exception);
        exit;
      }


      if(isset($_GET['schema'])) {

        // Call QueryDef and Get Schema
        $client = new SoapClient("http://".$_SERVER['HTTP_HOST']."/wsdl/xtk.querydef.wsdl", array(
            'location' => $url,
            'uri' => 'http://'.$_SERVER['HTTP_HOST'],
            'trace' => 1
        ));
      

        $queryDef = new SimpleXMLElement("<queryDef></queryDef>");
        $queryDef->addAttribute('operation','get');
        $queryDef->addAttribute('schema','xtk:schema');
        $select = $queryDef->addChild('select');
        $node = $select->addChild('node');
        $node->addAttribute('expr','data');
        $where = $queryDef->addChild('where');
        $node = $where->addChild('condition');
        $node['expr'] = "@namespace='nms'";
        $node = $where->addChild('condition');
        $node['expr'] = "@name='recipient'";


        $test = '<queryDef operation="get" schema="xtk:schema"><select><node expr="@name"/></select><where><condition expr="@namespace=\'nms\'"/><condition expr="@name=\'recipient\'"/></where></queryDef>';

        echo ("<div class='content'><h3>securityToken</h3><pre>".$securityToken."\n".$sessionToken."</pre></div>");
        echo ("<div class='content'><h3>Body (Test and XML)</h3><pre>".htmlspecialchars($test)."</pre><pre>".htmlspecialchars($queryDef->asXML())."</pre></div>");
        
        try {

          //$header     = new SoapHeader("xtk.querydef","X-Security-Token", $securityToken, false);
          //$client -> __setSoapHeaders($header);

          echo ("<div class='content'><h3>Client</h3><pre>".var_export($client,true)."</pre></div>");

          $myClass = new stdClass;
          $myClass->sessiontoken = $sessionToken;
          $myClass->entity = 1;
/*
          $result = $client->ExecuteQuery(array(
            'sessiontoken' => $sessionToken,
            'entity' => array($test)     
            ));   
*/
          $result = $client->ExecuteQuery($myClass);


          echo ("<div class='content'><h3>Schema Call Result</h3><pre>".var_export($result,true)."</pre></div>");


        } catch (SoapFault $exception) {


          echo ("<div class='content'><h3>ERROR</h3><pre><xmp>".$exception->getMessage()."</xmp></pre></div>");

          echo ("<div class='content'><h3>LAST CALL</h3><pre>".htmlentities($client->__getLastRequest())."</pre></div>");

          exit;
        }

        echo ("<div class='content'><h3>Result</h3><pre>".var_export($result,true)."</pre></div>");
        echo ("Done");
      }
      elseif(isset($_GET['somethingelse'])) {

      };

      // Exit the script and do not process the rest of the page
      exit;
  }




  try {

    $client = new SoapClient("http://".$_SERVER['HTTP_HOST']."/wsdl/xtk.session.wsdl", array(
        'location' => $url
    ));

    echo ("<div class='content'><h3>Available Functions: Session</h3><pre>".implode("\n",$client->__getFunctions())."</pre></div>");

    $result = $client->Logon(array(
        'sessiontoken' => '',
        'strLogin' => 'admin',
        'strPassword' => 'admin',        
        'elemParameters' => ''
    ));
/*
    echo ("<div class='content'><h3>Result</h3><pre>".var_export($result,true)."</pre></div>");
*/
    $securityToken = $result->pstrSecurityToken;
    $sessionToken = $result->pstrSessionToken;

    echo ("<div class='content'><h3>Security Token</h3><pre>".$result->pstrSecurityToken."</pre></div>");

    echo ("<div class='content'><h3>Session Token</h3><pre>".$result->pstrSessionToken."</pre></div>");

    $client = new SoapClient("http://".$_SERVER['HTTP_HOST']."/wsdl/xtk.querydef.wsdl", array(
        'location' => $url
    ));

    echo ("<div class='content'><h3>Available Functions: QueryDef</h3><pre>".implode("\n",$client->__getFunctions())."</pre></div>");

    // Store Session Token in a session cookie. If found then always use this one instead.
    
    
    // Request list of all schemas
    
   $schema = file_get_contents("http://".$_SERVER['HTTP_HOST'].":8080/nl/jsp/schemawsdl.jsp?schema=xtk:queryDef&__sessiontoken=".$sessionToken."");  
   echo ("<div class='content'><h3>Schema Output</h3><pre>".htmlentities($schema)."</pre></div>"); 

  } catch (SoapFault $exception) {
    echo ("<div class='content'><h3>ERROR</h3><pre>".$exception."</pre></div>");
  }

  // Get a List of all Schemas
  //$schemas = json_decode(file_get_contents("http://".$_SERVER['HTTP_HOST'].":8080/wdm/schemaquery.jssp"),true);
  
?>

<!DOCTYPE html>
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
    <style>
    .container {
        position:relative;
        margin: 0;            /* Reset default margin */
        padding: 0px;
        width:100%;
    }
    .content {
      min-height:0px !important;
    }
    </style>
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
            API Browser
          </h1>

          <!-- Breadcrumb -->
          <ol class="breadcrumb">

          </ol>

        </section>


          <!-- Your Page Content Here -->
        <section class="content">

          <!-- Row -->
          <div class="row">

            <!-- Column -->
            <div class="col-md-8">

              <!-- Get Campaign Test -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Schemas</h3>
                </div>    
              
                <form class="form-horizontal" method="GET" id="schemaform" action="<?=basename(__FILE__)?>">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Select Schema</label>
                      <input type="hidden" name="call">
                      <div class="col-sm-10">

                        <div class="input-group input-group-sm">

                          <select class="form-control" name="schema">
                          <option></option>

                          <?php 

                            foreach ($schemas as $item) {
                              echo("<option>".$item['namespace'].":".$item['name']."</option>");
                            }

                          ?>


                          </select>
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-info btn-flat">Go!</button>
                          </span>
                        </div>

                        
                      </div>
                    </div>
                    
                  </div>
                </form>              
            
              </div> <!-- /. Get Campaign Test -->

              <!-- WSDL and Functions -->

              <div class="row">
                <div class="col-md-12">
                  <div class="nav-tabs-custom" style="cursor: move;">
                    <!-- Tabs within a box -->
                    <ul class="nav nav-tabs pull-right ui-sortable-handle">
                      <li class=""><a href="#log" data-toggle="tab" aria-expanded="true">Functions</a></li>
                      <li class="active"><a href="#pdump" data-toggle="tab" aria-expanded="false">WSDL</a></li>
                      
                      <li class="pull-left header"><i class="fa fa-file-text"></i>API Detail</li>
                    </ul>
                    <div class="tab-content">
                      <!-- PDump -->
                      <div class="tab-pane active" id="pdump" style="position: relative; min-height: 100px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                      <pre>[[INSERT WSDL HERE]]</pre>
                      </div>
                      <div class="tab-pane" id="log" style="position: relative; min-height: 100px;">
                      <pre>[[INSERT FUNCTIONS HERE]]</pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>              

            </div> <!-- /. Column -->

          </div> <!-- /. Row -->
        </section>
        </div>

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

     <!-- Custom Code -->
     <script>

     var securityToken = "<?= $securityToken ?>";

      $( document ).ready(function () {
         $('select').change(function () {
            $.get('ajax.php?option=' + $('select').val(), function(data) {
                if(data == "error")
                {
                    //handle error
                }
                else {
                    $('div.ajax-form').append(data); //create an element where you want to add 
                                                     //this data
                }
            });
         });
       });


    </script>

  </body>
</html>
