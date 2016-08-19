<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        მთავარი
        <small>გვერდი</small>
      </h1>
    </section>

    <section class="content">
	
		 <div class="box box-warning">
		 
			<div class="box-header with-border">
              <h3 class="box-title">საიტის ლოგო</h3>
            </div>
			<div class="box-body">
				<label>მთავარი ლოგო(type = .png)</label>
				<input type="file" name="file_upload" id="picture" />
				<input id="logo_id" type="hidden" value="<?php echo $logoes[0]["id"]; ?>">
				<div class="main-upload coversrc"><br>				
					<img src='<?php echo base_url(); ?>images/resource/<?php echo $logoes[0]["mainlogo"]; ?>' width='165px' />
				<br>
				</div>
			</div>
			<hr>
			<div class="box-body">
				<label>ლოგო საიტის ბოლოში(footer-ში) (type = .png)</label>
				<input type="file" name="file_upload" id="logofooter" />
				<input id="logo_id" type="hidden" value="">
				<div class="main-upload-footer logoftsrc"><br>				
					<img src='<?php echo base_url(); ?>images/resource/<?php echo $logoes[0]["footerlogo"]; ?>' width='165px' />
				<br>
				</div>
			</div>
			
			<br>
			 <div class="box-body" style="width:150px">
					<button id="btn-updatelogo" class="btn btn-block btn-success btn-lg" type="button">Update</button>
			  </div>			  
			  <br>
			</div>
		 
		 <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">სამუშაო საათები</h3>
            </div>
			
			<div class="box-body">			
				<div class="form-group">
				  <label>ქართულად</label>
				  <input id="worktime_id" type="hidden" value="<?php echo $worktime[0]["id"];?>">
				  <input id="txt_worktimege" type="text" style="width:400px" class="form-control" placeholder="" value="<?php echo $worktime[0]["worktimege"];?>">
				</div>
			</div>
			
			<div class="box-body">			
				<div class="form-group">
				  <label>ინგლისურად</label>
				  <input id="txt_worktimeen" type="text" style="width:400px" class="form-control" placeholder="" value="<?php echo $worktime[0]["worktimeen"];?>">
				</div>
			</div>
				
			<div class="box-body" style="width:150px">	
				<button id="btn-updateworkingtime" class="btn btn-block btn-success btn-lg" type="button">Update</button>				
				<br>	
			</div>
		</div>
		
		<div class="box box-warning">
		 
			<div class="box-header with-border">
              <h3 class="box-title">მთავარი გვერდის სურათი, სათაური, მოკლე აღწერა/</h3>
            </div>
			<div class="box-body">			
				<div class="form-group">
				  <label>სათაური ქართულად</label>
				  <input id="main_id" type="hidden" value="<?php echo $mainhead[0]["id"];?>">
				  <input id="txt_mtitlege" type="text" style="width:400px" class="form-control" placeholder="" value="<?php echo $mainhead[0]["titlege"];?>">
				</div>
			</div>
			
			<div class="box-body">			
				<div class="form-group">
				  <label>სათაური ინგლისურად</label>
				  <input id="txt_mtitleen" type="text" style="width:400px" class="form-control" placeholder="" value="<?php echo $mainhead[0]["titleen"];?>">
				</div>
			</div>
			
			<div class="box-body">			
				<div class="form-group">
				  <label>მოკლე აღწერა ქართულად</label>
				  <input id="txt_mdiscrge" type="text" style="width:400px" class="form-control" placeholder="" value="<?php echo $mainhead[0]["descriptionge"];?>">
				</div>
			</div>
			
			<div class="box-body">			
				<div class="form-group">
				  <label>მოკლე აღწერა ინგლისურად</label>
				  <input id="txt_mdiscren" type="text" style="width:400px" class="form-control" placeholder="" value="<?php echo $mainhead[0]["descriptionen"];?>">
				</div>
			</div>
			
			<div class="box-body">
				<label>მთავარი სურათი(type = .png)</label>
				<input type="file" name="file_upload" id="main" />
				<input id="logo_id" type="hidden" value="<?php echo $logoes[0]["id"]; ?>">
				<div class="main-upload-header mainsrc"><br>				
					<img src='<?php echo base_url(); ?>images/resource/<?php echo $mainhead[0]["image"]; ?>' width='300px' />
				<br>
				</div>
			</div>
			<br>
			 <div class="box-body" style="width:150px">
					<button id="btn-updatemain" class="btn btn-block btn-success btn-lg" type="button">Update</button>
			  </div>			  
			  <br>
			</div>
	
   
    </section>
  </div>
 


