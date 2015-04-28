<?php 
get_header();
$optionname = 'main_theme_options'; $mainoptions = get_option($optionname);
?>
<main>
<div class="white-wrap feeds">
    <div class="spacer column full">
        <h1><?php single_cat_title( '', true ); ?></h1>
    </div>
    <div class="spacer column third">
        <div class="color-wrap">
            <nav class="blog-nav">
               <?php wp_list_categories('show_count=1&title_li='); ?>            
           </nav>
            <div class="white-wrap phraser">
                <h5>Get a <span>free</span> workout just for <span>you!</span></h5>
                <p>If you want abs like me, you have to workout like me - enter your email below and get started.</p>
                <form>
                    <input placeholder="Email Address" class="third" type="email">
                    <input type="submit" value="Get Workout!">
                </form>
                <h5>Random Ways to Say Jacked:</h5>
                <h1><span class="randJack">DONKEY YOKED</span></h1>
            </div>
        </div>
    </div>
    <div class="spacer two-thirds column">
        <div class="white-wrap blog-posts">
            <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
            $category = get_the_category();
            $categoryid = $category[0]->cat_ID;
            ?>
            <?php query_posts(array('paged' => $paged, 'cat' => $categoryid)); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blog-post">
                <div class="ft-img">
                 <?php
                 if ( has_post_thumbnail() ) {
                    the_post_thumbnail('full', array('class' => "alignleft ft-img"));
                } 
                ?>
            </div>
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <date><?php the_category(', '); ?></date>
            <p><?php the_excerpt(); ?></p>
            <p class="talignright"><a class="btn" href="<?php the_permalink(); ?>">Read More</a></p>
        </div>
    <?php endwhile; else: endif; ?>
    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>
</div>
</div>
</div>
</main>
<?php get_footer(); ?>