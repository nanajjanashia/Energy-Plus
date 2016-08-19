
<div class="page_fullwidth" role="main">

<div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"> <section class="noo-shortcode-slider">
<ul class="noo-news-slider">
<li>
<div class="noo-news-item" style="background-image: url('<?php echo base_url();?>/images/resource/<?php if(isset($main)) echo $main[0]["image"]; ?>')">
<div class="noo-container">
<span class="cat">
<a href="#" rel="category"><?php if(isset($main)) echo $main[0]["title$language"];?></a> </span>
<h3><a href="#"><?php if(isset($main[0]["description$language"])) echo $main[0]["description$language"];?></a></h3>


<?php   if(isset($lastservice) && !empty($lastservice)) 
		{
			$text = strip_tags($lastservice[0]["text$language"], '<br>');
			$text = substr($text,0,200);
			//print_r($text); die;
			echo "<p>".$text."...</p><br>";
			echo '<a class="post-more" href="'.base_url("$language").'/services/detail/'.$lastservice[0]["id"].'">იხილეთ მეტი</a>';
		}	
?>


</div>
<div class="left">
<svg height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
<path d="M0 0 L100 100 L0 100" stroke-width="0"></path>
</svg>
<div class="inner1">
<img src="wp-content/plugins/noo-carle-library/assets/images/line-svg.png" alt="line svg">
</div>
</div>
<div class="right">
<svg height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
<path d="M100 0 L100 100 L0 100" stroke-width="0"></path>
</svg>
<div class="inner2">
<img src="wp-content/plugins/noo-carle-library/assets/images/2.png" alt="line svg">
</div>
</div>
</div>
</li>
</ul>


<div class="noo-container book-wrap">
<div class="book-free">
<div class="book-content">
	<h2>დაგეგმე წინასწარი ვიზიტი</h2>
<div role="form" class="wpcf7" id="wpcf7-f4-p340-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="" method="post" class="wpcf7-form" novalidate="novalidate">
	<div style="display: none;">
		<input type="hidden" name="_wpcf7" value="4"/>
		<input type="hidden" name="_wpcf7_version" value="4.3.1"/>
		<input type="hidden" name="_wpcf7_locale" value="en_US"/>
		<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-p340-o1"/>
		<input type="hidden" name="_wpnonce" value="43d22f4596"/>
	</div>
	
	<p><span class="wpcf7-form-control-wrap your-name">
	<input type="text" id="username" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="სახელი და გვარი"/></span></p>
		
	<p><span class="wpcf7-form-control-wrap your-email">
	<input type="email" id="userphone" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="ტელ. ნომერი"/>
	</span></p>	
	
	<!--<p><span class="wpcf7-form-control-wrap your-email">
	<input type="email" id="useremail" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="ელ. ფოსტა"/>
	</span></p>-->
	
	<p><span class="wpcf7-form-control-wrap car">
	<select id="servicecats" name="car" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
		<option value="0">აირჩიეთ კატეგორია</option>
		<?php if( isset($servicecats) && !empty($servicecats) )
		{
			foreach($servicecats as $n=>$p)
			{
				echo '<option value="'.$p["id"].'">'.$p["catname$language"].'</option>';
			}
		}
		?>
	</select>
	</span></p>
	
	<p><span class="wpcf7-form-control-wrap car">
	<select id="carbrands" name="car" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
		<option value="0">აირჩიეთ ბრენდი</option>
		<?php if( isset($carbrands) && !empty($carbrands) )
		{
			foreach($carbrands as $n=>$p)
			{
				echo '<option value="'.$p["make"].'">'.$p["make"].'</option>';
			}
		}
		?>
	</select>
	</span></p>
	
	<p class="carmodelsdrops"><span class="wpcf7-form-control-wrap car">
	<select id="carmodels" name="car" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
	
	</select>
	</span></p>
	
	

	<p><span class="wpcf7-form-control-wrap your-message">
	<textarea id="text" name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="მომსახურების აღწერა"></textarea></span></p>

	<p><input id="sendmail" type="submit" value="გაგზავნა" class="wpcf7-form-control wpcf7-submit"/></p>

	<div class="wpcf7-response-output wpcf7-display-none" style="display:none"></div>
<!--	<div class="wpcf7-response-output wpcf7-display-none wpcf7-validation-errors" style="display: block;" role="alert">Validation errors occurred. Please confirm the fields and submit it again.</div>
	-->
</form>
</div> 
</div>
</div>
</div>
</section>
</div></div></div></div>



