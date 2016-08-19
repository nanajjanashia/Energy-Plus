
<script>
    jQuery(document).ready(function($){
		 $("body").removeClass("home page page-id-340 page-template page-template-page-full-width page-template-page-full-width-php  page-fullwidth full-width-layout  wpb-js-composer js-comp-ver-4.8.1 vc_responsive");
		 $("body").addClass("page page-id-7 page-template-default woocommerce-cart woocommerce-page  page-fullwidth full-width-layout  wpb-js-composer js-comp-ver-4.8.1 vc_responsive");
    });	
</script>

<section class="noo-page-heading" style="background-image: url('http://wp.nootheme.com/pearle/carle/wp-content/uploads/2015/09/1.jpg')">

<div class="noo-container">
<h1 class="page-title">Cart</h1>
</div> 
</section>
<div id="primary" class="content-area">
<main id="main" class="site-main noo-container">
<div id="post-7" class="post-7 page type-page status-publish hentry no-featured">
<div class="entry-content">
<div class="woocommerce">
<div style="display:none;" class="woocommerce-message"></div>


	<?php //session_destroy(); die;  // print_r($_SESSION["products"] ); die;
	if( isset($_SESSION["products"]) && !empty($_SESSION["products"]) )
	{
		$subtotal = 0;
		$count = 0;
		foreach( $_SESSION["products"] as $t=>$p )
		{
			if($p!='') $count++;
		}
		if($count>0)
		{
		echo '<form id="productform">
				<table class="shop_table cart" cellspacing="0">
				<thead>
				<tr>
				<th class="product-remove">&nbsp;</th>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name">Product</th>
				<th class="product-price">Price</th>
				<th class="product-quantity">Quantity</th>
				<th class="product-subtotal">Total</th>
				</tr>
				</thead>
				<tbody>';
		foreach( $_SESSION["products"] as $k=>$v )
		{
			//echo $v["price"]; die;
			if( $v == "" )
				continue;
			$price = $v["price"];
			$total = $v["amount"] * $price;		//intval($v["amount"]) * floatval($price);//
			
			$subtotal = $subtotal+$total;
			echo '<tr class="cart_item">
			<td class="product-remove">
				<a data-id="'.$v["id"].'" href="'.base_url("$language").'/products/remove/'.$v["id"].'" class="remove" data-title="'.$v["title"].'" data-price="'.$v["price"].'" data-quantity="'.$v["amount"].'">?/a> 
			</td>
			<td class="product-thumbnail">
				<a href="'.base_url("$language").'products/detail/'.$v["id"].'"><img src="'.base_url().'images/resource/'.$v["image"].'" class="attachment-shop_thumbnail wp-post-image" alt="poster2" height="350" width="270"></a> 
			</td>
			<td class="product-name">
				<a href="'.base_url("$language").'products/detail/'.$v["id"].'">'.$v["title"].'</a> 
			</td>
			<td class="product-price">
				<span class="amount">'.$v["price"].'</span> 
			</td>
			<td class="product-quantity">
				<div class="quantity">productid
					<input name="productid" type="hidden" value="'.$v["id"].'">
					<input name="price" type="hidden" value="'.$v["price"].'">
					<input step="1" min="1" max="100" name="cart-quantity" value="'.$v["amount"].'" title="Qty" class="input-text qty text" size="4" type="number">
				</div>
			</td>
			<td class="product-subtotal">
				<span class="amount">$'.$total.'</span> 
			</td>
		</tr>';
		$count++;
		}
		echo '<tr>
			<td colspan="6" class="actions">
				<input id="update_cart" class="button" name="update_cart" value="Update Cart" type="submit">
				<input id="_wpnonce" name="_wpnonce" value="eb4b5c4df0" type="hidden">
				<input name="_wp_http_referer" value="/pearle/carle/?page_id=7" type="hidden"> 
			</td>
			</tr>
			</tbody>
			</table>
			</form>';
		echo '<div class="cart-collaterals">
			<div class="cart_totals ">
			<h2>Cart Totals</h2>
				<div class="car_totals_wrap">
					<table cellspacing="0">
					<tbody>
						<tr class="cart-subtotal">
							<th>Subtotal</th>
							<td><span class="finalsum amount">$'.$subtotal.'</span></td>
						</tr>
						<tr class="order-total">
							<th>Total</th>
							<td><strong><span class="finalsum amount subtotal">$'.$subtotal.'</span></strong> </td>
						</tr>
					</tbody>
					</table>
					<div class="wc-proceed-to-checkout">
						<a href="'.base_url("$language/checkout").'" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
					</div>
				</div>
			</div>
			</div>';
		}
		else
		{
			echo '<p class="cart-empty">Your cart is currently empty.</p>
				<p class="return-to-shop">
				<a class="button wc-backward" href="'.base_url("$language").'/products">Return To Shop</a></p>';
		}
	}
	else
	{
		echo '<p class="cart-empty">Your cart is currently empty.</p>
			<p class="return-to-shop">
			<a class="button wc-backward" href="'.base_url("$language").'/products">Return To Shop</a></p>';
	}
	
	?>


