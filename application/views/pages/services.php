
<script>
    jQuery(document).ready(function($){
		 $("body").removeClass("home page page-id-340 page-template page-template-page-full-width page-template-page-full-width-php  page-fullwidth full-width-layout  wpb-js-composer js-comp-ver-4.8.1 vc_responsive");
		 $("body").addClass("page page-id-961 page-template page-template-page-full-width page-template-page-full-width-php  page-fullwidth full-width-layout  wpb-js-composer js-comp-ver-4.8.1 vc_responsive");
    });	
</script>

<section class="noo-page-heading" style="background-image: url('http://wp.nootheme.com/pearle/carle/wp-content/uploads/2015/09/1.jpg')">
<div class="noo-container">
<h1 class="page-title">სერვისი</h1>
</div> 
</section>

<div class="page_fullwidth" role="main">
 
<div class="noo-container-fluid"><div class="vc_row wpb_row vc_row-fluid vc_custom_1448510585709"><div class="noo-container"><div class="noo-row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="wpb_wrapper"> <div class="masonry-filters masonry-filters-services">


<ul class="services-filters" data-option-key="filter">
<li>
<a data-option-value="*" href="#all" class="selected">All</a>
</li>

<?php 

	if( isset($servicecategory) && !empty($servicecategory) )
	{
		foreach($servicecategory as $k=>$v)
		{
			echo '<li>
				<a data-option-value=".'.$v["classname"].'" href="#">'.$v["catname$language"].'</a>
				</li>';
		}
	}
?>
</ul>
</div>

<div style="position: relative; height: 1127.25px;" class="noo-portfolio">

<?php 	
	if( isset($services) && !empty($services) )
	{
		foreach($services as $t=>$p)
		{
			echo '<div style="position: absolute; left: 779px; top: 0px;" id="post-948" class="masonry-item columns-3 belts-and-hoses '.$p["classname"].' post-948 noo_services type-noo_services status-publish has-post-thumbnail hentry services_category-belts-and-hoses services_category-'.$p["classname"].' has-featured">
				<div class="noo-services-item">
				<div class="thumb">
				<a href="'.base_url("$language").'/services/detail/'.$p["id"].'">
				<span class="line-left"></span>
				<span class="line-right"></span>
				<img src="'.base_url().'images/resource/'.$p["coverimage"].'" class="attachment-noo-thumbnail-square wp-post-image" height="450" width="600"> </a>
				</div>
				<h3><a href="'.base_url("$language").'/services/detail/'.$p["id"].'">'.$p["title$language"].'</a></h3>
				</div>
			</div>';
		}
	}

?>

</div>
</div></div></div></div></div></div>
 
</div>  
<br><br><br><br><br><br>