<script type="text/javascript">
	$( document ).ready( function(){
		 data = new Object();
		 ajaxreqvest = false;
		$(".carmodelsdrops").css("display","none");
		$("#carbrands").change(function() { 
			$(".carmodelsdrops").css("display","none");
			if( $(this).val() != "0" )
			{
				data["brand"] = $(this).val(); //$('#carbrands option:selected').text();
				
				if( ajaxreqvest )
					ajaxreqvest.abort();
		
				ajaxreqvest = $.post(base_url +''+ lang + '/home/getModels',data, function(data,status){
				})
				.success(function(data){
					//alert(data); return false;
					if(data !="error")
					{
						$(".carmodelsdrops").css("display","block");
						$("#carmodels").html(data);
					}
				})
				.fail(function(){
					console.log("ERROR");
					return false;
				});	
			}
				
		 });
		 
		 
		
		$(".wpcf7-response-output").css("display","none");
		$( "#sendmail" ).click(function(e){
			//e.preventDefault();
		  data = new Object();
		  var username = $("#username").val();
		  var phone = $("#userphone").val();
		  
		 // var useremail = $('#useremail').val();
		  var text = $("textarea#text").val();
		  $(".wpcf7-response-output").css("display","none");
		  if(username == "")
		  {
			  $(".wpcf7-response-output").css("display","block");
			  $(".wpcf7-response-output").addClass("wpcf7-validation-errors");
			  $(".wpcf7-response-output").html("მიუთითეთ სახელი და გვარი.");
			  return false;
		  }
		  if(phone == "")
		  {
			  $(".wpcf7-response-output").css("display","block");
			  $(".wpcf7-response-output").addClass("wpcf7-validation-errors");
			  $(".wpcf7-response-output").html("მიუთითეთ ტელეფონი.");
			  return false;
		  }
		  		  
		   if( !(phone.match(/^\d+$/)) ) {
			  $(".wpcf7-response-output").css("display","block");
			  $(".wpcf7-response-output").addClass("wpcf7-validation-errors");
			  $(".wpcf7-response-output").html("ტელეფონის ნომერი არასწორია.");
			  return false;
		  }		
		  
		/*   if(useremail == "")
		  {
			  $(".wpcf7-response-output").css("display","block");
			  $(".wpcf7-response-output").addClass("wpcf7-validation-errors");
			  $(".wpcf7-response-output").html("მიუთითეთ ელ. ფოსტა.");
			  return false;
		  }
		*/
		 if( $("#servicecats").val() == "0" )		 {
			  $(".wpcf7-response-output").css("display","block");
			  $(".wpcf7-response-output").addClass("wpcf7-validation-errors");
			  $(".wpcf7-response-output").html("აირჩიეთ სერვისის კატეგორია.");
			  return false;
		 }
		 
		  if( $("#carbrands").val() == "0" )
		 {
			  $(".wpcf7-response-output").css("display","block");
			  $(".wpcf7-response-output").addClass("wpcf7-validation-errors");
			  $(".wpcf7-response-output").html("აირჩიეთ ბრენდი.");
			  return false;
		 }
		  
		 if( text == "" )
		 {
			  $(".wpcf7-response-output").css("display","block");
			  $(".wpcf7-response-output").addClass("wpcf7-validation-errors");
			  $(".wpcf7-response-output").html("შეავსეთ ტექსტი.");
			  return false;
		 }
		  		  
				e.preventDefault();
				
				if( $("#carmodels").val() != null )
				{
					if( $("#carmodels").val() == "0")
					{
						$(".wpcf7-response-output").css("display","block");
						$(".wpcf7-response-output").addClass("wpcf7-validation-errors");
						$(".wpcf7-response-output").html("აირჩიეთ მოდელი.");
						return false;
					}
					data["model"] = $("#carmodels").val();
				}
				data["username"] = username;
				data["phone"] = phone;
				data["servicecat"] = $( "#servicecats option:selected" ).text();
				data["brand"] = $("#carbrands").val();				
				data["text"] = text;
				console.log(data); 
				$.post(base_url +''+ lang + '/home/sendEmail',data, function(data,status){
				})
				.success(function(data){
					 $(".wpcf7-response-output").css("display","block");
					 $(".wpcf7-response-output").addClass("wpcf7-validation-success");
					 $(".wpcf7-response-output").html("თქვენი მეილი წარმატებით გაიგზავნა.");
				})
				.fail(function(){
					console.log("ERROR");
					return false;
				});	
		 
		});		
		
	});
</script>



<div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid vc_custom_1442897359264"><div class="responsive_top_70x wpb_column vc_column_container vc_col-sm-6 vc_custom_1442897147457"><div class="wpb_wrapper">
<div class="wpb_single_image wpb_content_element vc_align_right">
<figure class="wpb_wrapper vc_figure">
<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="686" height="442" src="wp-content/uploads/2015/08/services.png" class="vc_single_image-img attachment-full" alt="services"/></div>
</figure>
</div>
</div></div><div class="custom-width-left35 wpb_column vc_column_container vc_col-sm-6 vc_custom_1442897363649"><div class="wpb_wrapper"> <div class="title-left">
<h2 class="noo-title ">
<span class="noo-title-number">
<span class="frist">0</span><span class="last">1</span> </span>
<strong>ENERGY PLUS ნიშნავს:</strong>
</h2>
</div>

<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1439803501434">

