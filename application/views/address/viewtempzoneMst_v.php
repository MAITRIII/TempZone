<!-- Start of Breadcrumb -->
<!--<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo site_url('address/tempzone_mst');?>">
Address</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="#"><?php echo $title;?></a>
		</li>s
	</ul>
</div>-->
<!-- End of Breadcrumb -->

<div class="row-fluid sortable"
	<div class="box span12">
		<div class="box-header well" data-original-title="">
			<h2><i class="icon-plus"></i> <?php echo $title;?></h2>
			<div class="box-icon">
			<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
			<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
			<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
        	<form class="form-horizontal" action="<?php echo $action;?>" method="POST">
				<fieldset>
				
                    
                    <!-- Start Of Form Controls   -->
                 
                    
                    <!--start Of div-->
                    <div class="control-group <?php if(form_error('Tempzone')) echo 'error';?>">
						<label class="control-label">Temprature<span style="color:red;">*</span></label>
						<div class="controls">
							<input class="input-xlarge" id="Tempzone" name="Tempzone" type="text" value="<?php echo set_value('Tempzone', $Tempzone); ?>">
							<span class="help-inline">
								<?php echo form_error('Tempzone'); ?>
							</span>
						</div>
					</div>
					<!--end Of div-->
                    
                    
                     <!--start Of div-->
                    <div class="control-group <?php if(form_error('country')) echo 'error';?>">
						<label class="control-label">Country<span style="color:red;">*</span></label>
						<div class="controls">
							<input class="input-xlarge" id="country" name="country" type="text" 
                            value="<?php echo set_value('country', $country); ?>">
							<span class="help-inline">
								<?php echo form_error('country'); ?>
							</span>
						</div>
					</div>
					<!--end Of div-->
                    
                  
                     <!-- start of hidden inputs -->
                      <input class="input-xlarge" id="id" name="id" type="hidden" value="<?php echo set_value('id', $id);?>">
					 <!-- end of hidden inputs -->

                    <!-- end Of Form Controls   -->       
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Save changes</button>
						 <?php echo anchor('/address/tempzoneMst','Cancel',array('class'=>'btn')); ?>
					</div>
				</fieldset> 
			</form>  
		</div>
	</div><!--/span-->

</div>