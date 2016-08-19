
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">
	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">კატეგორის დამატება დამატება</h3>
            </div>
			
            <div class="box-body">
			  
				<div class="form-group">
                  <label>კატეგორიის დასახელება ქართულად</label>
                  <input id="txt_namege" type="text" class="form-control" placeholder="" value="" style="width:20%;">
                </div>	
				
				<div class="form-group">
                  <label>კატეგორიის დასახელება ინგლისურად</label>
                  <input id="txt_nameen" type="text" class="form-control" placeholder="" value="" style="width:20%;">
                </div>
			</div>
		
	
	  <div class="box-body">
		<div class="col-md-1">
			<button id="btn-addCategory" class="btn btn-block btn-success btn-lg" type="button">Add</button>
		</div>
	  </div>
  </div>	  
</section>
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <script> 

	$( document ).ready(function() {
			data = new Object();
			
		$("#btn-addCategory").click(function(){
			
			if( $("#txt_namege").val() == '' || $('#txt_nameen').val() == '' )
			{
				alert("Fill category fields."); return false;
			}
			
			data['namege'] = $("#txt_namege").val();
			data['nameen'] = $("#txt_nameen").val();
						
			$.post(base_url +'/'+ lang + '/admin/saveMainCategory',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +'/'+ lang + '/admin/products');					
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
			});	 
	});
		
});
	
</script>



