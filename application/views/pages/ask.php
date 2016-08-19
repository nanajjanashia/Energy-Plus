
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1442196527088{padding-top:120px!important;padding-bottom:80px!important;}.vc_custom_1441264630143{padding-top:40px!important;}.vc_custom_1441264630143{padding-top:40px!important;}.vc_custom_1441264630143{padding-top:40px!important;}.vc_custom_1441264630143{padding-top:40px!important;}</style>


<section class="noo-page-heading" style="background-image: url('http://wp.nootheme.com/pearle/carle/wp-content/uploads/2015/09/1.jpg')">
<div class="noo-container">
<h1 class="page-title">FAQS</h1>
</div> 
</section>
<div class="page_fullwidth" role="main">
 
<div class="noo-container-fluid">
<div class="vc_row wpb_row vc_row-fluid vc_custom_1442196527088">
<div class="noo-container">
<div class="noo-row">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="wpb_wrapper">
<div class="vc_tta-container" data-vc-action="collapse">
<div class="vc_general vc_tta vc_tta-tabs vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-left vc_tta-controls-align-left ">

<div class="vc_tta-tabs-container">
<ul class="vc_tta-tabs-list">
	<?php if(isset($category) && !empty($category))
		  {
			$i=1;
			foreach($category as $m=>$n)
			{
				if($i == 1)
				{
					echo '<li class="vc_tta-tab vc_active" data-vc-tab="">
					<a href="#'.$n["classname"].'" data-vc-tabs="" data-vc-container=".vc_tta">
					<span class="vc_tta-title-text">'.$n["catnamege"].'</span>
					</a>
				</li>';
				}
				else
				{
					echo '<li class="vc_tta-tab" data-vc-tab="">
					<a href="#'.$n["classname"].'" data-vc-tabs="" data-vc-container=".vc_tta">
					<span class="vc_tta-title-text">'.$n["catnamege"].'</span>
					</a>
				</li>';
				}
				$i++;
			}
		  }		
	?>
	<!--<li class="vc_tta-tab vc_active" data-vc-tab="">
		<a href="#1441249258173-96ce4ecf-a06f" data-vc-tabs="" data-vc-container=".vc_tta">
		<span class="vc_tta-title-text">Terms and Conditions</span>
		</a>
	</li>
	<li class="vc_tta-tab" data-vc-tab="">
		<a href="#1444709782790-033f9feb-f9de" data-vc-tabs="" data-vc-container=".vc_tta">
		<span class="vc_tta-title-text">Privacy Policy</span></a></li><li class="vc_tta-tab" data-vc-tab="">		
	</li>
	<li class="vc_tta-tab" data-vc-tab="">
		<a href="#1444709931095-7d5ea646-b891" data-vc-tabs="" data-vc-container=".vc_tta">
		<span class="vc_tta-title-text">Buying Guidelines1</span>
		</a>
	</li>
	<li class="vc_tta-tab" data-vc-tab="">
		<a href="#1444709990921-e90ddb2e-01e1" data-vc-tabs="" data-vc-container=".vc_tta">
		<span class="vc_tta-title-text">Customer Support</span>
		</a>
	</li>-->
</ul>
</div>

<div class="vc_tta-panels-container">
<div class="vc_tta-panels">


	<?php if(isset($ask) && !empty($ask))
		  {
			  $k=0;
			  $cls = '';
			foreach($ask["category"] as $m=>$n)
			{
				if($k==0)
				{
					$cls = "vc_active";
				}
				else
				{
					$cls = '';
				}
				echo '<div class="vc_tta-panel '.$cls.'" id="'.$n["classname"].'" 		data-vc-content=".vc_tta-panel-body">
				<div class="vc_tta-panel-heading">
					<h4 class="vc_tta-panel-title">
						<a href="#'.$n["classname"].'" data-vc-accordion="" data-vc-container=".vc_tta-container">
						<span class="vc_tta-title-text">'.$n["catname$language"].'</span>
						</a>
					</h4>
				</div>
				
				<div style="" class="vc_tta-panel-body">
				<div class="wpb_text_column wpb_content_element ">
					<div class="wpb_wrapper">
						<h3>'.$n["catname$language"].'</h3>
					</div>
				</div>';
				//print_r($ask["content"][0]); die;
					foreach($ask["content"][$k] as $w=>$v)
					{
						echo '<div id="'.$n["classname"].'" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
							<div class="vc_toggle_title"><h4>'.$v["title$language"].'</h4><i class="vc_toggle_icon"></i></div>
							<div style="display: none;" class="vc_toggle_content">'
							.$v["text$language"].'
							</div>
						</div>';
					}
				echo '</div></div>';
				$k++;
			}
		  }		
	?>
