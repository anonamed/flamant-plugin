<?php 
//page d'option dans wp
function options_page()
{
	global $mfwp_options;
	ob_start()?>
	<div class="wrap">
		<h2>Plugin options</h2>
		<p>Ceci est la page de réglage</p>
		<form method="post" action="options.php">
			<?php settings_fields('settings_group');?>

			<h4><?php _e('Twitter information','flamant_domain');?></h4> <!--appel un fichier spécifique qui permet de traduire une page dans d'autres langue-->
			<p>
				<label class="description" for="flamant_settings[twitter_url]"><?php _e('Entrez l\'url','flamant_domain');?></label>
				<input id="flamant_settings[twitter_url]" name="flamant_settings[twitter_url]" type="text" value="<?php echo $mfwp_options['twitter_url'];?>"/>
			</p>
			<p class="valider">
				<input type="submit" class="button-primary" value="<?php _e('Sauvegarder', 'flamant_domain');?>"/>
			</p>
		</form>
	</div>
	<?php
	echo ob_get_clean();
}
//lien dans le menu wp vers page option
function add_options_link()
{
	add_options_page('Plugin option n1','1er plugin', 'manage_options','mon-premier-plugin','options_page'); 
}
add_action('admin_menu','add_options_link');


function flamant_register_settings()
{
	register_setting('settings_group','flamant_settings');
}
add_action('admin_init','flamant_register_settings');