<script type="text/javascript">

	$( document ).ready(function() {
		data = new Object; 
		
		$("#btn-updatelogo").click(function(){
			data = new Object();		
			if( typeof $('.logoftsrc img').attr('src') == 'undefined' || typeof $('.coversrc img').attr('src') == 'undefined')
			{
				alert("ატვირთეთ ლოგოს სურათები"); return false;
			}
			var fimguri = $('.logoftsrc img').attr('src');				
			footerlogo = fimguri.split("/").pop();
			data['footerlogo'] = footerlogo;
			
			var imguri = $('.coversrc img').attr('src');			
			coverfoto = imguri.split("/").pop();			
			data['mainlogo'] = coverfoto;
			data['id'] = $('#logo_id').val();
			
			$.post(base_url +''+ lang + '/admin/changeLogo',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +''+ lang + '/admin');					
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
			});	 
		});
		
		$("#btn-updateworkingtime").click(function(){
			data = new Object();
			var timege = $("#txt_worktimege").val();
			var timeen = $("#txt_worktimeen").val();
			if( timege == '' || timeen == '' )
			{
				alert("შეავსეთ სამუშაო დროები."); return false;
			}
			data["id"] = $("#worktime_id").val();
			data["worktimege"] = timege;
			data["worktimeen"] = timeen;
			$.post(base_url +''+ lang + '/admin/updateWorkTime',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +''+ lang + '/admin');					
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
			});	 
		});
							
		$("#btn-updatemain").click(function(){
			data = new Object();
			var titlege = $("#txt_mtitlege").val();
			var titleen = $("#txt_mtitleen").val();
			var descge = $("#txt_mdiscrge").val();
			var descen = $("#txt_mdiscren").val();
			if( titlege == '' || titlege == '' )
			{
				alert("შეავსეთ სათაურის ველები."); return false;
			}
			if( typeof $('.mainsrc img').attr('src') == 'undefined' )
			{
				alert("ატვირთეთ მთავარი სურათი."); return false;
			}
			data["id"] = $("#main_id").val();
			data["titlege"] = titlege;
			data["titleen"] = titleen;
			data["descriptionge"] = descge;
			data["descriptionen"] = descen;
			
			var mainuri = $('.mainsrc img').attr('src');				
			mainimage = mainuri.split("/").pop();
			data['image'] = mainimage;
			
			$.post(base_url +''+ lang + '/admin/updateMain',data, function(data,status){
				
			})
			.success(function(data){
				$(location).attr('href', base_url +''+ lang + '/admin');					
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
			$(".main-upload").html("<img src='"+base_url+"/images/resource/"+response+"' width='165' /><input name='mainImage' type='hidden' value='"+response+"' />");
			$(".uploadify-queue").html("");
		}
	});
	
	$("#logofooter").uploadify({
		"buttonText": "Upload",
		"swf"      : "<?php echo base_url(); ?>images/resource/uploadify.swf",
		"uploader" : "<?php echo base_url(); ?>images/resource/uploadify.php?gt=1",
		"onUploadSuccess" : function(file, response, data) {
			$(".main-upload-footer").html("<img src='"+base_url+"/images/resource/"+response+"' width='300' /><input name='mainImage' type='hidden' value='"+response+"' />");
			$(".uploadify-queue").html("");
		}
	});
	
	$("#main").uploadify({
		"buttonText": "Upload",
		"swf"      : "<?php echo base_url(); ?>images/resource/uploadify.swf",
		"uploader" : "<?php echo base_url(); ?>images/resource/uploadify.php?gt=1",
		"onUploadSuccess" : function(file, response, data) {
			$(".main-upload-header").html("<img src='"+base_url+"/images/resource/"+response+"' width='165' /><input name='mainImage' type='hidden' value='"+response+"' />");
			$(".uploadify-queue").html("");
		}
	});
	
  });
</script>  
