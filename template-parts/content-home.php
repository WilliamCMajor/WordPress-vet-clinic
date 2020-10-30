<?php
/***
* Template part for displaying content in the page.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package Vet Clinic
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >

    <div class="entry-content">
        <!-- display page or post content -->
    <?php
        the_content(); // displays all of the content within the editor in pages in the dashboard
    ?>
    <!-- other things you could put in here would be: pagination (more used for blog posts), custom posts, anything you need for site. -->
    </div>

</article>
