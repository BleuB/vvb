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
    public function updateUrl($id,$url){
        $data = array(
                'link'  => $url
        );
        $this->db->where('id', $id);
        $this->db->update('pubs', $data);
    }
    public function get_pub_list($limit,$emplacement){
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
    public function modif_image($post,$files){
        $filename=$files['im-mod']['name'];
        //enregistre images
        //load library
        $this->load->library('upload');
        // config upload
        $chemin = './assets/images/pubs';
        $config['upload_path'] = $chemin;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']    = '0';
        $this->upload->initialize($config);
        $this->upload->do_upload('im-mod');
        $test = $this->upload->display_errors();
        
        $data = array(
                'image'  => $this->upload->data('file_name')
        );
        $this->db->where('id', $post['id']);
        $this->db->update('pubs', $data);
        return $test;
    }
}