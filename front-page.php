<?php get_header(); ?>
        <!-- Content section-->
        <section class="py-5">
            <div class="container my-5">
                <?php
                    if( have_posts() ){

                        while( have_posts() ){

                            the_post();
                            the_content();
                        }

                    }
                ?>
            </div>
        </section>
        <!-- Footer-->
<?php get_footer(); ?>