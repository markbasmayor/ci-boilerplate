<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends AdminController
{

	public function index()
	{
		$this->render('dashboard', array('name' => 'Administrator'));
	}

	public function hello()
	{
		$this->_systemMsg = "Wee! It's working!";
		$this->render('hello', array('name' => 'Mark'));
	}
}

