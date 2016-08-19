
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">
	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">დამატება</h3>
            </div>
			
            <div class="box-body">
			  
				<div class="form-group">
                  <label>სათაური/შეკითხვა ქართულად</label>
                  <input id="txt_titlege" type="text" class="form-control" placeholder="" value="" style="width:300px;">
                </div>	
				
				<div class="form-group">
                  <label>სათაური/შეკითხვა ინგლისურად</label>
                  <input id="txt_titleen" type="text" class="form-control" placeholder="" value="" style="width:300px;">
                </div>	
				
				<div class="prcategory">
					<div class="form-group dropdown">				
						<label>აირჩიეთ კატეგორია</label>
						<select id="category" class="form-control priority" style="display:block;">
							<option value="0">აირჩიეთ</option>
							<?php
							if( isset($allfaqs) && !empty($allfaqs) )
							{
								foreach( $allfaqs as $k=>$v )
								{
									echo '<option value="'.$v["id"].'">'.$v["catnamege"].'/'.$v["catnameen"].'</option>';
								}
							}
							?>
						</select>
					</div>						
				</div>					
			</div>
						
			<div class="box-header">
              <h3 class="box-title">პასუხი ქართულად
                <small>(edit text)</small>
              </h3>
            </div>
			<div class="box-body pad">
              <form>
                    <textarea id="txt_discriptionge" name="editor1" rows="10" cols="80">
                                            
                    </textarea>
              </form>
            </div>	
			<hr>
			<div class="box-header">
              <h3 class="box-title">პასუხი ინგლისურად
                <small>(edit text)</small>
              </h3>
            </div>
			<div class="box-body pad">
              <form>
                    <textarea id="txt_discriptionen" name="editor1" rows="10" cols="80">
                                            
                    </textarea>
              </form>
            </div>	
		<br>
		<hr>
	
	  <div class="box-body">
		<div class="col-md-1">
			<button id="btn-addQT" class="btn btn-block btn-success btn-lg" type="button">დამატება</button>
		</div>
	  </div>
  </div>	  
</section>
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <script> 

		$(document).on("click", "#btn-addQT",function(){
		data = new Object();
	
			if( $("#txt_titlege").val() == '' || $('#txt_titleen').val() == '' )
			{
				alert("შეავსეთ სათაურის ველები!"); return false;
			}
			
			if( $("#category").val() == "0" )
			{
				alert("აირჩიეთ კატეგორია"); return false;
			}
			
			if( CKEDITOR.instances["txt_discriptionge"].getData() == '' && CKEDITOR.instances["txt_discriptionen"].getData() == '')
			{
				alert("შეავსეთ ტექსტები."); return false;
			}	
			
			data['titlege'] = $("#txt_titlege").val();
			data['titleen'] = $("#txt_titleen").val();
			data['catId'] = $("#category").val();	
			data['textge']= CKEDITOR.instances["txt_discriptionge"].getData();
			data['texten']= CKEDITOR.instances["txt_discriptionen"].getData();				
			
			$.post(base_url +'/'+ lang + '/admin/saveQT',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +'/'+ lang + '/admin/terms');					
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
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
			$(".main-upload").html("<img src='"+base_url+"images/resource/"+response+"' width='370' /><input name='mainImage' type='hidden' value='"+response+"' />");
			$(".uploadify-queue").html("");
		}
	});
	/*
	$("#insidepicture").uploadify({
		"buttonText": "Upload",
		"swf"      : "<?php echo base_url(); ?>images/resource/uploadify.swf",
		"uploader" : "<?php echo base_url(); ?>images/resource/uploadify.php?gt=1",
		"onUploadSuccess" : function(file, response, data) {
			$(".main-upload").html("<img src='"+base_url+"images/resource/"+response+"' width='370' /><input name='mainImage' type='hidden' value='"+response+"' />");
			$(".uploadify-queue").html("");
		}
	});
*/
	
	$(document).on("click", ".imgDelete", function(){
			
			$(this).parent().remove();
			
		});
		
  });
</script>  

  
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
  <script>
  $(function () {
    CKEDITOR.replace('txt_discriptionge');
		$(".textarea").wysihtml5();
  });
  
   $(function () {
    CKEDITOR.replace('txt_discriptionen');
		$(".textarea").wysihtml5();
    });
	
</script>
