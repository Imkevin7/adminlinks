<?php 
/*

	Plugin Name: Add links to admin bar
	Description: Add any link to admin top bar
	Author: Kevin Pichette
	Version: 1.0
	Author URI: http://kevinpichette.com

*/

add_action('admin_bar_menu', 'admin_links',100);
function admin_links($wp_admin_bar)
{
	$args = array(
		'id' => "my_links",
		'title' => 'My Links',
		'meta' => array('class' => 'first-toolbar-group'),
	);
	$wp_admin_bar->add_node($args);

	$args = array();

	array_push($args, array(
		'id' => 'kevin',
		'title' => 'Kevin',
		'href' => 'http://kevinpichette.com',
		'parent' => 'my_links',
	));

	sort($args);
	for($a=0;$a<Sizeof($args);$a++)
	{
		$wp_admin_bar->add_node($args[$a]);
	}
}

 ?>