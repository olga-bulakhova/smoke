<?php /* Template Name: Page with sidebar */

get_header(); ?>

<article class="post-single">
  <div class="wrapper">

    <div class="post-container">
      <div>
        <h1 class="color-dark title-48-600 center-mobile mt-5_6 mt-4-mobile center"><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
          <div class="post-image mb-9">
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="border-radius">
          </div>
        <?php endif; ?>

        <div class="post-content">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="post-sidebar">
        <div class="mt-5_6 mt-4-mobile mb-9"><?php get_sidebar(); ?></div>
      </div>
    </div>
  </div>
</article>

<?php get_footer(); ?>