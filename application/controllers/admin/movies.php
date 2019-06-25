<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/movies_model', 'm_model');

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
		$data['movies'] = $this->m_model->get_all();
		$data['contents'] = $this->load->view('admin/movies/index',$data,TRUE);
		$this->load->view('admin/index',$data);
	}

	public function add()
	{
		if ($_POST)
		{
			$data = array(
				'title'     => _post('title'),
				'category'      => _post('category'),
				'genres'      => _post('genres'),
				'duration'    => _post('duration'),
				'release_date' => _post('release_date'),
				'information'  => _post('information'),
				'director'   => _post('director')
				// 'status' => _post('status')
			);

			$config['upload_path'] = './assets/uploads/movies';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '15360';
            $config['max_width'] = '15360';
            $config['max_height'] = '15360';

            $this->load->library('upload', $config);

            $this->upload->initialize($config);
            
            if ($this->upload->do_upload('image')) 
            {
                $data['image'] = $this->upload->data('file_name');
			} 

			if ($data != '')
			{
				$this->m_model->insert($data);

			
				$msg = $this->session->set_flashdata('msg', 'New Movie is added successfully...!!');

				redirect('admin/movies/index');
			}
		}
		else
		{
			
			$data['contents'] = $this->load->view('admin/movies/add','',TRUE);
			$this->load->view('admin/index',$data);

		}
	}

	public function detail()
	{

		$id               = $this->uri->segment(4);
		$data['movies'] = $this->m_model->get($id);
		
		$data['contents'] = $this->load->view('admin/movies/detail', $data, TRUE);
		$this->load->view('admin/index', $data);
	}
}
