<?php if (get_row_layout() === 'stats_layout') : ?>
  <?php if (have_rows('stats')) : ?>
    
    <section class="stats-section">
      <div class="container p-0">
        <div class="row stats-row">

          <?php while (have_rows('stats')) : the_row(); ?>
            <div class="col-6 col-md-3">
              <div class="stat-item ">
                <h2><?php the_sub_field('stats_number'); ?></h2>
                <p><?php the_sub_field('stats_text'); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>
