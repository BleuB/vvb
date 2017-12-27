<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model
{
    //verification de session
    public function isconnect(){

        $userco = $this->session->userdata('userco');

        if ($userco) {
            return true ;
        }
        else{
            return false;
        }
    }
    //connection et mise en session
    public function connection($login,$mdp){

        if ($login == "user@gmail.com" && $mdp == "user") {
            $this->session->userco = true;
        }
        
    }
    //deconnection et destruction session
    public function deco(){
        $this->session->unset_userdata('userco');
    }
}
