<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $dataH = array();//data head
	private $dataHd = array();//data header
	private $dataC = array();//data corp
	private $dataF = array();//data footer

	public function __construct()
    {
        parent::__construct();
        //chargement models
		
    }
	public function index()
	{
		$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";
		$this->load->model('Pub_model');
		$this->dataC['listpubs'] = $this->Pub_model->load_pub_list(4,'acc');



		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header');
		$this->load->view('home/accueil',$this->dataC);
		$this->load->view('common/footer');
	}

}