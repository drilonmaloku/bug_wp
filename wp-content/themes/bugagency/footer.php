<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kikastoren
 */

?>

	</div><!-- #content -->

<footer class="site-footer">
  <div class="container">
    <div class="row footer-menu">

      <!-- COLUMN 1: Logo + Description + Social Media -->
      <div class="col-lg-3 col-md-6">
        <div class="footer-logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_field('footer_logo', 'option')); ?>" alt="Logo" class="img-fluid">
          </a>
        </div>

        <div class="footer-description">
           <p><?php the_field('description', 'option'); ?></p>
        </div>

        <div class="menu-social-media">
          <?php if (have_rows('social_media', 'option')): ?>
            <?php while (have_rows('social_media', 'option')): the_row(); ?>
              <?php 
                $logo = get_sub_field('logo');
                $link = get_sub_field('link');
                $logo_url = is_array($logo) ? $logo['url'] : $logo;
              ?>
              <?php if ($link && $logo_url): ?>
                <a href="<?php echo esc_url($link); ?>" target="_blank" rel="noopener noreferrer">
                  <img src="<?php echo esc_url($logo_url); ?>" alt="Social icon">
                </a>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <!-- COLUMN 2: Quick Links -->
      <div class="col-lg-3 col-md-6 ">
        <h4 class="footer-title">Quick Links</h4>
        <?php
          wp_nav_menu( array(
          'theme_location' => 'header',
          'menu_class'     => 'bugagency_menu',
          'container'      => false,
          'depth'          => 1,
          'fallback_cb'    => false,
          'walker'         => new class extends Walker_Nav_Menu {
            function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
              $output .= '<li><a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
            }
            function end_el( &$output, $item, $depth = 0, $args = null ) {
              $output .= '</li>';
            }
          }
        ) );
        ?>
      </div>

      <!-- COLUMN 3: Services -->
      <div class="col-lg-3 col-md-6">
        <h4 class="footer-title">Services</h4>
        <ul class="footer-menu-list">
          <?php if (have_rows('services', 'option')): ?>
            <?php while (have_rows('services', 'option')): the_row(); ?>
              <li><?php echo esc_html(get_sub_field('services_name')); ?></li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>

      <!-- COLUMN 4: Get in Touch -->
      <div class="col-lg-3 col-md-6 ">
        <h4 class="footer-title">Get in Touch</h4>


        <div class="contact-info">
          <p><?php echo esc_html(get_field('mail', 'option')); ?></p>    
          <p><?php echo esc_html(get_field('phone_number', 'option')); ?></p>
          <p><?php echo esc_html(get_field('address', 'option')); ?></p>
        </div>
      </div>

    </div>
  </div>

  <!-- Bottom Footer -->
  <div class="bottom-footer text-center">
    <p class="mb-0" id="powered-by">
      © 2025 <a href="https://bugagency.tech/" target="_blank">Bug Agency</a>. All rights reserved.
    </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>