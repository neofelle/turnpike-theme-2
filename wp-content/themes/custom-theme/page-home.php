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
	<?php    
        $args = array(
        'post_type' => 'services',
        'posts_per_page' => 9,
        'order' => 'ASC'
        );
         
        $the_query = new WP_Query( $args );
         
        if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
        $the_query->the_post();
        $cf_excerpt = get_post_meta($post->ID, 'services_excerpt', $single);            
    ?>

        <?php 
            $image = "";
            if (has_post_thumbnail( $post->ID ) ){
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            }
        ?>
        <div class="col-sm-4 two-row left no-space gallery-item">
			<a href="<?php echo $post->guid; ?>">
			<img class="gallery-cover" src="<?php echo $image[0]; ?>"/>	
			<div class="gallery-description-default">
				<h3 class="gallery-default"><?php echo get_the_title(); ?></h3>
			</div>	
			</a>
		</div>
    <?php
        }
        } else {
        // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();         
    ?>
</div>

</section>
<?php get_footer(); ?>