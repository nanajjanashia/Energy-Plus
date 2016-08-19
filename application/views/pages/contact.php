
<?php 
	if( isset($contact) && !empty($contact) ){

?>
<div class="page_fullwidth" role="main">
 
<div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12">

<div class="wpb_wrapper">

<div class="google-map">
<div id="googleMap" style="height: 700px; position: relative; background-color: rgb(229, 227, 223); overflow: hidden;">

<iframe src="<?php echo $contact[0]["map"]; ?>" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	
</div>
</div>  
</div></div></div></div>

<div class="noo-container-fluid">
<div class="vc_row wpb_row vc_row-fluid vc_custom_1444724035985">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="wpb_wrapper"> 
<div class="noo-customform">
<div class="noo-container">
<div class="book-form">
<div class="book-content-style2">
<h2 class="book-title">drop your message</h2>
<div role="form" class="wpcf7" id="wpcf7-f981-p972-o1" dir="ltr" lang="en-US">
<div class="screen-reader-response"></div>
<form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
	<div style="display: none;">
		<input name="_wpcf7" value="981" type="hidden">
		<input name="_wpcf7_version" value="4.3.1" type="hidden">
		<input name="_wpcf7_locale" value="en_US" type="hidden">
		<input name="_wpcf7_unit_tag" value="wpcf7-f981-p972-o1" type="hidden">
		<input name="_wpnonce" value="6ac10241d4" type="hidden">
	</div>
<div class="noo-form">
	<div class="noo-row">
		<div class="noo-md-4">
			<span class="wpcf7-form-control-wrap carle-name">
			<input id="username" name="carle-name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" type="text"></span>
		</div>
		<div class="noo-md-4">
			<span class="wpcf7-form-control-wrap carle-email">
			<input id="useremail" name="carle-email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" type="email"></span>
		</div>
		<div class="noo-md-4">
			<span class="wpcf7-form-control-wrap carle-phone">
			<input id="phone" name="carle-phone" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone number"  type="text"></span>
		</div>
	</div>
	<div class="noo-contact-content">
		<span class="wpcf7-form-control-wrap description">
		<textarea id="text" name="description" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span>
	</div>
	<div class="book-form-submit">
	<input id="sendemail" value="send mail" class="wpcf7-form-control wpcf7-submit" type="submit">
	<!--
	<img style="visibility: hidden;" alt="Sending ..." src="Contact%20_%20Carle_files/ajax-loader.gif" class="ajax-loader">-->
	</div>
</div>
<div class="wpcf7-response-output wpcf7-display-none"  role="alert">

</div>
</form>

</div> 
</div>
</div>
</div>
</div>
</div></div></div></div>
<br><br><br><br>
<div class="noo-container-fluid">

<div class="vc_row wpb_row vc_row-fluid vc_custom_1442890668615">
<div class="noo-container">
<div class="noo-row">

<div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<h4 style="text-align: center;">
<span style="color: #000000;"><?php echo $contact[0]["title$language"]; ?></span></h4>

<div style="text-align: center; width: 60%; margin: auto;">
	<?php echo $contact[0]["text$language"]; ?>
</div>

</div>
</div>
</div></div></div></div></div></div>

<br><br><br>
<div class="noo-container-fluid">

<div class="vc_row wpb_row vc_row-fluid vc_custom_1442890615379">
<div class="noo-container">
<div class="noo-row">

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4 vc_custom_1442890436507">
	<div class="wpb_wrapper">
		<div class="noo-information infor-left">
			<i class="fa fa-phone"></i> <strong>Online support 24/7</strong>
			<span><?php echo $contact[0]["phone"]; ?></span> 
		</div>
	</div>
</div>

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4 vc_custom_1442890474179">
	<div class="wpb_wrapper">
		<div class="noo-information infor-left">
			<i class="fa fa-envelope"></i> <strong>Get Free</strong> 
			<span><?php echo $contact[0]["address$language"]; ?></span> 
		</div>
	</div>
</div>

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4 vc_custom_1442890467930">
	<div class="wpb_wrapper">
		<div class="noo-information infor-left">
			<i class="fa fa-gift"></i> <strong>Save Your Money With</strong> 
			<span><?php echo $contact[0]["email"]; ?></span> 
		</div>
	</div>
</div>

</div>
</div>
</div>
</div>


<br><br><br><br>


<div class="noo-container-fluid">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="wpb_wrapper"> 

<div class="noo-newsltter" style="background-image: url('http://wp.nootheme.com/pearle/carle/wp-content/uploads/2015/08/bg_subscribe.jpg')">
	<div class="noo-container">
	<div class="noo-row">
		<div class="noo-md-4">
			<h3 class="title-newsltter">ახალი ამბები</h3>
			<p class="subscribe-text">გამოიწერეთ ახალი ამბები ელ. ფოსტაზე</p>
		</div>
		<div class="noo-md-8">
			<form class="noo-newsltter-form mc-subscribe-form">
				<label id="subscribe-msg" class="noo-message" role="alert"></label>
				<input id="email" name="mc_email" class="mc-email" placeholder="ჩაწერეთ პირადი ელ. ფოსტის მისამართი" type="email">
				<button id="subscribe">გამოწერა</button>				
			</form>
		</div>
	</div>
	</div> 
</div>


</div>
</div>
</div>
</div>
 
</div> 
	<?php } ?>
	