<?php 

	if(isset($widgets) && !empty($widgets) )
	{
		foreach( $widgets as $m=>$n )
		{
			echo '<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
					<div class="wpb_wrapper"> <div class="whychooseus choose_style1">
					<div class="choose-icon-wrap">
					<div class="choose-icon">
					<div class="background-line">
					<img width="38" height="38" src="'.base_url().'/images/resource/'.$n["icon"].'" class="icon_first" alt="whychooseus4"/> <div class="background-line-bottom"></div>
					</div>
					</div>
					</div>
					<div class="choose-content">
					<h5>'.$n["title$language"].'</h5>
					'.$n["text$language"].'
					</div>
					</div>
					</div>
				</div>';
		}
	}
?>

</div>


</div>
</div>
</div>
</div>

<div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"> <section class="your-money yourmoney-one" style="background-image: url('wp-content/uploads/2015/08/yourmoney.jpg')">
<div class="noo-container">
<div class="money-icon">
<span>
<img width="70" height="72" src="wp-content/uploads/2015/08/icon_money.png" class="attachment-thumbnail" alt="icon_money"/> </span>
</div>
<div class="money-content">
<h3 class="money-title"> დაზოგე პირადი ბიუჯეტი </h3>
<div class="money-entry-content">
<p>იხილეთ ფასდაკლებები და შეთავაზებები</p>
</div>
<a class="noo-button" href="<?php echo base_url("$language"); ?>/products/index/2">დეტალურად</a>
</div>
</div>
</section>
</div></div></div></div>

<div class="noo-container-fluid">
<div class="vc_row wpb_row vc_row-fluid vc_custom_1442299852944">
<div class="noo-container">
<div class="noo-row">

<div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1442299859483">
	<div class="wpb_wrapper"> 
		<div class="title-left">
			<h2 class="noo-title "><span class="noo-title-number">
			<span class="frist">0</span><span class="last">2</span> </span>
			<strong>ჩვენი სერვისები</strong>
			</h2>
		</div>
	</div>
</div>

<div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1442299864851">
	<div class="wpb_wrapper">
		<div class="wpb_text_column wpb_content_element ">
			<div class="wpb_wrapper">
				<?php if(isset($servmain))
					  {
						  $servtxt1 = strip_tags($servmain[0]["text$language"], '<br>');
						  $servtxt1 = substr($servtxt1,0,400);
						  echo '<p>'.$servtxt1.'</p>';
					  }
				?>
				
			</div>
		</div>
	</div>
</div>

<div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1442299870844">
	<div class="wpb_wrapper">
		<div class="wpb_text_column wpb_content_element  vc_custom_1444187949895">
			<div class="wpb_wrapper">
				<?php if(isset($servmain))
					  {
						  $servtxt2 = strip_tags($servmain[0]["text$language"], '<br>');
						  $servtxt2 = substr($servtxt2,400,600);
						  echo '<p>'.$servtxt2.'</p>';
					  }
				?>				
			</div>
		</div>
		<a class="noo-sh-button " href="<?php echo base_url("$language");?>/services"><span>იხილეთ ყველა სერვისი</span>
			<i class="fa fa-long-arrow-right"></i>
		</a>
	</div>
</div>
</div>
</div>
</div>
</div>



<div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid vc_custom_1440229196583">

<div class="noo-container">
<div class="noo-row">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="wpb_wrapper">
<ul class="services-slider ">
<?php //print_r($services); die;
	if( isset($services) )
	{
		foreach($services as $n=>$a)
		{
			$text = strip_tags($a["text$language"], '<br>');
			$text = substr($text,0,180);
			//$text = substr($k["text$language"], 0, strpos($body, ' ', 100));

			echo '<li class="slider-item">
				<div class="services-item">
					<a class="services-link" href="#">&#32;</a>
					<div class="inner120">
						<div class="inner120">
							<div class="services-background" style="background-image: url('.base_url().'images/resource/'.$a["coverimage"].')">
								<div class="services-content">
									<div class="inner120">
									<div class="inner120">
									<div class="services-entry">
									'.$text.'<br>
									<a class="button" href="'.base_url("$language").'/service/detail/'.$a["id"].'">სრულად</a>
									</div>
									</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<h3 class="services-title"><a href="'.base_url("$language").'/service/detail/'.$a["id"].'">'.$a["title$language"].'</a></h3>
			</li>';
		}
	}

?>
</ul>
<script>
                    jQuery(document).ready(function(){
                        jQuery('.services-slider').owlCarousel({
                            items : 3,
                            itemsCustom : false,
                            itemsDesktop : [1500, 3],
                            itemsDesktopSmall : [1200, 2],
                            itemsTablet : [768, 2],
                            itemsTabletSmall : [767, 1],
                            itemsMobile : [479, 1],
                            slideSpeed:500,
                            paginationSpeed:800,
                            rewindSpeed:1000,
                            autoHeight: false,
                            addClassActive: true,
                            autoPlay: true,
                            loop:true,
                            pagination: true                        
						});
                    });
                </script>
</div></div></div></div></div></div>


