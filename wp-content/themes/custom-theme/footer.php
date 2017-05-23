<section class="footer" style="background-color: #efefef;margin-top: 15px;padding-top: 70px !important;padding-bottom: 25px !important;">
  <div class="container footer-content">
    <div class="col-md-4 footer-services left">
      <h4 class="title-footer">SERVICES</h4>
      <?php 
        $menuargs = array(
          "theme_location" => "primary",
          "menu_class" => "s-menu",
          "menu_id" => "footer-a",
        );
        $footer_items = wp_get_nav_menu_items( 'footer-a', $menuargs); 
      ?>
      <?php foreach( $footer_items as $i ){ ?>
        <h4 class="text-footer"><a class="light-grey" href="<?php echo $i->url; ?>"><?php echo $i->title; ?></a></h4>
      <?php } ?>      
    </div>
    <div class="col-md-4 footer-information left">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
      <?php endif; ?>
    </div>
      <div class="col-md-4 left">
       <img style="width: 100%;height: 100%";" src="<?php echo get_template_directory_uri() . "/assets/images/home/map.png"; ?>"/> 
      </div>
  </div>
</section>
<section class="footer-copyright" style="background-color: #efefef;padding-top: 0px;padding-bottom: 15px;">
  <div class="container">
    <div class="col-md-7 left">
      <p class="" style="color: #7b7b7b;font-weight: bold;font-size: 16px;">© 2017 Turnpike Furnace & Duct Cleaning Company – All Rights Reserved</p>
    </div>
    <div class="col-md-5 right">
      <a class="" href="#" style="text-align:right;color: #7b7b7b;font-weight: bold;font-size: 16px;float: right;">Terms of Service and Privacy Policy</a>
    </div>
  </div>
</section>
<?php wp_footer();?>
<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function() {
    $('.owl-1').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      margin: 10,
      autoHeight: false
    });
    if ($(window).width() > 700) {
	    $('.owl-2').owlCarousel({
	      items: 2,
	      loop: true,
	      autoplay: true,
	      margin: 10,
	      dots: false,
	      autoHeight: false
	    });
	}
	else{
	    $('.owl-2').owlCarousel({
	      items: 1,
	      loop: true,
	      autoplay: true,
	      margin: 10,
	      dots: false,
	      autoHeight: false
	    });	
	}
    $('.gallery-item').hover(
    	function() {

    		$(this).find('.gallery-description-default').addClass('bg-red');
    	},
    	function() {
  
    		$(this).find('.gallery-description-default').removeClass('bg-red');
    	}
    );

  
  })
</script>
</body>
</html>