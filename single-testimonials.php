<?php get_header(); ?>
<main>
	<div class="white-wrap about">
		<div class="spacer two-thirds column">
			<div class="white-wrap">
				<div class="about-post">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!--<div class="alignleft testimonial-avatar"><?php echo autoc_get_img('avatarimg', '') ?></div>-->
					<h1><?php the_title(); ?></h1>
					<ul class="testimonial-stats">
						<?php if (get_field('name')) { ?><li><i>Name:</i> <?php the_field('name'); ?></li><?php } ?>
						<?php if (get_field('age')) { ?><li><i>Age:</i> <?php the_field('age'); ?></li><?php } ?>
						<?php if (get_field('weight')) { ?><li><i>Weight:</i> <?php the_field('weight'); ?></li><?php } ?>
						<?php if (get_field('goal')) { ?><li><i>Goal:</i> <?php the_field('goal'); ?></li><?php } ?>
						<?php if (get_field('timeframe')) { ?><li><i>Timeframe:</i> <?php the_field('timeframe'); ?></li><?php } ?>
					</ul>
					<div class="column full">
						<h4>My Story</h4>
						<?php the_content(); ?>
						<h4>My Results</h4>
						<?php the_field('results'); ?>
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