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
<img src="<?php echo carbon_get_the_post_meta('titleimg');?>" width="100px" height="100px" /><!--<img src="<?php bloginfo('stylesheet_directory')?>/assets/images/title-design.svg" alt="main-image">--></div>


<div class="main-image-container">
<img src="<?php echo carbon_get_the_post_meta('main-image');?>" width="100px" height="100px" />
<div class="couples-names">
<img src="<?php bloginfo('stylesheet_directory')?>/assets/images/shabana-and-abhiraman.png" alt="main-image" width="235px" height="100px" />
</div>
</div>

<div class="container">


<div class="date-wrapper"> <!--<span class="date"><?php echo carbon_get_the_post_meta( 'date' ); ?></span>-->

<div class="day-year"><?php echo carbon_get_the_post_meta( 'month-year' ); ?></div>
<div class="splitter"></div>
<div class="daycount-wrapper">
<div id="daystogo"></div>
<div class="daycount-text"><?php echo carbon_get_the_post_meta( 'daystogotext' ); ?></div>
</div>
</div>

<div class="venue-and-muhurtham-wrapper">
<div class="venue"><?php echo carbon_get_the_post_meta( 'venue' ); ?></div>
<div class="muhurtham"><?php echo carbon_get_the_post_meta( 'muhurtham' ); ?></div>
</div>


<div class="live-link-and-location-wrapper">
<div class="live-link-container">
<div class="title"><img src="<?php bloginfo('stylesheet_directory')?>/assets/images/youtube-icon.svg" alt="main-image" />Live YouTube Link</div>
<?php echo carbon_get_the_post_meta( 'livelink' ); ?>
</div>
<div class="location-map-container">
<div class="title"><img src="<?php bloginfo('stylesheet_directory')?>/assets/images/map-icon.svg" alt="main-image" /><?php echo carbon_get_the_post_meta( 'location-title' ); ?></div>
<a href="<?php echo carbon_get_the_post_meta( 'location-map' ); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory')?>/assets/images/location-photo.jpg" alt="main-image" />
</a>
</div>
</div>


<div class="quote-wrapper">
<div class="quote-text"><?php echo carbon_get_the_post_meta( 'quote-text' ); ?></div>
<div class="quote-author"><?php echo carbon_get_the_post_meta( 'quote-author' ); ?></div>
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


<div class="courtesy-wrapper">
<div class="courtesy-text"><?php echo carbon_get_the_post_meta( 'piccourtesy' ); ?></div>
<div class="courtesy-text"><?php echo carbon_get_the_post_meta( 'webcourtesy' ); ?></div>
</div>

<?php
get_footer();
?>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 28, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("daystogo").innerHTML = days;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>