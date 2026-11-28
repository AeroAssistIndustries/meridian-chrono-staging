<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
while ( have_posts() ) : the_post();
?>
<div class="wrap">
	<article class="art" style="padding-top:34px">
		<h1><?php the_title(); ?></h1>
		<div class="body"><?php the_content(); ?></div>
	</article>
</div>
<?php
endwhile;
get_footer();
