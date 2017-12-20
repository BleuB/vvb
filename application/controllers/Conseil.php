<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conseil extends CI_Controller {

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
		$this->load->view('common/header');
		$this->load->view('conseils/indexe_conseils');
		$this->load->view('common/footer');
	}

	public function precaution()
	{
		$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";




		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header');
		$this->load->view('conseils/precautions');
		$this->load->view('common/footer');
	}

	public function demander()
	{
		$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";




		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header');
		$this->load->view('conseils/demander');
		$this->load->view('common/footer');
	}

	public function reservations()
	{
		$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";




		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header');
		$this->load->view('conseils/reservations');
		$this->load->view('common/footer');
	}

	public function demarches()
	{
		$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";




		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header');
		$this->load->view('conseils/demarches');
		$this->load->view('common/footer');
	}

	public function recours()
	{
		$this->dataH['title'] = "Vacances vertes et bleues";
		$this->dataH['description'] = "vacances vertes et bleues";




		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header');
		$this->load->view('conseils/recours');
		$this->load->view('common/footer');
	}

}