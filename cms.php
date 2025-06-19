<?php
addStyle('site', SITEASSETS);

variables([
	'sections-have-files' => true, //TODO: fix this asap!
	'sub-theme' => 'nonprofit',
	'social' => [
		[ 'type' => 'instagram', 'url' => 'https://www.instagram.com/anbagamrehabilitationcenter/', 'name' => 'Instagram' ],
		[ 'type' => 'youtube', 'url' => 'https://youtube.com/@AnbagamRehabilitationCenter/', 'name' => 'YouTube' ],
		[ 'type' =>  'linkedin', 'url' => 'https://www.linkedin.com/company/AnbagamRehabilitationCenter/', 'name' => 'LinkedIn' ],
	],
]);

function enrichThemeVars($vars, $what) {
	if ($what == 'header') {
		if (variable('node') == 'index') {
			$vars['optional-slider'] = getSnippet('25-years-booklet'); //nonprofit-hero');
		}
	}

	return $vars;
}

function after_footer_assets() {
	if (variable('node') != 'index') return;
	echo '<script>
	window.addEventListener( \'load\', function() {
		var swiper = new Swiper(".swiper", {
			effect: "cards",
			autoplay: true,
		});
	});
</script>' . NEWLINE;
}

function _socialItems($featured = true) {
	runFeature('tables');

	sectionId('pulse', 'text-center p-3');
	add_table('pulse',
		SITEPATH .'/data/social.tsv',
		'Title, Instagram',
		'<div class="col-lg-4 col-md-6 col-sm-12 text-center p-3"><div class="content-box"><h3>%Title%</h3>%Text%<hr/>%Social_Embed%</div></div>', [
			'use-a-bootstrap-row' => true,
			'skipItem' => $featured ? function($r) { return $r['Featured'] == ''; } : false,
		]);
	section('end');
}
