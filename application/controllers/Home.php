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




		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/headeracc');
		$this->load->view('home/accueil');
		$this->load->view('common/footer');
	}
}