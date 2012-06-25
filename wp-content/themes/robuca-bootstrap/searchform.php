<form class="well form-inline" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<fieldset class="fluid-row">
      <input type="search" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Digite o termo que procura" class="span5"> <input type="submit" class="btn span2 pull-right" value="Buscar">
    </fieldset>
</form>