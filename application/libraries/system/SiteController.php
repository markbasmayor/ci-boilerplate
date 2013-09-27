<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiteController extends MY_Controller implements Renderable
{

	function __construct()
	{
		parent::__construct();
		$this->_template = TPL_SITE;
	}

	public function render($view, $data)
	{
		// partial views
		// $header = $this->load->view(tpl_header_path($this->_template), array(), true);
		// $footer	= $this->load->view(tpl_footer_path($this->_template), array(), true);

		$header = '';
		$footer	= '';

		$body 	= $this->load->view($view, $data, true);

		//render main view
		$mainData = array(
			'assets'	=> $this->_getAssets(),
			'meta'		=> $this->_getMeta(),
			'header'	=> $header,
			'body'		=> $body,
			'footer'	=> $footer,
		);
		$this->load->view(tpl_main_path($this->_template), $mainData);
	}
}
