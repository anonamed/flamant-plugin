<?php 
/*
Plugin Name: Plugin de Hugo Flamant
Description: TD plugin 
Version: 0.1
*/


//récupère les paramètres de la table d'option
$mfwp_options = get_option('flamant_settings'); 



include('includes/scripts.php'); //js css
include('includes/display-functions.php');
include('includes/admin-page.php');
