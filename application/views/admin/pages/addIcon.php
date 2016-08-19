
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">
	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">Icon-ების რედაქტირება</h3>
            </div>
			<br>
			<div class="box-body">
				<label>ატვირთეთ სურათი(type = .jpg) Dimensions (145X125)</label>
				<input type="file" name="file_upload" id="picture" />
				<div class="main-upload coversrc"><br>			
					
				<br>
				</div>
			</div>
			<br>
			<div class="box-body">                				
                <div class="form-group">
                  <label>ჩასვით ლინკი</label>
                  <input id="txt_link" type="text" class="form-control" placeholder="" value="" style="width:auto;">
                </div>					
			</div>
			
		
	  <div class="box-body">
		<div class="col-md-1">
			<button id="btn-addIcon" class="btn btn-block btn-success btn-lg" type="button">დამატება</button>
		</div>
	  </div>
  </div>	  
</section>
	
  </div>

  
  <script> 

	$( document ).ready(function() {
						
		$("#btn-addIcon").click(function(){
			
			data = new Object();
			
			if( $("#txt_link").val() == '' )
			{
				alert("ჩასვით ლინკი."); return false;
			}			
			
			if( typeof $('.coversrc img').attr('src') == 'undefined' )
			{
				alert("ატვირთეთ სურათი"); return false;
			}			
						
			data['link'] = $("#txt_link").val();
			var imguri = $('.coversrc img').attr('src');
			data['iconimage'] = imguri.split("/").pop();
			
			$.post(base_url +'/'+ lang + '/admin/saveIcon',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +''+ lang + '/admin/icons');				
			})
			.fail(function(){
				console.log("ERROR");
				return false;
			});	 
	});
		
});
	
</script>
  
  
  
<script type="text/javascript" src="<?php echo base_url(); ?>js/jqueryupluadify.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/uploadify.css" />

<script>
  $(function () {
	
	  
	$("#picture").uploadify({
		"buttonText": "Upload",
		"swf"      : "<?php echo base_url(); ?>images/resource/uploadify.swf",
		"uploader" : "<?php echo base_url(); ?>images/resource/uploadify.php?gt=1",
		"onUploadSuccess" : function(file, response, data) {
			$(".main-upload").html("<img src='"+base_url+"/images/resource/"+response+"' width='145' /><input name='mainImage' type='hidden' value='"+response+"' />");
			$(".uploadify-queue").html("");
		}
	});
		
  });
</script>  

