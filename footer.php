<?php
/*
* The footer for our theme
* footer content.
*
* @package design+code demo
* @since 2.0.0
*/
?>

        </div>
 <!-- closing tag for site-content"> -->
        <footer>
            <!-- call partial sidebar template -->
            <?php get_template_part('template-parts/sidebar', 'footer')?>
            <!-- display bottom footer area -->
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>