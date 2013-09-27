<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminController extends MY_Controller implements Renderable
{

	function __construct()
	{
		parent::__construct();
		$this->_tplPath = TPL_ADMIN_PATH;
	}


	private function _getPartials($data)
	{
		$partials = array(
			'navbar'			=> $this->load->view($this->_tplPath . '/navbar.php', 		array(), true),
			'sidebar'			=> $this->load->view($this->_tplPath . '/sidebar.php', 		array(), true),
			'breadcrumbs'		=> $this->load->view($this->_tplPath . '/breadcrumbs.php', 	array(), true),
			'footer'			=> $this->load->view($this->_tplPath . '/footer.php', 		array(), true),
		);

		if (!empty($this->_systemMsg)) {
			$partials['systemMsg'] = $this->load->view($this->_tplPath . '/system_msg.php',
				array('systemMsg' => $this->_systemMsg), true);
		}

		return $partials;
	}


	public function render($view, $data)
	{

		$partials = $this->_getPartials($data);
		$partials['main'] = $this->load->view($view, $data, true);

		$skelData = array(
			'assets'	=> $this->_getAssets(),
			'meta'		=> $this->_getMeta(),
			'partials'	=> $partials,
		);
		$this->load->view($this->_tplPath . '/skeleton.php', $skelData);
	}
}
