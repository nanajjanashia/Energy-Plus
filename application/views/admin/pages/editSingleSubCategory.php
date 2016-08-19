
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">
	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">ქვეკატეგორიის რედაქტირება</h3>
            </div>
			
			<?php ///print_r($servcatssingle); die;
				if( isset($subcat) )
				{				
			?>
            <div class="box-body">
			  
				<div class="form-group">
                  <label>ქვეკატეგორია ქართულად</label>
				  <input id="maincatId" type="hidden" value="<?php echo $subcat[0]["id"];?>">
                  <input id="txt_namege" type="text" class="form-control" placeholder="" value="<?php echo $subcat[0]["namege"];?>" style="width:20%;">
                </div>	
				
				<div class="form-group">
                  <label>ქვეკატეგორია ინგლისურად</label>
                  <input id="txt_nameen" type="text" class="form-control" placeholder="" value="<?php echo $subcat[0]["nameen"];?>" style="width:20%;">
                </div>
			</div>
		
	
	  <div class="box-body">
		<div class="col-md-1">
			<button id="btn-updmaincat" class="btn btn-block btn-success btn-lg" type="button">update</button>
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
			
		$("#btn-updmaincat").click(function(){
			
			if( $("#txt_namege").val() == '' || $('#txt_nameen').val() == '' )
			{
				alert("Fill category fields."); return false;
			}
			data['id'] = $("#maincatId").val();
			data['namege'] = $("#txt_namege").val();
			data['nameen'] = $("#txt_nameen").val();
						
			$.post(base_url +'/'+ lang + '/admin/updateSubCategory',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +'/'+ lang + '/admin/editSubCategory');					
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
			});	 
	});
		
});
	
</script>



