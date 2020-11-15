<?php
/* 
*   This partial template will contain header widget area code
*
* @package Vet Clinic
* @since 2.0
*/
?>

<?php if (is_active_sidebar( 'header-col-one' )) : ?>
    <?php dynamic_sidebar( 'header-col-one' ); ?>
<?php endif ?>

<?php if (is_active_sidebar( 'header-col-two' )) : ?>
    <?php dynamic_sidebar( 'header-col-two' ); ?>
<?php endif ?>