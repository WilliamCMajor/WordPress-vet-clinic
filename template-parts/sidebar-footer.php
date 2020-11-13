<?php
/* 
*   This partial template will contain footer widget area code
*
* @package vet clinic
* @since 2.0
*/
?>

<?php if (is_active_sidebar( 'footer-col-one' )) : ?>
    <?php dynamic_sidebar( 'footer-col-one' ); ?>
<?php endif ?>

<?php if (is_active_sidebar( 'footer-col-two' )) : ?>
    <?php dynamic_sidebar( 'footer-col-two' ); ?>
<?php endif ?>

<?php if (is_active_sidebar( 'footer-col-three' )) : ?>
    <?php dynamic_sidebar( 'footer-col-three' ); ?>
<?php endif ?>

<?php if (is_active_sidebar( 'footer-col-four' )) : ?>
    <?php dynamic_sidebar( 'footer-col-four' ); ?>
<?php endif ?>