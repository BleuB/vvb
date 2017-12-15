<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $isco;
	private $dataH = array();//data head
	private $dataHd = array();//data header
	private $dataC = array();//data corp
	private $dataF = array();//data footer

	public function __construct()
    {
        parent::__construct();
        //chargement models
        $this->load->model('admin_model');
		//si demande decco
		if (isset($_GET['deco'])) {
			$this->admin_model->deco();
		}
		//si post verif si ok et mise en session si ok
		if (isset($_POST['val'])) {
			$mdp = $_POST['password'];
			$log = $_POST['login'];
			$this->admin_model->connection($log,$mdp);
		}
		//verif si connecté
	    $this->isco = $this->admin_model->isconnect();
		
    }
	public function index()
	{
		$this->dataH['title'] = "Administration";
		$this->dataH['description'] = "";




		//affichage
		$this->load->view('admin/head',$this->dataH);
		$this->load->view('admin/header');
		if (!$this->isco) {
			$this->load->view('admin/register');
		}
		else{
			$this->load->view('admin/accueil');
		}
		$this->load->view('admin/footer');
	}
}