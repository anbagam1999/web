<?php
am_var('local', $local = startsWith($_SERVER['HTTP_HOST'], 'localhost'));
//runCode('network');

bootstrap([
	'name' => 'Anbagam.org',
	'byline' => 'Rehabilitating the Mentally Ill',
	'footer-message' => '<marquee>Service to Humanity, Service to God</marquee><br />Recognised As a CSR Implementation Agency By IICA (Ministry Of Corporate Affairs, Government Of India)',
	'safeName' => 'anbagam',
	
	'support_page_parameters' => true,
	'page_parameter1_in_title' => true,
	'version' => [ 'id' => '2', 'date' => '25 Sep 2024', ],

	'use-parent-slugs' => true,
	//'home-link-to-section' => true,
	//'list-only-folders' => true,
	'sections-have-files' => true,

	'folder' => '/content/',
	'use-menu-files' => true,

	'siteMenuName' => 'Volunteering',
	'sections' => ['about-us'],//, 'success-stories', 'galleries', 'shelters'],
	'no-promotions' => true,

	'theme' => 'cv-nonprofit',
	'theme-color' => '22B9FE',
	'image-in-logo' => '-rectangle.jpg',

	'start_year' => '1999',
	'email' => 'contact@anbagam.org',
	'phone' => '+91.9444009988',
	'address' => 'A. Kulandaivel Nachammal Nagar,<br />Thiunillai Village, Post Vichur<br />Chennai 600 103, Tamilnadu',
	'social' => [
		[ 'type' => 'facebook', 'link' => 'https://www.facebook.com/pages/Anbagam-Organization/695733940474317', 'name' => 'facebook: Anbagam Page' ],
		[ 'type' => 'youtube', 'link' => 'https://www.youtube.com/channel/UCra5W808_ZMHoRfH8M753ug', 'name' => 'youtube: Anbagam Channel' ],
	],

	'footer-help' => [
		'title' => 'Help the Homeless, Mentally Ill and Destitute.',
		'link' => 'donate/',
		'linkText' => 'Donate Now',
		'img' => 'donate.jpg',
	],

	'url' => $local ? replace_vars('http://localhost%port%/symphony/anbagam/', 'port') : 'https://anbagam.yieldmore.org/',
	'path' => SITEPATH,
]);
?>
