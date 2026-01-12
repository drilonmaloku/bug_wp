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

            <?php
           $projects = new WP_Query([
                'post_type'      => 'projects',
                'posts_per_page' => 4,
                'meta_query'     => [
                    [
                        'key'     => 'show_on_landing_page',
                        'value'   => '1',
                        'compare' => '='
                    ]
                ]
            ]);

            if ($projects->have_posts()) :
                while ($projects->have_posts()) : $projects->the_post();

                  // Get ACF image field safely
                    $image_field = get_field('image');
                    $image_url   = '';

                    // Always get a usable URL
                    if ($image_field) {
                        $image_url = is_array($image_field) 
                            ? $image_field['url']             // array return
                            : (is_numeric($image_field) 
                                ? wp_get_attachment_url($image_field) // ID return
                                : $image_field);             // URL return
                    }
            ?>

                <div class="col-12 col-md-6">
                    <a href="<?php the_permalink(); ?>" class="project-card">

                        <?php if ($image_url) : ?>
                            <div class="project-bg"
                                style="background-image: url('<?php echo esc_url($image_url); ?>');">
                            </div>
                        <?php endif; ?>

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
                </div>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No projects found.</p>';
            endif;
            ?>

        </div>

        <?php if ($button_text) : ?> <div class="projects-button text-center"> <a href="<?php echo esc_url($button_url ?: get_post_type_archive_link('projects')); ?>" class="projects-btn"> <?php echo esc_html($button_text); ?> <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3.75 9H14.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M9 3.75L14.25 9L9 14.25" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg> </a> </div> <?php endif; ?>

    </div>
</section>
