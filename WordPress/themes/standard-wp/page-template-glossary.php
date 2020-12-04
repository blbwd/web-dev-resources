<?php
/*
Template Name: Glossary
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
<?php
if (isset($_POST['glossarySearchSubmit']))
{
    $glossary_keyword = $_POST['glossary_keyword'];
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'glossary_item',
        's' => $glossary_keyword,
        'orderby' => 'title',
        'order'   => 'ASC',
        'post_status' => 'publish'
    );
    $loop = new WP_Query( $args );
}
elseif ($_GET['search'] != '') {
    $glossary_keyword = $_GET['search'];
    global $wpdb;
    $first_char = esc_attr($glossary_keyword);
    $postids = $wpdb->get_col($wpdb->prepare("
	SELECT      ID
	FROM        $wpdb->posts
	WHERE       SUBSTR($wpdb->posts.post_title,1,1) = %s
	AND 		$wpdb->posts.post_type = 'glossary_item'
    ORDER BY    $wpdb->posts.post_title",$first_char));
    
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'glossary_item',
        'post__in' => $postids,
        'post_status' => 'publish'
    );
    $loop = new WP_Query( $args );

}
else {
    $args = array(
        'posts_per_page' => 10,
        'post_type' => 'glossary_item',
        'orderby' => 'title',
        'order'   => 'ASC',
        'post_status' => 'publish'
        );
    $loop = new WP_Query( $args );
}

?>
<div class="container">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="glossaryContainer">
<h3>Glossary</h3>
<div class="glossarySearch">
<h6>Search for glossary terms</h6>
<form name="glossarySearch" method="POST" action="">
<input type="text" name="glossary_keyword" class="glossarySearchField" placeholder="Enter Dutch word">
<input type="submit" name="glossarySearchSubmit" value="Search" class="glossarySearchBtn">
</form>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<div class="glossaryList">
<ul>
<li><a href="<?php echo get_home_url();?>/glossary/">All</a></li>	
<li><a href="?search=a">A</a></li>
<li><a href="?search=b">B</a></li>
<li><a href="?search=c">C</a></li>
<li><a href="?search=d">D</a></li>
<li><a href="?search=e">E</a></li>
<li><a href="?search=f">F</a></li>
<li><a href="?search=g">G</a></li>
<li><a href="?search=h">H</a></li>
<li><a href="?search=i">I</a></li>
<li><a href="?search=j">J</a></li>
<li><a href="?search=k">K</a></li>
<li><a href="?search=l">L</a></li>
<li><a href="?search=m">M</a></li>
<li><a href="?search=n">N</a></li>
<li><a href="?search=o">O</a></li>
<li><a href="?search=p">P</a></li>
<li><a href="?search=q">Q</a></li>
<li><a href="?search=r">R</a></li>
<li><a href="?search=s">S</a></li>
<li><a href="?search=t">T</a></li>
<li><a href="?search=u">U</a></li>
<li><a href="?search=v">V</a></li>
<li><a href="?search=w">W</a></li>
<li><a href="?search=x">X</a></li>
<li><a href="?search=y">Y</a></li>
<li><a href="?search=z">Z</a></li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<table class="table table-hover glossaryTable">
<thead>
<tr>
<th>Dutch Term</th>
<th>English Term</th>
<th>Definition</th>
</tr>
</thead>
<tbody>
<!-- Glossary loop -->	
<?php
while ( $loop->have_posts() ) : $loop->the_post();
$english_term = get_post_meta( $post->ID, 'english_term', true );	
$english_definition = get_post_meta( $post->ID, 'english_definition', true );
?>
<tr>
<td><span class="term1"><?php the_title();?></span></td>
<td><span class="term2"><?php echo $english_term;?></span></td>
<td><?php echo $english_definition;?></td>
</tr>
<?php endwhile;  wp_reset_query(); ?>
<!-- Glossary loop -->	

</tbody>
</table>
</div>
</div>

</div>
<?php get_footer(); ?>