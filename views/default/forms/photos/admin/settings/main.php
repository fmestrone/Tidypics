<?php
/**
 * Primary settings for Elgg
 */

$plugin = $vars['plugin'];

$checkboxes = array('tagging', 'view_count', 'uploader', 'exif', 'download_link');
foreach ($checkboxes as $checkbox) {
	echo '<div>';
	$checked = $plugin->$checkbox ? 'checked' : false;
	echo elgg_view('input/checkbox', array(
		'name' => "params[$checkbox]",
		'value' => true,
		'checked' => (bool)$plugin->$checkbox,
	));
	echo ' ' . elgg_echo("tidypics:settings:$checkbox");
	echo '</div>';
}

// max image size
echo '<div>';
echo elgg_echo('tidypics:settings:maxfilesize');
echo elgg_view('input/text', array(
	'name' => 'params[maxfilesize]',
	'value' => $plugin->maxfilesize,
));
echo '</div>';