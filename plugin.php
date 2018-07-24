<?php
/**
 * Plugin Name:     (WP-EXT) Worker
 * Plugin URI:      https://metastore.pro/
 *
 * Description:     Worker post type and more.
 *
 * Author:          Kitsune Solar
 * Author URI:      https://kitsune.solar/
 *
 * Version:         1.0.0
 *
 * Text Domain:     wp-ext-worker
 * Domain Path:     /languages
 *
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Loading `WP_EXT_Worker`.
 */

function run_wp_ext_worker() {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Worker.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Worker_Post_Type.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Worker_Post_Field.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Worker_Taxonomy.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Worker_User_Role.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Worker_Theme.class.php' );
//	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Worker_Template.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Worker_ShortCode.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Worker_Widget.class.php' );
}

run_wp_ext_worker();
