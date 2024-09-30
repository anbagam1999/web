<?php
am_var('node-vars', [
	'dont-render-markdown-for-node-item' => true,
	'gallery' => ['all'],
	'gallery-settings' => [
		'images-folder' => '%nodeUrl%' . am_var('page_parameter1') . '/',
		'node-item-is-subfolder' => true, //needed for others
		'use-grid' => true, //no-links, no sections
	],
]);
?>

