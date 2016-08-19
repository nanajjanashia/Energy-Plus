<?php 
//print_r($about); die;
	if( isset($about) && !empty($about) )
	{	
?>
<section class="noo-page-heading" style="background-image: url('<?php echo base_url();?>/wp-content/uploads/2015/09/1.jpg')">

<div class="noo-container">
<h1 class="page-title"><?php echo $about[0]["title$language"];?></h1>
</div> 
</section>
<div id="primary" class="content-area">
<main id="main" class="site-main noo-container">
<div class="noo-row">
<div class="noo-main noo-md-12">
 
<h1 class="single-title">
<?php echo $about[0]["title$language"];?></h1>
 
<div class="single-thumbnail">
	<img src="<?php echo base_url(); ?>images/resource/<?php echo $about[0]["image"];?>" class="attachment-full wp-post-image" height="1936" width="2592"> 
</div>
 
<div class="single-content">
<?php echo $about[0]["text$language"];?></h1>
</div>
  
  
</div>

</div>
</main> 
</div> 

<?php } ?>
