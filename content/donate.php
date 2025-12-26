<section id="donate" class="container mt-4">
<?php
echo h2('Donations');
$sheet = getSheet('donate', false);
$items = [];
$broken = false;
$links = [];

foreach ($sheet->rows as $item) {
	if ($sheet->getValue($item, 'what', true) == '----') {
		$broken = true;
	} else if (!$broken) {
		$links[] = makeLink($sheet->getValue($item, 'what', true), $sheet->getValue($item, 'link', true), false);
	} else {
		$itemLinks = [];
		$amount = $sheet->getValue($item, 'amount', true);

		foreach ($links as $option)
			$itemLinks[] = str_replace('%amount%', $amount == '_' ? 0 : $amount, $option);

		$items[] = 'Rs ' . $amount . ' for <b>'
			. $sheet->getValue($item, 'what', true) . '</b> &mdash; '
			. implode(' / ', $itemLinks);
	}
}

$amounts = '<ol><li>' . implode('</li><li>', $items) . '</li></ol>';

renderAny(__DIR__ . '/_donate.md', ['replaces' => [
	'razorpay-links' => 'Make a payment with one of these:' . $amounts,
	],
	'use-content-box' => true,
]);
?>
</section>
