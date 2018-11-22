<?php get_header(); ?>
<main>
        <i><h1>Letzte Beiträge</h1></i>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part('content', get_post_format());
    endwhile; endif;
    ?>
    </main>
<?php get_footer(); ?>