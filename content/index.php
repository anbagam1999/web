<?php
$sheet = getSheet('home', 'section');
$page = 'nonprofit';

foreach ($sheet->group as $name => $items) {
	if (endsWith($name, '-start') || endsWith($name, '-end')) continue;

	$start = isset($sheet->group[$name . '-start']) ? $sheet->group[$name . '-start'] : false;
	if ($start) echo replaceItems(getThemeSection($page, $name . '-start'), $start[0], '%'); //is a row needed?

	$template = getThemeSection($page, $name);
	foreach ($items as $item) {
		$kv = [];
		foreach ($sheet->columns as $k => $ix) $kv[$k] = replaceHtml($item[$ix]);
		$thisTemplate = replaceHtml($template);
		echo replaceItems($thisTemplate, $kv, '%');
	}

	$end = isset($sheet->group[$name . '-end']) ? $sheet->group[$name . '-end'] : false;
	if ($end) echo replaceItems(getThemeSection($page, $name . '-end'), $end[0], '%'); //is a row needed?
}
