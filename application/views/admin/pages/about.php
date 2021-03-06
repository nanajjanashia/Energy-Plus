
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	   
  <section class="content">

	<?php if( isset($about) && !empty( $about )){ ?>
	
	 <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">About page</h3>
            </div>
			
			<div class="form-group">
			  <label>სათაური ქართულად</label>
			  <input id="txt_titlege" type="text" class="form-control" placeholder="" value="<?php echo $about[0]->titlege; ?>">
			</div>
			
			<div class="form-group">
			  <label>სათაური ინგლისურად</label>
			  <input id="txt_titleen" type="text" class="form-control" placeholder="" value="<?php echo $about[0]->titleen; ?>">
			</div>				
				
			<div class="box-body">
				<label>ატვირთეთ სურათი</label>
				<input type="file" name="file_upload" id="picture" />
				<input id="about_id" type="hidden" value="<?php echo $about[0]->id; ?>"/> 
				<div class="main-upload imgsrc">	
					<img src='<?php echo base_url(); ?>images/resource/<?php echo $about[0]->image; ?>' width='190' />
				</div>
			</div>
			
			<div class="box-header">
              <h3 class="box-title">ტექსტი ქართულად
                <small>(edit text)</small>
              </h3>
            </div>
            <div class="box-body pad">
              <form>
                    <textarea id="txt_aboutge" name="editor1" rows="10" cols="80">
                                           <?php echo $about[0]->textge; ?>
                    </textarea>
              </form>
            </div>	
			
			<div class="box-header">
              <h3 class="box-title">ტექსტი ინგლისურად
                <small>(edit text)</small>
              </h3>
            </div>
            <div class="box-body pad">
              <form>
                    <textarea id="txt_abouten" name="editor1" rows="10" cols="80">
                                           <?php echo $about[0]->texten; ?>
                    </textarea>
              </form>
            </div>	
					
	  </div>
	 
	  <div class="row">
		<div class="col-md-1">
			<button id="btn-update" class="btn btn-block btn-success btn-lg" type="button">Update</button>
		</div>
	  </div>
	  
	<?php }?>
	</section>
	
  </div>
  <!-- /.content-wrapper -->
  
  <script> 

  
	$( document ).ready(function() {
		
		var data = new Object();
			
		$("#btn-update").click(function(){
			
			if( $("#txt_titlege").val() == '' || $("#txt_titleen").val() == '' )
			{
				alert("შეავსეთ სათაურის ველები");
			}
			if( typeof $('.imgsrc img').attr('src') == 'undefined' )
			{
				alert("ატვირთეთ სურათი."); return false;
			}
			if( CKEDITOR.instances["txt_aboutge"].getData() == '' || CKEDITOR.instances["txt_abouten"].getData() == '' )
			{
				alert("შეავსეთ ტექსტები"); return false;
			}
			var imguri = $('.imgsrc img').attr('src');			
			data['image']=imguri.split("/").pop();
			
			data['id']=$("#about_id").val();			
			data['titlege']=$("#txt_titlege").val();
			data['titleen']=$("#txt_titleen").val();
			data['textge']= CKEDITOR.instances["txt_aboutge"].getData();
			data['texten']= CKEDITOR.instances["txt_abouten"].getData();
				$.post(base_url+'/'+lang+'/admin/updateAbout',data, function(data,status){
					
				})				
				 .done(function(r){
					$(location).attr('href', base_url +''+ lang + '/admin/about');
					
				 return false;
				 })
				 .fail(function(){
					console.log("ERROR");
					return false;
				 })
				 .always(function(){
					return false;
				 })
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
                $(".main-upload").html("<img src='"+base_url+"/images/resource/"+response+"' width='190' /><input name='mainImage' type='hidden' value='"+response+"' />");
                $(".uploadify-queue").html("");
            }
        });
  });
</script>  

<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
  <script>
  $(function () {
    CKEDITOR.replace('txt_aboutge');
    $(".textarea").wysihtml5();
  });
  
   $(function () {
    CKEDITOR.replace('txt_abouten');
    $(".textarea").wysihtml5();
  });
  
</script>
  



