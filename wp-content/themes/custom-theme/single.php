<?php get_header(); ?>
<section class="slider bg-black clear">
    <div class="large-12 columns">
        <div class="item slider-bg" style="height:280px;display: block;background-image: url('<?php echo get_template_directory_uri() . "/assets/images/home/banner-home-wide.png"; ?>');background-size: cover;">
            <div class="container sl-inner">
                <?php 
                    $cf_header_text_a = get_post_meta($post->ID, 'header_text_a', true);                    
                    $cf_header_text_b = get_post_meta($post->ID, 'header_text_b', true);                      
                ?>  
                <h1 class="page-title color-white bold"><?php echo $cf_header_text_a; ?></h1>
                <h1 class="page-description bold" style="color: #e6e6e6;"><?php echo $cf_header_text_b; ?></h1>
            </div>
        </div>
    </div>
</section>  
<br class="clear" /><br/>
<section class="services-section" style="background: url('<?php echo get_template_directory_uri() . "/assets/images/inner/background-inner.png"; ?>') no-repeat;background-size: cover;padding-bottom: 50px;">
    <div class="row">
        <div class="container">
        <h1 class="header-text" style="font-size: 30px; font-weight: bold;"><span style="color: black;"><?php echo get_the_title(); ?></span></h1><br/>
            <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/page/content', 'page' );
                    the_content();
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
            ?>
                <div class="col-md-4 left form-container"  style="margin-top:20px;">
                    <div class="form-1" style="background-color: #d71120;height: 100%;border: 1px solid #b9b9b9;">
                        <div class="form-title" style="background-color: #d71120 !important;">
                            <h3 class="text-white center text-about-form bold">ENTER YOUR INFO BELOW</h3> 
                        </div>
                        <div style="padding:20px;text-align: center;">
                            <?php echo do_shortcode( '[contact-form-7 id="69" title="Contact form 1"]' ); ?>
                        </div>
                    </div>
                </div>
                 

        </div>
    </div>
 </section>

<?php get_footer('inner'); ?>