<script type="text/javascript">
	$( document ).ready( function(){
		
		function validateEmail(email) {
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		}
		
		
		$( "#sendemail" ).click(function(e){
			e.preventDefault();
		   data = new Object();
		   $(".wpcf7-response-output").css("display","none");
			
		  var useremail = $('#useremail').val();
		  var username = $('#username').val();
		  var phone = $('#phone').val();
		  var text = $('#text').val();
		  if( useremail == "" ||  username == "" || phone == "" || text == "")
		  {
			  $(".wpcf7-response-output").css("display","block");			  
			  $(".wpcf7-response-output").addClass("wpcf7-mail-sent-ng");
			  $(".wpcf7-response-output").html("ყველა ველის შევსება სავალდებულოა.");
			  return false;
		  }	
		
		  if( !(phone.match(/^\d+$/)) ) {
			  $(".wpcf7-response-output").css("display","block");			  
			  $(".wpcf7-response-output").addClass("wpcf7-mail-sent-ng");
			  $(".wpcf7-response-output").html("ტელეფონის ნომერი არასწორია.");
			  return false;
		  }
		  
		  var validemail = validateEmail(useremail);
		  console.log(validemail);
		  if(validemail)
		  {
				
				data["useremail"] = useremail;
				data["username"] = username;
				data["phone"] = phone;
				data["text"] = text;
				$.post(base_url +''+ lang + '/contact/sentemail',data, function(data,status){
				})
				.success(function(data){
					$(".wpcf7-response-output").css("display","block");	 
					if(data)
					{
						$(".wpcf7-response-output").addClass("wpcf7-mail-sent-success");
						$(".wpcf7-response-output").html("მეილი გაგზავნილია.");
					}
					else
					{
						$(".wpcf7-response-output").addClass("wpcf7-mail-sent-ng");
						$(".wpcf7-response-output").html("ტელეფონის ნომერი არასწორია.");
					}
					$('#subscribe-msg').html("მეილი არ გაიგზავნა. სცადეთ თავიდან.");
				})
				.fail(function(){
					console.log("ERROR");
					return false;
				});	
		  }
		  else
		  {
			  $(".wpcf7-response-output").css("display","block");			  
			  $(".wpcf7-response-output").addClass("wpcf7-mail-sent-ng");
			  $(".wpcf7-response-output").html("ელ. ფოსტა არასწორია.");
			  return false;
		  }
		});
		
		
		$( "#subscribe" ).click(function(e){
			//e.preventDefault();
		   data = new Object();
		  var email = $('#email').val();
		  var t = validateEmail(email);
		  if(t)
		  {
				e.preventDefault();
				data["email"] = email;
				$.post(base_url +''+ lang + '/home/subscribe',data, function(data,status){
				})
				.success(function(data){
					$('#subscribe-msg').html("თქვენი მეილი დამახსოვრებულია");
				})
				.fail(function(){
					console.log("ERROR");
					return false;
				});	
		  }
		});
	});
</script>