<?php
/***
* This template is for displaying full blog article.
*
* @package Vet Clinic
* @since 1.0.0
*/
//display header
get_header();
?>

<?php if(have_posts()) : ?>
<!-- start the loop -->
    <?php while(have_posts()) : the_post(); ?>
        <div class="loving-paws-blog-header">
            <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/10/blog-banner-e1603156800546.jpg" alt="blog page banner" />
            <div class="banner-shadow">
                <h1>The Loving Paws Blog</h1>
            </div>
        </div>
        <div class="blog-container">
            <div class="blog-content">
                <div class="single-blog-header">  
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="blue-bar"></div>
                    <ul>
                        <li><?php the_author_posts_link(); ?> | <?php the_time('F jS, Y'); ?></li>
                        <li>Pets | Chinchillas | Wellness Care</li>
                    </ul>
                </div>

                <div class="text-wrap">
                    <?php
                    //do things -- display content : the function below will pull the content from the template partial.
                    get_template_part( 'template-parts/content', 'single' );
                    ?>
                </div>
                <div class="blog-bottom-bar"></div>
            </div>
            <div class="blog-rightside-bar"></div>
        </div>
    <?php endwhile; ?>
<!-- end while loop -->
    <?php else : ?>
<!-- send to search page / some other general page with search function, tags, categories, archives,etc.. -->
        <?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>
<!-- //display footer -->
<?php get_footer(); ?>