<script type="text/javascript">
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
		
		$("#update_cart").click(function(e){
			e.preventDefault();
			data = new Object();
			data["ids"] = $( "[name='productid']" ).serialize();
			data["quantity"] = $( "[name='cart-quantity']" ).serialize();
			data["price"] = $( "[name='price']" ).serialize();
			if( $(".input-text").val() == '' || parseInt($(".input-text").val()) >100) 
			{ alert("შეიყვანეთ რაოდენობა 1-დან 100-მდე."); return false; }
			
			$.post(base_url +''+ lang + '/products/updateCart',data, function(data,status){
			})
			.success(function(data){
				var obj = jQuery.parseJSON(data);
				$(location).attr('href', base_url +'/'+ lang + '/products/cart');
				//console.log(obj); return false;
				//$('.quantity-in-chart').text(obj.sum);
				//$('.finalsum').text("$"+obj.total);
				//$(".woocommerce-message").css("display","block");
				//$(".woocommerce-message").text("Cart updated.");
				
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
			});	 			
		})
		
		$(".remove").click(function(e){
			e.preventDefault();
			data = new Object();
			data["id"] = $(this).data('id');
			var title = $(this).data('title');
			var quantity = $(this).data('quantity');
			var price = $(this).data('price');
			//var subtotal = $(this).data('subtotal');
			data["quantity"] = quantity;
			var minitotal = quantity * price;
			$(this).parent().parent().remove();
			$.post(base_url +''+ lang + '/products/removeProductFromChart',data, function(data,status){
			})
			.success(function(data){
				$(".woocommerce-message").css("display","block");
				$(".woocommerce-message").text(title + " removed.");
				var total = $('.subtotal').text();
				total = parseInt(total.substring(1));
				var newtotal = total-minitotal;
				var cart = <?php
					if( isset($_SESSION['cart']) && !empty($_SESSION['cart']) ) 
						echo $_SESSION['cart']; 
					else 
						echo "0"; 
				?>;
				var nechart = parseInt(cart) - parseInt(quantity);
				$('.quantity-in-chart').text(nechart);
				
				$(".finalsum").text("$"+newtotal);
				
				var count = <?php 
						$i=0;
						if( isset($_SESSION["products"]) )
						{
							foreach( $_SESSION["products"] as $k=>$v )
							{
								if($v!='') $i++;
							}
							echo $i;
						}
						else echo 0; 
						?>;
					
				if( count <= 1 ) { 
					$('.woocommerce').children().fadeOut('fast',function(){ });	
					
					jQuery('<div />',{class:'woocommerce-message',text:'Car-Accessories removed.'}).appendTo('.woocommerce');
					jQuery('<p />',{class:'cart-empty'}).appendTo('.woocommerce');
					var retshop = jQuery('<p />', {class:'return-to-shop'}).appendTo('.woocommerce');
					jQuery('<a />',{href:base_url+''+lang+'/products',text:'Return To Shop', class:'button wc-backward'}).appendTo(retshop);
				}
				
			})
			 .fail(function(){
				console.log("ERROR");
				return false;
			});	
		});
	});
</script>

</div>
</div> 
</div> 
</main> 
</div> 
