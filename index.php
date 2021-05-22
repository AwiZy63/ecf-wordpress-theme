<?php

get_header();

$lastposts = get_posts(array(
	"posts_per_page" => 8
));

?>
<div class="container">
	<h1 class="title">Articles postés</h1>
	<div class="articles">
		<?php
		if ($lastposts) {
			foreach ($lastposts as $post) :
				setup_postdata($post); ?>
				<article class="article">
					<h2 class="article_title"><a href="<?php the_permalink(); ?>" class="article_link"><?php the_title(); ?></a></h2>
					<div class="article_description">
                        <?php the_content(); ?>
                    </div>
					<a href="<?php the_permalink(); ?>" class="article_link_read">Lire l'article</a>
					<div class="article_infos">Posté le <?php the_date(); ?> par <?php the_author(); ?></div>
					<div class="article_thumbnail"><?php the_post_thumbnail(); ?></div>
				</article>
		<?php
			endforeach;
			wp_reset_postdata();
		}
		?>
	</div>
</div>

<?php get_footer(); ?>
