<?php
/**
 * Fired during plugin deactivation
 *
 * @link https://www.boldgrid.com
 * @since 1.0.0
 *
 * @package Boldgrid_Backup_Premium
 * @subpackage Boldgrid_Backup_Premium/includes
 * @copyright  BoldGrid
 * @version    $Id$
 * @author     BoldGrid <support@boldgrid.com>
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since 1.0.0
 * @package Boldgrid_Backup_Premium
 * @subpackage Boldgrid_Backup_Premium/includes
 * @author BoldGrid.com <wpb@boldgrid.com>
 */
class Boldgrid_Backup_Premium_Deactivator {
	/**
	 * Plugin deactivation.
	 *
	 * @since 1.0.0
	 */
	public static function deactivate() {
		/**
		 * Clear license data.
		 *
		 * @since 1.0.0
		 */
		do_action( 'Boldgrid\Library\License\clearTransient' ); // phpcs:ignore
	}
}
