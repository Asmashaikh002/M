<!-- Start tabs -->
<ul class="jltma-master-addons-tabs-navbar">

	<?php if (isset($jltma_hide_welcome) && !$jltma_hide_welcome) { ?>
		<li class="jltma-admin-tab-active">
			<a href="#jltma-master-addons-welcome">
				<?php _e('Welcome', JLTMA_TD); ?>
			</a>
		</li>
	<?php } ?>

	<?php if (isset($jltma_hide_addons) && !$jltma_hide_addons) { ?>
		<li>
			<a href="#jltma-master-addons-addons">
				<?php _e('Addons', JLTMA_TD); ?>
			</a>
		</li>
	<?php } ?>

	<?php if (isset($jltma_hide_extensions) && !$jltma_hide_extensions) { ?>
		<li>
			<a href="#jltma-master-addons-extensions">
				<?php _e('Extensions', JLTMA_TD); ?>
			</a>
		</li>
	<?php } ?>

	<?php if (isset($jltma_hide_api) && !$jltma_hide_api) { ?>
		<li>
			<a href="#jltma-master-addons-api-keys">
				<?php _e('API', JLTMA_TD); ?>
			</a>
		</li>
	<?php } ?>

	<?php if (isset($jltma_hide_white_label) && !$jltma_hide_white_label) { ?>
		<li>
			<a href="#jltma-master-addons-white-label">
				<?php _e('White Label', JLTMA_TD);
				?>
			</a>
		</li>
	<?php } ?>

	<?php if (isset($jltma_hide_version) && !$jltma_hide_version) { ?>
		<li>
			<a href="#jltma-master-addons-version">
				<?php _e('Version', JLTMA_TD); ?>
			</a>
		</li>
	<?php } ?>

	<?php if (isset($jltma_hide_changelogs) && !$jltma_hide_changelogs) { ?>
		<li>
			<a href="#jltma-master-addons-changelogs">
				<?php _e('Changelogs', JLTMA_TD); ?>
			</a>
		</li>
	<?php } ?>

	<?php if (isset($jltma_hide_system_info) && !$jltma_hide_system_info) { ?>
		<li>
			<a href="#jltma-master-addons-system-info">
				<?php _e('System Info', JLTMA_TD); ?>
			</a>
		</li>
	<?php } ?>

	<?php if (ma_el_fs()->is_not_paying()) { ?>
		<a class="jltma-upgrade-pro" href="https://master-addons.com/pricing" target="_blank">
			<?php _e('Upgrade Pro', JLTMA_TD); ?>
		</a>
	<?php } ?>

</ul>
