<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Template Path Helper
 *
 * @package		Orders
 * @subpackage	Helpers
 * @category	Helpers
 */

// ------------------------------------------------------------------------

/**
 * tpl_header_path
 *
 * Lets the user get the path for the template header file
 *
 * @param	string
 * @return	string
 */
if (! function_exists('tpl_header_path')) {
	function tpl_header_path($tpl_name)
	{
		if (empty($tpl_name)) {
			$tpl_name = TPL_DEFAULT;
		}
		return TPL_BASE_PATH . DS . $tpl_name . DS . TPL_HEADER_FILE;
	}
}

/**
 * tpl_footer_path
 *
 * Lets the user get the path for the template footer file
 *
 * @param	string
 * @return	string
 */
if (! function_exists('tpl_footer_path')) {
	function tpl_footer_path($tpl_name)
	{
		if (empty($tpl_name)) {
			$tpl_name = TPL_DEFAULT;
		}
		return TPL_BASE_PATH . DS . $tpl_name . DS . TPL_FOOTER_FILE;
	}
}

/**
 * tpl_main_path
 *
 * Lets the user get the path for the template footer file
 *
 * @param	string
 * @return	string
 */
if (! function_exists('tpl_main_path')) {
	function tpl_main_path($tpl_name)
	{
		if (empty($tpl_name)) {
			$tpl_name = TPL_DEFAULT;
		}
		return TPL_BASE_PATH . DS . $tpl_name . DS . TPL_SKELETON_FILE;
	}
}