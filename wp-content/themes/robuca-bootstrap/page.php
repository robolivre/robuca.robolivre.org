<?php get_header(); ?>

<section id="primary">

	<div class="goto">
	<article class="span10 offset1">
	<div class="row">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="span8 offset1">
				<h2 class="hat"><?php the_title(); ?></h2>

<?php get_search_form(); ?>

				<?php the_content(); ?>
			<?php
			if ( is_page('blog-arquivo') ) :
			?>

			<?php
			if (function_exists('simpleYearlyArchive')) {
				simpleYearlyArchive('yearly','4,7,9');
			}
			endif
			?>

<div id="nav-blog-home">
 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn span7 hidden-desktop"><i class="icon icon-home"></i> Início</a>
</div>

			</div>
		<?php endwhile; ?>


	</div>
	</article>
	</div>
</section><!-- #primary -->

<?php get_footer(); ?>