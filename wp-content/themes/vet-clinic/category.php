<?php
/***
*   Template part for displaying for displaying category types.
*   @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#category-php-tag-php-and-taxonomy-php
*
*   @package vetclinic
*   @since 1.0.0
*/

//display header
get_header();
?>

<main <?php post_class();?> id="post-<?php the_ID();?>" >

    <?php if(have_posts()) : ?>

        <!-- start the loop -->   
        <!-- /** the header of the category page sits in the in the loop, but outside the the while loop section **/ -->
        <header class="category-header">
                        
            <!-- display h1 heading by setting single_cat_title to true, it will display the category you clicked -->
            <div class="categories-banner">
                <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/11/category-banner.jpg" alt="category banner" />
                <div class="banner-shadow">
                    <h1 class="category-title">Category<?php //single_cat_title( '', true ); ?></h1>
                </div>
            </div>
            
                        
            <!-- /**display the category description - again this is optional feature. **/ -->
            <?php if ( category_description() ) : ?>
                    <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>      
        </header>
     
        <div class="blog-container">
            <div class="blog-content">
                <h2 class="category-title">CATEGORY: <?php single_cat_title( '', true ); ?></h2>
                <div class="blue-bar category-heading-bar"></div>
                <?php  while(have_posts()) : the_post(); ?>
                
                        <!-- - display a clickable link to the post/page based on the associated search term/post  | -the_permalink() creates a clickable link. -->
                        <div class="single-blog-header">  
                            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        
                            <ul>
                                <!-- displays the date of the post and a link to display the author info. Note: there is an author.php which is also part of the archive family. We may create an author page. -->
                                <li><?php the_author_posts_link(); ?> | <?php the_time('F jS, Y'); ?></li>
                                <li><?php $post_tags = get_the_tags();
                                        if ( $post_tags ) {
                                            foreach( $post_tags as $tag ) {
                                            echo $tag->name . ' | '; 
                                            }
                                        } ?>
                                </li>
                            </ul>
                        </div>      
                        
                        <div class="text-wrap">
                            <!-- this could be an excerpt(); too, based on the length of the content displayed. -->
                            <?php the_excerpt(); ?>
                        
                        </div>
                        
                <?php endwhile; ?>
                <div class="blog-bottom-bar"></div>
            </div>
            <div class="blog-rightside-bar">
                <?php get_template_part('template-parts/sidebar', 'primary'); ?>
            </div>
        </div>
        <?php else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
                
    <?php endif; ?>
    
    <!-- this would be where you add your right sidebar or widgets -->
</main>

<?php get_footer(); ?>
           