<!--	
<div class="vc_tta-panel vc_active" id="1441249258173-96ce4ecf-a06f" data-vc-content=".vc_tta-panel-body">
<div class="vc_tta-panel-heading">
	<h4 class="vc_tta-panel-title">
		<a href="#1441249258173-96ce4ecf-a06f" data-vc-accordion="" data-vc-container=".vc_tta-container">
		<span class="vc_tta-title-text">Terms and Conditions</span>
		</a>
	</h4>
</div>

<div style="" class="vc_tta-panel-body">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h3>Termts and Conditions</h3>
		</div>
	</div>
	<div id="1441249314577-34114525-e239" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
		<div class="vc_toggle_title"><h4>General information</h4><i class="vc_toggle_icon"></i></div>
		<div style="display: none;" class="vc_toggle_content"><p>We dispatch 
		from Czech Republic. &nbsp;Most orders are dispatched within 1 to 2 
		working days (usually same or next day). Orders to USA, UK, and AU 
		require 1-14 business days for delivery; rest of the world delivery time
		 may vary. Business Days are Monday to Friday. Weekends and/or holidays 
		are not included is shipment estimations.</p>
		</div>
	</div>
	<div id="1441249323552-2aa5ab55-e841" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
		<div class="vc_toggle_title"><h4>Quality Control</h4><i class="vc_toggle_icon"></i></div>
		<div style="display: none;" class="vc_toggle_content"><p>We dispatch 
		from Czech Republic. &nbsp;Most orders are dispatched within 1 to 2 
		working days (usually same or next day). Orders to USA, UK, and AU 
		require 1-14 business days for delivery; rest of the world delivery time
		 may vary. Business Days are Monday to Friday. Weekends and/or holidays 
		are not included is shipment estimations.</p>
		</div>
	</div>
	<div id="1441249322910-7f024c6f-54a3" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
	<div class="vc_toggle_title"><h4>Shipping</h4><i class="vc_toggle_icon"></i></div>
		<div style="display: none;" class="vc_toggle_content"><p>We dispatch 
		from Czech Republic. &nbsp;Most orders are dispatched within 1 to 2 
		working days (usually same or next day). Orders to USA, UK, and AU 
		require 1-14 business days for delivery; rest of the world delivery time
		 may vary. Business Days are Monday to Friday. Weekends and/or holidays 
		are not included is shipment estimations.</p>
		</div>
	</div>
	<div id="1441264499514-2bfcd8af-014b" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
		<div class="vc_toggle_title"><h4>Warranty</h4><i class="vc_toggle_icon"></i></div>
		<div style="display: none;" class="vc_toggle_content"><p>We dispatch 
		from Czech Republic. &nbsp;Most orders are dispatched within 1 to 2 
		working days (usually same or next day). Orders to USA, UK, and AU 
		require 1-14 business days for delivery; rest of the world delivery time
		 may vary. Business Days are Monday to Friday. Weekends and/or holidays 
		are not included is shipment estimations.</p>
		</div>
	</div>
	<div id="1441264502871-8a51ca8d-bca3" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
		<div class="vc_toggle_title"><h4>Returns policy</h4><i class="vc_toggle_icon"></i></div>
		<div style="display: none;" class="vc_toggle_content"><p>We dispatch 
		from Czech Republic. &nbsp;Most orders are dispatched within 1 to 2 
		working days (usually same or next day). Orders to USA, UK, and AU 
		require 1-14 business days for delivery; rest of the world delivery time
		 may vary. Business Days are Monday to Friday. Weekends and/or holidays 
		are not included is shipment estimations.</p>
		</div>
	</div>
	
