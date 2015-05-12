<?php 
get_header();
$optionname = 'main_theme_options'; $mainoptions = get_option($optionname);
?>
<main>
    <div class="jumbotron column full reversed white-wrap" id="about">
     <div class="column fourth" style="padding:25px;">
        <h1>Want abs like these?</h1>
        <h6>See whats been holding you back with my top 10 excersize mistakes video.</h6>
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
    <img src="<?php echo get_template_directory_uri(); ?>/images/abs.jpg">
</div>
</div>
<div class="column full color-wrap taligncenter logos">
    <h4>You probably saw him on...</h4>
    <div class="features taligncenter">
        <div class="seventh">
            <img src="<?php echo get_template_directory_uri(); ?>/images/espn.png">
        </div>
        <div class="seventh">
            <img src="<?php echo get_template_directory_uri(); ?>/images/nike.png">
        </div>
        <div class="seventh">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mens-health.png">
        </div>
        <div class="seventh">
            <img src="<?php echo get_template_directory_uri(); ?>/images/bodybuilding.png">
        </div>
        <div class="seventh">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mensfiness.png">
        </div>
        <div class="seventh">
            <img src="<?php echo get_template_directory_uri(); ?>/images/perfect.png">
        </div>
        <div class="seventh">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mf.png">
        </div>
    </div>
</div>
<div class="step-wrap testimonials" id="testimonials">
    <h3 class="taligncenter" style="padding-top:25px;">He transformed these peoples lifestyles...</h3>
    <?php query_posts(array('posts_per_page' => 3, 'post_type' => 'testimonials', 'orderby' => 'rand')); ?>
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
<div class="white-wrap feeds" id="feeds">
    <div class="spacer two-thirds column">
        <h4 style="padding:15px 0px;">Latest Posts</h4>
        <div class="white-wrap blog-posts">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
            <?php query_posts(array('posts_per_page' => 2, 'paged' => $paged)); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="blog-post">
                <div class="ft-img">
                   <?php
                   if ( has_post_thumbnail() ) {
                    the_post_thumbnail('full', array('class' => "alignleft ft-img"));
                } 
                else {
                    $rand = rand(0,3);
                    if ($rand == 0) {
                        $rand = 'blue';
                        $alt = 'jumprope';
                    }
                    elseif ($rand == 1) {
                        $rand = 'green';
                        $alt =  'weightlift';
                    }
                    elseif ($rand == 2) {
                        $rand = 'pink';
                        $alt = 'mediation';
                    }
                    else {
                        $rand = 'orange';
                        $alt = 'treadmill';
                    }
                    echo '<img src="'.get_template_directory_uri().'/images/fit-'.$rand.'.jpg" alt="'.$alt.'" class="alignleft ft-img">';
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
<div class="spacer column third">
    <h4 style="padding:15px 0px;">Topics</h4>
    <div class="color-wrap">
        <nav class="blog-nav">
          <?php wp_list_categories('show_count=1&title_li='); ?>  
      </nav>
</div>
</div>
<div class="jumbotron column full reversed" id="about">
    <div class="slider">
        <div class="friendly"><img src="<?php echo get_template_directory_uri(); ?>/images/muscles.png"></div>
    </div>
    <div class="overlay talignleft">
        <h1><?php the_field('bottom_content_headline', 'option'); ?></h1>
        <h6><?php the_field('bottom_content_sub_headline', 'option'); ?></h6>
        <hr/>
        <?php the_field('bottom_content', 'option'); ?>
        <p><a href="/about-me" class="btn">About Me</a></p>
    </div>
</div>
</div>
</main>
<?php get_footer(); ?>