<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php
global $wpdb;

$result = $wpdb->get_results ( "SELECT * FROM `test_posts` WHERE post_type = 'products'" );

foreach ( $result as $page )
{
   echo $page->post_title.'<br/>';
   echo $page->post_content.'<br/>'; 
}


?>



<?php get_footer();
