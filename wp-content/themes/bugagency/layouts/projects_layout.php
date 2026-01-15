<?php
$tagline        = get_sub_field('projects_tagline');
$section_title  = get_sub_field('title');
$description    = get_sub_field('description');
$button_text    = get_sub_field('button_text');
$button_url     = get_sub_field('button_url');
?>

<section id="work" class="projects-section">
    <div class="container container-class">

        <header class="projects-header">
            <?php if ($tagline) : ?>
                <span class="projects-tagline"><?php echo esc_html($tagline); ?></span>
            <?php endif; ?>

            <?php if ($section_title) : ?>
                <h2><?php echo esc_html($section_title); ?></h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </header>

        <div class="row cards-row">

            <?php if (have_rows('projects')) : ?>
                <?php while (have_rows('projects')) : the_row(); ?>

                    <?php
                    $project = get_sub_field('project'); // Post Object

                    if (!$project) {
                        continue;
                    }

                    // Set global post data
                    setup_postdata($project);

                    // Image field from project post
                    $image_field = get_field('image', $project->ID);
                    $image_url   = '';

                    if ($image_field) {
                        $image_url = is_array($image_field)
                            ? $image_field['url']
                            : (is_numeric($image_field)
                                ? wp_get_attachment_url($image_field)
                                : $image_field);
                    }
                    ?>

                    <div class="col-12 col-md-6">
                        <div class="project-card">

                            <?php if ($image_url) : ?>
                                <div class="project-bg"
                                    style="background-image: url('<?php echo esc_url($image_url); ?>');">
                                </div>
                            <?php endif; ?>

                            <div class="project-content">

                                <?php if (get_field('title_tagline', $project->ID)) : ?>
                                    <p class="project-tagline">
                                        <?php echo esc_html(get_field('title_tagline', $project->ID)); ?>
                                    </p>
                                <?php endif; ?>

                                <h3 class="project-title"><?php echo esc_html(get_the_title($project)); ?></h3>

                                <?php if (get_field('description', $project->ID)) : ?>
                                    <p class="project-description">
                                        <?php echo esc_html(get_field('description', $project->ID)); ?>
                                    </p>
                                <?php endif; ?>

                                <?php
                                $btn_text = get_field('button', $project->ID);
                                $btn_url  = get_field('btn_url', $project->ID);
                                ?>

                              <?php
                                $btn_url = get_field('btn_url', $project->ID);
                                ?>

                                <?php if ($btn_url) : ?>
                                    <a href="<?php echo esc_url($btn_url); ?>" class="project-btn" aria-label="View project">
                                        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                                            <path d="M42.5 20C42.5 19.1716 41.8284 18.5 41 18.5L27.5 18.5C26.6716 18.5 26 19.1716 26 20C26 20.8284 26.6716 21.5 27.5 21.5H39.5V33.5C39.5 34.3284 40.1716 35 41 35C41.8284 35 42.5 34.3284 42.5 33.5L42.5 20ZM20 41L21.0607 42.0607L42.0607 21.0607L41 20L39.9393 18.9393L18.9393 39.9393L20 41Z" fill="white"/>
                                        </svg>
                                    </a>
                                <?php endif; ?>


                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p>No projects selected.</p>
            <?php endif; ?>

        </div>

        <?php if ($button_text) : ?>
            <div class="projects-button text-center">
                <a href="<?php echo esc_url($button_url ?: get_post_type_archive_link('projects')); ?>" class="projects-btn">
                    <?php echo esc_html($button_text); ?>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 9H14.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        <?php endif; ?>

    </div>
</section>
