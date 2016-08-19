
<script>
    jQuery(document).ready(function($){
		 $("body").removeClass("home page page-id-340 page-template page-template-page-full-width page-template-page-full-width-php  page-fullwidth full-width-layout  wpb-js-composer js-comp-ver-4.8.1 vc_responsive");
		 $("body").addClass("single single-product postid-36 woocommerce woocommerce-page  page-right-sidebar full-width-layout  wpb-js-composer js-comp-ver-4.8.1 vc_responsive");
    });	
</script>

<section class="noo-page-heading" style="background-image: url('<?php echo base_url();?>wp-content/uploads/2015/09/1.jpg')">
<div class="noo-container">
<h1 class="page-title">Volvo XC90 2015 Review</h1>
</div> 
</section>
<div class="noo-container shop-container">
<div class="noo-row">
<div class="noo-main noo-md-8">

<div class="woocommerce-message" style="display:none">
<a class="button wc-forward" href="<?php echo base_url("$language");?>/products/cart">View Cart</a>
<p class="addcarttext">“Volvo XC90 2015 Review” has been added to your cart.</p>
</div>


<div itemscope="" itemtype="http://schema.org/Product" id="product-36" class="post-36 product type-product status-publish has-post-thumbnail product_cat-car-covers product_cat-car-services product_cat-seat-cover product_cat-vehicle product_cat-wheel-covers product_tag-seat-cover product_tag-vehicle product_tag-wheel has-featured shipping-taxable purchasable product-type-simple product-cat-car-covers product-cat-car-services product-cat-seat-cover product-cat-vehicle product-cat-wheel-covers product-tag-seat-cover product-tag-vehicle product-tag-wheel instock">

<div class="noo-product-content">
<div class="images">

	<?php //print_r($product); die;
		if( isset($product) && !empty($product) )
		{
			$bigimgs = explode("&",$product[0]->bigimages);
			$smallimages = explode("&",$product[0]->smallimages);
			if( !empty($bigimgs[0]) )
			{
				echo '<a href="'.base_url().'images/resource/'.$bigimgs[0].'" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]"><img src="'.base_url().'images/resource/'.$bigimgs[0].'" class="attachment-shop_single wp-post-image" alt="image1" title="image1" height="382" width="553"></a>';
			}
			echo '<div class="thumbnails columns-3">';
			$i = 0;
			foreach( $bigimgs as $k=>$v )
			{
				$cls = "";
				$i++;
				if( ($i%3) == 1 ) $cls = "zoom first";
				if( ($i%3) == 2 ) $cls = "zoom";
				if( ($i%3) == 0 ) $cls = "zoom last";
				
				echo '<a href="'.base_url().'images/resource/'.$bigimgs[$k].'" class="'.$cls.'" title="" data-rel="prettyPhoto[product-gallery]">

				<img src="'.base_url().''.$smallimages[$k].'" class="attachment-shop_thumbnail" alt="" title="" height="180" width="180"></a>';
			}
			echo '</div></div>';
			
			if( $language == "ge" )
			{
				$title = $product[0]->titlege;
				$text = $product[0]->discriptionge;
				$color = $product[0]->colorge;
			}
			else
			{
				$title = $product[0]->titleen;
				$text = $product[0]->discriptionen;
				$color = $product[0]->coloren;
			}
			
			//print_r($category["main"]["name$language"]); die;
			
			echo '<div class="summary entry-summary">
				<h1 itemprop="name" class="product_title entry-title">'.$title.'</h1>
				<input id="productId" type="hidden" value="'.$product[0]->id.'">
				<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
					<p class="price"><span class="amount prprice">$'.$product[0]->price.'</span></p>
					<meta itemprop="price" content=$'.$product[0]->price.'">
					<meta itemprop="priceCurrency" content="NZD">
					<link itemprop="availability" href="http://schema.org/InStock">
				</div>
				<form class="cart">
					<div class="quantity">
					<input class="input-text qty text" type="number" size="4" title="Qty" value="1" name="quantity" min="1" max="100" step="1">
					</div>
					<input name="add-to-cart" value="36" type="hidden">
					<button type="submit" class="addChart single_add_to_cart_button button alt">Add to cart</button>
				</form>
				
				<div class="clear"></div>
				<div class="product_meta">
					<span class="posted_in"><strong>Categories: </strong>
					'.$category["main"]["name$language"].'';
					
					if( isset($category["sub"]) )
					{
						echo ' / '.$category["sub"]["name$language"].'';
					}
					
				echo '</span>
				<br><span><strong>ნანახია: </strong>'.$product[0]->seen.' - ჯერ.</span>
				</div>
			</div>';
			
			echo '</div>
				<div class="woocommerce-tabs wc-tabs-wrapper">
					<ul class="tabs wc-tabs">
						<li class="description_tab active">
							<a href="#tab-description">Description</a>
						</li>
					</ul>

				<div style="display: block;" class="panel entry-content wc-tab" id="tab-description">

					<table class="shop_attributes">
						<tbody><tr class="">
							<tr class="">
							<th>Color</th>
							<td>'.$color.'
							</td>
							</tr>
							<tr class="alt">
							<th>size</th>
							<td>
							'.$product[0]->size.'
							</td>
							</tr>
						</tr>
						</tbody>
					</table>
				<br>
				'.$text.'
				</div>

				</div>';
			
		}
		
	?>
	
	
