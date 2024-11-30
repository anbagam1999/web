<div id="footer-content" class="footer-bgd" style="margin-top: 30px;">
	<div class="container">
		<section id="footer-message">
			<a href="<?php echo am_var('url');?>"><img src="<?php echo am_var('url') . am_var('safeName') . '-logo.png'; ?>" class="img-fluid img-max-500" alt="<?php echo am_var('name'); ?>" /></a><br />
			<u><?php echo am_var('name'); ?></u> &mdash;
			<?php renderMarkdown(am_var_or('footer-message', ''), ['strip-paragraph-tag' => true]); ?>
			<hr />
			<p>Contact Us:
			<?php echo implode(am_var('brnl'), [ '',
				'Vichur branch: ' . makeSpecialLink('+91-9444009988', 'tel, whatsapp', $txt = urlencode('Sir, Regarding Anbagam - I would like to...')),
				'Otteri: ' . makeSpecialLink('+91-04426605865', 'tel'),
				'Tondiarpet: ' . makeSpecialLink('+91-04426605864', 'tel'),
				makeSpecialLink(am_var('email'), 'email', 'enquiry about ' . am_var('name') . ' - ' . am_var('node')),
				]);
			?>
			</p>
			<p><?php echo am_var('address'); ?></p>
			<div class="social-links"><?php foreach(am_var('social') as $item) { ?>
				<a target="_blank" href="<?php echo $item['link']; ?>" title="<?php echo isset($item['name']) ? $item['name'] : $item['type']; ?>" class="<?php echo $item['type']; ?>"><i class="icon-lg icon-<?php echo $item['type']; ?>"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php } ?>
			</div>
		</section>
		<?php load_amadeus_module('share'); ?>
	</div>
</div>

