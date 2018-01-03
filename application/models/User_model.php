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

    //fonction de connection d'un memebre
    public function connect($mail,$pass){
        //  Chargement de la bibliothèque
        $valid = false;
        $pass = md5($pass);
        $resultat = $this->db->select('email,pass')
                 ->from('user')
                 ->where('email', $mail)
                 ->get()
                 ->result_array();
        if(isset($resultat[0]["email"]))
        {
            $test = $resultat[0]["email"];
            $test2 = $resultat[0]["pass"];
        }
        else
        {
            $test = null;
            $test2 = null;
        }
        $form = array('email2' => $mail,'pass2' => $pass);
        $this->form_validation->set_data($form);
        $this->form_validation->set_rules('email2','E-mail','trim|required|valid_email|in_list['.$test.']',array('required' => 'Vous devez entrer un %s.','valid_email' => 'Veuillez entrer un %s valide.','in_list' => 'Utilisateur inconnu'));
        $this->form_validation->set_rules('pass2','mot de passe','trim|required|in_list['.$test2.']',array('required' => 'Vous devez entrer un %s.','in_list' => 'Mot de passe invalide'));
        if($this->form_validation->run())
        {
            $valid = true;
            $this->sess_start($mail);
        }
        return $valid;
    }
    //deconnection et destruction session
    public function deco(){
        $this->session->unset_userdata('userco');
    }
}
