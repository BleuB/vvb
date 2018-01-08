<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    //verification de session
    public function isconnect(){

        $adminco = $this->session->userdata('adminco');

        if ($adminco) {
            return true ;
        }
        else{
            return false;
        }
    }
    //connection et mise en session
    public function connection($login,$mdp){

        if ($login == "AdminVVB" && $mdp == "VVBadminPass") {
            $this->session->adminco = true;
        }
        
    }
    //deconnection et destruction session
    public function deco(){
        $this->session->unset_userdata('adminco');
    }
    //recup list clients
    public function list_clients($offset,$limit){
        $row = $this->db->select('id,lastname,firstname,email')
                    ->from('user')
                    ->limit($limit,$offset)
                    ->order_by('lastname')
                    ->get()
                    ->result_array();
        return $row;
    }
    //total clients
    public function total_clients(){
        $this->db->from('user');
        $result = $this->db->count_all_results();
        return $result;
    }
    //recup detail clients
    public function detail_client($id){
        $row = $this->db->select()
                    ->from('user')
                    ->where('id', $id)
                    ->get()
                    ->result_array();
        return $row;
    }
    //modif client
    public function modif_client($post){
        $data = array(
                'url'  => $post['url'],
                'lastname' => $post['lastname'],
                'firstname' => $post['firstname'],
                'address' => $post['url'],
                'postcode' => $post['postcode'],
                'city' => $post['url'],
                'phone' =>$post['phone'],
                'mobile' => $post['mobile'],
                'fax' => $post['fax'],
                'email' => $post['email']
        );
        $this->db->where('id', $post['id']);
        $this->db->update('user', $data);
    }
}
