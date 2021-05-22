<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <a href="/" class="back_button">Retourner en arrière</a>
            <div class="post">
                <div class="post_content">
                    <div class="post_thumbnail"><?php the_post_thumbnail(); ?></div>
                    <h1 class="post_title"><?php the_title(); ?></h1>
                    <p class="post_info">
                        Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
                    </p>
                    <div class="post_content">
                        <?php the_content(); ?>
                    </div>
                    <div class="post_comments">
                        <?php comments_template(); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer();