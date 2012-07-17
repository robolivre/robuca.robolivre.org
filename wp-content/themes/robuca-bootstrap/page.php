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

<div id="creditos" class="row-fluid">
<div class="span12">
<hr>
	Conteúdo sob a licença <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.pt">CC BY-SA 3.0</a> ‧ <a href="<?php echo esc_url( home_url( '/creditos' ) ); ?>">Créditos</a>
</div>
</div>
	</article>
	</div>
</section><!-- #primary -->

<?php get_footer(); ?>