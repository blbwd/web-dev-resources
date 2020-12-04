<?php
get_header();
?>
<?php if( get_field('service_banner_image') ): ?>
<div class="header banner">
<img src="<?php the_field('service_banner_image'); ?>" alt="service-banner">
</div>
<?php endif;?>
<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="commonInnerServiceContainer">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 class="pageHeading"><?php the_title();?></h1>	
<?php the_content();?>
<?php endwhile; endif; ?>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>