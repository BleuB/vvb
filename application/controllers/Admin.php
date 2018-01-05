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
		$this->dataH['thispage'] = "accueil";
		if ($this->isco) {
			$this->dataHD['logged'] = true;
		}
		else{
			$this->dataHD['logged'] = false;
		}



		//affichage
		$this->load->view('admin/head',$this->dataH);
		$this->load->view('admin/header',$this->dataHD);
		if (!$this->isco) {
			$this->load->view('admin/register');
		}
		else{
			$this->load->view('admin/accueil');
		}
		$this->load->view('admin/footer');
	}
	public function pub()
	{
		$this->load->model('Pub_model');
		$this->dataH['title'] = "Administration";
		$this->dataH['description'] = "";
		$this->dataH['thispage'] = "pub";
		if ($this->isco) {
			$this->dataHD['logged'] = true;
		}
		else{
			$this->dataHD['logged'] = false;
		}

		if (isset($_POST['modifier'])) {
			$this->Pub_model->updateUrl($_POST['id-mod'],$_POST['url-mod']);
		}
		if (isset($_POST['mod-img'])) {
			$this->Pub_model->modif_image($_POST,$_FILES);
		}
		if (isset($_POST['new-pub'])) {
			$this->Pub_model->new_pub($_POST);
		}

		$this->dataC['pubaccueil'] = $this->Pub_model->get_pub_admin('acc');


		//affichage
		$this->load->view('admin/head',$this->dataH);
		$this->load->view('admin/header',$this->dataHD);
		if (!$this->isco) {
			$this->load->view('admin/register');
		}
		else{
			$this->load->view('admin/gestionpub',$this->dataC);
		}
		$this->load->view('admin/footer');
	}
	public function clients()
	{
		$this->dataH['title'] = "Administration";
		$this->dataH['description'] = "";
		$this->dataH['thispage'] = "clients";
		if ($this->isco) {
			$this->dataHD['logged'] = true;
		}
		else{
			$this->dataHD['logged'] = false;
		}
		
		
		$this->dataC['totalClients'] = $totalClients = $this->admin_model->total_clients();
		
		$this->load->library('pagination');
		$config['base_url']=site_url('admin/clients'); 
    	$config['total_rows'] =$totalClients;
		$config['per_page'] = 20;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
        $config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
        $config['first_link']='<i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i>';
        $config['last_link']='<i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i>';

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        $this->pagination->initialize($config);
        if (!isset($_GET['per_page'])) {
        	$offset = 0;
        }
        else{
        	$offset = $_GET['per_page'];
        }
        $this->dataC['listClients'] = $this->admin_model->list_clients($offset,$config['per_page']);
		$this->dataC['pagination']=$this->pagination->create_links();
		
		//affichage
		$this->load->view('admin/head',$this->dataH);
		$this->load->view('admin/header',$this->dataHD);
		if (!$this->isco) {
			$this->load->view('admin/register');
		}
		else{
			$this->load->view('admin/clients',$this->dataC);
		}
		$this->load->view('admin/footer');
	}
	public function annonces()
	{
		$this->dataH['title'] = "Administration";
		$this->dataH['description'] = "";
		$this->dataH['thispage'] = "annonces";
		if ($this->isco) {
			$this->dataHD['logged'] = true;
		}
		else{
			$this->dataHD['logged'] = false;
		}



		//affichage
		$this->load->view('admin/head',$this->dataH);
		$this->load->view('admin/header',$this->dataHD);
		if (!$this->isco) {
			$this->load->view('admin/register');
		}
		else{
			$this->load->view('admin/annonces');
		}
		$this->load->view('admin/footer');
	}








	//fonctions ajax
	public function ajaxUpdateActif(){
		$this->load->model('Pub_model');
		$this->Pub_model->updateActif($_POST['i'],$_POST['c']);
	}
	public function ajaxClientsDetail(){
		$detail = $this->admin_model->detail_client($_POST['i']);
		echo json_encode($detail);
	}

}