<div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid responsive_m_70x vc_custom_1442801446184"><div class="noo-container"><div class="noo-row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"> <div class="title-left">
<h2 class="noo-title ">
<span class="noo-title-number">
<span class="frist">0</span><span class="last">3</span> </span>
<strong>ხშირად დასმული კითხვები</strong>
</h2>
</div>
<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1440229630524"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="wpb_wrapper"> <p class="noo-list ">
<a href="#">რომელი ყვეყნები აწარმოებს ჩვენს პროდუქციას</a>
</p>
<p class="noo-list ">
<a href="#">რომელი ყვეყნები აწარმოებს ჩვენს პროდუქციას</a>
</p>
<p class="noo-list ">
<a href="#">რომელი ყვეყნები აწარმოებს ჩვენს პროდუქციას</a>
</p>
<p class="noo-list ">
<a href="#">რომელი ყვეყნები აწარმოებს ჩვენს პროდუქციას</a>
</p>
<p class="noo-list ">
<a href="#">რომელი ყვეყნები აწარმოებს ჩვენს პროდუქციას</a>
</p>
</div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element  vc_custom_1444188044891">
<div class="wpb_wrapper">
<p>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად სწორი გადანაწილების ტექსტს, ვიდრე ერთიდაიგივე გამეორებადი სიტყვებია ხოლმე. შედეგად, ტექსტი ჩვეულებრივ ინგლისურს გავს</p>
<p>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით</p>
</div>
</div>
<a class="noo-sh-button sh-bk" href="#">
<span>აირჩიეთ სერვისი</span>
</a>
<a class="noo-sh-button " href="<?php echo base_url("$language");?>/ask">
<span>დასვით შეკითხვა</span>
<i class="fa fa-long-arrow-right"></i>
</a>
</div></div></div></div></div></div></div></div></div><div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid hidden-mobile vc_custom_1442801204836"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">
<div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1440229750539">
<figure class="wpb_wrapper vc_figure">
<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1068" height="303" src="wp-content/uploads/2015/08/image.png" class="vc_single_image-img attachment-full" alt="image"/></div>
</figure>
</div>
</div></div></div></div><div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid center vc_custom_1441957785922"><div class="noo-container"><div class="noo-row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"> <div class="title-center">
<h2 class="noo-title ">
<span class="noo-title-number">
<span class="frist">0</span><span class="last">4</span> </span>
<strong>პროდუქცია</strong>
</h2>
</div>
</div></div></div></div></div></div><div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid"><div class="noo-container"><div class="noo-row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper">
<div class="wpb_text_column wpb_content_element  vc_custom_1444188072723 width60-center">
<div class="wpb_wrapper">
<p style="text-align: center;">
<?php if(isset($prmain) && !empty($prmain))
	  {
		echo $prmain[0]["text$language"];
	  }
 ?>
</p>
</div>
</div>
</div></div></div></div></div></div>


<div class="noo-container-fluid">
<div class="vc_row wpb_row vc_row-fluid vc_custom_1441594630067">
<div class="noo-container">
<div class="noo-row">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="wpb_wrapper">
<div class="vc_tta-container" data-vc-action="collapse">
<div class="vc_general vc_tta vc_tta-tabs vc_tta-color-white vc_tta-style-classic vc_tta-shape-rounded vc_tta-spacing-1 vc_tta-tabs-position-top vc_tta-controls-align-left">

<div class="vc_tta-tabs-container">
<ul id ="vc_tta-tabs-list" class="vc_tta-tabs-list">
	<li class="vc_tta-tab vc_active" data-vc-tab>
		<a href="#1439805475323-dfcc0f51-f860" class="new-products" data-vc-tabs data-vc-container=".vc_tta">
			<span class="vc_tta-title-text">ახალი პროდუქცია</span>
		</a>
	</li>
	<li class="vc_tta-tab" data-vc-tab>
		<a href="#1439805407226-e3bf204f-ba9a" class="popular-products" data-vc-tabs data-vc-container=".vc_tta">
			<span class="vc_tta-title-text">პოპულარული პროდუქცია</span>
		</a>
	</li>
	<li class="vc_tta-tab" data-vc-tab>
		<a href="#1439805475323-dfcc0f51-f860" class="most-bought-products" data-vc-tabs data-vc-container=".vc_tta">
			<span class="vc_tta-title-text">ხშირად გაყიდვადი</span>
		</a>
	</li>
	<li class="vc_tta-tab" data-vc-tab>
		<a href="#1439805503531-ebebad99-aea5" class="saled-product" data-vc-tabs data-vc-container=".vc_tta">
			<span class="vc_tta-title-text">ფასდაკლებული პროდუქცია</span>
		</a>
	</li>
</ul>
</div>

