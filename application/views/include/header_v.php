<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Start Of Head Section -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo $title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="CRUD">
	<meta name="author" content="Trevor Lewis">
	
    <!-- Start Of CSS -->

	<link id="bs-css" href="<?php echo base_url();?>css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
		body {
			padding-bottom: 40px;
		}
		.sidebar-nav {
			padding: 9px 0;
		}		
	</style>
    
	<link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url();?>css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url();?>css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/uploadify.css' rel='stylesheet'>
	  
      <!-- End Of CSS -->

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon : STARTS -->
	<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico">
    <!-- The fav icon : ENDS-->
    
    <!-- Start Of JS -->
	<script type="text/javascript">
		
		  var baseurl = '<?php echo base_url(); ?>';
		  var site_url = '<?php echo site_url(); ?>';
		  var folder_name= '<?php echo $this->uri->segment(1); ?>';
		  var controller_name = '<?php echo $this->router->class; ?>';
	</script>
    
    <!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>js/jquery-1.7.2.min.js"></script>
   
	<!-- jQuery UI -->
	<script src="<?php echo base_url();?>js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url();?>js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url();?>js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url();?>js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url();?>js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url();?>js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url();?>js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url();?>js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url();?>js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url();?>js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url();?>js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url();?>js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url();?>js/jquery.cookie.js"></script>
     <!-- library for session management -->
	<script src="<?php echo base_url();?>js/jquery.session.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url();?>js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url();?>js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url();?>js/excanvas.js"></script>
	<script src="<?php echo base_url();?>js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url();?>js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url();?>js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url();?>js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url();?>js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url();?>js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url();?>js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url();?>js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url();?>js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url();?>js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url();?>js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url();?>js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url();?>js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url();?>js/charisma.js"></script>
    <!-- Common JS for AJAX -->
	<script src="<?php echo base_url();?>js/common.js"></script>   
        <!-- End Of JS -->

</head>
    <!-- End Of Head Section -->

 	<!-- Start Of Body Section -->
<body>

	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
    		<div class="container-fluid">
            	<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            	</a>
                <a class="brand" href="#">
                	<img alt="Logo" src="<?php echo base_url();?>img/logo20.png" />
                    <span>CRUD</span>
                </a>
              


				  <!-- settings dropdown starts -->
				<!--<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><?php //echo $this->set->userdata('username'  ) ?>
			<span class="icon icon-darkgray icon-gear"></span>&nbsp;<span class="hidden-phone">Settings</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						
						<li><a href="#">Change Density</a></li>
                        <li class="divider"></li>
						<li><a href="">Basic Settings</a></li>
                     <li class="divider"></li>-->
                         <!--  <li><a href="<?php echo site_url('settings/common_type/');?>">Advanced Settings</a></li>
                         <li class="divider"></li>-->
                        <!--<li><a href="<?php echo site_url('common/common_type/');?>">System Entity</a></li>
                         <li class="divider"></li>
                        <li><a href="<?php echo site_url('common/indp_mst_data');?>">Masters</a></li>
                        <li class="divider"></li>
                        <li><?php if($this->session->userdata('is_admin')==0){
                        ?>   <a href="javascript:alert('Permission Denied');" >
                                        Module Manager</a>
										<?php } else{ ?>
                        <a href="<?php  echo site_url('hrchyMngt/manager'); ?>" >
                                        Module Manager</a><?php } ?></li>
                       
						
						<li class="divider"></li>
						<li><a href="<?php echo site_url('common/config_mapping_dtl/index/'.MENUID);?>">Menu Item Config</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo site_url('common/config_mapping_dtl/index/'.GLOBALSETTINGSID);?>">GS Item Config</a></li>
						<li class="divider"></li>
						<li><a href="#">Help and Support</a></li>
					</ul>
				</div>-->
				<!-- settings dropdown ends -->

                <!-- theme selector starts -->
               <!-- <div class="btn-group pull-right theme-container" >
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-tint"></i>
                        <span class="hidden-phone"> Change Theme / Skin</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" id="themes">
                        <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
                        <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
                        <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
                        <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
                        <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
                        <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
                        <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
                        <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
                        <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
                    </ul>
                </div>-->
                <!-- theme selector ends --> 
        	
				<!--<?php if(true): //if($this->session->userdata('is_logged_in')) : ?>-->
                <!-- user dropdown starts 
                <div class="btn-group pull-right" >
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="icon-user"></i>
                        <span class="hidden-phone"><?php if($this->session->userdata('username')) echo $this->session->userdata('username'); else echo "Username";?></span>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('user/profile/');?>">Profile</a></li>
                        <li class="divider"></li>
							<?php
							  if($this->session->userdata('is_admin')==2){
						
								?>
								<li><a href="<?php echo site_url('systmMngt/org_accounts')?>">View Accounts Details</a></li>
							
                            <?php } else { ?>
							<li><a href="<?php echo site_url('systmMngt/org_accounts/editOrgAccounts/'.$this->session->userdata('oaID'))?>">View Accounts Details</a></li>
							<?php } ?>
                        <li class="divider"></li>
						<?php
							  if($this->session->userdata('is_admin')==0){
						
								?>
						<li><a href="<?php echo site_url('systmMngt/oa_brands/editOaBrands/'.$this->session->userdata('oaBrandID'));?>">View Company Info</a></li>
						<?php } else { ?>
						<li><a href="<?php echo site_url('systmMngt/oa_brands');?>">View Company Info</a></li>
						
                        <li class="divider"></li>
						<?php } ?>
						<?php
							  if($this->session->userdata('is_admin')==2 || $this->session->userdata('is_admin')==1 ){
						
								?>
						<li><a href="<?php echo site_url('systmMngt/oa_brand_settings/');?>">Company Settings</a></li>
						<?php } ?>
                        <li class="divider"></li>
					    <li><a href="<?php echo site_url('user/permission_dtl/');?>">My Permissions</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('login/login/logout'); ?>">Logout</a></li>
                    </ul>
                </div>-->
                <!-- user dropdown ends  
                <?php endif; ?>-->

			</div>
		</div>
    </div>
    <!-- topbar ends -->        
		<div class="container-fluid">
    	<div class="row-fluid">