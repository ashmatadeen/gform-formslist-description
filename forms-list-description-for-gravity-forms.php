<?php
/**
 * Plugin Name:      Forms List Description for Gravity Forms
 * Plugin URI:       https://ashmatadeen.com/web-developer
 * Description:      Adds a column displaying the description for each form in the admin forms listing.
 * Author:           Ash Matadeen
 * Text Domain:      forms-list-description-for-gravity-forms
 * Domain Path:      /languages
 * License:          GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:          0.1.0
 *
 * @package Gform_Formslist_Description
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

require plugin_dir_path( __FILE__ ) . 'classes/class-gform-formslist-description.php';

$gform_formslist_description = ( isset( $gform_formslist_description ) && is_object( $gform_formslist_description ) ? $gform_formslist_description : new FLDFGF_GformFormsListDescription() );