<script type="text/javascript">

	$( document ).ready(function() {
		
			$('#1439805406623-973855f4-d072').css("display","none");
			$('#1439805407226-e3bf204f-ba9a').css("display","none");
			$('#1439805475323-dfcc0f51-f860').css("display","block");
			$('#1439805503531-ebebad99-aea5').css("display","none");
			
			$( ".new-products" ).click(function(e) {
				e.preventDefault();
				if( $("#vc_tta-tabs-list").find(".vc_active") )
				{
					$("#vc_tta-tabs-list").find(".vc_active").removeClass('vc_active');
					$(this).parent().addClass('vc_active');
				}				
				$('#1439805475323-dfcc0f51-f860').css("display","block");
				$('#1439805407226-e3bf204f-ba9a').css("display","none");
				$('#1439805406623-973855f4-d072').css("display","none");
				$('#1439805503531-ebebad99-aea5').css("display","none");
			});
			
			$( ".popular-products" ).click(function(e) {
				e.preventDefault();
				if( $("#vc_tta-tabs-list").find(".vc_active") )
				{
					$("#vc_tta-tabs-list").find(".vc_active").removeClass('vc_active');
					$(this).parent().addClass('vc_active');
				}
				$('#1439805406623-973855f4-d072').css("display","none");
				$('#1439805407226-e3bf204f-ba9a').css("display","block");
				$('#1439805475323-dfcc0f51-f860').css("display","none");
				$('#1439805503531-ebebad99-aea5').css("display","none");
			});
			
			$( ".most-bought-products" ).click(function(e) {
				e.preventDefault();
				if( $("#vc_tta-tabs-list").find(".vc_active") )
				{
					$("#vc_tta-tabs-list").find(".vc_active").removeClass('vc_active');
					$(this).parent().addClass('vc_active');
				}
				$('#1439805406623-973855f4-d072').css("display","none");
				$('#1439805407226-e3bf204f-ba9a').css("display","none");
				$('#1439805475323-dfcc0f51-f860').css("display","block");
				$('#1439805503531-ebebad99-aea5').css("display","none");
			});
			
			$( ".saled-product" ).click(function(e) {
				e.preventDefault();
				if( $("#vc_tta-tabs-list").find(".vc_active") )
				{
					$("#vc_tta-tabs-list").find(".vc_active").removeClass('vc_active');
					$(this).parent().addClass('vc_active');
				}
				$('#1439805406623-973855f4-d072').css("display","none");
				$('#1439805407226-e3bf204f-ba9a').css("display","none");
				$('#1439805475323-dfcc0f51-f860').css("display","none");
				$('#1439805503531-ebebad99-aea5').css("display","block");
			});
	});

</script>


<div class="vc_tta-panels-container">

<!-- 1-ლი -->
<div class="vc_tta-panel" id="1439805406623-973855f4-d072" data-vc-content=".vc_tta-panel-body">
<div class="vc_tta-panel-heading">
<br><br>
</div>
<div style="" class="vc_tta-panel-body"> 
<div class="noo-row-slider woocommerce">
<ul style="opacity: 1; display: block;" class="noo-woo-slider noo-woo-slider7 products owl-carousel owl-theme">

	<?php if( isset($lastproducts) && !empty($lastproducts) )
		{
			foreach( $lastproducts as $k=>$v)
			{
				echo '<li>pirvelii
					<div class="noo-md-4 noo-sm-6 noo-xs-6 noo-product-item first post-1081 product type-product status-publish has-post-thumbnail product_cat-poster product_cat-seat-cover product_tag-painting product_tag-seat-cover product_tag-vehicle has-featured featured shipping-taxable purchasable product-type-simple product-cat-poster product-cat-seat-cover product-tag-painting product-tag-seat-cover product-tag-vehicle instock">
					<div class="noo-product-inner">
					<a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					</a><div class="woo-thumbnail"><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					<div class="bk"></div>
					<img src="'.base_url().'images/resource/'.$v["coverimage"].'" class="attachment-noo-woo-thumbnail wp-post-image" alt="poster" height="350" width="270">
					</a><div class="noo-product-meta"><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					<div class="rating">
					<div class="star-rating" title="Rated 0 out of 5"><span style="width:0%"><strong class="rating">0</strong> out of 5</span></div><span class="noo-count-rating">based on 0 rating</span> </div>
					</a><div class="entry-cart-meta"><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					</a><a href="'.base_url("$language").'/products/detail/'.$v["id"].'" rel="nofollow" data-product_id="1081" data-product_sku="MK02" data-quantity="1" class="button add_to_cart_button product_type_simple">ვრცლად</a>
					<div class="yith-wcwl-add-to-wishlist add-to-wishlist-1081">
										
					<div style="clear:both"></div>
					<div class="yith-wcwl-wishlistaddresponse"></div>
					</div>
					<div class="clear"></div> </div>
					</div>
					</div>

					<div class="noo-product-footer">
					<h3><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">'.$v["title$language"].'</a></h3>
					<span class="price"><span class="amount">'.$v["price"].' ₾</span></span>
					</div>
					</div>
					</div>
					</li>';
			}
		}
	?>

</div></div>




<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></ul>
</div>
<script>
                jQuery(document).ready(function(){
                    jQuery('.noo-woo-slider223').owlCarousel({
                        items : 4,
                        itemsCustom : false,
                        itemsDesktop : [1320, 4],
                        itemsDesktopSmall : [1200, 3],
                        itemsTablet : [991, 2],
                        itemsTabletSmall : false,
                        itemsMobile : [500, 1],
                        slideSpeed:500,
                        paginationSpeed:800,
                        rewindSpeed:1000,
                        autoHeight: false,
                        addClassActive: true,
                        autoPlay: false,
                        loop:true,
                        pagination: true                    
					});
                });
            </script>
