<?php get_header(); ?>
<main>
	<div class="white-wrap about">
		<?php if (get_field('features')[0] == 'Call To Action Header') { ?>
		<div class="jumbotron column full reversed" id="about" style="border-bottom:1px solid #c7c7c7;">
			<div class="column fourth white-wrap" style="padding:50px 25px; border-right:1px solid #c7c7c7;">
				<h1><?php the_field('heading'); ?></h1>
				<h6><?php the_field('paragraph_text'); ?></h6>
				<form action="//actionjacksonfitness.us3.list-manage.com/subscribe/post?u=2c878d49dd034641b49d2724a&amp;id=a84415273b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<input type="text" value="" name="MMERGE1" class="" id="mce-MMERGE1" placeholder="First Name">
					<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address*">
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div> 
					<div style="position: absolute; left: -5000px;"><input type="text" name="b_2c878d49dd034641b49d2724a_a84415273b" tabindex="-1" value=""></div>
					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
				</form>
			</div>
			<div class="column three-fourths">
				<img src="<?php the_field('main_image'); ?>">
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