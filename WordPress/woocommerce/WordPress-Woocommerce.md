### Featured products loop
```
<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'product',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_visibility',
            'field'    => 'name',
            'terms'    => 'featured',
            'operator' => 'IN',
            ),
        )
    );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
$post_thumbnail_id    = get_post_thumbnail_id();
$product_thumbnail    = wp_get_attachment_image_src($post_thumbnail_id, $size='full');
$product_thumbnail_alt = get_post_meta( $post_thumbnail_id, '_wp_attachment_image_alt', true );
if ($product_thumbnail):
    ?>
<div>
    <a href="<?php the_permalink();?>">
        <img src="<?php echo $product_thumbnail[0];?>" alt="<?php echo $product_thumbnail_alt;?>">
        <div class="ClientsContainerBoxPrice">
            <h3><?php the_title();?></h3>
            <p><?php echo $product->get_price_html();?></p>
        </div>
    </a>    
</div>
<?php endif; endwhile;  wp_reset_query();?>          
<!-- Featured products loop -->  
```