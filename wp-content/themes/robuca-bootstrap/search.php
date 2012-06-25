<?php get_header(); ?>

<section id="primary">

	<div class="goto">
	<article class="span10 offset1">
	<div class="row">
			<div class="span8 offset1">

					<h2 class="hat">Resultado de busca por "<?php the_search_query(); ?>"</h2>
<?php get_search_form(); ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="sya_container" id="sya_container">
	<ul>
		<li>
			<?php the_time('d.m.Y'); ?>   ∙   <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
</ul>
</div>

		<?php endwhile; ?>

<?php posts_nav_link('   ∙   ','&laquo; Mais recentes','Mais antigos &raquo;'); ?>


<hr>
<div id="nav-blog-home">
 <a href="<?php echo esc_url( home_url( '/blog-arquivo/' ) ); ?>" class="btn span7"><i class="icon icon-calendar"></i> Todos os posts do blog</a>
 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn span7 hidden-desktop"><i class="icon icon-home"></i> Início</a>
</div>
			</div>
		
	</div>
	</article>
	</div>
</section><!-- #primary -->

<?php get_footer(); ?>