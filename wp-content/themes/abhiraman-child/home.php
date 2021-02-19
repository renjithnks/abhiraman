<?php
/**
 * Template Name: Home
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

<div class="topstrip"></div>
<a href="mailto:av@abhiraman.com" class="myemail">av@abhiraman.com</a>
<div class="mylinks">
<a href="#">art</a>
<a href="#">music</a>    
</div>
<div class="undefined-object">
<p class="caption">Dear, Deer &amp; Zwan</p>    
</div>
<p class="copyright">igments.com@<span id="copyright_year"></span></p>


<script>
document.getElementById('copyright_year').innerHTML=(new Date().getFullYear());
</script>
<?php
get_footer();
?>