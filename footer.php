			<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">
					
					<div class="footer-outer">

						<div class="location footer-area">
							<?php the_field('well_location', 'option'); ?>
						</div>

						<div class="map footer-area">
							<?php the_field('well_map', 'option'); ?>
						</div>

						<div class="parking footer-area">
							<?php the_field('parking', 'option'); ?>
						</div>

					</div>

					<div class="social cf">
						<?php the_field('social_links', 'option'); ?>
					</div>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
