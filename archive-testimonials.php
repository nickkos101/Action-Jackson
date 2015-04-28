<?php 
get_header();
$optionname = 'main_theme_options'; $mainoptions = get_option($optionname);
?>
<main>
    <div class="step-wrap testimonials testimonials-page">
        <h2 class="taligncenter" style="padding-top:25px;">Testimonials</h2>
        <?php query_posts(array('posts_per_page' => 99, 'post_type' => 'testimonials')); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="spacer column third">
            <div class="gray-wrap testimonial">
                <div class="ft-img">
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } 
                    ?>
                </div>
                <div class="overlay">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
                <div class="testimonial-content">
                    <?php the_excerpt(); ?>
                    <p class="talignright"><a class="btn" href="<?php the_permalink(); ?>">See Story</a></p>
                </div>
            </div>
        </div>
    <?php endwhile; else: endif; ?>
</div>
</main>
<?php get_footer(); ?>