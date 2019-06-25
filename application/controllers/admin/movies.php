<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (empty(_useSession('admin_session'))) 
		{
			redirect('admin/login');
		}
	}

/**
 * [index for load display movies]
 * @return [type] [description]
 */
	public function index()
	{
		$data['contents'] = $this->load->view('admin/movies/index','',TRUE);
		$this->load->view('admin/index',$data);
	}

	public function add()
	{
		$data['contents'] = $this->load->view('admin/movies/add','',TRUE);
		$this->load->view('admin/index',$data);
	}

}
