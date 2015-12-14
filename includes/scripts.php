<?php 
function load_scripts()
{
	if(is_single())
	{
		wp_enqueue_style('style',plugin_dir_url( __FILE__).'css/flamant-style.css');
	}

}
add_action('wp_enqueue_scripts','load_scripts');