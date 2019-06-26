<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies_Model extends MY_Model {
	// protected $_table = 'admin';
	public function get_movies($limit, $start)
	 	{
		 	$this->limit($limit,$start);
		 	$descending = $this->db->order_by('id','DESC');
		 	$result = $this->get_all($descending);
		 	return $result;
	 	}

}
