<?php
/***
*   The template for displaying a 404 page.
*
*   @package VetClinic
*   @since 1.0.0
*/
//display header

get_header();
?>

<main class="site-main" id="main">
	<section class="error-404 not-found">
		<header class="error-404-banner">
            <img src="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/wp-content/uploads/2020/10/404-2.jpg" alt="404 error page">
			<h1 class="page-title"> 
                <?php esc_html_e( 'Oh! Hello!', 'theme name here' ); ?> 
            </h1>
            <p><?php esc_html_e( 'Looks like you found yourself a 404 page. Nothing to see here!', 'theme name here' ); ?></p> 
        </header>
        
        <div class="page-404-content">
			<div class="page-404-search-container">
			    <p>
                    <?php esc_html_e( 'Sorry! We can’t seem to find the you were looking for. Please check that you typed your address correctly, go back to the previous page,try using the search to find something specific or the links below. ', 'theme name here' ); ?> 
                </p>
    
    			<!-- display the search form -->
    			<?php get_search_form(); ?>
			</div>

            <div class="archives-container">
                <div class="archives-column">
                    <!-- recent posts -->
                    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
                </div>
    
    			<div class="archives-column">
    			    <!-- display categories -->
        			<div class="widget widget_categories">
                        <h2 class="widget-title"> <?php esc_html_e( 'Most Used Categories', 'theme name here' ); ?> </h2>
                        <ul>
                            <?php 
                                wp_list_categories(
                                    array(
                                        'orderby'    => 'count',
                                        'order'      => 'DESC',
                                        'show_count' => 1,
                                        'title_li'   => '',
                                        'number'     => 10,
                                    ) //end of array
                                ); //end of wp_list categories
                            ?> 
                        </ul>
                    </div>
    			</div>
                
                <div class="archives-column">                   
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
            <!-- or as a list -->

            <?php
                //translators: %1$s: smiley
                // $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'theme name here' ), convert_smilies( ':)' ) ) . '</p>';
                // //the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=$archive_content" );
                // the_widget( 'WP_Widget_Archives', "after_title=$archive_content",
                //         array(
                //             'orderby'    => 'count',
                //             'order'      => 'DESC',
                //             'show_count' => 1,
                //         )
                // );
            ?>

		</div> <!-- //page content -->
	</section>
</main>

<?php get_footer(); ?>



