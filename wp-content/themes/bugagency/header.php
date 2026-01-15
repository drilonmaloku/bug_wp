<?php
/**
 * The header for our theme
 *
 * @package bugagency
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="bugagency">

  <nav class="header">
    <div class="container">
      <div class="header_inner">

        <!-- LOGO -->
        <div class="logo_header">
          <a href="<?php echo esc_url( home_url('/') ); ?>">
            <img src="<?php echo esc_url( get_field('logo','option') ); ?>" alt="Logo">
          </a>
        </div>

        
        <?php
        wp_nav_menu( array(
          'theme_location' => 'header',
          'menu_class'     => 'bugagency_menu',
          'container'      => false,
          'depth'          => 1,
          'fallback_cb'    => false,
         'walker' => new class extends Walker_Nav_Menu {
          function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {

            $classes = empty( $item->classes ) ? [] : (array) $item->classes;
            $class_names = esc_attr( implode( ' ', $classes ) );

            $output .= '<li class="' . $class_names . '">';
            $output .= '<a href="' . esc_url( $item->url ) . '">';
            $output .= esc_html( $item->title );
            $output .= '</a>';
          }

          function end_el( &$output, $item, $depth = 0, $args = null ) {
            $output .= '</li>';
          }
        }
        ) );
        ?>

        <!-- RIGHT SIDE -->
        <div class="hamburger_wrapper">

          <!-- HAMBURGER -->
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>

        </div>

      </div>
    </div>
  </nav>

  <div id="content" class="site-content">
    
<script>
document.addEventListener("DOMContentLoaded", function () {
  const hamburger = document.querySelector(".hamburger");
  const menu = document.querySelector(".bugagency_menu");

  if (!hamburger || !menu) return;

  // Toggle menu on hamburger click
  hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("active");
    menu.classList.toggle("active");
  });

  // Close menu when a menu link is clicked
  menu.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", function () {
      hamburger.classList.remove("active");
      menu.classList.remove("active");
    });
  });
});
</script>


