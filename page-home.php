<?php
/*
 Template Name: Home Page
 *
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

			<div class="slider">

			<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '21' ); } ?>

			</div>

				<div id="inner-content" class="wrap cf">


						<main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

									?>

									<div class="callout-outer">
										<?php the_field('callout'); ?>
									</div>

									<div class="why-outer">
										<?php the_field('why'); ?>
									</div>

									<div class="testimonials-outer">

									<h2>Testimonials</h2>

									<ul class="testimonials-list owl-carousel">



					<?php // WP_Query arguments
					$args = array (
						'post_type'              => 'gcic_testimonials',
						'post_status'            => 'publish',
						'order'					 => 'ASC',
					);
						
					// The Query
					$query = new WP_Query( $args );
						
					// The Loop
					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						$query->the_post(); ?>

						<li class="testimonial triangle-right">
							
						<div class="testimonial-outer">

							

								<?php the_content(); ?>

							


						</div>

							<?php }
						} else {
							// no posts found
						} ?>
						
						</li>
						<?php // Restore original Post Data
						wp_reset_postdata(); ?>

					</ul>

									</div>

									<div class="what-outer">

									<div class="offer-outer what">
										<?php the_field('what_we_offer'); ?>
									</div>

									<div class="believe-outer what">
										<?php the_field('what_we_believe'); ?>
									</div>

									<div class="ask-outer what">
										<?php the_field('what_we_ask'); ?>
									</div>

									</div>

									<div class="who-outer">
										<?php the_field('who_chooses_well'); ?>
									</div>

								</section>


								<footer class="article-footer">

                 

								</footer>

								

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

						

				</div>

			</div>


<?php get_footer(); ?>
<script>
jQuery(document).ready(function($){
	$('.owl-carousel').owlCarousel({
    items:1,
    nav: true,
    loop:true,
    autoplay:true,
    autoplayTimeout: 14000,
    // animateOut: 'fadeOut',
});
	$('.owl-prev').html('&lsaquo;');
	$('.owl-next').html('&rsaquo;');
});


</script>
