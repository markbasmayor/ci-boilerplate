<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

abstract class MY_Controller extends MX_Controller
{
	protected $_data = array();
	protected $_template;

	/*
	| -------------------------------------------------------------------
	| Allows subclass to specify page specific assets
	| -------------------------------------------------------------------
	*/
	protected $_js = array();
	protected $_css = array();
	protected $_fonts = array();

	/*
	| -------------------------------------------------------------------
	| Allows subclass to specify meta data
	| -------------------------------------------------------------------
	*/
	protected $_title;
	protected $_description;
	protected $_keywords;
	protected $_author;

	function __construct()
	{
		parent::__construct();
		$this->_initMeta();
	}

	protected function _initMeta()
	{
		$this->_title 		= $this->config->item('site_title');
		$this->_description = $this->config->item('site_description');
		$this->_keywords 	= $this->config->item('site_keywords');
		$this->_author 		= $this->config->item('site_author');
	}

	protected function _getAssets()
	{
		return array(
			'js'	=> $this->_js,
			'css'	=> $this->_css,
			'fonts'	=> $this->_fonts,
		);
	}

	protected function _getMeta()
	{
		return array(
			'title'			=> $this->_title,
			'description'	=> $this->_description,
			'keywords'		=> $this->_keywords,
			'author'		=> $this->_author,
		);
	}
}

/*
| -------------------------------------------------------------------
| If you subclass, MY_Controller, CodeIgniter won't autoload the sub class
| so we have to do it manually.
|
| http://ellislab.com/forums/viewthread/136709/#673903
| -------------------------------------------------------------------
*/
require_once(APPPATH.'libraries/system/Renderable.php');
require_once(APPPATH.'libraries/system/AdminController.php');
require_once(APPPATH.'libraries/system/SiteController.php');