</div></div>


<!-- მე-2-ე -->
<div class="vc_tta-panel" id="1439805407226-e3bf204f-ba9a" data-vc-content=".vc_tta-panel-body">
<div class="vc_tta-panel-heading">
<br><br>
</div>
<div style="" class="vc_tta-panel-body"> 
<div class="noo-row-slider woocommerce">
<ul style="opacity: 1; display: block;" class="noo-woo-slider noo-woo-slider7 products owl-carousel owl-theme">
		
	<?php if( isset($popularproducts) && !empty($popularproducts) )
		{
			foreach( $popularproducts as $k=>$v)
			{
				echo '<li>
					<div class="noo-md-4 noo-sm-6 noo-xs-6 noo-product-item first post-1081 product type-product status-publish has-post-thumbnail product_cat-poster product_cat-seat-cover product_tag-painting product_tag-seat-cover product_tag-vehicle has-featured featured shipping-taxable purchasable product-type-simple product-cat-poster product-cat-seat-cover product-tag-painting product-tag-seat-cover product-tag-vehicle instock">
					<div class="noo-product-inner">
					<a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					</a><div class="woo-thumbnail"><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					<div class="bk"></div>
					<img src="'.base_url().'images/resource/'.$v["coverimage"].'" class="attachment-noo-woo-thumbnail wp-post-image" alt="poster" height="350" width="270">
					</a><div class="noo-product-meta">
					<div class="entry-cart-meta"><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					</a><a href="'.base_url("$language").'/products/detail/'.$v["id"].'" rel="nofollow" data-product_id="1081" data-product_sku="MK02" data-quantity="1" class="button add_to_cart_button product_type_simple">ვრცლად</a>
					
					<div class="clear"></div> </div>
					</div>
					</div>

					<div class="noo-product-footer">
					<h3><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">'.$v["title$language"].'</a></h3>
					<span class="price"><span class="amount">'.$v["price"].' ₾</span></span>
					</div>
					</div>
					</div>
					</li>';
			}
		}
	?>


</div></div>




<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div>
</ul>
</div>
<script>
                jQuery(document).ready(function(){
                    jQuery('.noo-woo-slider7').owlCarousel({
                        items : 4,
                        itemsCustom : false,
                        itemsDesktop : [1320, 4],
                        itemsDesktopSmall : [1200, 3],
                        itemsTablet : [991, 2],
                        itemsTabletSmall : false,
                        itemsMobile : [500, 1],
                        slideSpeed:500,
                        paginationSpeed:800,
                        rewindSpeed:1000,
                        autoHeight: false,
                        addClassActive: true,
                        autoPlay: true,
                        loop:true,
                        pagination: true                    
					});
                });
            </script>
</div></div>


<!-- მე-3-ე -->
<div class="vc_tta-panel" id="1439805475323-dfcc0f51-f860" data-vc-content=".vc_tta-panel-body">
<div class="vc_tta-panel-heading">
<br><br>
</div>
<div style="" class="vc_tta-panel-body">
<div class="noo-row-slider woocommerce">
<ul style="opacity: 1; display: block;" class="noo-woo-slider noo-woo-slider925 products owl-carousel owl-theme">


	<?php if( isset($lastproducts) && !empty($lastproducts) )
		{
			foreach( $lastproducts as $k=>$v)
			{
				echo '<li>
					<div class="noo-md-4 noo-sm-6 noo-xs-6 noo-product-item first post-1081 product type-product status-publish has-post-thumbnail product_cat-poster product_cat-seat-cover product_tag-painting product_tag-seat-cover product_tag-vehicle has-featured featured shipping-taxable purchasable product-type-simple product-cat-poster product-cat-seat-cover product-tag-painting product-tag-seat-cover product-tag-vehicle instock">
					<div class="noo-product-inner">
					<a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					</a><div class="woo-thumbnail"><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					<div class="bk"></div>
					<img src="'.base_url().'images/resource/'.$v["coverimage"].'" class="attachment-noo-woo-thumbnail wp-post-image" alt="poster" height="350" width="270">
					</a><div class="noo-product-meta">
					<div class="entry-cart-meta"><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					</a><a href="'.base_url("$language").'/products/detail/'.$v["id"].'" rel="nofollow" data-product_id="1081" data-product_sku="MK02" data-quantity="1" class="button add_to_cart_button product_type_simple">ვრცლად</a>
					
					<div class="clear"></div> </div>
					</div>
					</div>

					<div class="noo-product-footer">
					<h3><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">'.$v["title$language"].'</a></h3>
					<span class="price"><span class="amount">'.$v["price"].' ₾</span></span>
					</div>
					</div>
					</div>
					</li>';
			}
		}
	?>
</div><div>




