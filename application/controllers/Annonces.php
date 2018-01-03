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
		if ($this->isco) {
			$this->dataHD['logged'] = true;
		}
		else{
			$this->dataHD['logged'] = false;
		}

		$this->load->model('Annonce_model');

		//pagination
		$this->load->library('pagination');
		$config['base_url']=site_url('Annonces'); 
		
				//nb lignes par rapport a la region si requete region
		if (isset($_GET['region'])) {
            $recher = array('region' => $_GET['region'] );
          	$config['total_rows'] =$this->Annonce_model->max_ligne($recher);
        }else
        {
        	$config['total_rows'] =$this->Annonce_model->max_ligne();
        }

		$config['per_page'] = 10;
		$config['next_link'] =  '<i class="fa fa-chevron-right" aria-hidden="true"></i>';
        $config['prev_link'] =  '<i class="fa fa-chevron-left" aria-hidden="true"></i>';
        $config['first_link']='<i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i>';
        $config['last_link']='<i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i>';

		$config['page_query_string'] = TRUE;
        $config['reuse_query_string'] = TRUE;

        $this->pagination->initialize($config);
		$this->dataC['pagination']=$this->pagination->create_links();

		$this->load->model('Rech_annonces_model');
		
		$this->dataC['regions']=$this->Rech_annonces_model->get_regions();
		
		//action si requete region seule
        if (isset($_GET['region'])) {
            $recher = array('region' => $_GET['region'] );
          	$this->dataC['annonces'] = $this->Annonce_model->get_annonces_rech(10,$recher);
        }else
        {
        	$this->dataC['annonces']=$this->Annonce_model->get_annonces_rech();
        }
	

		//affichage
		$this->load->view('common/head',$this->dataH);
		$this->load->view('common/header',$this->dataHD);
		$this->load->view('Annonces/rech_annonces',$this->dataC);
		$this->load->view('common/footer');
	}

}