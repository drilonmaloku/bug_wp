<!--     
    <section>
      <div class="container">
        <div class="row">
          <div class="col-xl-8">

          </div>
        </div>
        <div class="row">

        </div>
      </div>
    </section> -->
    <section id="section_team" class="section-item section-team">
            <div class="section-item-content">
                <div class="section-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="team_section_intro">
                                            <h6>Our Team</h6>
                                            <h3 class="text-uppercase">Who <span class="stroked-text">We Are</span> </h3>
                                            <p>
                                                A team of dedicated developers and designers committed to providing creative solutions. Bringing ideas and innovation together to meet your demands.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                           
                          
                                    
                        <div class="row"> 
                             <?php if( have_rows('slider') ): ?>
                            <?php while( have_rows('slider') ): the_row();  
                            ?> 
                                        <div class="team_user_box col-md-3 mb-4">
                                            <div class="team_user_box_heading">
                                                <img src="<?php echo get_sub_field('image');?>" alt="">
                                                <div>
                                                    <h4><?php echo get_sub_field('heading');?></h4>
                                                    <h5><?php echo get_sub_field('sub_head');?></h5>
                                                </div>
                                            </div>
                                            <div class="team_user_box_content">
                                                <div class="team_user_box_social_media">
                                                    <a href="<?php echo get_sub_field('facebook_url');?> " target=_blank>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.417" height="18.415" viewBox="0 0 18.417 18.415">
                                                            <g id="Group_225" data-name="Group 225" transform="translate(0)">
                                                                <path id="Path_231" data-name="Path 231" d="M1478,9651.691v-7.131h.463c.573,0,1.146,0,1.719,0,.152,0,.2-.044.217-.2.1-.81.209-1.619.314-2.43a1.47,1.47,0,0,0,0-.163h-2.723c0-.6,0-1.178,0-1.756a2.723,2.723,0,0,1,.046-.5.882.882,0,0,1,.85-.812c.373-.043.751-.035,1.128-.045.257-.007.515,0,.792,0,.006-.087.015-.153.015-.221,0-.684-.006-1.368.005-2.053,0-.186-.057-.243-.234-.244-.843-.008-1.692-.09-2.529-.023a3.122,3.122,0,0,0-2.907,2.956c-.061.808-.035,1.619-.048,2.429,0,.082,0,.164,0,.267h-2.375v2.785h2.36v7.123c-.064,0-.125.011-.185.011-2.054,0-4.107.008-6.161,0a3.437,3.437,0,0,1-3.379-2.688,3.946,3.946,0,0,1-.079-.832c0-3.791.016-7.584-.011-11.376a3.491,3.491,0,0,1,2.937-3.471,5.029,5.029,0,0,1,.606-.034c3.779,0,7.558.018,11.337-.009a3.486,3.486,0,0,1,3.433,2.626,4.422,4.422,0,0,1,.1.871q.01,5.71,0,11.419a3.428,3.428,0,0,1-2.826,3.434,6.1,6.1,0,0,1-1,.061C1479.252,9651.7,1478.638,9651.691,1478,9651.691Z" transform="translate(-1465.278 -9633.278)" fill="#fff"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <a href="<?php echo get_sub_field('instagram_url');?> ">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.479" height="18.478" viewBox="0 0 18.479 18.478">
                                                            <g id="Group_224" data-name="Group 224" transform="translate(0)">
                                                                <path id="Path_596" data-name="Path 596" d="M2491.992,3713.479h9.636c.113.013.225.026.338.041a4.65,4.65,0,0,1,3.955,3.5c.066.259.1.528.146.792v9.889a9.645,9.645,0,0,1-.229,1.035,4.616,4.616,0,0,1-4.45,3.216c-3.038.011-6.075.005-9.113,0a4.516,4.516,0,0,1-2.708-.848,4.575,4.575,0,0,1-1.978-3.906q0-4.439,0-8.878a7.1,7.1,0,0,1,.068-.952,4.617,4.617,0,0,1,3.325-3.706C2491.315,3713.58,2491.656,3713.539,2491.992,3713.479Zm-.888,9.227c0,1.155-.005,2.31,0,3.464a2.137,2.137,0,0,0,2.217,2.257q3.5.014,7,0a2.128,2.128,0,0,0,2.21-2.224q.007-3.482,0-6.964a2.129,2.129,0,0,0-2.2-2.229c-2.339-.01-4.678,0-7.018,0a2.164,2.164,0,0,0-2.207,2.272Q2491.1,3720.992,2491.1,3722.706Z" transform="translate(-2487.588 -3713.479)" fill="#fff"/>
                                                                <path id="Path_597" data-name="Path 597" d="M2594.274,3889.564h1.747v.2q0,2.174,0,4.347a1.205,1.205,0,0,1-1.3,1.305h-6.782a1.2,1.2,0,0,1-1.3-1.289q0-2.183,0-4.365v-.192h1.73a3.1,3.1,0,0,0,1.454,3.908,2.9,2.9,0,0,0,3.429-.278A3.088,3.088,0,0,0,2594.274,3889.564Z" transform="translate(-2582.097 -3881.484)" fill="#fff"/>
                                                                <path id="Path_598" data-name="Path 598" d="M2644.8,3872.561a2.021,2.021,0,1,1,1.988,2.027A2.027,2.027,0,0,1,2644.8,3872.561Z" transform="translate(-2637.589 -3863.329)" fill="#fff"/>
                                                                <path id="Path_599" data-name="Path 599" d="M2744.582,3818.55v1.924h-1.918v-1.924Z" transform="translate(-2730.959 -3813.729)" fill="#fff"/>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                    <a href="<?php echo get_sub_field('linkedin_url');?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.18" height="18.291" viewBox="0 0 18.18 18.291">
                                                            <g id="Group_226" data-name="Group 226" transform="translate(0)">
                                                                <path id="Path_235" data-name="Path 235" d="M1656.276,9642.425v7.749a1.327,1.327,0,0,1-1.4,1.395h-15.393a1.332,1.332,0,0,1-1.359-1.048,1.637,1.637,0,0,1-.03-.343q0-7.755,0-15.51a1.321,1.321,0,0,1,1.385-1.391h15.406a1.32,1.32,0,0,1,1.388,1.387Zm-2.775,6.157c0-.049.006-.092.006-.135,0-1.548.007-3.1,0-4.646a6.536,6.536,0,0,0-.111-1.122,3.12,3.12,0,0,0-.942-1.793,2.921,2.921,0,0,0-1.891-.748,2.742,2.742,0,0,0-2.568,1.184c-.03.042-.06.084-.09.125l-.029,0v-1.1h-2.738v8.242h2.739v-.154c0-.509,0-1.02,0-1.529,0-1.043,0-2.086.008-3.129a1.456,1.456,0,0,1,.643-1.2,1.33,1.33,0,0,1,2.126.729,3.576,3.576,0,0,1,.107.88c.011,1.415,0,2.831,0,4.246v.156Zm-9.905-8.243h-2.727v8.243h2.727Zm-1.317-1.138c.074-.007.194-.015.312-.034a1.412,1.412,0,0,0,.155-2.758,1.957,1.957,0,0,0-.818-.037,1.413,1.413,0,0,0-1.045,2.108A1.484,1.484,0,0,0,1642.278,9639.2Z" transform="translate(-1638.095 -9633.277)" fill="#fff"/>
                                                            </g>
                                                        </svg>

                                                    </a>
                                                </div>
                                                <div>
                                                    <p>
                                                        <?php echo get_sub_field('description');?>                                                     </p>
                                                </div>
                                            </div>
                                        </div>
                                            <?php endwhile; ?>
                                            <?php endif; ?>

                   
                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>