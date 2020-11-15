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
            <div class="footer-ready-book">
                <h2>READY TO MAKE AN APPOINTMENT?</h2>
                <button class="blue-book-button"><a href="http://she8.dmitstudent.ca/dmit2032/vetclinic-siqing/contact-us/">BOOK NOW!</a></button>
            </div>

            <!-- call partial sidebar template -->
            <?php get_template_part('template-parts/sidebar', 'footer')?>
            <!-- display bottom footer area -->

            <!-- Navigation -->
         <div class="footer-nav">
            <?php wp_nav_menu(
               //in our menu we need to use an array as there is number of arguments we can use.
               //the most important is theme_location.
               array(
                  'theme_location' => 'main-menu',
                  'container_class' => 'main-nav', //class that is applied to the container
                  'container_id' => 'main-nav', //id that is applied to the container.
                  'menu_class' => 'main-menu', //class used for the ul element which forms the menu. 'Default Menu'
                  'menu_id' => 'main-menu', //id used for the ul element which forms the menu. 'Default Menu'
                  'fallback_cb' => '' //if the menu doesn't exsist, a callback function will fire. Set to false for no fallback
               )
            );?>            
         </div> <!-- End of footer-nav -->

        </footer>
        <?php wp_footer(); ?>
    </body>
</html>