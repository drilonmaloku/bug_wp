<?php
$product_tagline = get_sub_field('product_tagline');
$title           = get_sub_field('title');
$description     = get_sub_field('description');
$product         = get_sub_field('product_section');

$scrolling_text  = get_sub_field('scrolling_banner');
?>

<section class="product-hero">

    <!-- SCROLLING MARQUEE -->
    <?php if ($scrolling_text) : ?>
        <div class="ticker-wrap">
            <div class="ticker">
                <span><?php echo esc_html($scrolling_text); ?> • </span>
                <span><?php echo esc_html($scrolling_text); ?> • </span>
                <span><?php echo esc_html($scrolling_text); ?> • </span>
                <span><?php echo esc_html($scrolling_text); ?> • </span>

            </div>
        </div>
    <?php endif; ?>

    <div class="container">

        <div class="header-content">
            <?php if ($product_tagline) : ?>
                <span class="product-tagline">
                    <?php echo esc_html($product_tagline); ?>
                </span>
            <?php endif; ?>

            <?php if ($title) : ?>
                <h1 class="product-title">
                    <?php echo esc_html($title); ?>
                </h1>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p class="product-description">
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>
        </div>
        <!-- GRID -->
        <div class="row justify-content-between align-items-center">

            <!-- LEFT COLUMN -->
            <div class="col-md-6 left-card">

                <?php if (!empty($product['product_title'])) : ?>
                    <div class="product-wysiwyg">
                        <?php echo wp_kses_post($product['product_title']); ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($product['product_description'])) : ?>
                    <div class="product-sub-description">
                        <?php echo esc_html($product['product_description']); ?>
                    </div>
                <?php endif; ?>

                <!-- BUTTONS -->
               <?php if (!empty($product['buttons'])) : ?>
                    <div class="product-buttons">
                        <?php foreach ($product['buttons'] as $button) :

                            $link   = $button['link'];
                            $url    = is_array($link) ? $link['url'] : $link;
                            $target = is_array($link) && !empty($link['target']) ? $link['target'] : '_self';
                            $icon   = $button['svg_icon']; // SVG text
                        ?>
                            <?php if ($url) : ?>
                                <a href="<?php echo esc_url($url); ?>"
                                class="btn btn-<?php echo esc_attr($button['style']); ?>"
                                target="<?php echo esc_attr($target); ?>">

                                    <span class="btn-text">
                                        <?php echo esc_html($button['text']); ?>
                                    </span>

                                    <?php if (!empty($icon)) : ?>
                                        <span class="btn-icon">
                                            <?php echo $icon; // SVG output ?>
                                        </span>
                                    <?php endif; ?>

                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>


                <!-- STATS -->
                <?php if (!empty($product['stats'])) : ?>
                    <div class="product-stats">
                        <?php foreach ($product['stats'] as $stat) : ?>
                            <div class="stat">
                                <strong><?php echo esc_html($stat['value']); ?></strong>
                                <span><?php echo esc_html($stat['label']); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div><!-- /.col-md-6 -->

            <!-- RIGHT COLUMN -->
            <div class="col-md-6 ">

                <?php if (!empty($product['card'])) :
                    $card = $product['card'];
                ?>
                    <div class="product-card">

                        <div class="card-header">
                            <?php if (!empty($card['card_icon'])) : ?>
                                <span class="card-icon">
                                    <?php echo $card['card_icon']; // SVG ?>
                                </span>
                            <?php endif; ?>

                            <div>
                                <?php if (!empty($card['card_title'])) : ?>
                                    <h4><?php echo esc_html($card['card_title']); ?></h4>
                                <?php endif; ?>

                                <?php if (!empty($card['card_subtitle'])) : ?>
                                    <p><?php echo esc_html($card['card_subtitle']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                            <!-- PLATFORM TABS -->
                            <?php if (!empty($card['platform_tabs'])) : ?>
                                <div class="platform-tabs">
                                    <?php foreach ($card['platform_tabs'] as $tab) : ?>
                                        <div class="platform-tab">
                                            <?php if (!empty($tab['icon'])) : ?>
                                                <span class="platform-tab-icon">
                                                    <?php echo $tab['icon']; // SVG ?>
                                                </span>
                                            <?php endif; ?>

                                            <?php if (!empty($tab['text'])) : ?>
                                                <span class="platform-tab-text">
                                                    <?php echo esc_html($tab['text']); ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>


                        <?php if (!empty($card['features'])) : ?>
                            <ul class="card-features">
                                <?php foreach ($card['features'] as $feature) : ?>
                                    <li>
                                    <?php if (!empty($feature['icon'])) : ?>
                                        <span class="feature-icon">
                                            <?php echo $feature['icon']; ?>
                                        </span>
                                    <?php endif; ?>

                                    <?php echo esc_html($feature['text']); ?>

                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                    </div><!-- /.product-card -->
                <?php endif; ?>

            </div><!-- /.col-md-6 -->

        </div><!-- /.row -->

    </div><!-- /.container -->
</section>
