
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">
	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">სერვისის კატეგორიის რედაქტირება</h3>
            </div>
			
			<?php ///print_r($servcatssingle); die;
				if( isset($servcatssingle) )
				{				
			?>
            <div class="box-body">
			  
				<div class="form-group">
                  <label>კატეგორია ქართულად</label>
				  <input id="servicecatId" type="hidden" value="<?php echo $servcatssingle[0]["id"];?>">
                  <input id="txt_namege" type="text" class="form-control" placeholder="" value="<?php echo $servcatssingle[0]["catnamege"];?>" style="width:auto;">
                </div>	
				
				<div class="form-group">
                  <label>კატეგორია ინგლისურად</label>
                  <input id="txt_nameen" type="text" class="form-control" placeholder="" value="<?php echo $servcatssingle[0]["catnameen"];?>" style="width:auto;">
                </div>
			</div>
		
	
	  <div class="box-body">
		<div class="col-md-1">
			<button id="btn-updservcat" class="btn btn-block btn-success btn-lg" type="button">update</button>
		</div>
	  </div>
	<?php }?>
  </div>	  
</section>
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <script> 

	$( document ).ready(function() {
			data = new Object();
			
		$("#btn-updservcat").click(function(){
			
			if( $("#txt_namege").val() == '' || $('#txt_nameen').val() == '' )
			{
				alert("Fill category fields."); return false;
			}
			data['id'] = $("#servicecatId").val();
			data['catnamege'] = $("#txt_namege").val();
			data['catnameen'] = $("#txt_nameen").val();
						
			$.post(base_url +'/'+ lang + '/admin/updateServiceCategory',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +'/'+ lang + '/admin/editServiceCategory');					
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
			});	 
	});
		
});
	
</script>



