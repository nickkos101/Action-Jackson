<?php get_header(); ?>
<main>
	<div class="white-wrap about">
		<?php if (get_field('features')[0] == 'Call To Action Header') { ?>
		<div class="column full" style="background-image:url('<?php the_field('background_image'); ?>');">
			<div class="container">
				<img src="<?php the_field('main_image'); ?>" class="alignright">
				<h2 style="padding-top:12%;"><?php the_field('heading'); ?></h2>
				<p><?php the_field('paragraph_text'); ?></p>
				<?php if (get_field('link_form') == 'Link') { ?> 
				<p><a href="<?php the_field('link'); ?>" class="btn"><?php the_field('button_text'); ?></a></p>
				<?php } ?>
				<?php if (get_field('link_form') == 'Form') { ?>
				<div class="column">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( get_field('ninja_form_id') ); } ?>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php } ?>
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