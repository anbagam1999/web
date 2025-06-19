<?php
addStyle('site', SITEASSETS);

variables([
	'sections-have-files' => true,
	'sub-theme' => 'nonprofit',
	'social' => [
		[ 'type' => 'instagram', 'url' => 'https://www.linkedin.com/company/anbagamrehabilitationcentre/', 'name' => 'LinkedIn' ],
	],
]);

function enrichThemeVars($vars, $what) {
	if ($what == 'header') {
		if (variable('node') == 'index') {
			$vars['optional-slider'] = getSnippet('nonprofit-hero');
		}
	}

	return $vars;
}
