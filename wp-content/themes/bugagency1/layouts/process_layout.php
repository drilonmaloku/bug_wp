    <section id="section_process" class="section-item section-process">
            <div class="section-item-content">
                <div class="section-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="process-intro-layout">
                                    <div class="process-intro-layout-text">
                                        <h6>Our Process</h6>
                                        <h3 class="text-uppercase"><span class="stroked-text">Process</span> flow</h3>
                                    </div>
                                    <img src="wp-content/uploads/assets/processes.png" alt="">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="process_boxes_layout">
                                    <?php if( have_rows('process_boxes') ): ?>
                            <?php while( have_rows('process_boxes') ): the_row();  
                            ?> 
                                    <div class="process_box">
                                        <h3><?php echo get_sub_field('number');?></h3>
                                        <div>
                                            <h4><?php echo get_sub_field('heading');?></h4>
                                            <p> <?php echo get_sub_field('description');?> </p>
                                        </div>
                                    </div>
                            <?php endwhile; ?>
                            <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>