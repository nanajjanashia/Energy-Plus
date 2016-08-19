
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">
	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">მთავარი კატეგორიის რედაქტირება</h3>
            </div>
			
			<?php ///print_r($servcatssingle); die;
				if( isset($cteditfaqs) )
				{				
			?>
            <div class="box-body">
			  
				<div class="form-group">
                  <label>კატეგორია ქართულად</label>
				  <input id="maincatId" type="hidden" value="<?php echo $cteditfaqs[0]["id"];?>">
                  <input id="txt_namege" type="text" class="form-control" placeholder="" value="<?php echo $cteditfaqs[0]["catnamege"];?>" style="width:auto;">
                </div>	
				
				<div class="form-group">
                  <label>კატეგორია ინგლისურად</label>
                  <input id="txt_nameen" type="text" class="form-control" placeholder="" value="<?php echo $cteditfaqs[0]["catnameen"];?>" style="width:auto;">
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
			data['catnamege'] = $("#txt_namege").val();
			data['catnameen'] = $("#txt_nameen").val();
						
			$.post(base_url +'/'+ lang + '/admin/updateFaqs',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +''+ lang + '/admin/terms');					
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
			});	 
	});
		
});
	
</script>



