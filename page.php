<?php get_header(); ?>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <?php
                    if( have_posts() ){

                        while( have_posts() ){

                            the_post();
                            
                            get_template_part('template-parts/content','page');


                        }

                    }
                ?>
            </div>
        </section>
        <!-- Footer-->
<?php get_footer(); ?>