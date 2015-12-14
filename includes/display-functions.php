<?php 
function flamant_add_content($content)
{
	global $mfwp_options;

	if(is_single())
	{
		$message = '<p class="message">Suivre sur <a href="'.$mfwp_options['twitter_url'].'">Twitter</a></p>';
		$content .=$message;
	}

	return $content;
}
add_filter('the_content', 'flamant_add_content');

