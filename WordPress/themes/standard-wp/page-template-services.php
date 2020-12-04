<?php
/*
Template Name: Services
*/
get_header();
$post_thumbnail_id    = get_post_thumbnail_id();
$inner_banner    = wp_get_attachment_image_src($post_thumbnail_id, $size='full');
$inner_banner_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
?>

<?php if ($inner_banner):?>
<div class="header banner">
<img src="<?php echo $inner_banner[0];?>" alt="<?php echo $inner_banner_alt;?>">
</div>
<?php endif;?>

<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="commonInnerContainer">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1 class="pageHeading"><?php the_title();?></h1>	
<?php the_content();?>
<?php endwhile; endif; ?>

<!-- Services loop -->
<?php
$args = array(
'posts_per_page' => -1,
'post_type' => 'service',
'post_status' => 'publish'
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$post_thumbnail_id    = get_post_thumbnail_id();
$service_image    = wp_get_attachment_image_src($post_thumbnail_id, $size='medium');
$service_image_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );	
?>

<div class="innerserviceContent">
<h4><?php the_title();?></h4>	
<?php the_content();?>
</div>

<?php endwhile;  wp_reset_query(); ?>
<!-- Services loop -->
</div>

</div>
</div>
</div>
<?php get_footer(); ?>