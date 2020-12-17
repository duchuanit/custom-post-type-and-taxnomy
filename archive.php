<?php
get_header(); ?>

<?php
 $category = get_queried_object(); 
 echo $ct=$category->term_id; 
if(($ct == 3) || ($ct == 4) ) { 
get_template_part( 'template-parts/product-category' ); }
else {
echo 'category binh thuong';
}
?>

<?php get_footer(); ?>