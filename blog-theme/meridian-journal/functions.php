<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
} );

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'mj-fonts', 'https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62..125,100..900&family=Cinzel:wght@400..700&display=swap', array(), null );
	wp_enqueue_style( 'mj-style', get_stylesheet_uri(), array( 'mj-fonts' ), '1.0.0' );
} );

add_filter( 'excerpt_length', function () { return 26; } );
add_filter( 'excerpt_more', function () { return '&hellip;'; } );

function mj_site() { return 'https://meridianchrono.com'; }

function mj_read_time( $post_id = null ) {
	$words = str_word_count( wp_strip_all_tags( get_post_field( 'post_content', $post_id ) ) );
	return max( 1, (int) round( $words / 200 ) ) . ' min read';
}

function mj_photo_id( $slug ) {
	$map = array(
		'how-to-sell-a-rolex-what-to-gather-and-what-shapes-the-offer' => '1790699807407-05e577c9704d',
		'pre-owned-unworn-and-new-what-the-words-mean' => '1581063683670-6df2247f1d8e',
		'how-we-tell-a-real-watch-from-a-fake' => '1788125856699-aee0e94d9150',
		'rolex-submariner-or-gmt-master-ii-choosing-between-two-icons' => '1547996160-81dfa63595aa',
		'why-some-watches-sell-for-more-than-retail' => '1638872726444-0579101a60e7',
		'your-first-luxury-watch-five-questions-to-ask-before-you-buy' => '1649357585015-179ed98f513d',
		'patek-philippe-nautilus-and-aquanaut-how-they-differ' => '1626624386327-5204714bae9f',
		'how-a-watch-trade-in-works' => '1602103146071-b3b209c8ca9b',
		'the-omega-speedmaster-why-the-moonwatch-endures' => '1731446451263-fc3881d4973d',
		'insuring-and-storing-a-watch-collection' => '1604242692760-2f7b0c26856d',
	);
	return isset( $map[ $slug ] ) ? $map[ $slug ] : '';
}

function mj_image( $width = 900, $eager = false ) {
	$alt = esc_attr( get_the_title() );
	$load = $eager ? 'eager' : 'lazy';
	if ( has_post_thumbnail() ) {
		return get_the_post_thumbnail( null, $width > 1000 ? 'large' : 'medium_large', array( 'alt' => $alt, 'loading' => $load ) );
	}
	$id = mj_photo_id( get_post_field( 'post_name' ) );
	if ( ! $id ) { return ''; }
	$src = 'https://images.unsplash.com/photo-' . $id . '?auto=format&fit=crop&q=70&w=' . (int) $width;
	return '<img src="' . esc_url( $src ) . '" alt="' . $alt . '" loading="' . $load . '" onerror="this.remove()">';
}

function mj_cat() {
	$cats = get_the_category();
	if ( empty( $cats ) ) { return ''; }
	return '<a class="cap" href="' . esc_url( get_category_link( $cats[0]->term_id ) ) . '">' . esc_html( $cats[0]->name ) . '</a>';
}

function mj_meta() {
	$cat = mj_cat();
	return '<div class="meta">' . $cat . ( $cat ? '<i></i>' : '' ) . '<span>' . esc_html( mj_read_time() ) . '</span></div>';
}

function mj_card() {
	?>
	<article class="card">
		<a href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true"><span class="ph"><?php echo mj_image( 700 ); ?></span></a>
		<?php echo mj_meta(); ?>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p><?php echo esc_html( get_the_excerpt() ); ?></p>
		<a class="more" href="<?php the_permalink(); ?>">Read article</a>
	</article>
	<?php
}

function mj_cta() {
	?>
	<section class="cta"><div class="wrap">
		<h2>Looking for a specific watch?</h2>
		<p>Tell us the reference and a specialist searches our dealer network for it. Or send us the details of a watch you would like to sell or trade.</p>
		<div class="row"><a class="btn gold" href="<?php echo esc_url( mj_site() ); ?>/source/">Source a watch</a><a class="btn ghost" href="<?php echo esc_url( mj_site() ); ?>/sell/">Sell or trade</a></div>
	</div></section>
	<?php
}
