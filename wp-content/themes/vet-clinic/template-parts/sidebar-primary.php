<?php
/* 
*   This partial template will contain right side widget area code
*
* @package Vet Clinic
* @since 2.0
*/
?>

<?php if (is_active_sidebar( 'sidebar-primary' )) : ?>
    <?php dynamic_sidebar( 'sidebar-primary' ); ?>
<?php endif ?>