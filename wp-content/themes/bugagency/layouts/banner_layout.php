<section class="banner_layout">
  <div class="container">
    <div class="row align-items-end ">
      
      <!-- Left Column: Hero Content -->
      <div class="col-md-6 hero-content">
        <div class="hero-tagline">
          <?php the_sub_field('banner_tagline'); ?>
        </div>

        <h1 class="hero-title">
          <div class="white"><?php the_sub_field('main_title_line_1'); ?></div>
          <div class="gradient"><?php the_sub_field('main_title_line_2'); ?></div>
        </h1>

        <p class="hero-description"><?php the_sub_field('banner_description'); ?></p>

        <?php 
        $link = get_sub_field('banner_button_link');
        if ($link): ?>
          <a href="<?php echo esc_url($link['url']); ?>" class="hero-btn">
            <?php the_sub_field('banner_button_text'); ?>
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.75 9H14.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9 3.75L14.25 9L9 14.25" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        <?php endif; ?>
      </div>

      <!-- Right Column: Hero Image + Badge -->
      <div class="col-md-6 hero-image-container">
        <div class="hero-image">
          <img src="<?php the_sub_field('laptop_image'); ?>" alt="Hero Image" class="img-fluid">

          <div class="hero-badge">
            <?php the_sub_field('experience_badge_text'); ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
