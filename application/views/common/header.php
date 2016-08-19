<!doctype html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<title>ENERGYPLUS.GE</title>
<meta name='robots' content='noindex,follow'/>

<!--
<link rel='stylesheet' id='noo-style-css' href='wp-content/themes/noo-carle/style.css' type='text/css' media='all'/>

<link rel='stylesheet' id='vendor-font-awesome-css-css' href='<?php echo base_url(); ?>css/font-awesome.minae82.css?ver=4.2.0' type='text/css' media='all'/>
-->
<!--
<link rel="stylesheet" id="yith-wcwl-font-awesome-css" href="<?php echo base_url(); ?>css/font-awesome.min.css?ver=4.2.0" type="text/css" media="all">
<link rel="stylesheet" id="yith-wcwl-font-awesome-css" href="<?php echo base_url(); ?>css/font-awesome.min.css?ver=4.3.5" type="text/css" media="all">
<link rel='stylesheet' id='vendor-font-awesome-css-css' href='<?php echo base_url(); ?>css/font-awesome.minae82.css?ver=4.2.0' type='text/css' media='all'/>
-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

<link rel='stylesheet' id='owl_carousel-css' href='<?php echo base_url(); ?>css/owl.carousel.css' type='text/css' media='all'/>
<link rel='stylesheet' id='owl_theme-css' href='<?php echo base_url(); ?>css/owl.theme.css' type='text/css' media='all'/>

<!--
<link rel='stylesheet' id='noo-css-css' href='<?php echo base_url(); ?>css/noob523.css?ver=4.3.3' type='text/css' media='all'/>
-->

<link rel='stylesheet' id='noo-megamenu-css' href='<?php echo base_url(); ?>css/noo-megamenub523.css?ver=4.3.3' type='text/css' media='all'/>
<link rel='stylesheet' id='js_composer_front-css' href='<?php echo base_url(); ?>css/js_composer.mina288.css?ver=4.8.1' type='text/css' media='all'/>

<link rel="stylesheet" id="woocommerce_prettyPhoto_css-css" href="<?php echo base_url();?>css/prettyPhoto.css" type="text/css" media="all">
<link rel='stylesheet' data-type="vc_shortcodes-custom-css"  href='<?php echo base_url();?>css/custom.css' type='text/css' media='all'/>
<link rel="stylesheet" id="select2-css" href="<?php echo base_url();?>css/select2.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="<?php echo base_url();?>css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)">

<!-- Product scripts-->
<link rel="stylesheet" id="woocommerce-layout-css" href="<?php echo base_url(); ?>css/woocommerce-layout.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-general-css" href="<?php echo base_url(); ?>css/woocommerce.css" type="text/css" media="all">
<link rel="stylesheet" id="noo-css-css" href="<?php echo base_url(); ?>css/noo.css" type="text/css" media="all">
<link rel="stylesheet" id="js_composer_front-css" href="<?php echo base_url(); ?>css/js_composer.css" type="text/css" media="all">

<link rel="stylesheet" id="woocommerce-layout-css" href="<?php echo base_url(); ?>css/noo-megamenu.css" type="text/css" media="all">
<script type='text/javascript' src='<?php echo base_url();?>js/jquery.min.js'></script>
<script type='text/javascript' src='<?php echo base_url();?>js/jqueryc1d8.js?ver=1.11.3'></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery_006.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery_005.js"></script>



<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery_004.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-migrate.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/vcaccordion.js"></script>
<!--
<script type="text/javascript" src="<?php echo base_url(); ?>js/vc-tabs.js"></script>
-->
<!-- End Product scripts-->
<script>
	var base_url = "<?php echo base_url();?>";
	var lang = "<?php echo $language;?>";
</script>

  
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd"/>
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml"/>
<meta name="generator" content="WordPress 4.3.3"/>
<meta name="generator" content="WooCommerce 2.4.10"/>
<link rel='canonical' href='#'/>
<link rel='shortlink' href='#'/>
<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<meta name="generator" content="Powered by Slider Revolution 5.0.4.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>

</head>
<body id="noo_bd" class="home page page-id-340 page-template page-template-page-full-width page-template-page-full-width-php  page-fullwidth full-width-layout  wpb-js-composer js-comp-ver-4.8.1 vc_responsive">
<div class="site">
<header class="noo-header  header-default">
<div class="navbar-wrapper">
<div class="navbar navbar-default" role="navigation">
<div class="noo-topbar">
<div class="noo-container">
<ul class="pull-left">

<?php if(isset($contact) && !empty($contact)){?>
<li><a href="tel:0123-88-89-0999"><i class="fa fa-phone"></i><?php echo $contact[0]["phone"]; ?></a></li>
<li><a href=""><i class="fa fa-envelope-o"></i>
<span class="__cf_email__" data-cfemail="b1d2dedfc5d0d2c5f1d2d0c3ddd49fd2dedc"><?php echo $contact[0]["email"]; ?></span></a>
</li>
<?php }?>

</ul>
<ul class="pull-right">
<li>
<a href="#">
<i class="fa fa-clock-o"></i>
<?php if(isset($worktime) && !empty($worktime))
{
	echo $worktime[0]["worktime$language"];
}
?>
</a>
</li>
<li>
<a href="<?php echo base_url("$language"); ?>/contact" target="_blank">
<i class="fa fa-location-arrow"></i>
გვიპოვეთ რუკაზე </a>
</li>
</ul>
</div>
</div>
<div class="noo-nav-header4">
<div class="noo-container">
<div class="noo-nav-wrap">
<div class="navbar-header pull-left">
<h1 class="sr-only">Carle</h1> <button data-target=".nav-collapse" class="btn-navbar noo_icon_menu" type="button">
<i class="fa fa-bars"></i>
</button>
<a href="<?php echo base_url("$language"); ?>" class="navbar-brand" title="">
<img class="noo-logo-img noo-logo-normal" src="<?php echo base_url();?>images/resource/<?php if(isset($logoes)) echo $logoes[0]["mainlogo"]; ?>" alt="Just another WordPress site"> </a>
</div>

	<nav class="pull-right noo-main-menu">
		<ul id="menu-main-menu" class="nav-collapse navbar-nav">
			<li id="menu-item-704" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-340 current_page_item menu-item-has-children "><a href="<?php echo base_url("$language");?>">მთავარი</a>
			</li>
			<li id="menu-item-709" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children ">
				<a href="<?php echo base_url("$language/products/index/1");?>">პროდუქცია</a>
			</li>
			<li id="menu-item-934" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children ">
				<a href="<?php echo base_url("$language/services");?>">სერვისები</a>

			</li>
			<li id="menu-item-870" class="noo-menu   menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children ">
				<a href="<?php echo base_url("$language/about");?>">ჩვენს შესახებ</a>
			</li>

			<li id="menu-item-993" class="noo-menu   menu-item menu-item-type-post_type menu-item-object-page ">
				<a href="<?php echo base_url("$language/contact");?>">კონტაქტი</a></li>
				
			<li id="nav-menu-item-simple-cart" class="menu-item noo-menu-item-simple-cart"><a href="<?php echo base_url("$language/products/cart");?>" title="View Cart"><span><i class="fa fa-shopping-cart"></i>
			<em class="quantity-in-chart">
			<?php
				if( isset($_SESSION['cart']) && !empty($_SESSION['cart']) ) 
					echo $_SESSION['cart']; 
				else 
					echo "0"; 
			?>
			</em></span></a></li>
			
		</ul>
	</nav>



</div>
</div>
</div>
</div>
</div>
</header>


