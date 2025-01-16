<?php

if (! defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

if (!defined('SMOKE_DIR_PATH')) {
	define('SMOKE_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('SMOKE_DIR_URI')) {
	define('SMOKE_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('SMOKE_IS_MOBILE')) {
	define('SMOKE_IS_MOBILE', wp_is_mobile());
}

require_once SMOKE_DIR_PATH . '/inc/setup-theme.php';
require_once SMOKE_DIR_PATH . '/inc/register-assets.php';
require_once SMOKE_DIR_PATH . '/inc/register-menus.php';
require_once SMOKE_DIR_PATH . '/inc/register-sidebar.php';
require_once SMOKE_DIR_PATH . '/inc/template-tags.php';
require_once SMOKE_DIR_PATH . '/inc/helper.php';
