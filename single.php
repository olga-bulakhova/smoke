<?php get_header(); ?>

<article class="post-single">
	<div class="wrapper">
		<div class="breadcrumbs">
			<a class="home-page-link" href="/"></a>
			<span>/</span>
			<a href="<?php echo get_permalink(get_option('page_for_posts')) ?>">Блог</a>
			<span>/</span>
			<span><?php the_title() ?></span>
		</div>

		<h1 class="color-dark title-48-600 center-mobile mt-4-mobile post-title"><?php the_title(); ?></h1>


		<div class="post-info">
			<span><?php the_time('j F Y'); ?></span> ,
			<span class="post-category"><?php the_category(', '); ?></span>
		</div>

		<?php if (has_post_thumbnail()) : ?>
			<div class="post-image mb-9">
				<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="border-radius">
			</div>
		<?php endif; ?>

		<div class="post-content">
			<?php the_content(); ?>
		</div>

	</div>
</article>

<?php get_footer(); ?>