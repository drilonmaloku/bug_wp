<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bugagency
 */

?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-main-content">
                    <p><?php echo get_field('phone_number','option'); ?></p>
                    <p><a href="<?php echo esc_url( 'mailto:' . antispambot( get_field('mail','option' ) ) ); ?>"> <?php echo esc_html( antispambot( get_field('mail','option' ) ) ); ?> </a> </p>
                </div>
                <div class="footer-social-media">
                    <a href="<?php echo get_field('facebook_url','option');?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34.871" height="34.868" viewBox="0 0 34.871 34.868">
                            <g id="Group_30" data-name="Group 30" transform="translate(-1465.278 -9633.278)">
                                <path id="Path_231" data-name="Path 231" d="M1489.365,9668.142v-13.5h.876c1.085,0,2.17-.01,3.254.007.288,0,.377-.084.411-.373.184-1.534.4-3.066.594-4.6a2.875,2.875,0,0,0,0-.312h-5.155c0-1.137-.006-2.23,0-3.323a5.158,5.158,0,0,1,.087-.945,1.666,1.666,0,0,1,1.61-1.537c.706-.083,1.423-.069,2.136-.087.487-.012.975,0,1.5,0,.012-.166.029-.292.029-.418,0-1.3-.012-2.592.01-3.888.006-.351-.108-.46-.444-.463-1.6-.016-3.2-.17-4.789-.044a5.91,5.91,0,0,0-5.505,5.6c-.116,1.526-.066,3.065-.09,4.6,0,.155,0,.312,0,.5h-4.5v5.274h4.469v13.486c-.121.008-.236.022-.351.022-3.889,0-7.777.014-11.666,0a6.5,6.5,0,0,1-6.4-5.091,7.475,7.475,0,0,1-.149-1.574c-.009-7.18.03-14.36-.021-21.542a6.61,6.61,0,0,1,5.56-6.57,9.589,9.589,0,0,1,1.148-.063c7.155,0,14.311.033,21.466-.018a6.6,6.6,0,0,1,6.5,4.972,8.349,8.349,0,0,1,.185,1.65q.018,10.811.006,21.621a6.491,6.491,0,0,1-5.35,6.5,11.665,11.665,0,0,1-1.9.113C1491.737,9668.154,1490.575,9668.142,1489.365,9668.142Z" fill="#fff"/>
                            </g>
                        </svg>
                    </a>
                    <a href="<?php echo get_field('instagram_url','option');?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34.989" height="34.987" viewBox="0 0 34.989 34.987">
                            <g id="Group_205" data-name="Group 205" transform="translate(-2487.588 -3713.479)">
                                <path id="Path_596" data-name="Path 596" d="M2495.926,3713.479h18.246c.213.025.427.049.64.077a8.8,8.8,0,0,1,7.489,6.624c.125.491.186,1,.277,1.5V3740.4a18.253,18.253,0,0,1-.433,1.96,8.743,8.743,0,0,1-8.427,6.09c-5.751.02-11.5.01-17.254,0a8.549,8.549,0,0,1-5.127-1.6,8.665,8.665,0,0,1-3.746-7.4q0-8.4.006-16.81a13.373,13.373,0,0,1,.13-1.8,8.741,8.741,0,0,1,6.3-7.016C2494.646,3713.67,2495.291,3713.593,2495.926,3713.479Zm-1.682,17.471c0,2.186-.01,4.373,0,6.559a4.047,4.047,0,0,0,4.2,4.274q6.627.025,13.254,0a4.03,4.03,0,0,0,4.185-4.211q.012-6.593,0-13.186a4.03,4.03,0,0,0-4.173-4.222c-4.429-.019-8.859,0-13.288-.006a4.1,4.1,0,0,0-4.177,4.3Q2494.243,3727.705,2494.245,3730.95Z" fill="#fff"/>
                                <path id="Path_597" data-name="Path 597" d="M2601.093,3889.564h3.308v.374q0,4.115,0,8.231a2.283,2.283,0,0,1-2.464,2.472H2589.1a2.265,2.265,0,0,1-2.453-2.441q0-4.132,0-8.265v-.364h3.276c-.886,3.14-.146,5.744,2.752,7.4a5.5,5.5,0,0,0,6.492-.528A5.848,5.848,0,0,0,2601.093,3889.564Z" transform="translate(-90.448 -160.786)" fill="#fff"/>
                                <path id="Path_598" data-name="Path 598" d="M2644.8,3874.372a3.826,3.826,0,1,1,3.765,3.838A3.839,3.839,0,0,1,2644.8,3874.372Z" transform="translate(-143.555 -143.411)" fill="#fff"/>
                                <path id="Path_599" data-name="Path 599" d="M2746.3,3818.55v3.643h-3.631v-3.643Z" transform="translate(-232.914 -95.942)" fill="#fff"/>
                            </g>
                        </svg>
                    </a>
                    <a href="<?php echo get_field('linkedin_url','option');?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="34.424" height="34.635" viewBox="0 0 34.424 34.635">
                            <g id="Group_32" data-name="Group 32" transform="translate(-1638.095 -9633.277)">
                                <path id="Path_235" data-name="Path 235" d="M1672.519,9650.6v14.672a2.513,2.513,0,0,1-2.647,2.64h-29.145a2.521,2.521,0,0,1-2.573-1.983,3.129,3.129,0,0,1-.056-.649q0-14.684,0-29.367a2.5,2.5,0,0,1,2.624-2.633q14.586,0,29.171,0a2.5,2.5,0,0,1,2.628,2.626Zm-5.254,11.658c.005-.094.012-.175.012-.257,0-2.932.013-5.864-.009-8.8a12.427,12.427,0,0,0-.21-2.125,5.93,5.93,0,0,0-1.783-3.4,5.538,5.538,0,0,0-3.58-1.415,5.2,5.2,0,0,0-4.862,2.242c-.056.079-.114.157-.171.236l-.054-.01v-2.092h-5.184v15.607h5.187v-.291q0-1.449,0-2.9c0-1.975,0-3.948.014-5.923a2.761,2.761,0,0,1,1.217-2.268,2.519,2.519,0,0,1,4.025,1.381,6.763,6.763,0,0,1,.2,1.667c.02,2.68.009,5.36.009,8.04v.3Zm-18.755-15.609h-5.164v15.609h5.164Zm-2.494-2.152c.14-.015.367-.029.59-.066a2.673,2.673,0,0,0,.293-5.222,3.711,3.711,0,0,0-1.548-.071,2.676,2.676,0,0,0-1.979,3.993A2.812,2.812,0,0,0,1646.016,9644.5Z" fill="#fff"/>
                            </g>
                        </svg>

                    </a>
                </div>
                <p>
               <?php echo get_field('description','option');?>
                </p>
            </div>
            <div class="col-md-6">
                <div class="footer-right-part">
                    <div class="footer-right-part-content">
                        <h4><?php echo get_field('question','option');?></h4>
                        <a class="bugagency_btn" href="<?php echo get_field('btn_url','option');?>"><?php echo get_field('btn_text','option');?></a>
                    </div>

                    <img src="wp-content/uploads/assets/footer_logo.png" alt="">
                </div>


            </div>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>