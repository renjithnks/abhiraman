<?php
/**
 * Template Name: Wedding
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Abhiraman
 * @since Abhiraman 1.0
 */

get_header();
?>

<div class="main-title-wrapper">
<div class="main-title">
<div class="main-title-text"><?php echo carbon_get_the_post_meta( 'wedding-title' ); ?></div>
<img src="<?php bloginfo('stylesheet_directory')?>/assets/images/title-design.svg" alt="main-image">

</div>
</div>



<div class="main-image-container">
<img src="<?php echo carbon_get_the_post_meta('main-image');?>" width="100px" height="100px" />
<div class="couples-names">
<p><?php echo carbon_get_the_post_meta( 'groom-name' ); ?></p>
<p><?php echo carbon_get_the_post_meta( 'bride-name' ); ?></p>
</div>
</div>

<div class="container">
<div class="quote-wrapper">
<div class="quote-text"><?php echo carbon_get_the_post_meta( 'quote-text' ); ?></div>
<div class="quote-author"><?php echo carbon_get_the_post_meta( 'quote-author' ); ?></div>
</div>

<div class="date-and-venue-wrapper">
<div class="date-wrapper">
<span class="date"><?php echo carbon_get_the_post_meta( 'date' ); ?></span>
<div class="day-year"><?php echo carbon_get_the_post_meta( 'month-year' ); ?></div>
</div>
<div class="splitter"><img src="<?php bloginfo('stylesheet_directory')?>/assets/images/date-year-devider.svg" alt="main-image" /></div>
<div class="venue-and-muhurtham-wrapper">
<div class="venue"><?php echo carbon_get_the_post_meta( 'venue' ); ?></div>
<div class="muhurtham"><?php echo carbon_get_the_post_meta( 'muhurtham' ); ?></div>
</div>

</div>

<div class="live-link-and-location-wrapper">
<div class="live-link-container">
<div class="title"><img src="<?php bloginfo('stylesheet_directory')?>/assets/images/youtube-icon.svg" alt="main-image" />Live YouTube Link</div>
<?php echo carbon_get_the_post_meta( 'livelink' ); ?>
</div>
<div class="location-map-container">
<div class="title"><img src="<?php bloginfo('stylesheet_directory')?>/assets/images/map-icon.svg" alt="main-image" />Get Direction</div>
<a href="<?php echo carbon_get_the_post_meta( 'location-map' ); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory')?>/assets/images/location-photo.jpg" alt="main-image" />
</a>
</div>
</div>


<div class="photos">
<?php
$photos = carbon_get_the_post_meta( 'photos' ); 
foreach ( $photos as $photos ) {
?>
<img src="<?php echo $photos['photos'] ?>" width="310" height="130"/>
<?php
}	
?>
</div>


<div class="wish-wrapper">
<div class="wish-text"><?php echo carbon_get_the_post_meta( 'wishtext' ); ?></div>
<div class="wish-couple-names"><?php echo carbon_get_the_post_meta( 'couplenames' ); ?></div>
</div>

<?php
get_footer();
?>