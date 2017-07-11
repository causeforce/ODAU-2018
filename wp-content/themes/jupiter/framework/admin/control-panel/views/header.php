<?php

$has_api_key = get_option('artbees_api_key');
$update_class = new Mk_Wp_Theme_Update();
$compatibility = new Compatibility();
$compatibility->setSchedule('off');
$compatibility_response = $compatibility->compatibilityCheck();

$check_for_new_version = $update_class->check_latest_version();

$pages = array(
	'theme-support' => __('Support', 'mk_framework'),
	THEME_NAME => __('Register Product', 'mk_framework'),
    'theme-templates' => __('Templates', 'mk_framework'),
    'theme-image-size' => __('Image Sizes', 'mk_framework'),
    'theme-status' => __('System Status', 'mk_framework'),
    'theme-updates' => __('Updates', 'mk_framework'),
    'theme-announcements' => __('Announcements', 'mk_framework'),
);
if(NEW_PLUGIN_INSTALLER == true)
{
	$newVal = array('theme-plugins' => __('Plugins', 'mk_framework'));
	$afterIndex = 2;
	$pages = array_merge(array_slice($pages,0,$afterIndex+1), $newVal,array_slice($pages,$afterIndex+1));
}
if(NEW_ADDON_INSTALLER == true)
{
	$newVal = array('theme-addons' => __('Add-Ons', 'mk_framework'));
	$afterIndex = 3;
	$pages = array_merge(array_slice($pages,0,$afterIndex+1), $newVal,array_slice($pages,$afterIndex+1));
}
?>

<div class="mka-cp-header">
    <div class="mka-cp-branding">
        <div class="mka-cp-jupiter-logo">
            <span>
            </span>
        </div>
        <strong>
            <span><?php echo THEME_NAME; ?> <?php _e('Control Panel', 'mk_framework');?></span>
        </strong>
    </div>
    <div class="mka-cp-theme-version"><?php _e('Version', 'mk_framework');?> <?php echo get_option('mk_jupiter_theme_current_version'); ?></div>
</div>

<?php
echo $compatibility_response;
?>

<ul class="cp-tabs-holder">
	<?php foreach ($pages as $slug => $name)
{
    $current_class = ($view_params['page_slug'] == $slug) ? ' class="current"' : '';
    ?>
		<li<?php echo $current_class; ?>><a href="<?php echo admin_url('admin.php?page=' . $slug); ?>">
		<?php if (empty($has_api_key) && $slug == THEME_NAME)
    {
        ?>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
				<circle fill="#F95C32" cx="8" cy="8" r="8"/>
				<rect x="7.1" y="3" fill="#FFFFFF" width="1.9" height="6.3"/>
				<circle fill="#FFFFFF" cx="8" cy="12.3" r="1.2"/>
			</svg>
		<?php }?>

		<?php if (!empty($check_for_new_version) && $slug == 'theme-updates')
    {
        ?>
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
				<circle fill="#F95C32" cx="8" cy="8" r="8"/>
				<rect x="7.1" y="3" fill="#FFFFFF" width="1.9" height="6.3"/>
				<circle fill="#FFFFFF" cx="8" cy="12.3" r="1.2"/>
			</svg>
		<?php }?>

		<?php echo $name; ?></a></li>
	<?php }?>
</ul>