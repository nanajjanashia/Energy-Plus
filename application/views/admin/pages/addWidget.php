
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">
	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">ვიჯეტის რედაქტირება</h3>
            </div>
			
            <div class="box-body">
                <div class="form-group">
                  <label>სათაური ქართულად</label>
                  <input id="txt_titlege" type="text" class="form-control" placeholder="" value="" style="width:auto;">
                </div>
				
                <div class="form-group">
                  <label>სათაური ინგლისურად</label>
                  <input id="txt_titleen" type="text" class="form-control" placeholder="" value="" style="width:auto;">
                </div>					
			</div>
			
			<div class="box-body">
				<label>ატვირთეთ სურათი(type = .jpg) Dimensions (34X40)</label>
				<input type="file" name="file_upload" id="picture" />
				<div class="main-upload coversrc"><br>				
					
				<br>
				</div>
			</div>
		
			
			<div class="box-header">
              <h3 class="box-title">ტექსტი ქართულად
                <small>(edit text)</small>
              </h3>
            </div>
			<div class="box-body">
              <form>
                    <textarea id="txt_textge" name="editor1" rows="10" cols="80">
                                     
                    </textarea>
              </form>
            </div>	
			<hr>
			<div class="box-header">
              <h3 class="box-title">ტექსტი ინგლისურად
                <small>(edit text)</small>
              </h3>
            </div>
			<div class="box-body">
              <form>
                    <textarea id="txt_texten" name="editor1" rows="10" cols="80">
                                      
                    </textarea>
              </form>
            </div>	
		<br>
	
		
	  <div class="box-body">
		<div class="col-md-1">
			<button id="btn-updateWidget" class="btn btn-block btn-success btn-lg" type="button">Update</button>
		</div>
	  </div>
  </div>	  
</section>
	
  </div>

  
  <script> 

	$( document ).ready(function() {
						
		$("#btn-updateWidget").click(function(){
			
			data = new Object();
			
			if( $("#txt_titlege").val() == '' || $('#txt_titleen').val() == '' )
			{
				alert("შეავსეთ სათაურის ველები."); return false;
			}			
			
			if( typeof $('.coversrc img').attr('src') == 'undefined' )
			{
				alert("ატვირთეთ სურათი"); return false;
			}			
			
			if( CKEDITOR.instances["txt_textge"].getData() == '' && CKEDITOR.instances["txt_texten"].getData() == '')
			{
				alert("შეავსეთ ტექსტები."); return false;
			}
			
			data['titlege'] = $("#txt_titlege").val();
			data['titleen'] = $("#txt_titleen").val();
			data['textge']= CKEDITOR.instances["txt_textge"].getData();
			data['textge']= CKEDITOR.instances["txt_texten"].getData();	
			var imguri = $('.coversrc img').attr('src');
			data['icon'] = imguri.split("/").pop();
			
			$.post(base_url +'/'+ lang + '/admin/saveWidget',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +''+ lang + '/admin/widgets');				
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
			$(".main-upload").html("<img src='"+base_url+"/images/resource/"+response+"' width='34' /><input name='mainImage' type='hidden' value='"+response+"' />");
			$(".uploadify-queue").html("");
		}
	});
		
  });
</script>  

  
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
  <script>
  $(function () {
    CKEDITOR.replace('txt_textge');
    $(".textarea").wysihtml5();
  });
  
   $(function () {
    CKEDITOR.replace('txt_texten');
    $(".textarea").wysihtml5();
  
   });
	
	
</script>
