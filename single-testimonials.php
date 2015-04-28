<?php get_header(); ?>
<main>
	<div class="white-wrap about">
		<div class="spacer two-thirds column">
			<div class="white-wrap">
				<div class="about-post">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="alignleft testimonial-avatar"><?php echo autoc_get_img('avatarimg', '') ?></div>
					<h1><?php the_title(); ?></h1>
					<ul class="testimonial-stats">
						<li><i>Name:</i> <?php echo autoc_get_postdata('name'); ?></li>
						<li><i>Age:</i> <?php echo autoc_get_postdata('age'); ?></li>
						<li><i>Weight:</i> <?php echo autoc_get_postdata('weight'); ?></li>
						<li><i>Goal:</i> <?php echo autoc_get_postdata('goal'); ?></li>
						<li><i>Timeframe:</i> <?php echo autoc_get_postdata('timeframe'); ?></li>
					</ul>
					<div class="column full">
						<h4>My Story</h4>
						<?php the_content(); ?>
						<h4>My Results</h4>
						<?php echo autoc_get_postdata('results'); ?>
					</div>
				<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="spacer column third">
	<?php get_sidebar(); ?>
</div>
</div>
</main>
<?php get_footer(); ?>