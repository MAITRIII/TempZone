<?php 
/*---------------------------------------------------------------------------------------*/
/*   Author       	: Ankit Dedhia                                                */
/*   Date         	: Oct 2013                                                 */
/*   Synopsis     	: Code for
					1)View for Left Menu											*/
/*   Code Modifications	: 1.Changing the module to epic
			  2.Adding new feature for new module       
			                                                      */
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
		
		
		
		
	/*xxxxxxxxxxxxxxxxxxxxxx Module Master Code : STARTS  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		$lvn_dashboardModuleCode='DBM';
		$lvn_systemManagerModuleCode='SMM';
		$lvn_exceptionMngtModuleCode='EMM';
		$lvn_entityMngtModuleCode='ENTMM';
		$lvn_organisationMngtModuleCode='OMM';
		$lvn_userMngtModuleCode='UMM';
		$lvn_accessMngtModuleCode='AMM';
		$lvn_emailModuleCode='ESM';
		$lvn_hierachyMngtModuleCode='HMM';
		$lvn_commonModuleCode='COM';
		$lvn_addressAndLocationModuleCode='ANL';

		
		
	   /*xxxxxxxxxxxxxxxxxxxxxx Module Master Code : Ends  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/	
		
       
       
        /*xxxxxxxxxxxxxxxxxxxxxx Epic Master Code : STARTS  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		$lvn_currency='295';
		$luv_currencyrate='298';
		$lvn_commonTypeEpicCode='CTFE';
		$lvn_indMstEpicCode='IMFE';
		$lvn_configMppgEpicCode='CMFE';
		$lvn_entityObjEpicCode='EOFE';
		$lvn_entityObjAttrbtEpicCode='EAFE';
		$lvn_entityObjAttrbtMppngEpicCode='EMFE';
		$lvn_entityObjTmpEpicCode='ETFE';
		$lvn_objMppngEpicCode='OMFE';
		$lvn_expceptionLogEpicCode='ELFE';
		$lvn_appDetEpicCode='APPL';
		$lvn_hierLvlEpicCode='HLFE';
		$lvn_relDetEpicCode='RNFE';
		$lvn_sysGlossEpicCode='SGFE';
		$lvn_sysLstDetEpicCode='SLFE';
		$lvn_roleMstEpicCode='RMFE';
		$lvn_userDomainEpicCode='USFE';
		$lvn_userGrpEpicCode='UGFE';
		$lvn_userGrpRoleEpicCode='URFE';
		$lvn_userGrpDtlEpicCode='UDFE';
		$lvn_userMstEpicCode='UMFE';
		$lvn_userRoleEpicCode='UOFE';
		$lvn_permissionDetEpicCode='PDFE';
		
		$lvn_objAttrbtPrivilegeEpicCode='OPFE';
		$lvn_hierTypEpicCode='HTFE';
		$lvn_systemSettingEpicCode='SSFE';
		$lvn_userLastLoginEpicCode='ULFE';
		$lvn_TimezoneMstEpicCode='TMFE';
		$lvn_locationTypeEpicCode='LTFE';
		$lvn_locationMstEpicCode='LMFE';
		$lvn_streetMstEpicCode='SMFE';
		$lvn_postCodeMstEpicCode='PMFE';
		$lvn_addressMstEpicCode='AMFE';

		
		
		
		
	   /*xxxxxxxxxxxxxxxxxxxxxx Epic Master Code : Ends  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
       
       
       
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
		
		$lvs_objAttrbtPrivilegeMenuCode='OPMN';
		$lvn_hierTypMenuCode='HTMN';
		$lvn_systemSettingCode='SSMN';
		$lvn_userLastLoginCode='ULMN';
		$lvn_TimezoneMstCode='TZMN';
		$lvn_locationTypeCode='LTMN';
		$lvn_locationMstCode='LMMN';
		$lvn_streetMstCode='SMMN';
		$lvn_postCodeMstCode='PMMN';
		$lvn_addressMstCode='AMMN';

		
		
	   /*xxxxxxxxxxxxxxxxxxxxxx Menu Master Code : Ends  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		
	  
		
		function getMasterIDFromCode($masterCode)
		{
			//echo "SELECT * FROM independent_mst where  MSTR_CD = '$masterCode' ";
			$result=mysql_query("SELECT * FROM independent_mst where  MSTR_CD = '$masterCode' ") or mysql_error();
			if($result)
			{
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
		
		$lvn_objAttrbtPrivilegeID= getMasterIDFromCode($lvs_objAttrbtPrivilegeMenuCode);
		$lvn_hierTypID= getMasterIDFromCode($lvn_hierTypMenuCode);
		$lvn_systemSettingID= getMasterIDFromCode($lvn_systemSettingCode);
		$lvn_userLastLoginID= getMasterIDFromCode($lvn_userLastLoginCode);
		$lvn_TimezoneMstID= getMasterIDFromCode($lvn_TimezoneMstCode);
		$lvn_locationTypeID= getMasterIDFromCode($lvn_locationTypeCode);
		$lvn_locationMstID= getMasterIDFromCode($lvn_locationMstCode);
		$lvn_streetMstID= getMasterIDFromCode($lvn_streetMstCode);
		$lvn_postCodeMstID= getMasterIDFromCode($lvn_postCodeMstCode);
		$lvn_addressMstID= getMasterIDFromCode($lvn_addressMstCode);
		
		
		function get_menu_name($masterId)
		{
			$result=mysql_query("SELECT * FROM independent_mst where  MSTR_ID =  ".$masterId);
			if($result)
			{
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
		}
		/*xxxxxxxxxxxxxxxxxxxxxx MENU ID : Ends  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		
		/*xxxxxxxxxxxxxxxxxxxxxx Module ID : Starts  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		
		
		
		$lvn_dashboardModule= getMasterIDFromCode($lvn_dashboardModuleCode);    
		$lvn_systemManagerModule= getMasterIDFromCode($lvn_systemManagerModuleCode);
		$lvn_exceptionMngtModule= getMasterIDFromCode($lvn_exceptionMngtModuleCode);
		$lvn_entityMngtModule= getMasterIDFromCode($lvn_entityMngtModuleCode);
		$lvn_organisationMngtModule= getMasterIDFromCode($lvn_organisationMngtModuleCode);
		$lvn_userMngtModule= getMasterIDFromCode($lvn_userMngtModuleCode);
		$lvn_accessMngtModule= getMasterIDFromCode($lvn_accessMngtModuleCode);
		$lvn_emailModule= getMasterIDFromCode($lvn_emailModuleCode);
		$lvn_hierachyMngtModule= getMasterIDFromCode($lvn_hierachyMngtModuleCode);
		$lvn_commonModule= getMasterIDFromCode($lvn_commonModuleCode);
		$lvn_addressAndModule= getMasterIDFromCode($lvn_addressAndLocationModuleCode);	
		
		
		
	/*xxxxxxxxxxxxxxxxxxxxxx Module ID : ends  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		

		/*xxxxxxxxxxxxxxxxxxxxxx Epic ID : Starts  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		
		
		
		$lvn_commonTypeEpic= getMasterIDFromCode($lvn_commonTypeEpicCode);    
		$lvn_indMstEpic= getMasterIDFromCode($lvn_indMstEpicCode);
		$lvn_configMppgEpic= getMasterIDFromCode($lvn_configMppgEpicCode);
		$lvn_entityObjEpic= getMasterIDFromCode($lvn_entityObjEpicCode);
		$lvn_entityObjAttrbtEpic= getMasterIDFromCode($lvn_entityObjAttrbtEpicCode);
		$lvn_entityObjAttrbtMppngEpic= getMasterIDFromCode($lvn_entityObjAttrbtMppngEpicCode);
		$lvn_entityObjTmpEpic= getMasterIDFromCode($lvn_entityObjTmpEpicCode);
		$lvn_objMppngEpic= getMasterIDFromCode($lvn_objMppngEpicCode);
		$lvn_expceptionLogEpic= getMasterIDFromCode($lvn_expceptionLogEpicCode);
		$lvn_appDetEpic= getMasterIDFromCode($lvn_appDetEpicCode);
		$lvn_hierLvlEpic= getMasterIDFromCode($lvn_hierLvlEpicCode);
		
		$lvn_relDetEpic= getMasterIDFromCode($lvn_relDetEpicCode);
		$lvn_sysGlossEpic= getMasterIDFromCode($lvn_sysGlossEpicCode);
		$lvn_sysLstDetEpic= getMasterIDFromCode($lvn_sysLstDetEpicCode);
		$lvn_roleMstEpic= getMasterIDFromCode($lvn_roleMstEpicCode);
		$lvn_userDomainEpic= getMasterIDFromCode($lvn_userDomainEpicCode);
		$lvn_userGrpEpic= getMasterIDFromCode($lvn_userGrpEpicCode);
		$lvn_userGrpRoleEpic= getMasterIDFromCode($lvn_userGrpRoleEpicCode);
		$lvn_userMstEpic= getMasterIDFromCode($lvn_userMstEpicCode);
		$lvn_userRoleEpic= getMasterIDFromCode($lvn_userRoleEpicCode);
		$lvn_permissionDetEpic= getMasterIDFromCode($lvn_permissionDetEpicCode);
		
		$lvn_objAttrbtPrivilegeEpic= getMasterIDFromCode($lvn_objAttrbtPrivilegeEpicCode);
		$lvn_hierTypEpic= getMasterIDFromCode($lvn_hierTypEpicCode);
		$lvn_systemSettingEpic= getMasterIDFromCode($lvn_systemSettingEpicCode);
		$lvn_userLastLoginEpic= getMasterIDFromCode($lvn_userLastLoginEpicCode);
		$lvn_TimezoneMstEpic= getMasterIDFromCode($lvn_TimezoneMstEpicCode);
		$lvn_locationTypeEpic= getMasterIDFromCode($lvn_locationTypeEpicCode);
		$lvn_locationMstEpic= getMasterIDFromCode($lvn_locationMstEpicCode);
		$lvn_streetMstEpic= getMasterIDFromCode($lvn_streetMstEpicCode);
		$lvn_postCodeMstEpic= getMasterIDFromCode($lvn_postCodeMstEpicCode);
		$lvn_addressMstEpic= getMasterIDFromCode($lvn_addressMstEpicCode);

		
		
		
		
	/*xxxxxxxxxxxxxxxxxxxxxx Epic ID : ends  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
	
		/*xxxxxxxxxxxxxxxxxxxxxx Function to Enable/Disabale Module : STARTS     xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		
		function moduleEnableDisable($moduleID)
		{
			
			$result=mysql_query("SELECT * FROM relationship_dtl rd, independent_mst im where rd.CHILD_ID = im.MSTR_ID And ENABLED=1  AND im.MSTR_ID = ".$moduleID);
			if($result)
			{
				$num_rows=mysql_num_rows($result);
				if($num_rows>0)
				{
					$row=mysql_fetch_array($result);
					return $row['MSTR_NM'];
					//return true;	
				}
				else
				{
					return false;
				}
			}


		}
		/*xxxxxxxxxxxxxxxxxxxxxx Function to Enable/Disabale Module : ENDS    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		/*xxxxxxxxxxxxxxxxxxxxxx Function to Enable/Disabale EPIC   : STARTS     xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
		function epicEnableDisable($epicID)
		{
			//echo "SELECT * FROM application_dtl ad, independent_mst im, config_mapping_dtl cr where ad.FUNCTION_ID = im.MSTR_ID AND im.MSTR_ID = cr.SRC_ENTTY_ID AND cr.CNFG_MPPNG_TYP_ID=62 And ENABLED=1  AND im.MSTR_ID = ".$moduleID;
			 $result=mysql_query("SELECT * FROM relationship_dtl rd, independent_mst im, config_mapping_dtl cr where rd.CHILD_ID = im.MSTR_ID AND im.MSTR_ID = cr.SRC_ENTTY_ID AND cr.CNFG_MPPNG_TYP_ID=".MENUID." And ENABLED=1  AND im.MSTR_ID = ".$epicID);
			if($result)
			{
				$num_rows=mysql_num_rows($result);
				if($num_rows>0)
				{
					
					$row=mysql_fetch_array($result);
					return $row['MSTR_NM'];
					//return true;	
				}
				else
				{
					return false;
				}
			}


		}
		
		
		/*xxxxxxxxxxxxxxxxxxxxxx Function to Enable/Disabale EPIC  : ENDS    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx*/
        ?>
      						 <?php if(moduleEnableDisable($lvn_dashboardModule))
      						 
      						 {
      						  ?>
      						 <li onclick="toggle($(this).next().attr('id'));" class="nav-header hidden-tablet"><?php echo moduleEnableDisable($lvn_dashboardModule); ?></li>
                            <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
							<li>
                                <a class="ajax-link" href="<?php echo site_url('dashboard/dashboard');?>">
                                    <i class="icon-home"></i>
                                    <span class="hidden-tablet">Dashboard</span>
                                </a>
                            </li>
                            </ul>
                            <?php  }  ?>
                          <?php if(moduleEnableDisable($lvn_addressAndModule))
      						 
      						 {
      						  ?>
                            <li onclick="toggle($(this).next().attr('id'));" class="nav-header hidden-tablet"><?php echo moduleEnableDisable($lvn_addressAndModule); ?></li>
							 <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
                            <?php
                            if(isset($lvn_TimezoneMstEpic))
                            {
                            if(epicEnableDisable($lvn_TimezoneMstEpic))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('address/timezoneMst');?>">
                                    <i class="icon-home"></i>
                                    <span class="hidden-tablet"> <?php echo get_menu_name($lvn_TimezoneMstID); ?></span>
                                </a>
                            </li>
				<?php  
				}
				}
			   ?>
			    <?php
                            if(isset($lvn_locationTypeEpic))
                            {
                            if(epicEnableDisable($lvn_locationTypeEpic))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('address/loc_typ');?>">
                                    <i class="icon-home"></i>
                                    <span class="hidden-tablet"> <?php echo get_menu_name($lvn_locationTypeID); ?></span>
                                </a>
                            </li>
				<?php  
				}
				}
			   ?>
			    <?php
                            if(isset($lvn_locationMstEpic))
                            {
                            if(epicEnableDisable($lvn_locationMstEpic))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('address/locationMst');?>">
                                    <i class="icon-home"></i>
                                    <span class="hidden-tablet"> <?php echo get_menu_name($lvn_locationMstID); ?></span>
                                </a>
                            </li>
				<?php  
				}
				}
			   ?>
                <?php
                            if(isset($lvn_postCodeMstEpic))
                            {
                            if(epicEnableDisable($lvn_postCodeMstEpic))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('address/postcodeMst');?>">
                                    <i class="icon-home"></i>
                                    <span class="hidden-tablet"> <?php echo get_menu_name($lvn_postCodeMstID); ?></span>
                                </a>
                            </li>
				<?php  
				}
				}
			   ?>
			   <?php
                            if(isset($lvn_streetMstEpic))
                            {
                            if(epicEnableDisable($lvn_streetMstEpic))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('address/streetMst');?>">
                                    <i class="icon-home"></i>
                                    <span class="hidden-tablet"> <?php echo get_menu_name($lvn_streetMstID); ?></span>
                                </a>
                            </li>
				<?php  
				}
				}
			   ?>
			   
			    <?php
                            if(isset($lvn_addressMstEpic))
                            {
                            if(epicEnableDisable($lvn_addressMstEpic))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('address/addressMst');?>">
                                    <i class="icon-home"></i>
                                    <span class="hidden-tablet"> <?php echo get_menu_name($lvn_addressMstID); ?></span>
                                </a>
                            </li>
				<?php  
				}
				}
			   ?>

			   </ul>

							<?php }?>
                            
                             <?php if(moduleEnableDisable($lvn_commonModule))
      						 
      						 {
      						  ?>
                            <li onclick="toggle($(this).next().attr('id'));" class="nav-header hidden-tablet"><?php echo moduleEnableDisable($lvn_commonModule); ?></li>
                             <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
                            <?php
                            if(isset($lvn_commonTypeEpic))
                            {
                            if(epicEnableDisable($lvn_commonTypeEpic))
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
				}
			   ?>
							<?php 
							
							if(isset($lvn_indMstEpic))
                            					{
							if(epicEnableDisable($lvn_indMstEpic))
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
							}
						   ?>
							<?php
							  if($this->session->userdata('is_admin')==2){
				if(isset($lvn_configMppgEpic))
                            {
							if(epicEnableDisable($lvn_configMppgEpic))
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
							}
							}
						   ?>
							<?php //if(epicEnableDisable($lvn_vendorModule))
							//{
								
							?>
                            <!-- <li>
                                <a class="ajax-link" href="<?php echo site_url('crncyMngt/currency_mst/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet">Currency Master <?php //echo get_menu_name($lvn_dashboardID); ?></span>
                                </a>
                            </li>
							<?php  
							//}
						   ?>
							<?php //if(epicEnableDisable($lvn_vendorModule))
							//{
								
							?>
                            
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('crncyMngt/currency_rate/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet">Currency Rate<?php //echo get_menu_name($lvn_dashboardID); ?></span>
                                </a>
                            </li>-->
							
							</ul>
				<?php  } ?>

					<?php if(moduleEnableDisable($lvn_userMngtModule))
					  {
					      						  ?>

                            <?php  
							if($this->session->userdata('is_admin')==1 || $this->session->userdata('is_admin')==2){
						   ?>
							<li onclick="toggle($(this).next().attr('id'));"  class="nav-header hidden-tablet"><?php echo moduleEnableDisable($lvn_userMngtModule); ?></li>
                            <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">

					<?php 
					if(isset($lvn_userDomainEpic))
					{
							if(epicEnableDisable($lvn_userDomainEpic))
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
					}
						   ?>



							<?php 
						if(isset($lvn_roleMstEpic))
						{	
							if(epicEnableDisable($lvn_roleMstEpic))
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
						}
						   ?>
							
							<?php 
					if(isset($lvn_userGrpEpic))
					{
							if(epicEnableDisable($lvn_userGrpEpic))
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
					}
						   ?>
                           
                           <li>
                                <a class="ajax-link" href="<?php echo site_url('user/user_group_dtl/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo "User Group Detail"; ?> </span>
                                </a>
                            </li>
							<?php 
					if(isset($lvn_userGrpRoleEpic))
					{
							if(epicEnableDisable($lvn_userGrpRoleEpic))
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
					}
						   ?>
					<?php 
					if(isset($lvn_userMstEpic))
					{
							
							if(epicEnableDisable($lvn_userMstEpic))
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
					}
						   ?>
					<?php 
					if(isset($lvn_userRoleEpic))
					{
							if(epicEnableDisable($lvn_userRoleEpic))
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
					}
						   ?>
							 </ul>
							<?php
							}
							}
						   ?>
						   
				<?php if(moduleEnableDisable($lvn_accessMngtModule))
					  {
					      						  ?>
							<li onclick="toggle($(this).next().attr('id'));" class="nav-header hidden-tablet"><?php echo moduleEnableDisable($lvn_accessMngtModule); ?></li>
                            <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
					<?php 
							
					if(isset($lvn_permissionDetEpic))
					{	
							if(epicEnableDisable($lvn_permissionDetEpic))
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
					}
						   ?>
                           
                           </ul>
                           <?php  }  ?>
                           <?php if(moduleEnableDisable($lvn_entityMngtModule))
					  {
					      						  ?>
                           
							<li onclick="toggle($(this).next().attr('id'));"  class="nav-header hidden-tablet"><?php echo moduleEnableDisable($lvn_entityMngtModule); ?></li>
                             <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
                            <?php 
                            
                            if(isset($lvn_entityObjEpic))
				{
	                            if(epicEnableDisable($lvn_entityObjEpic))
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
				}
						   ?>
                           <?php 
                           if(isset($lvn_objMppngEpic))
				{
                          			if(epicEnableDisable($lvn_objMppngEpic))
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
				}
						   ?>
							<?php
							
						if(isset($lvn_entityObjAttrbtEpic))
						{
							 if(epicEnableDisable($lvn_entityObjAttrbtEpic))
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
						}
						   ?>
							<?php 
					if(isset($lvn_entityObjAttrbtMppngEpic))
					{
							if(epicEnableDisable($lvn_entityObjAttrbtMppngEpic))
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
					}
						   ?>
							
							
				    <?php 
				    if(isset($lvn_objAttrbtPrivilegeEpic))
					{
						    if(epicEnableDisable($lvn_objAttrbtPrivilegeEpic))
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
					}
						   ?>
                           <?php 
                            if(isset($lvn_entityObjTmpEpic))
					{
	                           		if(epicEnableDisable($lvn_entityObjTmpEpic))
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
					}
						   ?>
							</ul>
							<?php } ?>
							<?php if(moduleEnableDisable($lvn_exceptionMngtModule)) { ?>
                            <li onclick="toggle($(this).next().attr('id'));" class="nav-header hidden-tablet"><?php echo moduleEnableDisable($lvn_exceptionMngtModule); ?></li>
                              <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
				<?php 
					if(isset($lvn_expceptionLogEpic))
					{
							if(epicEnableDisable($lvn_expceptionLogEpic))
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
							</ul>
							<?php
					}
						   ?>
						   <?php if(moduleEnableDisable($lvn_hierachyMngtModule)) { ?>
					<li onclick="toggle($(this).next().attr('id'));" class="nav-header hidden-tablet"><?php echo moduleEnableDisable($lvn_hierachyMngtModule); ?></li>
                            <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
							<?php 
					
						if(isset($lvn_hierTypEpic))
						{
								if(epicEnableDisable($lvn_hierTypEpic))
								{
									
								?>
	                             
	                            <li>
	                                <a class="ajax-link" href="<?php echo site_url('hrchyMngt/hier_typ/');?>">
	                                    <i class="icon-plus-sign"></i>
	                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_hierTypID); ?></span>
	                                </a>
	                            </li>
								<?php  
								}

					}
						   ?>

					<?php 
					
						if(isset($lvn_hierLvlEpic))
						{
								if(epicEnableDisable($lvn_hierLvlEpic))
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
						}
					}
						   ?>
					<?php 
							
					if(isset($lvn_relDetEpic))
					{
							
							if(epicEnableDisable($lvn_relDetEpic))
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
					}
					?>
					</ul>
					<?php  } ?>
					<?php if(moduleEnableDisable($lvn_systemManagerModule)) { ?>
					<li onclick="toggle($(this).next().attr('id'));" class="nav-header hidden-tablet"><?php echo moduleEnableDisable($lvn_systemManagerModule); ?></li>
                            <ul id="hide"  class="nav nav-tabs nav-stacked" style="width:100%">
					
					<?php 
					
					if(isset($lvn_sysGlossEpic))
					{
							if(epicEnableDisable($lvn_sysGlossEpic))
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
					}
				   ?>
				<?php 
				if(isset($lvn_sysLstDetEpic))
				{
							
							if(epicEnableDisable($lvn_sysLstDetEpic))
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
				}
			   ?>

			   <?php 
				if(isset($lvn_systemSettingEpic))
				{
							
							if(epicEnableDisable($lvn_systemSettingEpic))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('systmInfoMgr/systm_setting/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_systemSettingID); ?> </span>
                                </a>
                            </li>
							<?php  
							}
				}
			   ?>

			   <?php 
				if(isset($lvn_userLastLoginEpic))
				{
							
							if(epicEnableDisable($lvn_userLastLoginEpic))
							{
								
							?>
                            <li>
                                <a class="ajax-link" href="<?php echo site_url('systmInfoMgr/user_lst_login/');?>">
                                    <i class="icon-plus-sign"></i>
                                    <span class="hidden-tablet"><?php echo get_menu_name($lvn_userLastLoginID); ?> </span>
                                </a>
                            </li>
							<?php  
							}
				}
			   ?>
                           
                           
                           
							</ul>
							<?php } ?>
                       
							
                          
     </ul>
     
<script>
$(document).ready(function() {
	
		 $( 'ul.nav li.active' ).parent().addClass('active-MyUl');
		
			var i = 1;
	
			$('ul.nav').each(function(){
 			if(this.id)
			{
   				 this.id = this.id+i;
	 			$(this).hide();
				i++;
 			}
		});
		
		 if( $( 'ul.nav li.active' ).parent().hasClass('active-MyUl') == true)
			 {
				 $('.active-MyUl').prev().css('color','#DF9434');
				
				$('.active-MyUl').slideToggle('slow');
			 }

});
		function toggle(i)
	{
		
	
	// if( $( 'li.active' ).parent().hasClass('active-ul') == true)
			// {
				
				$("#"+i).slideToggle('slow');
			// }

	}

	 </script>
     
     <label id="for-is-ajax" class="hidden-tablet" for="is-ajax" style="display:none"><input id="is-ajax" type="checkbox" checked="checked" style="display:none"> Ajax on menu</label>
    </div><!--/.well -->
            </div><!--/span-->
            <!-- left menu ends -->
			<div id="content" class="span10">
		