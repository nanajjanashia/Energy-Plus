
<script>
    jQuery(document).ready(function($){
		 $("body").removeClass("home page page-id-340 page-template page-template-page-full-width page-template-page-full-width-php  page-fullwidth full-width-layout  wpb-js-composer js-comp-ver-4.8.1 vc_responsive");
		 $("body").addClass("archive post-type-archive post-type-archive-product woocommerce woocommerce-page  page-right-sidebar full-width-layout  wpb-js-composer js-comp-ver-4.8.1 vc_responsive");
    });	
</script>

<section class="noo-page-heading" style="background-image: url('http://wp.nootheme.com/pearle/carle/wp-content/uploads/2015/09/1.jpg')">
<div class="noo-container">
<h1 class="page-title">Shop</h1>
</div> 
</section>
<div class="noo-container shop-container">
<div class="noo-row">
<div class="noo-main noo-md-8">
	<div class="noo-woo-meta">
	<div id="pagecount">
		<?php 
		
			if( $count < 1 )
			{
				echo '<p class="woocommerce-info">No products were found matching your selection.</p>';
			}
			else if( $count == 1 )
			{
				echo '<p class="woocommerce-result-count-single"> Showing the single result</p>';
			}
			else if( $count >= 1 )
			{
				if( $page == 1)
				{
					echo '<p class="woocommerce-result-count">
					Showing 1–'.$size.' of '.$count.' results</p>';
				}
			}
		
		?>
		</div>
		
		<!--<p class="woocommerce-result-count-single"> Showing the single result</p>-->
		
		<form class="woocommerce-ordering" method="get">
		<select name="orderby" class="orderby">
		<option value="menu_order" selected="selected">Default sorting</option>
		<option value="popularity">Sort by popularity</option>
		<option value="date">Sort by newness</option>
		<option value="price">Sort by price: low to high</option>
		<option value="price-desc">Sort by price: high to low</option>
		</select>
		<input name="post_type" value="product" type="hidden"></form>
	</div>

<div id="products" class="products noo-row">

<?php 	if( isset($products) )
		{
			foreach( $products as $k=>$v )
			{
				echo '<div class="noo-md-4 noo-sm-6 noo-xs-6 noo-product-item post-639 product type-product status-publish has-post-thumbnail product_cat-car-covers product_cat-poster product_cat-vehicle product_tag-painting product_tag-seat-cover product_tag-vehicle has-featured shipping-taxable purchasable product-type-simple product-cat-car-covers product-cat-poster product-cat-vehicle product-tag-painting product-tag-seat-cover product-tag-vehicle instock">
				<div class="noo-product-inner">
				<div class="woo-thumbnail">
				<a href="'.base_url("$language").'/products/detail/'.$v["id"].'">
					<div class="bk"></div>
					<img src="'.base_url().'/images/resource/'.$v["coverimage"].'" class="attachment-noo-woo-thumbnail wp-post-image" alt="shop2" height="350" width="270"></a>
					
					<div class="noo-product-meta">
						<div class="entry-cart-meta">
						<a href="'.base_url("$language").'/products/detail/'.$v["id"].'"  rel="nofollow" class="button add_to_cart_button product_type_simple" >დეტალურად</a>
						</div>
					</div>
				</div>

				<div class="noo-product-footer">
				<h3><a href="'.base_url("$language").'products/detail/'.$v["id"].'">'.$v["title$language"].'</a></h3>
				<span class="price"><span class="amount">$'.$v["price"].'</span></span>
				</div>
				</div>
				</div>';
			}
		}
	?>
	
</div>


<nav id="pagination" class="woocommerce-pagination">
	<?php echo $this->pagination->create_links();?>
</nav>
</div>



<div class=" noo-sidebar noo-md-4">
<div class="noo-sidebar-wrap">
	<div id="woocommerce_price_filter-2" class="widget smk_sidebar_5xm7 woocommerce widget_price_filter"><h3 class="widget-title">Filter by price</h3>
		<!--<form method="get" action="http://wp.nootheme.com/pearle/carle?post_type=productt">-->
			<div class="price_slider_wrapper">
			<div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
				<div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; "></div>
				<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
				<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span>
			</div>
			<div class="price_slider_amount">
			<input style="display: none;" id="min_price" name="min_price" value="6" data-min="6" placeholder="Min price" type="text">
			<input style="display: none;" id="max_price" name="max_price" value="64791" data-max="65000" placeholder="Max price" type="text">
			<!--<button id="filter" type="submit" class="button">Filter</button>-->
			<div class="price_label" style="">
			Price: <span class="from">$6</span> — <span class="to">$64791</span>
			</div>
			<input name="post_type" value="product" type="hidden">
			<div class="clear"></div>
			</div>
			</div>
		<!--</form>-->
	</div>
	
	<div id="woocommerce_products-2" class="widget smk_sidebar_5xm7 woocommerce widget_products"><h3 class="widget-title">Category</h3>
	<ul id='category'>
	<?php //	category with subcategory
		if( $language = 'ge' ) $name = 'namege';
		else $name = 'nameen';
		foreach($menus as $menu)
		{ ?>
		<li><a cat="<?=$menu->id?>" href="#" class="ctr"><?php echo $menu->$name;
			 if(!empty($menu->submenu)){ echo '<ul>';
			  foreach($menu->submenu as $submenu){ ?>
				<li><a cat="<?=$submenu->id?>" href="#" class="ctr"><?=$submenu->$name?></a></li>
			   <?php } echo '</ul>'; }?>
		</a></li>
	 <?php } ?>
	 </ul>
	</div>
	
</div>
</div>
</div>
</div>
<script type='text/javascript' src='<?php echo base_url();?>js/filter.js'></script>