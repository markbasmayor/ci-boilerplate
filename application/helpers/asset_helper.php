<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Asset Helper
 *
 * @package		Orders
 * @subpackage	Helpers
 * @category	Helpers
 */

// ------------------------------------------------------------------------

if (! function_exists('asset_base_url')) {
	function asset_base_url($uri = '')
	{
		$ci =& get_instance();
		$ci->load->helper('url');
		return $ci->config->base_url(ASSETS_DIR.DS.$uri);
	}
}

if (! function_exists('asset_vendor_url')) {
	function asset_vendor_url($uri = '')
	{
		$ci =& get_instance();
		$ci->load->helper('url');
		return $ci->config->base_url(ASSETS_DIR.DS.VENDOR_DIR.DS.$uri);
	}
}

if (! function_exists('asset_js_url')) {
	function asset_js_url($uri = '')
	{
		$ci =& get_instance();
		$ci->load->helper('url');
		return $ci->config->base_url(ASSETS_DIR.DS.JS_DIR.DS.$uri);
	}
}

if (! function_exists('asset_css_url')) {
	function asset_css_url($uri = '')
	{
		$ci =& get_instance();
		$ci->load->helper('url');
		return $ci->config->base_url(ASSETS_DIR.DS.CSS_DIR.DS.$uri);
	}
}

if (! function_exists('asset_img_url')) {
	function asset_img_url($uri = '')
	{
		$ci =& get_instance();
		$ci->load->helper('url');
		return $ci->config->base_url(ASSETS_DIR.DS.IMG_DIR.DS.$uri);
	}
}

if (! function_exists('asset_font_url')) {
	function asset_font_url($uri = '')
	{
		$ci =& get_instance();
		$ci->load->helper('url');
		return $ci->config->base_url(ASSETS_DIR.DS.FONT_DIR.DS.$uri);
	}
}