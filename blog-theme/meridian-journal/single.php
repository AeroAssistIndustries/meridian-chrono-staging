<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
while ( have_posts() ) : the_post();
?>
<div class="wrap">
	<p class="crumb"><a href="<?php echo esc_url( mj_site() ); ?>/">Home</a> / <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a> / <?php the_title(); ?></p>
	<article class="art">
		<?php echo mj_meta(); ?>
		<h1><?php the_title(); ?></h1>
		<p class="by">By <?php the_author(); ?> &middot; <?php echo esc_html( get_the_date() ); ?></p>
		<?php $img = mj_image( 1400, true ); if ( $img ) : ?><span class="ph"><?php echo $img; ?></span><?php endif; ?>
		<div class="body"><?php the_content(); ?></div>
		<a class="more back" href="<?php echo esc_url( home_url( '/' ) ); ?>">&larr; All articles</a>
	</article>
	<?php
	$rel = new WP_Query( array( 'posts_per_page' => 3, 'post__not_in' => array( get_the_ID() ), 'ignore_sticky_posts' => true, 'category__in' => wp_get_post_categories( get_the_ID() ) ) );
	if ( $rel->post_count < 3 ) { $rel = new WP_Query( array( 'posts_per_page' => 3, 'post__not_in' => array( get_the_ID() ), 'ignore_sticky_posts' => true ) ); }
	if ( $rel->have_posts() ) : ?>
	<div class="sec"><h2>Keep reading</h2><a class="more" href="<?php echo esc_url( home_url( '/' ) ); ?>">All articles</a></div>
	<div class="grid"><?php while ( $rel->have_posts() ) : $rel->the_post(); mj_card(); endwhile; wp_reset_postdata(); ?></div>
	<?php endif; ?>
</div>
<?php
endwhile;
mj_cta();
get_footer();
