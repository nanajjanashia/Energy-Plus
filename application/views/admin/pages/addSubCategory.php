
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">
	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">კატეგორის დამატება დამატება</h3>
            </div>
			
            <div class="box-body">
			  
				<div class="prcategory">
					<div class="form-group dropdown">				
						<label>აირჩიეთ მთავარი კატეგორია</label>
						<select id="category" class="form-control priority" style="display:block;">
							<option value="0">აირჩიეთ</option>
							<?php
							if( isset($category) && !empty($category) )
							{
								foreach( $category as $k=>$v )
								{
									echo '<option value="'.$v->id.'">'.$v->namege.'/'.$v->nameen.'</option>';
								}
							}
							?>
						</select>
					</div>
					<div class="col-md-1 addcatagory" style="margin-top:27px;">
						<a class="btn btn-success" href="<?php echo base_url("$language");?>/admin/addMainCategory"><i class="fa fa-plus-circle"></i> ახლის დამატება</a>
					</div>	
				</div>
				
				<div class="form-group">
                  <label>ქვეკატეგორიის დასახელება ქართულად</label>
                  <input id="txt_namege" type="text" class="form-control" placeholder="" value="" style="width:auto;">
                </div>	
				
				<div class="form-group">
                  <label>ქვეკატეგორიის დასახელება ინგლისურად</label>
                  <input id="txt_nameen" type="text" class="form-control" placeholder="" value="" style="width:auto;">
                </div>	
				
		
			</div>
		
	
	  <div class="box-body">
		<div class="col-md-1">
			<button id="btn-addproduct" class="btn btn-block btn-success btn-lg" type="button">Add</button>
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
			
		$("#btn-addproduct").click(function(){
			
			if( $("#category").val() == "0" )
			{
				alert("აირჩიეთ კატეგორია");
			}
			if( $("#txt_namege").val() == '' || $('#txt_nameen').val() == '' )
			{
				alert("შეავსეთ ქვეკატეგორიის ველები."); return false;
			}
			
			data['namege'] = $("#txt_namege").val();
			data['nameen'] = $("#txt_nameen").val();
			data['parent']	= $("#category").val();
			
			$.post(base_url +'/'+ lang + '/admin/saveSubCategory',data, function(data,status){
				
			})
			.success(function(data){
				alert(data); return false;
				$(location).attr('href', base_url +'/'+ lang + '/admin/rooms');					
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
			});	 
	});
		
});
	
</script>



