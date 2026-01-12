<?php if (get_row_layout() === 'about_us_layout') : ?>

<section id="about" class="about">
  <div class="container page-content">
    <div class="row align-items-center m-0">

      <div class="col-lg-6">
        <div class="about_content">

          <?php if ($tagline = get_sub_field('about_us_tagline')) : ?>
            <p class="about_tagline"><?php echo esc_html($tagline); ?></p>
          <?php endif; ?>

          <?php if ($header = get_sub_field('about_us_header')) : ?>
            <div class="about_heading">
              <?php echo wp_kses_post($header); ?>
            </div>
          <?php endif; ?>

          <?php if (have_rows('about_us_description')) : ?>
            <div class="about_text">
              <?php while (have_rows('about_us_description')) : the_row(); ?>
                <?php if ($text = get_sub_field('description')) : ?>
                  <p><?php echo esc_html($text); ?></p>
                <?php endif; ?>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>

        </div>
      </div>

      <div class="col-lg-6">
        <?php if ($image = get_sub_field('image')) : ?>
          <figure class="about_media">
            <img
              src="<?php echo esc_url($image['url']); ?>"
              alt="<?php echo esc_attr($image['alt']); ?>"
              loading="lazy"
            >
          </figure>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<?php endif; ?>