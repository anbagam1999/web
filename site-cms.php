<?php
am_var('local', $local = startsWith($_SERVER['HTTP_HOST'], 'localhost'));
//runCode('network');

bootstrap([
	'name' => 'Anbagam.org',
	'byline' => 'Rehabilitating the Mentally Ill',
	'footer-message' => '<marquee>Service to Humanity, Service to God</marquee><br />Recognised As a CSR Implementation Agency By IICA(Ministry Of Corporate Affairs, Government Of India)',
	'safeName' => 'anbagam',
	
	'support_page_parameters' => true,
	'version' => [ 'id' => '1', 'date' => '2 Sep 2024', ],

	'use-parent-slugs' => true,
	//'home-link-to-section' => true,
	//'list-only-folders' => true,
	'sections-have-files' => true,

	'folder' => '/content/',
	'support_page_parameters' => true,
	'page_parameter1_in_title' => true,

	'siteMenuName' => 'Anbagam Main',
	'sections' => ['about-us'],//, 'success-stories', 'galleries', 'shelters'],
	'no-promotions' => true,

	'theme' => 'biz-land',
	'image-in-logo' => '-rectangle.jpg',

	'start_year' => '1999',
	'email' => 'anbagam.help@gmail.org',
	'phone' => '+91.9444009988',
	'address' => 'A. Kulandaivel Nachammal Nagar,<br />Thiunillai Village, Post Vichur<br />Chennai 600 103, Tamilnadu',
	'social' => [
		[ 'type' => 'group', 'link' => 'https://groups.io/g/yieldmore/topics', 'name' => 'Mailing List from groups.io' ],
		[ 'type' => 'facebook', 'link' => 'https://www.facebook.com/groups/yieldmore/', 'name' => 'facebook: main group' ],
		[ 'type' => 'email', 'link' => 'mailto:team@yieldmore.org', 'name' => 'Imran\'s Email' ],
		[ 'type' => 'phone', 'link' => 'tel:+919841223313', 'name' => 'Imran\'s Mobile (India)' ],
		[ 'type' => 'youtube', 'link' => 'https://www.youtube.com/@YieldMore', 'name' => 'youtube: main channel love / new' ],
		[ 'type' => 'linkedin','link' => 'https://www.linkedin.com/groups/14012871/', 'name' => 'YieldMore.org Group on LinkedIn' ],
	],

	'url' => $local ? replace_vars('http://localhost%port%/symphony/anbagam/', 'port') : 'https://anbagam.yieldmore.org/',
	'path' => SITEPATH,
]);
?>

