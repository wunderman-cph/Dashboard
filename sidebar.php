<?php 

	$cp = $_SERVER["REQUEST_URI"];

	function li_active($p) {
		if (strpos($_SERVER['PHP_SELF'], $p)) echo 'class="active"';
	}

?>

<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li <?=li_active('index.php')?>><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>

    <li class="header">ADOBE MARKETING CLOUD</li>
    <!-- Optionally, you can add icons to the links -->
    <li <?=li_active('campaign.php')?>><a href="campaign.php"><i class="fa fa-envelope"></i> <span>Adobe Campaign</span></a></li>
    <li <?=li_active('aem.php')?>><a href="aem.php"><i class="fa fa-image"></i> <span>Adobe Experience Manager</span></a></li>
    <li><a href="http://marketing.adobe.com"><i class="fa fa-cloud"></i> <span>Adobe Marketing Cloud</span></a></li>
 
    <li class="treeview">
      <a href="#"><i class="fa fa-book"></i> Documentation</a>
      <ul class="treeview-menu">
        <li ><a href="https://docs.campaign.adobe.com/doc/AC6.1/en/home.html" target="blank"><i class="fa fa-book"></i> <span>Adobe Campaign</span></a></li>
        <li ><a href="http://docs.adobe.com/content/docs/en/aem/6-1.html" target="blank"><i class="fa fa-book"></i> <span>Adobe Experience Manager</span></a></li>
        <li <?=li_active('releasenotes.php')?>><a href="releasenotes.php"><i class="fa fa-book"></i> <span>Campaign Release Notes</span></a></li>    
      </ul>       
    </li>
    <!-- Optionally, you can add icons to the links -->
    
    <li class="header">WUNDERMAN</li>
     <li <?=li_active('email.php')?>><a href="email.php"><i class="fa fa-link"></i> <span>Email</span></a></li>
     <li <?=li_active('webhook.php')?>><a href="webhook.php"><i class="fa fa-link"></i> <span>Webservice Trap</span></a></li>
     <li <?=li_active('api.php')?>><a href="api.php"><i class="fa fa-link"></i> <span>API Browser</span></a></li>
     <li <?=li_active('apitest.php')?>><a href="apitest.php"><i class="fa fa-link"></i> <span>API Test</span></a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Websites</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href="#">Geometrixx</a></li>
        <li><a href="#">Wunderman</a></li>
      </ul>
    </li>             
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Example UI</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href="example.html">Example 1</a></li>
        <li><a href="example2.html">Example 2</a></li>
        <li><a href="documentation\index.html">Documentation</a></li>
        
      </ul>
    </li>             



  </ul><!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
