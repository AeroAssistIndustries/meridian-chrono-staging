<?php if ( ! defined( 'ABSPATH' ) ) { exit; } $s = mj_site(); ?>
</main>
<footer class="ft"><div class="wrap">
	<div class="top">
		<div>
			<img src="<?php echo esc_url( $s ); ?>/brand/meridian-logo-gold.svg" alt="Meridian Chrono Group" width="156" height="74" loading="lazy">
			<p>Authenticated luxury watches, private sourcing and trade-ins.</p>
			<a href="tel:+15207284553">+1 (520) 728-4553</a>
			<a href="mailto:info@meridianchrono.com">info@meridianchrono.com</a>
			<a href="https://www.instagram.com/meridianchronogroup" rel="noopener">Instagram: @meridianchronogroup</a>
		</div>
		<div><h4>Shop</h4><a href="<?php echo esc_url( $s ); ?>/shop/">All watches</a><a href="<?php echo esc_url( $s ); ?>/rolex/">Rolex</a><a href="<?php echo esc_url( $s ); ?>/patek-philippe/">Patek Philippe</a><a href="<?php echo esc_url( $s ); ?>/audemars-piguet/">Audemars Piguet</a><a href="<?php echo esc_url( $s ); ?>/omega/">Omega</a><a href="<?php echo esc_url( $s ); ?>/cartier/">Cartier</a></div>
		<div><h4>Services</h4><a href="<?php echo esc_url( $s ); ?>/source/">Source a watch</a><a href="<?php echo esc_url( $s ); ?>/sell/">Sell or trade</a><a href="<?php echo esc_url( $s ); ?>/authentication/">Authentication</a><a href="<?php echo esc_url( $s ); ?>/contact/">Book an appointment</a></div>
		<div><h4>Learn</h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a><a href="<?php echo esc_url( $s ); ?>/journal/">Guides and glossary</a><a href="<?php echo esc_url( $s ); ?>/tools/">The watch desk</a><a href="<?php echo esc_url( $s ); ?>/faq/">Questions</a><a href="<?php echo esc_url( $s ); ?>/terms/">Terms of use</a><a href="<?php echo esc_url( $s ); ?>/privacy/">Privacy policy</a></div>
	</div>
	<div class="legal">
		<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Meridian Chrono Group. All rights reserved.</p>
		<p>Meridian Chrono Group is an independent dealer. We are not an authorized dealer for, and are not affiliated with, sponsored or endorsed by, any watch brand named on this site. All brand names, model names and logos belong to their respective owners and are used only to identify the watches discussed.</p>
		<p>Articles are general information, not financial or investment advice. Watch values can fall as well as rise.</p>
	</div>
</div></footer>
<script>(function(){var b=document.getElementById('mt'),n=document.getElementById('nav');if(b&&n){b.addEventListener('click',function(){var o=n.classList.toggle('open');b.setAttribute('aria-expanded',o)})}})();</script>
<?php wp_footer(); ?>
</body>
</html>
