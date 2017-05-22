<?php
/**
Template Name: Homepage
 */
?>
<?php get_header(); ?>
<section class="slider bg-black clear">
	<div class="large-12 columns">
	  <div class="owl-carousel owl-1 owl-theme">
	  	<?php 
			$slider_data = $wpdb->get_results("SELECT  meta_value FROM wp_postmeta WHERE post_id =47 AND meta_key ='nivo_settings' LIMIT 1"); 
			$slider_settings   = unserialize($slider_data[0]->meta_value);
			$slider_images_ids = $slider_settings['manual_image_ids'];
			$slider_images     = $wpdb->get_results("SELECT  guid, post_excerpt FROM wp_posts WHERE id IN(" . $slider_images_ids . ")"); 				
		?>
		<?php foreach( $slider_images as $i ){ ?>
			<div class="item slider-bg" style="height:650px;display: block;background-image: url('<?php echo $i->guid; ?>');background-size: cover;">
			    <div class="container owl-slider  sl-1">
			    	<?php echo $i->post_excerpt; ?>

			    </div>
		    </div>
		<?php } ?>	   
	  </div>
	</div>
</section>	
<section class="gallery clear">
<div class="container padding">
<p class="center">Since 1959,Turnpike Furnace & Duct Company offers expert air duct, boiler and chimney cleaning services to Connecticut as well as to the bordering states of New York and Massachusetts. From office buildings and restaurants, older homes, to newly constructed homes, we specialize in them all. Contact us at 1-800-AIR-DUCT.</p>
<br class="clear"><Br/>
<div class="col-md-12 no-space">
	<div class="col-md-4 left no-space gallery-item">
		<a href="#">
		<img class="gallery-cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/service-1.png"; ?>"/>	
		<h3 style="position: absolute;">Home, Industrial, and Commercial Air Duct Cleaning</h3>
		<div class="gallery-description-default">
			<h3 class="gallery-default">Home, Industrial, and Commercial Air Duct Cleaning</h3>
		</div>		
		</a>
	</div>
	<div class="col-md-4 left no-space gallery-item">
		<a href="#">
		<img class="gallery-cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/service-2.png"; ?>"/>	
		<div class="gallery-description-default">
			<h3 class="gallery-default">Dryer Duct Cleaning</h3>
		</div>	
		</a>
	</div>
	<div class="col-md-4 left no-space gallery-item">
		<a href="#">
		<img class="gallery-cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/service-3.png"; ?>"/>	
		<div class="gallery-description-default">
			<h3 class="gallery-default">Commercial Laundry Duct Cleaning</h3>
		</div>		
		</a>
	</div>
	<div class="col-md-4 left no-space gallery-item">
		<a href="#">
		<img class="gallery-cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/service-5.png"; ?>"/>	
		<div class="gallery-description-default">
			<h3 class="gallery-default">Emergency Plugged Chimneys</h3>
		</div>				
		</a>
	</div>
	<div class="col-md-4 left no-space gallery-item">
		<a href="#">
		<img class="gallery-cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/service-6.png"; ?>"/>	
		<div class="gallery-description-default">
			<h3 class="gallery-default">Residential Chimney Cleaning</h3>
		</div>		
		</a>
	</div>
	<div class="col-md-4 left no-space gallery-item">
		<a href="#">
		<img class="gallery-cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/service-7.png"; ?>"/>	
		<div class="gallery-description-default">
			<h3 class="gallery-default">Industrial  Boiler Cleaning</h3>
		</div>	
		</a>
	</div>
	<div class="col-md-4 left no-space gallery-item">
		<a href="#">
		<img class="gallery-cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/service-4.png"; ?>"/>	
		<div class="gallery-description-default">
			<h3 class="gallery-default">Repair Of Laundry Ductwork</h3>
		</div>	
		</a>
	</div>
	<div class="col-md-4 left no-space gallery-item">
		<a href="#">
		<img class="gallery-cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/service-8.png"; ?>"/>	
		<div class="gallery-description-default">
			<h3 class="gallery-default">Chimney Cap Installations</h3>
		</div>	
		</a>
	</div>
	<div class="col-md-4 left no-space gallery-item">
		<a href="#">
		<img class="gallery-cover" src="<?php echo get_template_directory_uri() . "/assets/images/home/service-9.png"; ?>"/>	
		<div class="gallery-description-default">
			<h3 class="gallery-default">Industrial Stack and Breeching Cleaning</h3>
		</div>	
		</a>
	</div>
</div>

</section>
<?php get_footer(); ?>