
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  

	<section class="content">
		<div class="row">
        <div class="col-xs-12">
          <div class="box">
			  <div class="box-header with-border">
              <h3 class="box-title">კონტაქტების გვერდის რედაქტირება</h3>
            </div>
			
            <div class="box-body">
			
				<?php  if( isset( $contact ) && !empty( $contact ) ){ ?>
										
                <div class="form-group">
                  <label>სათაური ქართულად</label>
                  <input id="txt_titlege" type="text" class="form-control" placeholder="" value="<?php echo $contact[0]["titlege"]; ?>">
				  <input id="txt_id" type="hidden" value="<?php echo $contact[0]["id"]; ?>" >
                </div>
				
				<div class="form-group">
                  <label>სათაური ინგლისურად</label>
                  <input id="txt_titleen" type="text" class="form-control" placeholder="" value="<?php echo $contact[0]["titleen"]; ?>">
                </div>
				
				<div class="form-group">
                  <label>ტექსტი ქართულად</label>
                  <input id="txt_textge" type="text" class="form-control" placeholder="" value="<?php echo $contact[0]["textge"]; ?>">
                </div>
				
				<div class="form-group">
                  <label>ტექსტი ინგლისურად</label>
                  <input id="txt_texten" type="text" class="form-control" placeholder="" value="<?php echo $contact[0]["texten"]; ?>">
                </div>
												
				<div class="form-group">
                  <label>მისამართი ქართულად</label>
                  <input id="txt_addressge" type="text" class="form-control" placeholder="" value="<?php echo $contact[0]["addressge"]; ?>">
                </div>
				
				<div class="form-group">
                  <label>მისამართი ინგლისურად</label>
                  <input id="txt_addressen" type="text" class="form-control" placeholder="" value="<?php echo $contact[0]["addressen"]; ?>">
                </div>
				
				<div class="form-group">
                  <label>ტელეფონი</label>
                  <input id="txt_phone" type="text" class="form-control" placeholder="" value="<?php echo $contact[0]["phone"]; ?>">
                </div>
				          
				<div class="form-group">
                  <label>ელ. ფოსტა</label>
                  <input id="txt_email" type="text" class="form-control" placeholder="" value="<?php echo $contact[0]["email"]; ?>">
                </div>
				
				<div class="form-group">
                  <label>საიტის მისამართი</label>
                  <input id="txt_siteaddress" type="text" class="form-control" placeholder="" value="<?php echo $contact[0]["siteaddress"]; ?>">
                </div>
				
				<div class="form-group">
				  <label>ჩასვით რუკა. მხოლოდ src link-ი.</label>
				  <input id="txt_map" type="text" class="form-control" placeholder="" value="<?php echo $contact[0]["map"]; ?>">
				 </div>
				
				<button id="btn-contact" class="btn btn-success">Update Contact</button>
			</div>				
					
			<?php	}?>
			</div>
			
			</div>
			
		</div>
	  </div>
	</section>	

  </div>
  <!-- /.content-wrapper -->
  
  <script> 
  
	$( document ).ready(function() {
		
		var data = new Object();
			
			$("#btn-contact").click(function(){
			
			if( $("#txt_titlege").val() == '' || $("#txt_titleen").val() == '' || $("#textge").val() == '' ||  $("#texten").val() == '' || $("#txt_addressge").val() == '' || $("#txt_addressen").val() == '' || $("#txt_phone").val() == '' || $("#txt_email").val() == '' || $("#txt_map").val() == '' || $("#txt_siteaddress").val() == '' )
			{
				alert("შეავსეთ ყველა ველი"); return false;
			}
			
			data['id']=$("#txt_id").val();
			data['titlege']=$("#txt_titlege").val();
			data['titleen']=$("#txt_titleen").val();
			data['textge']=$("#txt_textge").val();
			data['texten']=$("#txt_textge").val();			
			data['addressge']=$("#txt_addressge").val();
			data['addressen']=$("#txt_addressen").val();			
			data['phone']=$("#txt_phone").val();
			data['email']=$("#txt_email").val();
			data['map']=$("#txt_map").val();
			data['siteaddress']=$("#txt_siteaddress").val();
			
				$.post(base_url+'/'+lang+'/admin/updateContact',data, function(data,status){
					
				})				
				 .done(function(r){
					$(location).attr('href', base_url +''+ lang + '/admin/contact');
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
  


