<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rech_annonces_model extends CI_Model
{
	public function get_regions()
	{
		$res=$this->db->select()
						->from('regions')
						->get()
						->result_array();

		return $res;
	}
}