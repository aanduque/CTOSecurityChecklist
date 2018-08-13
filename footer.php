<div class="newsletter">
  <h4><?php _e('Stay up to date with major changes in the list', 'checklist'); ?></h4>
  <div class="subtitle"><?php _e('Get notified about major updates to the list:', 'checklist'); ?></div>

  <div id="form">

    <?php if ( is_active_sidebar('subscribe-form') ) : ?>
        <?php dynamic_sidebar('subscribe-form'); ?>
    <?php endif; ?>

  </div>
  

</div>
<footer>

  <span><?php _e('A project by:', 'checklist'); ?></span>

  <div class="footer-container">
    <?php if ( is_active_sidebar('project-by') ) : ?>
        <?php dynamic_sidebar('project-by'); ?>
    <?php endif; ?>
  </div>

</footer>
</div>
</div>
</div>

<?php 
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>

<!-- Scripts -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "Product",
  "name" : "<?php echo bloginfo('name'); ?>",
  "image" : "http://cto-security-checklist.sqreen.io/images/scsc-logo.svg",
  "description" : "<?php echo get_the_excerpt($post->ID); ?>",
  "url" : "<?php echo home_url(); ?>",
  "brand" : {
    "@type" : "Brand",
    "name" : "<?php echo bloginfo('name'); ?>",
    "logo" : "<?php echo $image[0]; ?>"
  },
  "offers" : {
  "@type" : "Offer",
  "price" : "Free"
  }
}
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/docs/js/vendors/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/docs/js/vendors/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/docs/js/main.js"></script>

<?php wp_footer(); ?>