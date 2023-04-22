<?php

/**
 * Template part for displaying top-nav-search collapse woocommerce widget
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

?>

<!-- Top Nav Search Collapse -->
<?php if (is_active_sidebar('top-nav-search')) : ?>
  <div class="collapse <?= bootscore_container_class(); ?> mb-2" id="collapse-search">
    <?php dynamic_sidebar('top-nav-search'); ?>
  </div>
<?php endif; ?>
