<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$paged   = max( 1, (int) get_query_var( 'paged' ) );
$is_cat  = is_category();
$cur     = $is_cat ? get_queried_object_id() : 0;
$total   = (int) wp_count_posts()->publish;
$cats    = get_categories( array( 'hide_empty' => true, 'orderby' => 'count', 'order' => 'DESC' ) );
?>
<div class="wrap">
	<p class="crumb"><a href="<?php echo esc_url( mj_site() ); ?>/">Home</a> / <?php if ( $is_cat ) : ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a> / <?php single_cat_title(); ?><?php else : ?>Blog<?php endif; ?></p>
	<section class="hero">
		<p class="cap">The Meridian blog</p>
		<h1><?php if ( $is_cat ) { single_cat_title(); } elseif ( is_search() ) { echo 'Search results'; } elseif ( is_archive() ) { the_archive_title(); } else { echo 'Buying, selling and collecting fine watches'; } ?></h1>
		<p>Plain-spoken guides from the Meridian team: how to buy well, what shapes an offer when you sell, how we authenticate, and the stories behind the watches collectors ask us for most.</p>
		<ul class="cats">
			<li><a class="<?php echo $is_cat ? '' : 'on'; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>">All articles <span><?php echo (int) $total; ?></span></a></li>
			<?php foreach ( $cats as $c ) : if ( 'uncategorized' === $c->slug ) { continue; } ?>
			<li><a class="<?php echo ( $cur === $c->term_id ) ? 'on' : ''; ?>" href="<?php echo esc_url( get_category_link( $c->term_id ) ); ?>"><?php echo esc_html( $c->name ); ?> <span><?php echo (int) $c->count; ?></span></a></li>
			<?php endforeach; ?>
		</ul>
	</section>

	<?php if ( have_posts() ) : ?>
		<?php $first = ( 1 === $paged && ! $is_cat && ! is_search() ); ?>
		<?php if ( $first ) : the_post(); ?>
		<article class="feat">
			<a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><span class="ph"><?php echo mj_image( 1200, true ); ?></span></a>
			<div>
				<span class="flag">Latest</span>
				<?php echo mj_meta(); ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php echo esc_html( get_the_excerpt() ); ?></p>
				<a class="more" href="<?php the_permalink(); ?>">Read article</a>
			</div>
		</article>
		<?php endif; ?>

		<?php if ( have_posts() ) : ?>
		<div class="sec"><h2><?php echo $first ? 'All articles' : 'Articles'; ?></h2></div>
		<div class="grid">
			<?php while ( have_posts() ) : the_post(); mj_card(); endwhile; ?>
		</div>
		<?php endif; ?>

		<?php $links = paginate_links( array( 'type' => 'array', 'prev_text' => 'Previous', 'next_text' => 'Next' ) ); if ( $links ) : ?>
		<nav class="pag" aria-label="Pages"><?php echo wp_kses_post( implode( '', $links ) ); ?></nav>
		<?php endif; ?>
	<?php else : ?>
		<p style="padding:20px 0 70px">No articles here yet. <a href="<?php echo esc_url( home_url( '/' ) ); ?>">See all articles</a>.</p>
	<?php endif; ?>
</div>
<?php mj_cta(); get_footer();
