
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
  <section class="content">

	 <div class="box box-warning">
	 
	 
            <div class="box-header with-border">
              <h3 class="box-title">პროდუქციის დამატება</h3>
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
				
				<div class="prcategory">
					<div class="form-group dropdown">				
						<label>აირჩიეთ მთავარი კატეგორია</label>
						<select id="category" class="form-control priority" style="display:block;">
							<option value="0">Select room type</option>
							<?php
							if( isset($maincategory) && !empty($maincategory) )
							{
								foreach( $maincategory as $k=>$v )
								{
									echo '<option value="'.$v->id.'">'.$v->namege.'/'.$v->nameen.'</option>';
								}
							}
							?>
						</select>
					</div>					
					<div class="col-md-1 addcatagory" style="width:500px;padding-top:5px;">
						<div style="margin-right:5px; float:left"><a class="btn btn-success" href="<?php echo base_url("$language");?>/admin/addMainCategory"><i class="fa fa-plus-circle"></i> ახლის დამატება</a>
						</div>
						
						<div style="margin-right:5px; float:left">
						<a class="btn btn-warning" href="<?php echo base_url("$language");?>/admin/editMainCategory"><i class="fa fa-edit"></i>  რედაქტირება</a>
						</div>
						
						<div style="margin-right:5px; float:left">
						<a class="btn btn-danger" href="<?php echo base_url("$language");?>/admin/editMainCategory"><i class="fa fa-remove"></i> წაშლა</a>
						</div>
					</div>	
				</div>
				
				<div class="prcategory">
					<div class="form-group dropdown">				
						<label>აირჩიეთ ქვეკატეგორია</label>
						<select id="subcategory" class="form-control priority" style="display:block;">
							<option value="0">აირჩიეთ</option>
							<?php
							if( isset($subcategory) && !empty($subcategory) )
							{
								foreach( $subcategory as $k=>$v )
								{
									echo '<option value="'.$v->id.'">'.$v->namege.'/'.$v->nameen.'</option>';
								}
							}
							?>
						</select>
					</div>
					<div class="col-md-1 addcatagory" style="width:500px;padding-top:5px;">
						<div style="margin-right:5px; float:left"><a class="btn btn-success" href="<?php echo base_url("$language");?>/admin/addSubCategory"><i class="fa fa-plus-circle"></i> ახლის დამატება</a>
						</div>
						
						<div style="margin-right:5px; float:left">
						<a class="btn btn-warning" href="<?php echo base_url("$language");?>/admin/editSubCategory"><i class="fa fa-edit"></i>  რედაქტირება</a>
						</div>
						
						<div style="margin-right:5px; float:left">
						<a class="btn btn-danger" href="<?php echo base_url("$language");?>/admin/editSubCategory"><i class="fa fa-remove"></i> წაშლა</a>
						</div>
					</div>
					
				</div>
				
				
                <div class="form-group">
                  <label>ფასი</label>
                  <input id="txt_price" type="text" class="form-control" placeholder="" value="" style="width:auto;">
                </div>
				
				<div class="form-group">
                  <label>ფერი(ფერები) ქართულად</label>
                  <input id="txt_colorge" type="text" class="form-control" placeholder="" value="" style="width:auto;">
                </div>	
				
				<div class="form-group">
                  <label>ფერი(ფერები) ინგლისურად</label>
                  <input id="txt_coloren" type="text" class="form-control" placeholder="" value="" style="width:auto;">
                </div>	
				
				<div class="form-group">
                  <label>ზომა(ზომები)</label>
                  <input id="txt_size" type="text" class="form-control" placeholder="" value="" style="width:auto;">
                </div>	
			</div>
			
				<br>
				<hr>
			<div class="box-body">
				<label>ატვირთეთ მთავარი სურათი. ზომები(270X350)</label>
				<input type="file" name="file_upload" id="picture" />
				<div class="main-upload coversrc"><br>				
					
				<br>
				</div>
			</div>
				
           <br>
		   <hr>		
			
			<div class="box-body">
				<label>ატვირთეთ შიდა სურათები. ზომები(1024X683) სასურველია.</label>
				<input type="file" name="file_upload" id="bigImage" />
				<div class="main-upload-big bigsrc"><br>				
									
				<br>
				</div>
			</div>
			
			<hr>
			<div class="box-header">
              <h3 class="box-title">პროდუქციის აღწერა ქართულად
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
              <h3 class="box-title">პროდუქციის აღწერა ინგლისურად
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
			<button id="btn-addproduct" class="btn btn-block btn-success btn-lg" type="button">Add</button>
		</div>
	  </div>
  </div>	  
</section>
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <script> 

		$(document).on("click", "#btn-addproduct",function(){
		data = new Object();
	
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
			
			if( $("#subcategory").val() !== "0" )
			{
				data['categoryId'] = $("#subcategory").val();
			}
			
			if( $("#txt_price").val() == '' || isNaN($('#txt_price').val()) )
			{
				alert("მიუთითეთ ფასი"); return false;
			}
			
			if( $("#txt_colorge").val() == '' || data['coloren'] == '' || $("#txt_size").val() == '' )
			{
				alert("შეავსეთ ყველა ველი"); return false;
			}
		
			if( typeof $('.coversrc img').attr('src') == 'undefined' || $("[name='bigimg']").serialize() == '' )
			{
				alert("ატვირთეთ სურათები"); return false;
			}
			if( CKEDITOR.instances["txt_discriptionge"].getData() == '' && CKEDITOR.instances["txt_discriptionen"].getData() == '')
			{
				alert("შეავსეთ ტექსტები."); return false;
			}	
			
			data['titlege'] = $("#txt_titlege").val();
			data['titleen'] = $("#txt_titleen").val();
			data['price'] = $("#txt_price").val();
			data['colorge'] = $("#txt_colorge").val();
			data['coloren'] = $("#txt_coloren").val();
			data['size'] = $("#txt_size").val();
			
			var imguri = $('.coversrc img').attr('src');
			data['coverimage'] = imguri.split("/").pop();
			
			
			data["bigimages"] = $("[name='bigimg']").serialize();
			
			data['discriptionge']= CKEDITOR.instances["txt_discriptionge"].getData();
			data['discriptionen']= CKEDITOR.instances["txt_discriptionen"].getData();	
				
			
			$.post(base_url +'/'+ lang + '/admin/saveProduct',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +'/'+ lang + '/admin/products');					
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
	
	
	$("#bigImage").uploadify({
		"buttonText": "Upload",
		"swf"      : "<?php echo base_url(); ?>images/resource/uploadify.swf",
		"uploader" : "<?php echo base_url(); ?>images/resource/uploadify.php?gt=1",
		"onUploadSuccess" : function(file, response, data) {
			$(".main-upload-big").append("<div class='bigImg'><img src='"+base_url+"/images/resource/"+response+"' width='370px' /><input name='bigimg' type='hidden' value='"+response+"' /><span style='width:370px;' class='btn btn-block btn-success btn-xs imgDelete'>delete</span></div>");
			$(".uploadify-queue").html("");
		}
	});
	
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
