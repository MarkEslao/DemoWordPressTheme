<?php get_header(); ?>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <?php
                    if( have_posts() ){

                        while( have_posts() ){

                            the_post();
                            
                            get_template_part('template-parts/content','archive');


                        }

                    }
                ?>
            </div>
            <?php 
                the_posts_pagination();
            ?>
        </section>

        <!-- Footer-->
<?php get_footer(); ?>