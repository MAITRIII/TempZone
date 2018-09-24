			<!-- content ends -->
	</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		<!-- setting page starts--> 
        
    <div class="modal hide fade" id="myModal">
    <form class="form-horizontal"  action="<?php if(isset($action_m)) echo $action_m;?>" method="post" name="form1">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">x</button>
				<h3>Form Settings</h3>
			</div>
			<div class="modal-body">
				
    <div id="mod"><!--/id="mod"-->

    <table width="400px">
	<?php 
	if(isset($entityObjAttrbt)){	
		foreach($entityObjAttrbt as $list) {?>
					<tr>
                         
								<td width="250px"><?php echo $list->OBJ_ATTRBT_NM;  ?> </a></td>
								<td width="250px">

<?php if($list->IS_VISIBLE == '1'){?>  
      <input  type="checkbox" name="module[]" value="<?php echo $list->OBJ_ATTRBT_ID; ?>" checked="checked" />
        
        <!--  <input data-no-uniform="true" type="checkbox" class="iphone-toggle">-->
        <?php }else {?> 

<input  type="checkbox" name="module[]" value="<?php echo $list->OBJ_ATTRBT_ID; ?>"  />
<!--<input data-no-uniform="true" type="checkbox" class="iphone-toggle">-->
        <?php }?>
                           </td>
                          
                           
                           </tr>     

			<?php }
				}?>
               </table> 
             			
     </div><!--/id="mod"-->
                

			</div><!--- modal body ends -->
			<div class="modal-footer">

         <input  type="hidden" name="pvs_ObjNm" value="<?php if(isset($pvs_ObjNm))echo $pvs_ObjNm;?>" /> 
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<!--<a href="#" class="btn btn-primary">Save changes</a>-->
                <input type="submit"  class="btn btn-primary" value="Saves Changes" />
                 
			</div>
            </form>
		</div>
         
        <!-- setting page ends-->  
        
        
        <hr />
        	
		<!--<footer>
			<p class="pull-right">Powered by: <a href="http://geeconglobal.com/">Geecon</a></p>
		</footer>-->
	</div><!--/.fluid-container-->
</body>
<!-- End of Body Section -->
</html>