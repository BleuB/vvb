<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pub_model extends CI_Model
{
    public function get_pub_admin($emplacement){
        $row = $this->db->select()
                    ->from('pubs')
                    ->where('emplacement', $emplacement)
                    ->get()
                    ->result_array();
        return $row;
    }
    public function updateActif($id,$change){
    	$data = array(
                'active'  => $change
        );
        $this->db->where('id', $id);
        $this->db->update('pubs', $data);
    }
    public function get_pub_list($emplacement,$limit){
        $row = $this->db->select()
                    ->from('pubs')
                    ->where('emplacement', $emplacement)
                    ->where('active', 1)
                    ->limit($limit)
                    ->order_by('title', 'RANDOM')
                    ->get()
                    ->result_array();
        return $row;
    }
}