</div>
</div>
-->

<!--
<div class="vc_tta-panel" id="1444709782790-033f9feb-f9de" data-vc-content=".vc_tta-panel-body">
	<div class="vc_tta-panel-heading">
		<h4 class="vc_tta-panel-title">
		<a href="#1444709782790-033f9feb-f9de" data-vc-accordion="" data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Privacy Policy</span></a></h4>
	</div>
<div class="vc_tta-panel-body">
	
	<div class="wpb_text_column wpb_content_element">
		<div class="wpb_wrapper">
			<h3>Privacy Policy</h3>
		</div>
	</div>
	<div id="1444709784177-297d0302-e246" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
		<div class="vc_toggle_title">
			<h4>What information do we collect?</h4>
			<i class="vc_toggle_icon"></i>
		</div>
		<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
		&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
		same or next day). Orders to USA, UK, and AU require 1-14 business days 
		for delivery; rest of the world delivery time may vary. Business Days 
		are Monday to Friday. Weekends and/or holidays are not included is 
		shipment estimations.</p>
		</div>
	</div>
	<div id="1444709784373-a3a6c36c-ad6d" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
		<div class="vc_toggle_title">
			<h4>Do we use Cookies?</h4>
			<i class="vc_toggle_icon"></i>
		</div>
		<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
		&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
		same or next day). Orders to USA, UK, and AU require 1-14 business days 
		for delivery; rest of the world delivery time may vary. Business Days 
		are Monday to Friday. Weekends and/or holidays are not included is 
		shipment estimations.</p>
		</div>
	</div>
	<div id="1444709784577-9e5f08a0-a052" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
		<div class="vc_toggle_title">
			<h4>Do we disclose any information to outside parties?</h4>
			<i class="vc_toggle_icon"></i>
		</div>
		<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
		&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
		same or next day). Orders to USA, UK, and AU require 1-14 business days 
		for delivery; rest of the world delivery time may vary. Business Days 
		are Monday to Friday. Weekends and/or holidays are not included is 
		shipment estimations.</p>
		</div>
	</div>
	<div id="1444709784797-8674bbdf-d8cf" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
		<div class="vc_toggle_title">
			<h4>Marketing</h4>
			<i class="vc_toggle_icon"></i>
		</div>
		<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
		&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
		same or next day). Orders to USA, UK, and AU require 1-14 business days 
		for delivery; rest of the world delivery time may vary. Business Days 
		are Monday to Friday. Weekends and/or holidays are not included is 
		shipment estimations.</p>
		</div>
	</div>
	<div id="1444709785013-58095068-14e8" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
	<div class="vc_toggle_title"><h4>Changes to our Privacy Policy</h4><i class="vc_toggle_icon"></i></div>
	<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
	&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
	same or next day). Orders to USA, UK, and AU require 1-14 business days 
	for delivery; rest of the world delivery time may vary. Business Days 
	are Monday to Friday. Weekends and/or holidays are not included is 
	shipment estimations.</p>
	</div>
	</div>
	
</div></div>

-->

<!--
<div class="vc_tta-panel" id="1444709931095-7d5ea646-b891" data-vc-content=".vc_tta-panel-body">
<div class="vc_tta-panel-heading"><h4 class="vc_tta-panel-title">
<a href="#1444709931095-7d5ea646-b891" data-vc-accordion="" data-vc-container=".vc_tta-container">
<span class="vc_tta-title-text">Buying Guidelines</span></a></h4></div>

<div style="" class="vc_tta-panel-body">
	
	<div class="wpb_text_column wpb_content_element">
		<div class="wpb_wrapper">
			<h3>Buying Guidelines</h3>
		</div>
	</div>
	<div id="1444709934389-67de6918-d4e3" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
		<div class="vc_toggle_title">
			<h4>How do I set up automatic payments?</h4>
			<i class="vc_toggle_icon"></i>
		</div>
		<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
		&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
		same or next day). Orders to USA, UK, and AU require 1-14 business days 
		for delivery; rest of the world delivery time may vary. Business Days 
		are Monday to Friday. Weekends and/or holidays are not included is 
		shipment estimations.</p>
		</div>
	</div>
	
