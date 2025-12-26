<?php
addStyle('site', SITEASSETS);

variable('upi', [
	'site' => ['id' => 'terdod1@sbi', 'name' => 'SBI_Anbagam'],
	'razorpay' => ['id' => 'mpmohamedrafi617317.rzp@rxairtel', 'name' => 'Razorpay_Anbagam'],
	'rafiya' => ['id' => 'abdullasknr-3@oksbi', 'name' => 'Rafiya_Anbagam'],
]);

variables([
	'sections-have-files' => true, //TODO: fix this asap!
	'sub-theme' => 'nonprofit',
	'siteReplaces'=> [
		'founder-number' => $ph = '+91-94440-09988',
		'founder-whatsapp' => _whatsAppME($ph),
		'rafiya-number' => $ph = '+91-8807865616',
		'rafiya-whatsapp' => _whatsAppME($ph),
		'royapettah-landline' => '+91-44-2660-5865',
	],
	'no-page-menu' => true, //TODO: remove for seo review!!
	'social' => [
		[ 'type' => 'instagram', 'url' => 'https://www.instagram.com/anbagamrehabilitationcenter/', 'name' => 'Instagram' ],
		[ 'type' => 'youtube', 'url' => 'https://youtube.com/@AnbagamRehabilitationCenter/', 'name' => 'YouTube' ],
		[ 'type' =>  'linkedin', 'url' => 'https://www.linkedin.com/company/AnbagamRehabilitationCenter/', 'name' => 'LinkedIn' ],
	],
]);

function enrichThemeVars($vars, $what) {
	if ($what == 'header') {
		if (variable('node') == 'index') {
			$vars['optional-slider'] = getSnippet('25-years-booklet');
		}
		else if (variable('node') == 'reports' && getPageParameterAt(1) == false) {
			$vars['optional-slider'] = getSnippet('25-years-booklet-link-to');
		}
	}

	return $vars;
}

function after_footer_assets() {
	$reportHome = variable('node') == 'reports' && getPageParameterAt(1) == false;
	if (variable('node') != 'index' && !$reportHome) return;
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
	sectionEnd();
}
