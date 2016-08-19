
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">
	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">Icon-ების რედაქტირება</h3>
            </div>
			<br>
			<div class="box-body">
				<i class="<?php echo $socicon[0]["iconimage"];?>"></i>
			</div>
			<br>
			<div class="box-body">                				
                <div class="form-group">
                  <label>ჩასვით ლინკი</label>
				  <input id="icon_id" type="hidden" value="<?php echo $socicon[0]["id"];?>">
                  <input id="txt_link" type="text" class="form-control" placeholder="" value="<?php echo $socicon[0]["link"];?>" style="width:300px;">
                </div>					
			</div>
			
		
	  <div class="box-body">
		<div class="col-md-1">
			<button id="btn-updateSocIcon" class="btn btn-block btn-success btn-lg" type="button">Update</button>
		</div>
	  </div>
  </div>	  
</section>
	
  </div>

  
  <script> 

	$( document ).ready(function() {
						
		$("#btn-updateSocIcon").click(function(){
			
			data = new Object();
			
			if( $("#txt_link").val() == '' )
			{
				alert("ჩასვით ლინკი."); return false;
			}			
									
			data["id"] = $("#icon_id").val();
			data['link'] = $("#txt_link").val();
			
			$.post(base_url +'/'+ lang + '/admin/updateSocIcon',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +''+ lang + '/admin/socialIcons');				
			})
			.fail(function(){
				console.log("ERROR");
				return false;
			});	 
	});
		
});
	
</script>
  

