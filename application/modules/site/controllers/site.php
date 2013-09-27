<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends SiteController
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->render('index', array('name'=>'mark'));
	}
}
