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

	public function get_dep_by_region($reg)
	{
		$res=$this->select
					->from('dpartement')
					->where('id_region',$reg)
					->get()
					->result_array();
		return $res;
	}

	
}