<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kesejahteraan extends Admin_Controller {

	public function index()
	{
		$this->_load_view('admin/kesejahteraan');
	}
	
}
