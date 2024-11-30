<?php
am_var('local', $local = startsWith($_SERVER['HTTP_HOST'], 'localhost'));
//runCode('network');

bootstrap([
	'name' => 'Anbagam - An Initiative by TERDOD',
	'byline' => 'Rehabilitating the Mentally Ill',
	'footer-message' => '<marquee>Service to Humanity, Service to God</marquee><br />Recognised As a CSR Implementation Agency<br />By IICA (Ministry Of Corporate Affairs, Government Of India)',
	'safeName' => 'anbagam',
	
	'support_page_parameters' => true,
	'page_parameter1_in_title' => true,
	'version' => [ 'id' => '1', 'date' => '22 Oct 2024' ],

	'use-parent-slugs' => true,
	//'home-link-to-section' => true,
	//'list-only-folders' => true,
	'sections-have-files' => true,

	'folder' => '/content/',
	'use-menu-files' => true,
	'site-home-in-menu' => true,

	'siteMenuName' => 'Volunteering',
	'sections' => ['about-us', 'gallery'],
	'no-promotions' => true,

	'theme' => 'cv-nonprofit',
	'theme-color' => '22B9FE',
	'image-in-logo' => '-rectangle.jpg',
	'needs-container' => am_var('node') != 'index',

	'start_year' => '1999',
	'email' => 'anbagam.help@gmail.com',
	'phone' => '+91.9444009988',
	'address' => 'A. Kulandaivel Nachammal Nagar,<br />Thiunillai Village, Post Vichur<br />Chennai 600 103, Tamilnadu',
	'social' => [
		[ 'type' => 'facebook-sign', 'link' => 'https://www.facebook.com/pages/Anbagam-Organization/695733940474317', 'name' => 'facebook: Anbagam Page' ],
		[ 'type' => 'linkedin-sign', 'link' => 'https://www.linkedin.com/in/anbagam-rehabilitation-center-terdod-b73392116/', 'name' => 'linkedin: Anbagam Page' ],
		[ 'type' => 'instagram', 'link' => 'https://www.instagram.com/anbagam._rehabilitation/', 'name' => 'instagram: Anbagam Page' ],
		//[ 'type' => 'youtube', 'link' => 'https://www.youtube.com/channel/UCra5W808_ZMHoRfH8M753ug', 'name' => 'youtube: Anbagam Channel' ],
	],

	'footer-help__removed' => [
		'title' => 'Help the Homeless, Mentally Ill and Destitute.',
		'link' => 'donate/',
		'linkText' => 'Donate Now',
		'img' => 'donate.jpg',
	],

	'url' => $local ? replace_vars('http://localhost%port%/symphony/anbagam/', 'port') : 'https://anbagam.org/',
	'path' => SITEPATH,
]);
?>
