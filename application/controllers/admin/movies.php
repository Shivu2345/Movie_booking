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
		//$data['movies'] = $this->m_model->get_all();

		//Pagination

		$config                    = array();
		$config["base_url"]        = base_url().'admin/movies';
		$config['full_tag_open']   = "<ul class='pagination'>";
		$config['full_tag_close']  = '</ul>';
		$config['num_tag_open']    = '<li>';
		$config['num_tag_close']   = '</li>';
		$config['cur_tag_open']    = '<li class="active"><a href="#">';
		$config['cur_tag_close']   = '</a></li>';
		$config['prev_tag_open']   = '<li>';
		$config['prev_tag_close']  = '</li>';
		$config['first_tag_open']  = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open']   = '<li>';
		$config['last_tag_close']  = '</li>';
		$config['prev_link']       = '<i class="fa fa-long-arrow-left" style="height:2.9%;"></i>';
		$config['prev_tag_open']   = '<li>';
		$config['prev_tag_close']  = '</li>';
		$config['next_link']       = '<i class="fa fa-long-arrow-right" style="height:2.9%;"></i>';
		$config['next_tag_open']   = '<li>';
		$config['next_tag_close']  = '</li>';
		$config["total_rows"]      = $this->m_model->count_by(array('deleted' => '0'));
		$config["per_page"]        = 3;
		$config["uri_segment"]     = 3;
		$this->pagination->initialize($config);
		$page          = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["links"] = $this->pagination->create_links();

		$data['movies'] = $this->m_model->get_movies($config["per_page"], $page);


		$data['contents'] = $this->load->view('admin/movies/index',$data,TRUE);
		// var_dump($data['contents']);
		// die();
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
