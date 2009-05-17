<?php

	/**************************************************************************
	 *
	 *  Tidypics Image Menu
	 *
	 *  This is the menu that appears below an image. Admins can override the
	 *  menu with a different view to provide a look and feel that matches
	 *  their themes. The view can be extended to provide additional controls.
	 *
	 **************************************************************************/

	$file_guid = $vars['file_guid'];
?>
<li id="start_tagging"><a id="tag_control" href="javascript:void(0)" onclick="startTagging()"><?= elgg_echo('tidypics:tagthisphoto') ?></a></li>
<?php 
	if (get_plugin_setting('download_link', 'tidypics') != "no") { 
?>
<li id="download_image"><a href="<?php echo $vars['url']; ?>action/tidypics/download?file_guid=<?php echo $file_guid; ?>"><?php echo elgg_echo("image:download"); ?></a></li>
<?php
	} 
?>