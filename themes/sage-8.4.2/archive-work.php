<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form();
else:
  get_template_part('templates/section-work');
endif; ?>

<?php the_posts_navigation(); ?>