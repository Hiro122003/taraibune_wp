<?php get_header(); ?>

<body>
  <div class="l-wrapper" id="wrapper">
    <?php get_template_part('inc', 'header'); ?>
    <main id="main" class="l-main">
      <div class="c-width c-width--narrow">
        <section class="l-lower-section" id="news">
          <div class="c-section-title">
            <h1 class="c-section-title__text">News</h1>
          </div>

          <?php
          $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $the_query = new WP_Query();
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'post_status' => 'publish',
            'order' => 'DESC',
            'paged' => $paged,
          );
          $the_query->query($args);
          if ($the_query->have_posts()) { ?>
            <div class="c-news-list">
              <?php while ($the_query->have_posts()) {
                $the_query->the_post(); ?>
                <a href="<?php echo get_permalink(); ?>" class="c-news-item-link">
                  <dl class="c-news-item">
                    <dt class="c-news-item__date">
                      <?php echo get_the_time('Y.m.d');
                      ?>
                    </dt>
                    <dd class="c-news-item__title">
                      <?php echo get_the_title();
                      ?>
                    </dd>
                  </dl>
                </a><?php }
                } ?>
            </div>

            <?php if ($the_query->max_num_pages > 1) { ?>
              <div class="c-pagination">
                <?php
                $big = 999999999;
                $pagination = paginate_links([
                  'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                  'current' => max(1, get_query_var('paged')),
                  'total' => $the_query->max_num_pages,
                  'mid_size' => 1,
                  'end_size' => 1,
                  'prev_next' => true,
                  'type' => 'array',
                  'prev_text' => '<span class="c-pagination__prev"></span>',
                  'next_text' => '<span class="c-pagination__next"></span>',
                ]);


                echo '<ul class="c-pagination__list">';
                foreach ($pagination as $page) {
                  echo '<li class="c-pagination__item">' . $page . '</li>';
                }
                echo '</ul>';
                ?>
              </div>
            <?php } ?>
        </section>
      </div>
    </main>
    <?php get_template_part('inc', 'footer'); ?>
    <?php get_template_part('inc', 'sp_menu'); ?>
  </div><!--l-wrapper-->
  <?php get_template_part('inc', 'js'); ?>
  <?php get_footer(); ?>
</body>

</html>