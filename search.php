<?php
/***
*   The template for displaying search results
*
*   @package VetClinic
*   @since 1.0.0
*/

//display header
get_header();
?>

<main class="site-main" id="main">    

    <?php if(have_posts()) : ?>
    
        <header class="search-result-banner">
            <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/11/search-results-banner.jpg" alt="search result banner">
            <div class="banner-shadow">
                <h1>SEARCH RESULTS</h1>
            </div>
        </header>
        
        <div class="blog-container">
            <div class="blog-content">
                <h2 class="category-title">
                    <!-- /* translators: %s: query term */ -->
                    <?php printf(esc_html__( 'YOU SEARCHED FOR: %s', 'design+code'), '<span>' . get_search_query() . '</span>'); ?>
                </h2>
                <div class="blue-bar category-heading-bar"></div>

                <!-- start loop -->
                <?php  while(have_posts()) : the_post(); ?>
                    
                
                <div class="text-wrap">
                    <!-- //do things -- display content : the function below will pull the content from the template partial. -->
                        <?php get_template_part( 'template-parts/content', 'search' ); ?>
                </div>
                
                <?php  endwhile; ?> 
                <!-- end while loop -->

                <div class="blog-bottom-bar"></div>
            </div>
            <div class="blog-rightside-bar"></div>
        </div>
                <?php else : ?>
                    
                    <!-- send to search page / some other general page with search function, tags, categories, archives,etc.. --> 
                    <?php get_template_part('template-parts/content', 'none'); ?>
    <?php endif; ?>
        <!-- This is where you would add pagination. Pagination in a search result page is smart idea, especially if your search returns a lot of results.--> 
</main>  

<!-- //display footer -->
<?php get_footer();

