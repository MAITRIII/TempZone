<!-- Start of Breadcrumb -->
<div>
	<ul class="breadcrumb">
		<li>
			<a href="<?php echo site_url('address/tempzoneMst');?>">Temprature</a> 
		</li>

	</ul>
</div>
<!-- End of Breadcrumb -->

<!-- Start of alert to display the form messages -->
<?php if($this->session->flashdata('success')) {?>
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?php echo $this->session->flashdata('success'); ?>
</div>
<?php } ?>
<!-- End of alert to display the form messages -->

<!-- Start of main body -->
<div class="row-fluid sortable">
	<div class="box span12">
    	<!-- Start of title bar -->
		<div class="box-header well" data-original-title="">
			<h2><i class="icon-home"></i>Temprature</h2>
			<div class="box-icon">
			<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
			<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
			<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
    	<!-- End of title bar -->
		
    <!-- Start of content -->
    <div class="box-content">
        
		<fieldset>
		  <div class="box-content">		
			   <div style="float:right">
						<a class="btn btn-info" href="<?php echo site_url('address/tempzoneMst/newTempzoneMst/'); ?>"  >
					 <i class="icon-edit icon-white"></i> Add New</a>
			   </div>  <br><br>
		  
				<table class="table table-striped table-bordered bootstrap-datatable datatable" >
			  
					<!-- Start of table head -->
					<thead>
						<tr>
							<th>Temprature ID</th>
							<th>Tempraturezone</th>
                            <th>Country</th>
							<th> Actions</th>
						  	<!--<th> </th>-->

						</tr>
					</thead>
					<!-- End of table head -->
					<!-- Start of table body -->
					<tbody>
						<?php foreach($tzone as $tempzone) :?>
						<tr>
							<td class="center"><?php echo $tempzone->tempzone_id; ?></td>
							<td class="center"><?php echo $tempzone->tempzone_name; ?></td>
                            <td class="center"><?php echo $tempzone->country; ?></td>
							<td class="center ">
								<a href="<?php echo site_url('address/tempzoneMst/editTempzoneMst/'.$tempzone->tempzone_id);?>">
									  <span title="Edit" class="icon icon-color icon-edit"></span>                                           
								</a>
								<a  href="<?php echo site_url('address/tempzoneMst/delete/'.$tempzone->tempzone_id);?>">
									 <span title="Delete" class="icon icon-color icon-trash"></span> 
								</a>
							</td>
						</tr>	
						<?php endforeach; ?>						
					</tbody>
					<!-- End of table body -->
				</table> 
		</fieldset>   
	   </div>
    <!-- End of content -->
	</div><!--/span-->
</div>
<!-- End of main body -->