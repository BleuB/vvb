<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonces extends CI_Controller {

	private $isco;
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

		$this->load->model('Rech_annonces_model');
		$this->dataC['regions']=$this->Rech_annonces_model->get_regions();


		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header');
		$this->load->view('Annonces/rech_annonces',$this->dataC);
		$this->load->view('common/footer');
	}

}