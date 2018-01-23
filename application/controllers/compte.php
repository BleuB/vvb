<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Compte extends CI_Controller {
	private $dataH = array();//data head
	private $dataHd = array();//data header
	private $dataC = array();//data corp
	private $dataF = array();//data footer

	public function __construct()
    {
       parent::__construct();
        //chargement models
        $this->load->model('user_model');
		//si demande decco
		if (isset($_GET['deco'])) {
			$this->user_model->deco();
		}
		//si post verif si ok et mise en session si ok
		if (isset($_POST['co'])) {
			$mdp = $_POST['mdp'];
			$log = $_POST['mail'];
			$this->user_model->connection($log,$mdp);
		}
		//verif si connecté
	    $this->isco = $this->user_model->isconnect();
		
    }

    public function index()
	{
		$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";
		$this->dataH['thispage'] = "compte";
		if ($this->isco) {
			$this->dataHD['logged'] = true;
		}
		else{
			$this->dataHD['logged'] = false;
		}

		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header',$this->dataHD);
		if (!$this->isco) {
			$this->load->view('espace/login',$this->dataC);
		}
		else{
			$this->load->view('espace/monespace');
		}
		
		$this->load->view('common/footer');
	}


	public function remonteAnnonce()
	{
		$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";
		$this->dataH['thispage'] = "remonte";
		if ($this->isco) {
			$this->dataHD['logged'] = true;
		}
		else{
			$this->dataHD['logged'] = false;
		}

		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header',$this->dataHD);
		$this->load->view('espace/remonteAnnonce',$this->dataC);
		$this->load->view('common/footer');
	
	}

	public function ModifAnnonce()
	{
		$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";
		$this->dataH['thispage'] = "modifannonce";
		if ($this->isco) {
			$this->dataHD['logged'] = true;
		}
		else{
			$this->dataHD['logged'] = false;
		}

		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header',$this->dataHD);
		$this->load->view('espace/modifannonce',$this->dataC);
		$this->load->view('common/footer');
	
	}

	 public function nouv_ann()
    {
    	$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";
		$this->dataH['thispage'] = "nouvann";
		if ($this->isco) {
			$this->dataHD['logged'] = true;
		}
		else{
			$this->dataHD['logged'] = false;
		}

		

		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header',$this->dataHD);
		if ($this->isco) {
			$this->load->view('espace/nouv_ann',$this->dataC);		
		}
		else
		{
			$this->load->view("espace/login");
		}
		
		$this->load->view('common/footer');
    }

    public function nextEtape()
    {
    	$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";
		$this->dataH['thispage'] = "nextetape";
		if ($this->isco) {
			$this->dataHD['logged'] = true;
		}
		else{
			$this->dataHD['logged'] = false;
		}

		

		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header',$this->dataHD);
		if (!isset($_POST["choixTypeLoc"])) {
			$this->load->view("home/accueil");
		}
		elseif($_POST["choixTypeLoc"] == 'cm')
		{
			$this->load->view('espace/camp_form',$this->dataC);
		}
		elseif ($_POST["choixTypeLoc"] == 'loc') 
		{
			$this->load->view('espace/loc_form',$this->dataC);
		}
		elseif ($_POST["choixTypeLoc"] == 'hot') {
			$this->load->view('espace/hotel_form',$this->dataC);
		}
		elseif($_POST["choixTypeLoc"] == 'mh')
		{
			
			$this->load->view('espace/mhome_form',$this->dataC);		

		}
		
		$this->load->view('common/footer');
    }
}