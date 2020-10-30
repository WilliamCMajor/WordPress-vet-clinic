<?php
/***
*   The template for displaying search forms. Code borrowed from Understrap Theme (https://understrap.com/) 
*
*   @package design+code demo
*   @since 1.0.0
*/
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <label class="sr-only" for="s"><?php esc_html_e( 'Search', 'code+design' ); ?></label>
    <div class="input-group">
        <input class="field form-control" id="s" name="s" type="text" placeholder="<?php esc_attr_e( 'Search & hellip;', 'code+design' ); ?>" value="<?php the_search_query(); ?>">
        <span class="input-group-append">
            <input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit" value="<?php esc_attr_e( 'Search', 'code+design' ); ?>">
        </span>
    </div>
</form>


