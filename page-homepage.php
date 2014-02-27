<?php
/**
 * Template Name: Page - Homepage
 *
 * @package WordPress
 * @subpackage Rust_Bucket
 * @since Rust Bucket 2014
 */

get_header(); ?>

<ul class="bxslider">
  <li><img src="<?php echo get_template_directory_uri(); ?>/img/banners/image1.jpg" /></li>
  <li><img src="<?php echo get_template_directory_uri(); ?>/img/banners/image2.jpg" /></li>
</ul>

<div id="main" class="wrapper">


<?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php echo the_content() ?>
            <?php endwhile; ?>

        <?php endif; ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>