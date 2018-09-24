<?php 
/*---------------------------------------------------------------------------------------*/
/*   Author       : Ankit Dedhia                                                */
/*   Date         : Oct 2013                                                 */
/*   Synopsis     : Code for
					1)View for Left Menu											*/
/*   Code Modifications:                                                             */
/*----------------------------------------------------------------------------------------*/



?>

<?php
//$sql="SELECT * FROM appdet ad independent_mst im config_relationship cr where ad.FunctionID = im.MasterID AND im.MasterID = cr.source_entity AND cr.mapping_type='menu' AND ";
//$query=mysql_query($sql or die(mysql_error()));
//$result = mysql_fetch_array($query);
?>

				
<div class="span2 main-menu-span">
    <div class="well nav-collapse sidebar-nav">
     <ul class="nav nav-tabs nav-stacked main-menu">
     
<!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx DashBoard xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
		<?php
       
	   /*xxxxxxxxxxxxxxxxxxxxxx MENU Master Code : Starts  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		$lvs_commonTypeCode='CTMN';
		$lvs_indMstCode='IMMN';
		$lvs_configMppgCode='CMMN';
		$lvs_entityObjCode='EOMN';
		$lvs_entityObjAttrbtCode='EAMN';
		$lvs_entityObjAttrbtMppngCode='EMMN';
		$lvs_entityObjTmpCode='ETMN';
		$lvs_objMppngCode='OMMN';
		$lvs_expceptionLogCode='ELMN';
		$lvs_appDetCode='ADMN';
		$lvs_hierLvlCode='HLMN';
		$lvs_currency='295';
		$lus_currencyrate='298';
		$lvs_relDetCode='RNMN';
		$lvs_sysGlossCode='SGMN';
		$lvs_sysLstDetCode='SLMN';
		$lvs_roleMstCode='RMMN';
		$lvs_userDomainCode='USMN';
		$lvs_userGrpCode='UGMN';
		$lvs_userGrpRoleCode='URMN';
		$lvs_userMstCode='UMMN';
		$lvs_userRoleCode='UOMN';
		$lvs_permissionDetCode='PDMN';
		$lvs_testMenuCode='TST2';
		$lvs_objAttrbtPrivilegeMenuCode='OPMN';
		
	   /*xxxxxxxxxxxxxxxxxxxxxx Menu Master Code : Ends  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		
	   /*xxxxxxxxxxxxxxxxxxxxxx Module Master Code : STARTS  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		$lvn_currency='295';
		$luv_currencyrate='298';
		$lvn_commonTypeModule='CMTY';
		$lvn_indMstModule='INDP';
		$lvn_configMppgModule='CGMP';
		$lvn_entityObjModule='ENOB';
		$lvn_entityObjAttrbtModule='ENOA';
		$lvn_entityObjAttrbtMppngModule='EOBM';
		$lvn_entityObjTmpModule='ENOT';
		$lvn_objMppngModule='OBMA';
		$lvn_expceptionLogModule='EXLG';
		$lvn_appDetModule='APPL';
		$lvn_hierLvlModule='HRCY';
		$lvn_relDetModule='RTLP';
		$lvn_sysGlossModule='SYGL';
		$lvn_sysLstDetModule='SYLD';
		$lvn_roleMstModule='ROMS';
		$lvn_userDomainModule='USDM';
		$lvn_userGrpModule='USGR';
		$lvn_userGrpRoleModule='UGRO';
		$lvn_userMstModule='USRM';
		$lvn_userRoleModule='USRO';
		$lvn_permissionDetModule='PRMS';
		$lvn_TestModuleCode='TSM2';
		$lvn_objAttrbtPrivilegeModuleCode='OAPM';
		
		
		
	   /*xxxxxxxxxxxxxxxxxxxxxx Module Master Code : Ends  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		
		function getMasterIDFromCode($masterCode)
		{
			//echo "SELECT * FROM independent_mst where  MSTR_CD = '$masterCode' ";
			$result=mysql_query("SELECT * FROM independent_mst where  MSTR_CD = '$masterCode' ") or mysql_error();
			
			if(mysql_num_rows($result) > 0)
			{
				$row=mysql_fetch_array($result);
				return $row['MSTR_ID'];
			}
			else
			{
				return false;
			}
		}
	   
		/*xxxxxxxxxxxxxxxxxxxxxx MENU ID : Starts  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		$lvn_commonTypeID=getMasterIDFromCode($lvs_commonTypeCode);
		$lvn_indMstID=getMasterIDFromCode($lvs_indMstCode);
		$lvn_configMppgID=getMasterIDFromCode($lvs_configMppgCode);
		$lvn_entityObjID=getMasterIDFromCode($lvs_entityObjCode);
		$lvn_entityObjAttrbtID=getMasterIDFromCode($lvs_entityObjAttrbtCode);
		$lvn_entityObjAttrbtMppngID= getMasterIDFromCode($lvs_entityObjAttrbtMppngCode);
		$lvn_entityObjTmpID= getMasterIDFromCode($lvs_entityObjTmpCode);
		$lvn_objMppngID= getMasterIDFromCode($lvs_objMppngCode);
		$lvn_expceptionLogID= getMasterIDFromCode($lvs_expceptionLogCode);
		$lvn_appDetID= getMasterIDFromCode($lvs_appDetCode);
		$lvn_hierLvlID= getMasterIDFromCode($lvs_hierLvlCode);
		$lvn_currency='295';
		$luv_currencyrate='298';
		$lvn_relDetID= getMasterIDFromCode($lvs_relDetCode);
		$lvn_sysGlossID= getMasterIDFromCode($lvs_sysGlossCode);
		$lvn_sysLstDetID= getMasterIDFromCode($lvs_sysLstDetCode);
		$lvn_roleMstID= getMasterIDFromCode($lvs_roleMstCode);
		$lvn_userDomainID= getMasterIDFromCode($lvs_userDomainCode);
		$lvn_userGrpID= getMasterIDFromCode($lvs_userGrpCode);
		$lvn_userGrpRoleID= getMasterIDFromCode($lvs_userGrpRoleCode);
		$lvn_userMstID= getMasterIDFromCode($lvs_userMstCode);
		$lvn_userRoleID= getMasterIDFromCode($lvs_userRoleCode);
		$lvn_permissionDetID= getMasterIDFromCode($lvs_permissionDetCode);
		$lvn_testID= getMasterIDFromCode($lvs_testMenuCode);
		$lvn_objAttrbtPrivilegeID= getMasterIDFromCode($lvs_objAttrbtPrivilegeMenuCode);
		
		function get_menu_name($masterId)
		{
			$result=mysql_query("SELECT * FROM independent_mst where  MSTR_ID =  ".$masterId);
			
			if(mysql_num_rows($result) > 0)
			{
				$row=mysql_fetch_array($result);
				return $row['MSTR_NM'];
			}
			else
			{
				return false;
			}
		}
		/*xxxxxxxxxxxxxxxxxxxxxx MENU ID : Ends  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/

		/*xxxxxxxxxxxxxxxxxxxxxx Module ID : Starts  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		
		/*$lvn_currency='295';
		$luv_currencyrate='298';
		$lvn_commonTypeModule='CMTY';
		$lvn_indMstModule='INDP';
		$lvn_configMppgModule='CGMP';
		$lvn_entityObjModule='ENOB';
		$lvn_entityObjAttrbtModule='ENOA';
		$lvn_entityObjAttrbtMppngModule='EOBM';
		$lvn_entityObjTmpModule='ENOT';
		$lvn_objMppngModule='OBMA';
		$lvn_expceptionLogModule='EXLG';
		$lvn_appDetModule='APPL';
		$lvn_hierLvlModule='HRCY';
		$lvn_relDetModule='RTLP';
		$lvn_sysGlossModule='SYGL';
		$lvn_sysLstDetModule='SYLD';
		$lvn_roleMstModule='ROMS';
		$lvn_userDomainModule='USDM';
		$lvn_userGrpModule='USGR';
		$lvn_userGrpRoleModule='UGRO';
		$lvn_userMstModule='USRM';
		$lvn_userRoleModule='USRO';
		$lvn_permissionDetModule='PRMS';*/
		
		
		$lvn_commonTypeModule= getMasterIDFromCode($lvn_commonTypeModule);    
		$lvn_indMstModule= getMasterIDFromCode($lvn_indMstModule);
		$lvn_configMppgModule= getMasterIDFromCode($lvn_configMppgModule);
		$lvn_entityObjModule= getMasterIDFromCode($lvn_entityObjModule);
		$lvn_entityObjAttrbtModule= getMasterIDFromCode($lvn_entityObjAttrbtModule);
		$lvn_entityObjAttrbtMppngModule= getMasterIDFromCode($lvn_entityObjAttrbtMppngModule);
		$lvn_entityObjTmpModule= getMasterIDFromCode($lvn_entityObjTmpModule);
		$lvn_objMppngModule= getMasterIDFromCode($lvn_objMppngModule);
		$lvn_expceptionLogModule= getMasterIDFromCode($lvn_expceptionLogModule);
		$lvn_appDetModule= getMasterIDFromCode($lvn_appDetModule);
		$lvn_hierLvlModule= getMasterIDFromCode($lvn_hierLvlModule);
		
		$lvn_relDetModule= getMasterIDFromCode($lvn_relDetModule);
		$lvn_sysGlossModule= getMasterIDFromCode($lvn_sysGlossModule);
		$lvn_sysLstDetModule= getMasterIDFromCode($lvn_sysLstDetModule);
		$lvn_roleMstModule= getMasterIDFromCode($lvn_roleMstModule);
		$lvn_userDomainModule= getMasterIDFromCode($lvn_userDomainModule);
		$lvn_userGrpModule= getMasterIDFromCode($lvn_userGrpModule);
		$lvn_userGrpRoleModule= getMasterIDFromCode($lvn_userGrpRoleModule);
		$lvn_userMstModule= getMasterIDFromCode($lvn_userMstModule);
		$lvn_userRoleModule= getMasterIDFromCode($lvn_userRoleModule);
		$lvn_permissionDetModule= getMasterIDFromCode($lvn_permissionDetModule);
		$lvn_testModule= getMasterIDFromCode($lvn_TestModuleCode);
		$lvn_objAttrbtPrivilegeModule= getMasterIDFromCode($lvn_objAttrbtPrivilegeModuleCode);
		
		
		
			/*xxxxxxxxxxxxxxxxxxxxxx Module ID : ends  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
	
		function moduleEnableDisable($moduleID)
		{
			//echo "SELECT * FROM application_dtl ad, independent_mst im, config_mapping_dtl cr where ad.FUNCTION_ID = im.MSTR_ID AND im.MSTR_ID = cr.SRC_ENTTY_ID AND cr.CNFG_MPPNG_TYP_ID=62 And ENABLED=1  AND im.MSTR_ID = ".$moduleID;
			 $result=mysql_query("SELECT * FROM application_dtl ad, independent_mst im, config_mapping_dtl cr where ad.FUNCTION_ID = im.MSTR_ID AND im.MSTR_ID = cr.SRC_ENTTY_ID AND cr.CNFG_MPPNG_TYP_ID=".MENUID." And ENABLED=1  AND im.MSTR_ID = ".$moduleID);
			$num_rows=mysql_num_rows($result);
			if($num_rows>0)
			{
				return true;	
			}
			else
			{
				return false;
			}


		}
        ?>
      						 <li onclick="toggle($(this).next().attr('id'));" class="nav-header hidden-tablet">Mf2</li>
                            <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
							<li>
                                <a class="ajax-link" href="<?php echo site_url('dashboard/dashboard');?>">
                                    <i class="icon-home"></i>
                                    <span class="hidden-tablet">Dashboard</span>
                                </a>
                            </li>
                            <?php if(moduleEnableDisable($lvn_commonTypeModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('common/common_type');?>">
                                    <i class="icon-home"></i>
                                    <span class="hidden-tablet"> <?php echo get_menu_name($lvn_commonTypeID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_indMstModule))
							{
								
							?>
                        	<li>
                                <a class="ajax-link" href="<?php echo site_url('common/indp_mst_data');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"> <?php echo get_menu_name($lvn_indMstID); ?></span>
                                </a>
                            </li> 
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_configMppgModule))
							{
								
							?>
                            
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('common/config_mapping_dtl');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_configMppgID); ?></span>
                                </a>
                            </li> 
							<?php  
							}
						   ?>
							<?php //if(moduleEnableDisable($lvn_vendorModule))
							//{
								
							?>
                             <li>
                                <a class="ajax-link" href="<?php echo site_url('crncyMngt/currency_mst/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet">Currency Master <?php //echo get_menu_name($lvn_dashboardID); ?></span>
                                </a>
                            </li>
							<?php  
							//}
						   ?>
							<?php //if(moduleEnableDisable($lvn_vendorModule))
							//{
								
							?>
                            
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('crncyMngt/currency_rate/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet">Currency Rate<?php //echo get_menu_name($lvn_dashboardID); ?></span>
                                </a>
                            </li>
							<?php  
							//}
						   ?>
							</ul>
							<li onclick="toggle($(this).next().attr('id'));"  class="nav-header hidden-tablet">Entity</li>
                             <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
                            <?php if(moduleEnableDisable($lvn_entityObjModule))
							{
								
							?>
							<li>
                                <a class="ajax-link" href="<?php echo site_url('entity/entity_obj/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"> <?php echo get_menu_name($lvn_entityObjID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_entityObjAttrbtModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('entity/entity_obj_attrbt/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_entityObjAttrbtID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_entityObjAttrbtMppngModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('entity/entity_obj_attrbt_mppng/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_entityObjAttrbtMppngID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_entityObjTmpModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('entity/entity_obj_tmp/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_entityObjTmpID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_objMppngModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('entity/obj_mppng/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_objMppngID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
						    <?php if(moduleEnableDisable($lvn_objAttrbtPrivilegeModule))
							{
								
							?>
							 <li>
                            <a class="ajax-link" href="<?php echo site_url('entity/obj_attrbt_previleges/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_objAttrbtPrivilegeID); ?> </span>
                                </a>
                            </li>  
							<?php  
							}
						   ?>
							</ul>
                            <li onclick="toggle($(this).next().attr('id'));" class="nav-header hidden-tablet">General</li>
                              <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
							<?php if(moduleEnableDisable($lvn_expceptionLogModule))
							{
								
							?>
							<li>
                                <a class="ajax-link" href="<?php echo site_url('excptnMngt/exception_log/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_expceptionLogID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_appDetModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('hrchyMngt/application_dtl/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_appDetID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_hierLvlModule))
							{
								
							?>
                             
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('hrchyMngt/hier_lvl_config/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_hierLvlID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_relDetModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('hrchyMngt/relationship_dtl/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_relDetID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_sysGlossModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('systmInfoMgr/systm_glssry/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_sysGlossID); ?></span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_sysLstDetModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('systmInfoMgr/systm_lst_dtls/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_sysLstDetID); ?> </span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							</ul>
                       
							<li onclick="toggle($(this).next().attr('id'));"  class="nav-header hidden-tablet">User Management</li>
                            <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
							<?php if(moduleEnableDisable($lvn_roleMstModule))
							{
								
							?>
							<li>
                                <a class="ajax-link" href="<?php echo site_url('user/role_master/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_roleMstID); ?></span>
                                </a>
                            </li>
                          <?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_userDomainModule))
							{
								
							?>  
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('user/user_domain/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_userDomainID); ?> </span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_userGrpModule))
							{
								
							?>
                            
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('user/user_group/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_userGrpID); ?> </span>
                                </a>
                            </li>
							<?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_userGrpRoleModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('user/user_group_role/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_userGrpRoleID); ?> </span>
                                </a>
                            </li>
                            <?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_userMstModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('user/user_master/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_userMstID); ?> </span>
                                </a>
                            </li>
                            <?php  
							}
						   ?>
							<?php if(moduleEnableDisable($lvn_userRoleModule))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('user/user_role/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_userRoleID); ?> </span>
                                </a>
                            </li> 
							<?php  
							}
						   ?>
							 </ul>
							<li onclick="toggle($(this).next().attr('id'));" class="nav-header hidden-tablet">User Access</li>
                            <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
							<?php if(moduleEnableDisable($lvn_permissionDetModule))
							{
								
							?>
							 <li>
                            	<a class="ajax-link" href="<?php echo site_url('user/permission_dtl/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_permissionDetID); ?> </span>
                                </a>
                            </li>  
							<?php  
							}
						   ?>
                           
                           </ul>
                          
     </ul>
     
      <script>
	 $(document).ready(function() {
	var i = 1;
	
	 $('ul').each(function(){
  if(this.id){
    this.id = this.id+i;
	 $(this).hide();
	 
	i++;
  }
});

	 });
	// jQuery(this).prev("li").attr("class","newId");
	//var $j = jQuery.noConflict();
	function toggle(i)
	{
		//alert('hi');
//$(".nav-header").click(function () {
   // e.preventDefault();
  // alert(i);
    $("#"+i).slideToggle('slow');
	
	
//});
 //$('.nav-header').click();
	}
/* $(document).ready(function() {
	$(".hide").hide();
	$(".nav-header").click(function() {
		$(".hide").hide();
    	$(this).parent().next(".hide").show();
  });
});*/

/*jQuery(function () {
    jQuery('.nav-header').click(function () {
        var index = $(this).index(),
            newTarget = jQuery('.hide').eq(index).slideDown();
			alert(newTarget);
        jQuery('.hide').not(newTarget).slideUp();

    });
});
*/
	 </script>
     
     <label id="for-is-ajax" class="hidden-tablet" for="is-ajax" style="display:none"><input id="is-ajax" type="checkbox" checked="checked" style="display:none"> Ajax on menu</label>
    </div><!--/.well -->
            </div><!--/span-->
            <!-- left menu ends -->
			<div id="content" class="span10">
		