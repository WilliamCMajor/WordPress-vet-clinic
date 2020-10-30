<?php
/***
* Template part for displaying content in the page.php
* @link https://developer.wordpress.org/theme/basics/template-hierarchy/
*
* @package design+code demo
* @since 1.0.0
*/
?>
<article <?php post_class();?> id="post-<?php the_ID();?>" >
<!-- entry header -->
<header>
    <!-- get the page title -->
    <?php //the_title('<h1 class="entry-title">', '</h1>'); ?>
</header>

 <!-- if you had an image it will display using wordpress's largest default thumbnail sizing (settings in the admin - you can see the sizes) -->
<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

    <div class="entry-content">
    <!-- display page or post content -->
    <?php
    the_content(); // displays all of the content within the editor in pages in the dashboard
    the_ID(); //displays the id of the page or post
    the_date(); //displays the date
    ?>
    <!-- other things you could put in here would be: pagination (more used for blog posts), custom posts, anything you need for site. -->
    </div>

 <footer class="entry-footer">
    <!--adds a link to edit your content -->
    <?php edit_post_link( __('Edit','themenamehere'), '<span class="edit-link">', '</span>' ); ?>
 </footer>
</article>