<script>
	
	$( document ).ready(function() {
		
		$(".input-text").keydown(function (e) {
			if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
				(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
				(e.keyCode >= 35 && e.keyCode <= 40)) {
					 return;
			}
			if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
				e.preventDefault();
			}
		});
		
		
		data = new Object();	
		products = <?php if(isset($_SESSION['products']))echo json_encode($_SESSION['products']); else echo "[]"; ?>;
		
		$( ".addChart" ).click(function(e) {	
			e.preventDefault();
			
			if( $(".input-text").val() == '' || parseInt($(".input-text").val()) >100) 
			{ alert("შეიყვანეთ რაოდენობა 1-დან 100-მდე."); return false; }
	
			var id = <?php echo $product[0]->id;?>;				
			var title = '<?php echo $title;?>';
			var price = <?php echo $product[0]->price;?>;
			var quantity = $('.input-text').val();
			var newcount = parseInt(<?php if(isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) echo $_SESSION["cart"]; else echo 0;?>) + parseInt(quantity);	
					
			if(!products[id])
			{
				products[id] = {id:id, title:title, price:price, amount:quantity};
			}
			else
			{
				products[id]["amount"] = parseInt(products[id]["amount"]) + parseInt(quantity);
			}
			console.log(products);
		    data['cart'] = newcount;
			data['products'] = products;
			data['id'] = id;
		     $.post(base_url +''+ lang + '/products/saveProductInChart',data, function(data,status){
			})
			.success(function(data){
				//$(location).attr('href', base_url +'/'+ lang + '/products/detail/'+id);
				$('.quantity-in-chart').text(newcount);
				$(".woocommerce-message").css("display","block");
				$(".addcarttext").text("“"+title+"” has been added to your cart.");
				
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
			});	 
		   
		});
	});

	
</script>
	


<meta itemprop="url" content="http://wp.nootheme.com/pearle/carle/?product=volvo-xc90-2015-review">
</div> 
</div>


<div class=" noo-sidebar noo-md-4">
<div class="noo-sidebar-wrap">
<div id="woocommerce_products-2" class="widget smk_sidebar_5xm7 woocommerce widget_products">
	<h3 class="widget-title">RELATED PRODUCTS</h3><ul class="product_list_widget"><li>
	
	<?php //print_r($related); die;
		
		if( isset($related) )
		{//titlege
			foreach( $related as $h=>$t )
			{
				echo '	<a href="'.base_url("$language").'/products/detail/'.$t["id"].'" title="'.$t["title$language"].'">
				<img src="'.base_url().'images/resource/'.$t["coverimage"].'" class="attachment-shop_thumbnail wp-post-image" alt="poster" height="350" width="270"> <span class="product-title">'.$t["title$language"].'</span></a>
				<span class="amount">$'.$t["price"].'</span></li><li>';
			}
		}
	
	?>

	
<div id="noo_best_services-3" class="widget smk_sidebar_5xm7 widget_noo_best_services"><h3 class="widget-title">Best Services</h3> <button class="best_services-prev">
<i class="fa fa-long-arrow-left"></i>
</button>
<button class="best_services-next">
<i class="fa fa-long-arrow-right"></i>
</button>

<ul style="opacity: 1; display: block;" class="best_services owl-carousel owl-theme"> <div class="owl-wrapper-outer"><div style="width: 1950px; left: 0px; display: block;" class="owl-wrapper">

<?php 
if( isset($bestservices) && !empty($bestservices) )
	  {
		  foreach( $bestservices as $p=>$q )
		  {
			  echo '<div style="width: 325px;" class="owl-item bestserviceitem active"><li>
				<a href="'.base_url("$language").'/services/detail/'.$q["id"].'">
				<img src="'.base_url().'images/resource/'.$q["coverimage"].'" class="attachment-noo-thumbnail-square wp-post-image" height="450" width="600"> </a>
				<h4><a href="'.base_url("$language").'/services/detail/'.$q["id"].'">'.$q["title$language"].'</a></h4>
				</li></div>';
		  }
	  }
?>

</div></div>


</ul> 
</div> 


</div>
</div>
</div>
</div>


</div>
 
