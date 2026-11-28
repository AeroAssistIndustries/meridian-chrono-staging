<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<div class="wrap"><section class="hero" style="padding-bottom:70px">
	<p class="cap">Page not found</p>
	<h1>That page has moved</h1>
	<p>The article you are looking for is not here. <a href="<?php echo esc_url( home_url( '/' ) ); ?>">See all articles</a>.</p>
</section></div>
<?php get_footer();
