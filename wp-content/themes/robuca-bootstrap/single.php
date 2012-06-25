<?php get_header(); ?>

<section id="primary">

	<div class="goto">
	<article class="span10 offset1">
	<div class="row">
			<div class="span8 offset1">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<h2 class="hat">Blog</h2>
				<h2><?php the_title(); ?></h2>
				<p><span class="label label-info"><i class="icon-white icon-time"></i> <?php the_time('d.m.Y  ∙  H:i'); ?></span></p>
				<?php the_content(); ?>

		<?php endwhile; ?>
<hr>

<ul class="pager stream-single">
  <li class="previous">
    <?php previous_post_link('%link', '&laquo; %title', TRUE); ?>
  </li>

  <li class="next">
    <?php next_post_link('%link', '%title &raquo;', TRUE); ?> 
  </li>
</ul>
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