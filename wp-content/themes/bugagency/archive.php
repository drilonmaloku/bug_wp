<?php get_header(); ?>

<section class="projects-archive">
    <div class="container">
        <h1 class="archive-title">Projects</h1>

        <div class="row g-4">

            <div class="col-md-6">
                <?php 
                rewind_posts(); 

                if (have_posts()) : 
                    while (have_posts()) : the_post();
                    $is_small = get_field('small_card');
                    if (!$is_small) { ?>
                        <div class="project-card">
                        <?php 
                                    $project_image = get_field('image');
                                    if ($project_image) : ?>
                                        <a href="<?php the_permalink(); ?>" class="project-link">

                                            <div 
                                                class="project-bg" 
                                                style="background-image:url('<?php echo esc_url($project_image['url']); ?>')">
                                            </div>

                                            <div class="project-content">

                                                <?php if (get_field('title_tagline')) : ?>
                                                    <p class="project-tagline"><?php the_field('title_tagline'); ?></p>
                                                <?php endif; ?>

                                                <h3 class="project-title"><?php the_title(); ?></h3>

                                                <?php if (get_field('description')) : ?>
                                                    <p class="project-description"><?php the_field('description'); ?></p>
                                                <?php endif; ?>

                                            </div>
                                        </a>
                                    <?php endif; ?>
                        </div>
                    <?php }
                    endwhile; 
                endif; 
                ?>
            </div>
        <!-- Left column: 2 small cards stacked -->
            <div class="col-md-6"> 
                <?php 
                $count_small = 0;
                if (have_posts()) : 
                    while (have_posts()) : the_post();
                    $is_small = get_field('small_card'); // your checkbox
                    if ($is_small && $count_small < 2) { ?>
                        <div class="project-card small">
                        <?php 
                                    $project_image = get_field('image');
                                    if ($project_image) : ?>
                                        <a href="<?php the_permalink(); ?>" class="project-link">

                                            <div 
                                                class="project-bg" 
                                                style="background-image:url('<?php echo esc_url($project_image['url']); ?>')">
                                            </div>

                                            <div class="project-content">

                                                <?php if (get_field('title_tagline')) : ?>
                                                    <p class="project-tagline"><?php the_field('title_tagline'); ?></p>
                                                <?php endif; ?>

                                                <h3 class="project-title"><?php the_title(); ?></h3>

                                                <?php if (get_field('description')) : ?>
                                                    <p class="project-description"><?php the_field('description'); ?></p>
                                                <?php endif; ?>

                                            </div>
                                        </a>
                                    <?php endif; ?>
                        </div>
                        <?php $count_small++;
                    }
                    endwhile; 
                endif; 
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>