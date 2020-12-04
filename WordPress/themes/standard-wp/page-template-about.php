<?php
/*
Template Name: About
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
</div>
</div>
</div>


<div class="row">
<!-- Team members loop -->	
<?php
$args = array(
'posts_per_page' => 2,
'post_type' => 'team_member',
'post_status' => 'publish'
);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$post_thumbnail_id    = get_post_thumbnail_id();
$member_image    = wp_get_attachment_image_src($post_thumbnail_id, $size='full');
$member_image_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
$linkedin_url = get_field('member_linkedin_profile');	
?>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
<div class="partner">
<div class="partnerImg float-left"><img src="<?php echo $member_image[0];?>" alt="<?php echo $member_image_alt;?>"></div>
<div class="partnerText float-right">
<h5><?php the_title();?></h5>
<?php the_content();?>
<p><a href="<?php echo esc_url( $linkedin_url ); ?>" target="_blank">View Profile on Linkedin</a></p>
</div>
<div class="clearfix"></div>
</div>
</div>
<?php endwhile;  wp_reset_query(); ?>
<!-- Team members loop -->	
</div>


<div class="row">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
<div class="innercontainBox">
<?php the_field('block_#1'); ?>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
<div class="innercontainBox">
<?php the_field('block_#2'); ?>
</div>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
<div class="innercontainBox">
<?php the_field('block_#3'); ?>
</div>
</div>
</div>

<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="commonInnerContainer aboutBottomContainer">
<?php the_field('block_#4'); ?>
</div>
</div>
</div>

</div>
<?php get_footer(); ?>