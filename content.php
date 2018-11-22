<section>
    <h2 class="blogTitle"><?php the_title(); ?></h2>
    <p class="blogMeta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
    <div class="container">
        <div class="blogText">
            <?php the_content(); ?>
        </div>
        <div class="blogPic">
            <?php the_post_thumbnail(); ?>
        </div>
    </div>
    <hr>
</section>