<?php get_header(); ?>
<main>
	<div class="white-wrap about">
		<div class="spacer two-thirds column">
			<div class="white-wrap">
				<div class="about-post">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h4><?php the_title(); ?></h4>
					<date><?php the_date(); ?></date>
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('full', array( 'class' => 'alignleft' ) );
					} 
					?>
					<?php the_content(); ?>
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