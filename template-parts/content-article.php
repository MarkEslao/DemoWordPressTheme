<div class="row justify-content-center">
    <div class="col-lg-6">
        <h2><?php the_title(); ?></h2>
        <p class="lead">
            <span class="date"><?php the_date(); ?></span>
            <?php the_tags('<span class="tag">> ', ',</span><span class="tag">', '</span>'); ?>
            <span class="comment">> <a href="#comments"><i class='fa fa-comment'></i>
                    <?php comments_number(); ?></a></span>
        </p>
        <?php

        the_content();
        ?>

        <?php
        comments_template();

        ?>
    </div>
</div>