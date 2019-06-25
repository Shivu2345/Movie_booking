<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_Controller 
	{
		public function __construct()
		{
			parent::__construct();

			if(empty(_useSession('admin_session')))
			{
				redirect('admin/login');
			}
		}
		public function index()
		{
			$this->load->view('admin/index');
		}
	}
?>	