<div id="1444709934636-02b73789-539d" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
<div class="vc_toggle_title"><h4>How do I cancel my policy?</h4><i class="vc_toggle_icon"></i></div>
<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
same or next day). Orders to USA, UK, and AU require 1-14 business days 
for delivery; rest of the world delivery time may vary. Business Days 
are Monday to Friday. Weekends and/or holidays are not included is 
shipment estimations.</p>
</div>
</div>

<div id="1444709934890-95a2a599-26e8" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
<div class="vc_toggle_title"><h4>Do I need a commercial or personal policy?</h4><i class="vc_toggle_icon"></i></div>
<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
same or next day). Orders to USA, UK, and AU require 1-14 business days 
for delivery; rest of the world delivery time may vary. Business Days 
are Monday to Friday. Weekends and/or holidays are not included is 
shipment estimations.</p>
</div>
</div>

<div id="1444709935159-0633d447-a236" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
<div class="vc_toggle_title"><h4>How do I report or get information on a claim?</h4><i class="vc_toggle_icon"></i></div>
<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
same or next day). Orders to USA, UK, and AU require 1-14 business days 
for delivery; rest of the world delivery time may vary. Business Days 
are Monday to Friday. Weekends and/or holidays are not included is 
shipment estimations.</p>
</div>
</div>

</div></div>
-->

<!--
<div class="vc_tta-panel" id="1444709990921-e90ddb2e-01e1" data-vc-content=".vc_tta-panel-body">
<div class="vc_tta-panel-heading">
<h4 class="vc_tta-panel-title">
<a href="#1444709990921-e90ddb2e-01e1" data-vc-accordion="" data-vc-container=".vc_tta-container">
<span class="vc_tta-title-text">Customer Support</span></a></h4></div>

<div style="" class="vc_tta-panel-body">


<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
<h3>Customer Support</h3>
</div>
</div>
<div id="1444709995268-5160642a-9c6f" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
<div class="vc_toggle_title"><h4>How do I set up automatic payments?</h4><i class="vc_toggle_icon"></i></div>
<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
same or next day). Orders to USA, UK, and AU require 1-14 business days 
for delivery; rest of the world delivery time may vary. Business Days 
are Monday to Friday. Weekends and/or holidays are not included is 
shipment estimations.</p>
</div>
</div>
<div id="1444709995568-c9bd618c-69a8" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
<div class="vc_toggle_title"><h4>How do I cancel my policy?</h4><i class="vc_toggle_icon"></i></div>
<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
same or next day). Orders to USA, UK, and AU require 1-14 business days 
for delivery; rest of the world delivery time may vary. Business Days 
are Monday to Friday. Weekends and/or holidays are not included is 
shipment estimations.</p>
</div>
</div>
<div id="1444709995862-863531c6-ac00" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
<div class="vc_toggle_title"><h4>Do I need a commercial or personal policy?</h4><i class="vc_toggle_icon"></i></div>
<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
same or next day). Orders to USA, UK, and AU require 1-14 business days 
for delivery; rest of the world delivery time may vary. Business Days 
are Monday to Friday. Weekends and/or holidays are not included is 
shipment estimations.</p>
</div>
</div>
<div id="1444709996169-965fcfb9-00dc" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
<div class="vc_toggle_title"><h4>How do I report or get information on a claim?</h4><i class="vc_toggle_icon"></i></div>
<div class="vc_toggle_content"><p>We dispatch from Czech Republic. 
&nbsp;Most orders are dispatched within 1 to 2 working days (usually 
same or next day). Orders to USA, UK, and AU require 1-14 business days 
for delivery; rest of the world delivery time may vary. Business Days 
are Monday to Friday. Weekends and/or holidays are not included is 
shipment estimations.</p>
</div>
</div>
</div></div>

-->

</div></div></div></div></div></div></div></div></div></div>

<div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"> 


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


</div></div></div></div>
 
</div> 

<script type='text/javascript' src='<?php echo base_url();?>js/vc-accordion.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>js/vc-tabs.js'></script>

	
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