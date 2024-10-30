<?php
/**
 * Template Name: No Sidebar
 * Template Post Type: post
 *
 * @package Bootscore
 * @version 6.1.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

get_header();
?>

  <div id="content" class="site-content <?= apply_filters('bootscore/class/container', 'container', 'single-sidebar-none'); ?> <?= apply_filters('bootscore/class/content/spacer', 'pt-3 pb-5', 'single-sidebar-none'); ?>">
    <div id="primary" class="content-area">
      
     <?php do_action( 'bootscore_after_primary_open', 'single-sidebar-none' ); ?>

      <?php the_breadcrumb(); ?>

      <main id="main" class="site-main">

        <div class="entry-header">
          <?php the_post(); ?>
          <?php bootscore_category_badge(); ?>
          <?php the_title('<h1>', '</h1>'); ?>
          <?php do_action( 'bootscore_after_title', 'single-sidebar-none' ); ?>
          <p class="entry-meta">
            <small class="text-body-secondary">
              <?php
              bootscore_date();
              bootscore_author();
              bootscore_comment_count();
              ?>
            </small>
          </p>
          <?php bootscore_post_thumbnail(); ?>
        </div>
        
        <?php do_action( 'bootscore_after_featured_image', 'single-sidebar-none' ); ?>

        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        
        <?php do_action( 'bootscore_before_entry_footer', 'single-sidebar-none' ); ?>

        <div class="entry-footer clear-both">
          <div class="mb-4">
            <?php bootscore_tags(); ?>
          </div>
          <!-- Related posts using bS Swiper plugin -->
          <?php if (function_exists('bootscore_related_posts')) bootscore_related_posts(); ?>
          <nav aria-label="bs page navigation">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <?php previous_post_link('%link'); ?>
              </li>
              <li class="page-item">
                <?php next_post_link('%link'); ?>
              </li>
            </ul>
          </nav>
          <?php comments_template(); ?>
        </div>

      </main>

    </div>
  </div>

<?php
get_footer();