<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></ul>
</div>
<script>
                jQuery(document).ready(function(){
                    jQuery('.noo-woo-slider925').owlCarousel({
                        items : 4,
                        itemsCustom : false,
                        itemsDesktop : [1320, 4],
                        itemsDesktopSmall : [1200, 3],
                        itemsTablet : [991, 2],
                        itemsTabletSmall : false,
                        itemsMobile : [500, 1],
                        slideSpeed:500,
                        paginationSpeed:800,
                        rewindSpeed:1000,
                        autoHeight: false,
                        addClassActive: true,
                        autoPlay: true,
                        loop:true,
                        pagination: true                    
					});
                });
            </script>
</div></div>


<!-- მე-4-ე -->
<div class="vc_tta-panel" id="1439805503531-ebebad99-aea5" data-vc-content=".vc_tta-panel-body">
<div class="vc_tta-panel-heading">
<br><br>
</div>

<div style="" class="vc_tta-panel-body"> 
<div class="noo-row-slider woocommerce">
<ul style="opacity: 1; display: block;" class="noo-woo-slider noo-woo-slider827 products owl-carousel owl-theme">


<?php if( isset($saledproducts) && !empty($saledproducts) )
		{
			foreach( $saledproducts as $k=>$v)
			{
				echo '<li>
					<div class="noo-md-4 noo-sm-6 noo-xs-6 noo-product-item first post-1081 product type-product status-publish has-post-thumbnail product_cat-poster product_cat-seat-cover product_tag-painting product_tag-seat-cover product_tag-vehicle has-featured featured shipping-taxable purchasable product-type-simple product-cat-poster product-cat-seat-cover product-tag-painting product-tag-seat-cover product-tag-vehicle instock">
					<div class="noo-product-inner">
					<a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					</a><div class="woo-thumbnail"><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					<div class="bk"></div>
					<img src="'.base_url().'images/resource/'.$v["coverimage"].'" class="attachment-noo-woo-thumbnail wp-post-image" alt="poster" height="350" width="270">
					</a><div class="noo-product-meta">
					<div class="entry-cart-meta"><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					</a><a href="'.base_url("$language").'/products/detail/'.$v["id"].'" rel="nofollow" data-product_id="1081" data-product_sku="MK02" data-quantity="1" class="button add_to_cart_button product_type_simple">ვრცლად</a>
					
					<div class="clear"></div> </div>
					</div>
					</div>

					<div class="noo-product-footer">
					<h3><a href="'.base_url("$language").'/products/detail/'.$v["id"].'">'.$v["title$language"].'</a></h3>
					<span class="price"><span class="amount">'.$v["price"].' ₾</span></span>
					</div>
					</div>
					</div>
					</li>';
			}
		}
	?>


</div></div>




<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></ul>
</div>
<script>
                jQuery(document).ready(function(){
                    jQuery('.noo-woo-slider827').owlCarousel({
                        items : 4,
                        itemsCustom : false,
                        itemsDesktop : [1320, 4],
                        itemsDesktopSmall : [1200, 3],
                        itemsTablet : [991, 2],
                        itemsTabletSmall : false,
                        itemsMobile : [500, 1],
                        slideSpeed:500,
                        paginationSpeed:800,
                        rewindSpeed:1000,
                        autoHeight: false,
                        addClassActive: true,
                        autoPlay: true,
                        loop:true,
                        pagination: true                    
					});
                });
            </script>
</div></div>


</div></div></div></div></div></div></div></div></div></div>


<!--

<div class="noo-container-fluid"><div data-vc-parallax-image="http://wp.nootheme.com/pearle/carle/wp-content/uploads/2015/08/bg_blog.jpeg" class="vc_row wpb_row vc_row-fluid responsive_80x vc_custom_1442461561056 vc_general vc_parallax vc_parallax-content-moving"><div class="vc_parallax-inners" style="background-image: url(wp-content/uploads/2015/08/bg_blog.jpg)"></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"> <div class="noo-container">
<div class="noo-row">
<div class="noo-md-4 noo-sm-6 pull-rtl">
	<div class="blog-title style1">
	<h2 class="noo-title">
	<span class="noo-title-number">
	<span class="frist">0</span><span class="last">5</span> </span>
	<strong>ახალი ამბები</strong>
	</h2>
	<p>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ</p>
	<nav class="noo-blog-control">
		<button class="blog-prev"><i class="fa fa-long-arrow-left"></i></button>
		<span class="arrow-line"></span>
		<button class="blog-next"><i class="fa fa-long-arrow-right"></i></button>
	</nav>
	</div>
</div>


<div class="noo-md-8 noo-sm-6">
<div class="noo-row">
<ul CLASS="noo_our_blog"> <li class="our-blog-item">
<div class="blog-item style1">
<div class="blog-image" style="background-image: url('wp-content/uploads/2015/08/499c67d301eee8ce5de8152a1782dc8bx-1024x683.jpg')"></div>
<div class="sh-entry-blog">
<span class="cat"><a href="#" rel="category">ავტომობილის სერვისები</a></span>
<h3>ახალი სინტეთიკური ზეთი</h3>
</div>
<div class="blog-hover">
<div class="sh-entry-blog2">
<span class="cat"><a href="#" rel="category">ავტომობილის სერვისები</a></span>
<h3><a href="#">ახალი სინტეთიკური ზეთი</a></h3>
</div>
<p>ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად</p>
<span class="entry-sh-footer">
<span class="date"><i class="fa fa-calendar"></i>აგვისტო 11, 2015</span>
</div>
</div>
</li>
<li class="our-blog-item">
<div class="blog-item style1">
<div class="blog-image" style="background-image: url('wp-content/uploads/2015/08/Car-repair-service-1024x682.jpg')"></div>
<div class="sh-entry-blog">
<span class="cat"><a href="#" rel="category">ავტომობილის სერვისები</a></span>
<h3>ახალი სინტეთიკური ზეთი</h3>
</div>
<div class="blog-hover">
<div class="sh-entry-blog2">
<span class="cat"><a href="#" rel="category">ავტომობილის სერვისები</a></span>
<h3><a href="#">ახალი სინტეთიკური ზეთი</a></h3>
</div>
<p>
  ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად
