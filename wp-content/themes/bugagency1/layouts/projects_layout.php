<section id="section_projects" class="section-item section-projects">
            <div class="section-item-content">
                <div class="container">
                    <h3 class="text-uppercase"><span class="stroked-text"><?php echo get_sub_field('heading'); ?></span></h3>
                    <div class="section-projects-content">







                          <?php if( have_rows('items') ): ?>
                            <?php while( have_rows('items') ): the_row();  
                            $reverse = get_sub_field('reverse');
                            ?> 
                        <div class="project-item <?php echo $reverse ? 'reverse' : ''?>">
                            <a class="project-item-thumbnail" href="<?php echo get_sub_field('project_link');?> " target="_blank">
                                <img src="<?php echo get_sub_field('image'); ?>" alt="">
                            </a>
                            <div>
                                <h2><?php echo get_sub_field('heading');?></h2>
                                <h5><?php echo get_sub_field('sub_head');?></h5>
                               <p> <?php echo get_sub_field('description');?></p>
                               <p> <?php echo get_sub_field('description_2');?></p>
                            </div>
                        </div>

    <?php endwhile; ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </section>