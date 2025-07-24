<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Ensure the file is being accessed through the WordPress admin area
if (!defined('ABSPATH')) {
    die;
}

$form_mask_installed_date = get_option('fme-installDate');
$conditional_fields_installed_date = get_option('cfef-installDate');
$conditional_fields_pro_installed_date = get_option('cfefp-installDate');
$country_code_installed_date = get_option('ccfef-installDate');

$plugins_dates = [
    'fim_plugin'  => $form_mask_installed_date,
    'cfef_plugin' => $conditional_fields_installed_date,
    'cfefp_plugin' => $conditional_fields_pro_installed_date,
    'ccfef_plugin' => $country_code_installed_date,
];

$plugins_dates = array_filter($plugins_dates);

if (!empty($plugins_dates)) {
    asort($plugins_dates);
    $first_plugin = key($plugins_dates);
} else {
    $first_plugin = 'cfef_plugin';
}




?>
<div class="cfkef-license-box">
    <div class="wrapper-header">
        <div class="cfkef-save-all">
            <div class="cfkef-title-desc">
                <h2><?php esc_html_e('License Key', 'cool-formkit'); ?></h2>
            </div>
            <div class="cfkef-save-controls">
                <span><?php esc_html_e('Free', 'cool-formkit'); ?></span>
                <a class="button button-primary upgrade-pro-btn" target="_blank" href="https://coolplugins.net/cool-formkit-for-elementor-forms/?utm_source=<?php echo $first_plugin; ?>&utm_medium=inside&utm_campaign=get-pro&utm_content=plugins-dashboard#pricing">
                    <img class="crown-diamond-pro" src="<?php echo esc_url(FME_PLUGIN_URL . 'assets/images/crown-diamond-pro.png'); ?>" alt="Cool FormKit Logo">
                    <?php esc_html_e('Upgrade To Pro', 'cool-formkit'); ?>
                </a>
            </div>
        </div>
    </div>
    <div class="wrapper-body">
        <p><?php esc_html_e('Your license key provides access to pro version updates and support.', 'cool-formkit'); ?></p>
        <p><?php esc_html_e('You\'re using ', 'cool-formkit'); ?><strong><?php esc_html_e('free plugin ', 'cool-formkit'); ?></strong><?php esc_html_e('- no license needed. Enjoy! 😊', 'cool-formkit'); ?></p>
        <div class="cfkef-license-upgrade-box">
            <p><?php esc_html_e('To unlock more features, consider ', 'cool-formkit'); ?><a href="https://coolplugins.net/cool-formkit-for-elementor-forms/?utm_source=<?php echo $first_plugin; ?>&utm_medium=inside&utm_campaign=get-pro&utm_content=plugins-dashboard#pricing" target="_blank"><?php esc_html_e('upgrading to Pro', 'cool-formkit'); ?></a>.
            </p>
            <em><?php esc_html_e('As a valued user, you automatically receive an exclusive discount on the Annual License and an even greater discount on the POPULAR Lifetime License at checkout!', 'cool-formkit'); ?></em>
    </div>
    </div>
</div>
