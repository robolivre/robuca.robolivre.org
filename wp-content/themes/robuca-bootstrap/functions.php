<?php
function robuca_remove_scripts_filter() {
	remove_filter( 'init', 'the_bootstrap_register_scripts_styles' );
}
add_action( 'after_setup_theme', 'robuca_remove_scripts_filter' );

?>