<div class="row justify-content-center">
    <div class="col-lg-6">
        <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="
        <?php
        the_post_thumbnail_url('thumbnail');
        ?>" alt="image">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="lead">
            <span class="date"><?php the_date(); ?></span>
            <span class="comment">> <a href="#comments"><i class='fa fa-comment'></i>
                    <?php comments_number(); ?></a>
            </span>
        </p>
        <p class="mb-0">
            <?php
            the_excerpt();
            ?>
        </p>
        <a href="<?php the_permalink(); ?>">Read More >> </a>
    </div>
</div>
<hr>