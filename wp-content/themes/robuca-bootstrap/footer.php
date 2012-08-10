

<!-- Modal download do logotipo -->
<div class="modal fade" id="modalLogo">
  <div class="modal-header">
    <a class="close" data-dismiss="modal" title="Fechar">×</a>
    <h3>Precisando do nosso logotipo?</h3>
  </div>
  <div class="modal-body">
		<div class="row-fluid">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2012/07/logo-robuca.zip" class="btn btn-success btn-large span6">Baixe o zip <i class="icon-download icon-white"></i></a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2012/07/manual-logo-robuca.pdf" class="btn btn-large span6">Confira o manual de aplicação <i class="icon-ok"></i></a>
		</div>
  </div>
</div>

<!-- Modal créditos -->
	<?php
		global $post;
		$myposts = get_posts('numberposts=1&post_type=page&include=140');
		if ($myposts) {
			foreach($myposts as $post) :
			setup_postdata($post);
	?>
<div class="modal fade" id="modalCreditos">
  <div class="modal-header">
    <a class="close" data-dismiss="modal" title="Fechar">×</a>
    <h3><?php the_title(); ?></h3>
  </div>
  <div class="modal-body">
		<?php the_content(); ?>
  </div>
</div>
	<?php
			endforeach;
		}
	?>


			</div><!-- #page -->
		</div><!-- .container -->

	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	<script src='<?php bloginfo('stylesheet_directory'); ?>/bootstrap/js/bootstrap.min.js'></script>
	<script src='<?php bloginfo('stylesheet_directory'); ?>/js/main-robuca.js'></script>

	<?php wp_footer(); ?>

	<script>
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24423908-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	</body>
</html>