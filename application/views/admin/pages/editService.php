<div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">სერვისის რედაქტირება</h3>
            </div>
			<?php //print_r($service); die;
				if( isset($service) && !empty($service) )
				{ ?>
            <div class="box-body">
			  
				<div class="form-group">
                  <label>სათაური ქართულად</label>
				  <input id="serviceId" type="hidden" value="<?php echo $service[0]["id"];?>">
                  <input id="txt_titlege" type="text" class="form-control" placeholder="" value="<?php echo $service[0]["titlege"]; ?>" style="width:auto;">
                </div>	
				
				<div class="form-group">
                  <label>სათაური ინგლისურად</label>
                  <input id="txt_titleen" type="text" class="form-control" placeholder="" value="<?php echo $service[0]["titleen"]; ?>" style="width:auto;">
                </div>	
				
				<div class="prcategory">
					<div class="form-group dropdown">				
						<label>კატეგორია</label>
						<select id="category" class="form-control priority" style="display:block;">
							<option value="0">Select room type</option>
							<?php
							if( isset($category) && !empty($category) )
							{
								foreach( $category as $k=>$v )
								{
									echo '<option value="'.$v->id.'">'.$v->catnamege.'/'.$v->catnameen.'</option>';
								}
							}
							?>
						</select>
					</div>
					<div class="col-md-1 addcatagory" style="width:500px;padding-top:5px;">
						<div style="margin-right:5px; float:left"><a class="btn btn-success" href="<?php echo base_url("$language");?>/admin/addServiceCategory"><i class="fa fa-plus-circle"></i> ახლის დამატება</a>
						</div>
						
						<div style="margin-right:5px; float:left">
						<a class="btn btn-warning" href="<?php echo base_url("$language");?>/admin/editServiceCategory"><i class="fa fa-edit"></i>  რედაქტირება</a>
						</div>
						
						<div style="margin-right:5px; float:left">
						<a class="btn btn-danger" href="<?php echo base_url("$language");?>/admin/deleteServiceCategory"><i class="fa fa-remove"></i> წაშლა</a>
						</div>
					</div>	
				</div>
				

	<script type="text/javascript">
		$(document).ready(function() {
			var cat = '<?php if( isset($service[0]["categoryId"]) )echo $service[0]["categoryId"]; else echo "0"; ?>';
			$("#category").val(cat);			
		});
	</script>
				
				<br>
                <div class="form-group">
                  <label>ჩაწერეთ სერვისის ტიპები(გამოყავით თითოეული ტიპი მძიმით!).</label>
                  <input id="txt_servicetype" type="text" class="form-control" placeholder="" value="<?php echo $service[0]["types"]; ?>" style="width:50%;">
                </div>		
			</div>
			
				<br>
				<hr>
			<div class="box-body">
				<label>ატვირთეთ მთავარი სურათი. ზომები(540X359)</label>
				<input type="file" name="file_upload" id="picture" />
				<div class="main-upload coversrc"><br>				
					<img src='<?php echo base_url(); ?>images/resource/<?php echo $service[0]["coverimage"];?>' width='270px' />
				<br>
				</div>
			</div>
				
           <br>
		   <!--
		   <hr>								
			<div class="box-body">
				<label>ატვირთეთ მთავარი სურათი. ზომები(540X359)ზომები(600X450)</label>
				<input type="file" name="file_upload" id="insidepicture" />
				<div class="main-upload insidesrc"><br>				
					
				<br>
				</div>
			</div>
			-->
			<hr>			
			<div class="box-header">
              <h3 class="box-title">სერვისის აღწერა ქართულად
                <small>(edit text)</small>
              </h3>
            </div>
			<div class="box-body pad">
              <form>
                    <textarea id="txt_discriptionge" name="editor1" rows="10" cols="80">
                          <?php echo $service[0]["textge"]; ?>                
                    </textarea>
              </form>
            </div>	
			<hr>
			<div class="box-header">
              <h3 class="box-title">სერვისის აღწერა ინგლისურად
                <small>(edit text)</small>
              </h3>
            </div>
			<div class="box-body pad">
              <form>
                    <textarea id="txt_discriptionen" name="editor1" rows="10" cols="80">
                           <?php echo $service[0]["texten"]; ?>                  
                    </textarea>
              </form>
            </div>	
		
		<br>
		<hr>
	
	  <div class="box-body">
		<div class="col-md-1">
			<button id="btn-updateService" class="btn btn-block btn-success btn-lg" type="button">Update</button>
		</div>
	  </div>	  
	 <?php }?>
  </div>	  
</section>
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <script> 

		$(document).on("click", "#btn-updateService",function(){
		data = new Object();
			data["id"] = $('#serviceId').val();
			if( $("#txt_titlege").val() == '' || $('#txt_titleen').val() == '' )
			{
				alert("შეავსეთ სათაურის ველები!"); return false;
			}
			
			if( $("#category").val() == "0" )
			{
				alert("აირჩიეთ კატეგორია"); return false;
			}
			else
			{
				data['categoryId'] = $("#category").val();
			}
			
			if( $("#txt_servicetype").val() == '' )
			{
				alert("მიუთითეთ სერვისის ტიპები"); return false;
			}
		
			if( typeof $('.coversrc img').attr('src') == 'undefined' )
			{
				//|| typeof $('.insidesrc img').attr('src') == 'undefined'
				alert("ატვირთეთ სურათები"); return false;
			}
			if( CKEDITOR.instances["txt_discriptionge"].getData() == '' && CKEDITOR.instances["txt_discriptionen"].getData() == '')
			{
				alert("შეავსეთ ტექსტები."); return false;
			}	
			
			data['titlege'] = $("#txt_titlege").val();
			data['titleen'] = $("#txt_titleen").val();
			data['types'] = $("#txt_servicetype").val();
			
			var imguri = $('.coversrc img').attr('src');
			data['coverimage'] = imguri.split("/").pop();
			
			//var insideimg = $('.insidesrc img').attr('src');
			//data['insideimage'] = insideimg.split("/").pop();
			
			data['textge']= CKEDITOR.instances["txt_discriptionge"].getData();
			data['texten']= CKEDITOR.instances["txt_discriptionen"].getData();	
			
			
			$.post(base_url +'/'+ lang + '/admin/updateService',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +'/'+ lang + '/admin/services');					
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
