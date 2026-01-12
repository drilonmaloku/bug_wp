<?php get_header(); ?>

<?php
$hero_bg    = get_field('image');       // old image field
$hero_url   = get_field('image_url');   // new URL field (the link target)
$hero_img   = $hero_bg ? $hero_bg['url'] : ''; // the actual image to display
$hero_alt   = $hero_bg ? $hero_bg['alt'] : get_the_title();
?>

<section class="project-single">
    <div class="container">

        <!-- HERO -->
        <?php if ($hero_img) : ?>
            <div class="hero">
                 <?php if ($hero_url) : ?>
                    <a href="<?php echo esc_url($hero_url); ?>" target="_blank" rel="noopener">
                        <img
                            src="<?php echo esc_url($hero_img); ?>"
                            alt="<?php echo esc_attr($hero_alt); ?>"
                            class="w-100"
                        />
                    </a>
                <?php else : ?>
                    <img
                        src="<?php echo esc_url($hero_img); ?>"
                        alt="<?php echo esc_attr($hero_alt); ?>"
                        class="w-100"
                    />
                <?php endif; ?>


                <div class="hero-inner ">
                    <?php if (get_field('title_tagline')) : ?>
                        <span class="tagline">
                            <?php the_field('title_tagline'); ?>
                        </span>
                    <?php endif; ?>

                    <h1 class="hero-title ">
                        <?php the_title(); ?>
                    </h1>

                    <?php if (get_field('description')) : ?>
                        <p class="hero-subtitle">
                            <?php the_field('description'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- CARDS -->
        <div class="row g-4 info-cards">

            <?php if (have_rows('info_cards')) : ?>
                <?php while (have_rows('info_cards')) : the_row(); ?>

                    <div class="col-md-6 ">
                        <div class="info-card">

                            <h3 class="card-title">
                                <?php the_sub_field('title'); ?>
                            </h3>

                            <?php if (have_rows('card_items')) : ?>
                                <?php while (have_rows('card_items')) : the_row(); ?>

                                    <div class="card-item">

                                        <?php if (get_sub_field('item_icon')) : ?>
                                            <span class="item-icon">
                                                <?php echo get_sub_field('item_icon'); ?>
                                            </span>
                                        <?php endif; ?>

                                        <div class="item-text">
                                            <strong class="item-title">
                                                <?php the_sub_field('item_title'); ?>
                                            </strong>

                                            <p class="item-content">
                                                <?php the_sub_field('item_content'); ?>
                                            </p>
                                        </div>

                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>
