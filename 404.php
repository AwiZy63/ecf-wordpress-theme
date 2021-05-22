<?php get_header(); ?>

<div class="container">
    <div class="error">
        <h1 class="error_title"><?php _e("Page non trouvée.", "ecfwordpresstheme"); ?></h1>
        <p class="error_description"><?php _e("Oops, vous vous êtes égaré. Tentez peut-être de faire une recherche ?", "ecfwordpress"); ?></p>
        <div class="error_searchbar">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>