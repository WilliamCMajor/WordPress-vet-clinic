<?php
/***
*   Template part for displaying content in the search.php
*
*   @package design+code demo
*   @since 1.0.0
*/
?>

<article <?php post_class();?> id="post-<?php the_ID();?>" >
    
<!-- entry header -->
    <header class="search-results">
    
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

        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="post-meta-area">
                
               
                
                <!-- this if/else already comes predefined in a list items as clickable links - check the dev tools -->
                <?php
                    if( has_category() ){
                        //display the category
                        the_category();
                    }
                ?>
            </div>
        <?php endif; ?>
    
    </header>

    <div class=”entry-summary”>
        <?php the_excerpt(); ?>
    </div>

</article>





