<?php
/***
* The template for displaying all blog posts.
*
* @package Vet Clinic
* @since 2.0.0
*/
//display header
get_header();
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <div class="loving-paws-blog-header">
        <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/11/blog-banner.jpg" alt="blog page banner" />
        <div class="banner-shadow">
            <h1>The Loving Paws Blog</h1>
        </div>
    </div>

    <div class="blog-container">
        <div class="blog-content">
            <?php if(have_posts()) : ?>
                <div class="loving-paws-content-container">
                    <!-- start the loop | the loop grabs all the content and cycles through all of the content until it’s done. -->
                    <?php while(have_posts()) : the_post(); ?>
                    <!-- display the all of the blog posts -->
                        
                        <div class="loving-paws-blog-box">            
                            <?php echo get_the_post_thumbnail( $post->ID, array(363, 363)); ?>              
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></h2>
                            <ul>
                                <li><li><?php the_author_posts_link(); ?> | <?php the_time('F jS, Y'); ?></li></li>
                                <li><?php the_excerpt(); ?></li>
                                <li><a href="<?php get_the_post_thumbnail_url()?>">READ MORE ></a></li>
                            </ul>
                        </div>
                        
                    <?php endwhile; ?>
                </div>
            <!-- end while loop -->
            <?php else : ?>
            <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
                <?php get_template_part('template-parts/content', 'none'); ?>
            <?php endif; ?>
            
            <div class="blog-bottom-bar"></div>
        </div>
        <div class="blog-rightside-bar">
            <?php get_template_part('template-parts/sidebar', 'primary'); ?>
        </div>
    </div>
<!-- //On this page specifically - this would be area to add pagination and a sidebar - out of the loop. -->
</article>
<!-- //display footer -->
<?php get_footer(); ?>