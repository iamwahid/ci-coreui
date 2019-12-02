<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Frontpage_Controller {

	public function index()
	{
		$this->load->view('frontend/login');
  }
  
  public function process()
  {
    // $this->config->load('validations');
		$validations	= $this->config->item('login');
		$email 			= $this->_post('email');
    $password 		= $this->_post('username');
    $this->load->model('Model_user', 'Muser');
    // var_dump($password);die;

		// $this->form_validation->set_rules($validations['process']);
		// if ($this->form_validation->run() == FALSE) {
		// 	redirect('login');
		// }

		$login = $this->Muser->login($email, $password);
		if (!$login['valid']) {
			redirect('/login');
		}else{
			redirect('/backoffice');
		}
  }

  public function logout()
	{
		$this->session->set_userdata('_userId', FALSE);
		$this->session->set_userdata('_isLogin', FALSE);
		$this->session->set_userdata('_isAdmin', FALSE);
		$this->session->set_userdata('_viewBackend', FALSE);
		$this->session->set_userdata('_userData', FALSE);

		redirect('/login');
	}
}
