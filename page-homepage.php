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
    <div class="block-wrapper">
        <div class="block left">
            <span>
                <h3>Server Information</h3>
                Current server information, including server name, players online and map name.
                <br /><br />
                00.000.000.000:00000<br />
                RustBucket UK/EU<br />
                rust_island_2013<br />
                13/100 Players online
            </span>
        </div>
        <div class="block center-left">
            <span>
                <h3>Twitter</h3>
                <a href="https://twitter.com/RustBucket" target="_blank">@RustBucket</a><br />
                [Latest Tweet from the rust bucket account, with lots of goodness]<br />
                [27th Feb 2014 - 10:02am]<br />
                <a href="/">View on Twitter</a> | <a href="/">Follow @RustBucket</a>
            </span>
        </div>
        <div class="block center-right">
            <span>
                <h3>Forum</h3>
                [Recent Comments]
            </span>
        </div>
        <div class="block right">
            <span>
                <h3>Vote for Us</h3>
                Please vote for us to help grow the server and community.<br />
                [Vote button]<br />
                [Vote button]<br />
                [Vote button]<br /><br />
                Please also consider donating to help keep the server and website running.
                [Donate Button]
            </span>
        </div>
        <div class="clear"></div>
    </div>
    
    
    <p>Some content</p>
    
</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>