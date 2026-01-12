<?php if (get_row_layout() === 'contact_layout') : ?>

<section id="contact" class="contact">
  <div class="container p-0">
    <div class="row">

      <!-- LEFT CONTENT -->
      <div class="col-lg-6">
        <div class="contact_content">

          <?php if ($tagline = get_sub_field('tagline')) : ?>
            <p class="contact_eyebrow">
              <?php echo esc_html($tagline); ?>
            </p>
          <?php endif; ?>

          <?php if ($heading = get_sub_field('heading')) : ?>
            <h2 class="contact_heading">
              <?php echo nl2br(esc_html($heading)); ?>
            </h2>
          <?php endif; ?>

          <?php if ($description = get_sub_field('description')) : ?>
            <p class="contact_description">
              <?php echo esc_html($description); ?>
            </p>
          <?php endif; ?>

         <?php if (have_rows('contact_items')) : ?>
  <ul class="contact_list">
    <?php while (have_rows('contact_items')) : the_row(); ?>
      <li class="contact_item">

        <?php if ($icon = get_sub_field('icon')) : ?>
          <span class="contact_icon">
            <span><?php echo $icon; ?></span>
               </span>
        <?php endif; ?>

        <div class="contact_info">
          <?php if ($label = get_sub_field('label')) : ?>
            <span class="contact_label">
              <?php echo esc_html($label); ?>
            </span>
          <?php endif; ?>

          <?php if ($value = get_sub_field('value')) : ?>
            <?php if ($link = get_sub_field('link')) : ?>
              <a href="<?php echo esc_url($link); ?>" class="contact_value">
                <?php echo esc_html($value); ?>
              </a>
            <?php else : ?>
              <span class="contact_value">
                <?php echo esc_html($value); ?>
              </span>
            <?php endif; ?>
          <?php endif; ?>
        </div>

      </li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>

        </div>
      </div>

      <!-- RIGHT FORM -->
      <div class="col-lg-6">
        <div class="contact_form">

          <?php if ($form = get_sub_field('form_shortcode')) : ?>
            <div class="form_wrapper">
              <?php echo do_shortcode($form); ?>
            </div>
          <?php endif; ?>

        </div>
      </div>

    </div>
  </div>
</section>

<?php endif; ?>
