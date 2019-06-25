<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/login_model', 'lmodel');
	}

	public function index()
	{
		$this->load->view('admin/login/index');
	}


/**
 * [process for login]
 * @return [boolean] [return true if data are correct and set session]
 */
	public function process()
	{
		if($this->input->post())
		{

			$data = array(
						'email_id' => _post('email'),
						'password' => _post('password'));
			$remember_me = _post('remember_me');

			$query = $this->lmodel->get_many_by($data);
			$result = reset($query);

			if($result)
			{
				if (_post("remember_me"))
				{
					$this->input->set_cookie('cookie_email', $data['email_id'], 86500); 
					$this->input->set_cookie('cookie_password', $data['password'], 86500);
				}
				else
				{
					delete_cookie('cookie_email'); /* Delete email cookie */
					delete_cookie('cookie_password'); /* Delete password cookie */
				}
				
				_setSession('admin_session', $result);
				redirect('admin/dashboard');
			}
			else
			{
				return false;
			}
		}		
	}

/**
 * [logout for logged in admin]
 */
	public function logout()
	{
		_unsetSession('admin_session');
		redirect('admin/login');
	}
}