</p>
<span class="entry-sh-footer">
<span class="date"><i class="fa fa-calendar"></i>აგვისტო 11, 2015</span>
</div>
</div>
</li>
<li class="our-blog-item">
<div class="blog-item style1">
<div class="blog-image" style="background-image: url('wp-content/uploads/2015/08/9130052_xxl-1024x683.jpg')"></div>
<div class="sh-entry-blog">
<span class="cat"><a href="#" rel="category">ავტომობილის სერვისები</a></span>
<h3>ახალი სინტეთიკური ზეთი</h3>
</div>
<div class="blog-hover">
<div class="sh-entry-blog2">
<span class="cat"><a href="#" rel="category">ავტომობილის სერვისები</a></span>
<h3><a href="#">ახალი სინტეთიკური ზეთი</a></h3>
</div>
<p>
  ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს. Lorem Ipsum-ის გამოყენებით ვღებულობთ იმაზე მეტ-ნაკლებად
</p>
<span class="entry-sh-footer">
<span class="date"><i class="fa fa-calendar"></i>აგვისტო 11, 2015</span>

</div>
</div>
</li>
</ul> </div>
</div>
</div>
</div>
<script>
                jQuery(document).ready(function(){
                    jQuery('.noo_our_blog').each(function(){
                        jQuery(this).owlCarousel({
                            items : 2,
                            itemsDesktop : [1199,2],
                            itemsDesktopSmall : [979,1],
                            itemsTablet: [768, 1],
                            itemsMobile: [479, 1],
                            slideSpeed:500,
                            paginationSpeed:1000,
                            rewindSpeed:1000,
                            autoHeight: false,
                            addClassActive: true,
                            autoPlay: false,
                            loop:true,
                            pagination: false
                        });
                        var $_parent = jQuery(this);
                        $_parent.parent().parent().parent().find('.blog-prev').click(function(){
                            $_parent.trigger('owl.prev');
                        }) ;
                        $_parent.parent().parent().parent().find('.blog-next').click(function(){
                            $_parent.trigger('owl.next');
                        }) ;
                    });
                });
            </script>

</div></div></div></div>

-->

</div></div>



<div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid vc_custom_1442310159885"><div class="noo-container"><div class="noo-row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"> <div class="clients ">
<button class="prev-client">
<i class="fa fa-long-arrow-left"></i>
</button>
<button class="next-client">
<i class="fa fa-long-arrow-right"></i>
</button>

<div class="noo-row">
<ul class="noo_clients">
	<?php if(isset($icons) && !empty($icons))
		  {
			  foreach($icons as $l=>$m)
			  {
				echo '<li class="noo_client_item">
						<a href="'.$m["link"].'"><img width="145" height="125" src="'.base_url().'/images/resource/'.$m["iconimage"].'" class="attachment-thumbnail" alt="acura_logo"/> 
						</a>
					</li>';  
			  }
			  
		  }
	?>
	

</ul>
</div>
</div>
<script>
                       jQuery(document).ready(function(){
                           jQuery('.noo_clients').each(function(){
                               jQuery(this).owlCarousel({
                                   items : 5,
                                   itemsDesktop : [1199,5],
                                   itemsDesktopSmall : [979,4],
                                   itemsTablet: [768, 3],
                                   itemsMobile: [479, 1],
                                   slideSpeed:500,
                                   paginationSpeed:1000,
                                   rewindSpeed:1000,
                                   autoHeight: false,
                                   addClassActive: true,
                                   autoPlay: false,
                                   loop:true,
                                   pagination: false
                               });
                                                                  var $_parent = jQuery(this);
                                   $_parent.parent().parent().parent().find('.prev-client').click(function(){
                                       $_parent.trigger('owl.prev');
                                   }) ;
                                   $_parent.parent().parent().parent().find('.next-client').click(function(){
                                       $_parent.trigger('owl.next');
                                   }) ;
                                                          });
                       });
                   </script>
</div></div></div></div></div></div>

<div class="noo-container-fluid">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="wpb_wrapper"> 
<div class="noo-newsltter" style="background-image: url('wp-content/uploads/2015/08/bg_subscribe.jpg')">
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

<script type="text/javascript">
	$( document ).ready( function(){
		
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
		
		function validateEmail(email) {
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		}
	});
</script>

