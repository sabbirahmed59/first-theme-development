<?php 
/*
Template Name: Services Page
*/

get_header();?>
    
    <main>

        <!-- Breadcumb Area Start-->
        <?php get_template_part('template-parts/partials/content', 'breadcumb');?>
        <!-- Breadcumb Area End-->

        <!-- services Area Start-->
        <div class="services-area section-padding2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php
                        $args = array(
                            'post_type' => 'services',
                            'posts_per_page' => 6
                        );
                        $query = new WP_Query($args);
                        while($query->have_posts()) {
                            $query->the_post();
                    ?>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-services text-center">
                                <div class="services-icon">
                                    <img src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                </div>
                                <div class="services-caption">
                                    <h4><?php the_title();?></h4>
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                        wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
        <!-- services Area End-->
        

        <!-- Recent Area Start -->
        <div class="recent-area section-paddingt2">
            <div class="container">
                <!-- section tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Our Recent News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="assets/img/recent/rcent_1.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Business planing</span>
                                <h4><a href="#">Amazing Places To Visit In Summer</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="assets/img/recent/rcent_2.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Audit</span>
                                <h4><a href="#">Construction industry as their over draft</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-recent-cap mb-30">
                            <div class="recent-img">
                                <img src="assets/img/recent/rcent_3.png" alt="">
                            </div>
                            <div class="recent-cap">
                                <span>Business planing</span>
                                <h4><a href="#">Construction industry as their over draft</a></h4>
                                <p>Nov 30, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Area End-->

    </main>
  <?php get_footer(); ?>