
<?php if(isset($service) && !empty($service))
	  {
		  echo '<section class="noo-page-heading" style="background-image: url('.base_url().'images/resource/'.$service[0]["coverimage"].')">
			<div class="noo-container">
			<h1 class="page-title">'.$service[0]["title$language"].'</h1>
			</div> 
			</section>
			<div id="primary" class="content-area">
			<main id="main" class="site-main noo-container">
			<div class="noo-service-header">
			<div class="noo-row">
			<div class="noo-md-8 noo-thumbnail">
			<img src="'.base_url().'images/services/'.$service[0]["coverimage"].'" class="attachment-full wp-post-image" height="1936" width="2592"> </div>
			<div class="noo-md-4">
			<div class="noo-service-attr">
			<h2>'.$service[0]["title$language"].'</h2>';
						 
		  if( !empty($service[0]["types"]) )
		  {
			  echo '<ul>';
			  $types = explode(",", $service[0]["types"]);
			  foreach( $types as $p=>$q )
			  {
				  echo '<li>
						<span>'.$q.'</span>			
						</li>';
			  }
			  echo '</ul>';
		  }
			
			
		   echo	'</div>
			</div>
			</div>
			</div>
			<div class="row">
			<div class="noo-md-8 noo-md-offset-2">
			<div class="noo-service-content">
			'.$service[0]["text$language"].'			
			</div>
			</div>
			</div>
			</main> 
			</div> ';
	  }
?>

