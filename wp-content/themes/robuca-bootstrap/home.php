<?php get_header(); ?>

<section id="primary">

	<div class="goto" id="sobre">
	<article class="span10 offset1">
	<div class="row">

		<div class="span8 offset1">

	<?php
		global $post;
		$myposts = get_posts('numberposts=1&post_type=page&include=2');
		if ($myposts) {
			foreach($myposts as $post) :
			setup_postdata($post);
	?>

		<h2 class="hat"><?php the_title(); ?></h2>

			<?php the_content(); ?>

	<?php
			endforeach;
		} else { //se nao tiver conteudo
	?>
		<h2 class="hat">Nenhum conteúdo publicado</h2>
	<?php
		}
	?>

		</div>
	</div>

	</article>
	</div>

	<div class="goto" id="publicacoes-cientificas">
	<article class="span10 offset1">
	<div class="row">
		<div class="span8 offset1">
		<h2 class="hat">Publicações Científicas</h2>

		<?php
			global $post;
			$myposts = get_posts('numberposts=-1&post_type=pub-cientificas');
			if ($myposts) {
				foreach($myposts as $post) :
				setup_postdata($post);
		?>
    <div class="row file-download">
      <div class="span6">
      	<h4><i class="icon icon-file"></i><?php the_title(); ?><br><small>Publicado em <strong><?php the_field('data_de_pub'); ?></strong>  ∙  <strong><?php the_field('onde'); ?></strong></small></h4>
      </div>
      <div class="span2"><a href="<?php the_field('pdf-zip-doc'); ?>" class="btn btn-success"><i class="icon-white icon-download"></i> baixar arquivo</a></div>
    </div>
		<?php
				endforeach;
			} else { //se nao tiver downloads cadastrados
		?>
		<div class="fluid-row">
			<div class="span6">Nenhum arquivo para download publicado ainda</div>
		</div>
		<?php
			}
		?>

		</div>
	</div>
	</article>
	</div>

	<div class="goto" id="parceiros">
	<article class="span10 offset1">
	<div class="row">
		<div class="span8 offset1">
		<h2 class="hat">Parceiros</h2>

<ul class="thumbnails">
		<?php
			global $post;
			$myposts = get_posts('numberposts=-1&order=ASC&post_type=parceiros');
			if ($myposts) {
				foreach($myposts as $post) :
				setup_postdata($post);
		?>

  <li class="span2">
    <div class="thumbnail">
    	        <?php
                	$attachment_id = get_field('logotipo');
                	$size = "thumbnail";
                	$image = wp_get_attachment_image_src( $attachment_id, $size );
                ?>
      <a href="<?php the_field('link'); ?>" rel="co-worker"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"></a>
    </div>
  </li>
		<?php
				endforeach;
			} else { //se nao tiver downloads cadastrados
		?>
			<li>Nenhum parceiro publicado ainda</li>
		
		<?php
			}
		?>
</ul>

		</div>
	</div>
	</article>
	</div>

	<div class="goto" id="pessoas">
	<article class="span10 offset1">
	<div class="row">
		<div class="span8 offset1">
		<h2 class="hat">Pessoas</h2>

		<?php
			global $post;
			$myposts = get_posts('numberposts=-1&order=ASC&post_type=pessoas');
			if ($myposts) {
				foreach($myposts as $post) :
				setup_postdata($post);
		?>

            <div class="row">
            	<div class="span2">
                    <?php 
                    if( get_field('foto') ) {
                    ?>

                <div class="thumbnail">
                	<?php
                	$attachment_id = get_field('foto');
                	$size = "thumbnail";
                	$image = wp_get_attachment_image_src( $attachment_id, $size );
                	?>
                  <img src="<?php echo $image[0]; ?>" alt="Foto de <?php the_title(); ?>">
                </div>
                    <?php 
                	} else {
                	?>

                <div class="thumbnail">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/profile.png" alt="ícone de perfil">
                </div>
                    <?php 
                	}
                	?>

                </div>

                <div class="span6">
                    <h3><?php the_title(); ?>  ∙  <small><?php the_field('o-que-faz'); ?></small></h3>
                    <p><?php the_field('bio'); ?></p>
                    <?php 
                    if( get_field('lattes') == "" || get_field('lattes') == "http://" ) {
                    	//so mostra link do lattes caso esteja preenchido
                	} else {
                	?>
                    <p><a href="<?php the_field('lattes'); ?>" class="btn btn-small"><i class="icon icon-user"></i> Currículo Lattes</a></p>
                   <?php } ?>

                </div>
            </div>
                <hr>
		<?php
				endforeach;
			} else { //se nao tiver downloads cadastrados
		?>
			<p>Nenhum perfil publicado ainda</p>
		
		<?php
			}
		?>


		</div>
	</div>
	</article>
	</div>


	<div class="goto" id="blog">
	<article class="span10 offset1">
	<div class="row">
		<div class="span8 offset1">
		<h2 class="hat">Blog</h2>
		<h3>Últimos posts</h3>

<ul class="nav nav-tabs nav-stacked">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
	?>
	<li><a href="<?php the_permalink(); ?>"><span class="label label-info pull-right"><i class="icon-white icon-time"></i> <?php the_time('d.m.Y'); ?></span> <?php the_title(); ?></a></li>
	<?php		
		}//end while
	?>
</ul>
	<a href="<?php echo esc_url( home_url( '/blog-arquivo/' ) ); ?>" class="btn pull-right"><i class="icon icon-calendar"></i> Todos os posts por data</a>
	<?php
	} else {
	?>
		<p>Nenhum post publicado ainda</p>
	<?php
	}//endif
	?>
		</div>
	</div>
	</article>
	</div>
</section><!-- #primary -->

<?php get_footer(); ?>