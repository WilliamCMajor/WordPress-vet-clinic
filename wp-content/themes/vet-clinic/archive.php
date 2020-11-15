<?php
/***
*   This is the archive template.
*   This is the template that displays a collection of posts, categories, tags or tag cloud(s), author, date, etc… 
*
*   @package VetClinic
*   @since 1.0.0
*/

//display header
get_header();
?>

<div class="archives-banner">
    <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/11/puppy-archives-banner.jpg" alt="puppy archives banner">
    <div class="banner-shadow">
        <h1><?php _e( 'Archives Page' ); ?></h1>
    </div>
</div>

<div class="archives-container">
    <div class="archives-column">
        <!-- /** _e(); translate the string into text like an echo(); would. **/ -->
        <h2><?php _e( 'Recent Posts' ); ?></h2>
        <div class="blue-bar"></div>
        <!-- /** the function below only displays the 10 most recent posts **/ -->
        <?php wp_get_archives('type=postbypost&limit=10'); ?>
        
    </div>

    <div class="archives-column">
        <!-- /** display all top-level categories **/ -->
        <h2><?php _e( 'Categories' ); ?></h2>
        <div class="blue-bar"></div>
        <?php wp_list_categories('depth=1'); ?>
        
    </div>

    <div class="archives-column">
        <!-- <div class="blue-bar"></div> -->
        <?php
            //displays the montly archives in a list
            the_widget( 'WP_Widget_Archives',
                    array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                    )
            );
        ?>
    </div>
</div>


<?php get_footer(); ?>





