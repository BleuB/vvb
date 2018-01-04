<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Annonce_model extends CI_Model
{
    // récupérer les top annonces
    public function get_top_annonces($limit = 5)
    {
        $i=0;
		$resultat = $this->db->select()
							->from('annonce')
                            ->where('formule="vip" OR formule="privilege" AND statut="cours"')
							->limit($limit)
							->order_by('title', 'RANDOM')
							->get()
							->result_array();
        /*foreach ($resultat as $key => $value){
            $result[$i] = $$key = $value;
            $result[$i]['prixbas'] = $this->prix_bas($result[$i]['hsnuit'],$result[$i]['psnuit'],$result[$i]['psweek'],$result[$i]['hsweek']);
            $result[$i]['photocouv'] = $this->recup_photo_couv($result[$i]['id']);
            $result[$i]['region'] = $this->region($result[$i]['region']);
            $result[$i]['departement'] = $this->dep($result[$i]['departement']);
            $result[$i]['urlann'] =  url_title($result[$i]['title']);
            $result[$i]['urlann'] .= '-';
            $result[$i]['urlann'] .= url_title($result[$i]['region']);
            $result[$i]['urlann'] .= '-';
            $result[$i]['urlann'] .= url_title($result[$i]['departement']);
            $i++;
        }*/
        foreach ($resultat as $key => $value) {
        	
        	$result[$i] = $$key = $value;
       		$result[$i]['region'] = $this->region($result[$i]['region']);
            $result[$i]['photocouv'] = $this->recup_photo_couv($result[$i]['id']);
            $result[$i]['prixbas'] = $this->prix_bas($result[$i]['hsnuit'],$result[$i]['psnuit'],$result[$i]['psweek'],$result[$i]['hsweek']);
             $result[$i]['departement'] = $this->dep($result[$i]['departement']);
            $i++;
		}
		return $result;

        
    }

       //get liste annonce par recehrche
    function get_annonces_rech($offset, $limit, $rek = array()){
        $i=0;
        $resultat = $this->db->select()
                            ->from('annonce')
                            ->where($rek)
                            ->limit($limit,$offset)
                            ->order_by('title')
                            ->get()
                            ->result_array();
        foreach ($resultat as $key => $value){
            $result[$i] = $$key = $value;
            $result[$i]['prixbas'] = $this->prix_bas($result[$i]['hsnuit'],$result[$i]['psnuit'],$result[$i]['psweek'],$result[$i]['hsweek']);
            $result[$i]['photocouv'] = $this->recup_photo_couv($result[$i]['id']);
            $result[$i]['region'] = $this->region($result[$i]['region']);
            $result[$i]['departement'] = $this->dep($result[$i]['departement']);
            $result[$i]['urlann'] =  url_title($result[$i]['title']);
            $result[$i]['urlann'] .= '-';
            $result[$i]['urlann'] .= url_title($result[$i]['region']);
            $result[$i]['urlann'] .= '-';
            $result[$i]['urlann'] .= url_title($result[$i]['departement']);
            $i++;
        }
        return $result;
    }

    public function max_ligne($rek = array())
    {
        $this->db->where($rek);
        $this->db->from('annonce');
        $result = $this->db->count_all_results();
        return $result;
    }

    // liste une annonce (detai)
    public function get_annonce($id)
    {
        $resultat = $this->db->select()
                    ->from('annonce')
                    ->where('id', $id)
                    ->get()
                    ->result_array();
        foreach ($resultat as $key => $value){
            $result = $$key = $value;
        }

       
        return $result;
    }

     //recupère les images d'une annonce
    public function get_images($id)
    {
        $result = $this->db->select('file')
                            ->from('annonce_file')
                            ->where('id_item',$id)
                            ->get()
                            ->result_array();
        return $result;
    }

      // liste des types des annonces
    public function get_types()
    {
        $row = $this->db->select()
                    ->from('annonce_type')
                    ->get()
                    ->result_array();
        return $row;
    }


    //recup region
    function region($idr){
        $result = $this->db->select()
							->from('regions')
                            ->where('id',$idr)
							->get()
							->result_array();
        $region= $result[0]['nom'];
        return $region;
    }
    //recup dep
    function dep($idd){
        $result = $this->db->select()
							->from('departements')
                            ->where('id',$idd)
							->get()
							->result_array();
        $dep= $result[0]['nom'];
        return $dep;
    }


    function recup_photo_couv($idann){
        $chemin = "assets/images/annonces/";
        $dossier = $chemin.$idann;
        $resultat = $this->db->select('couv')
                            ->from('annonce')
                            ->where('id',$idann)
                            ->get()
                            ->result_array();
        if (isset($resultat['couv']) && $resultat['couv'] != NULL){
            $couv = $resultat['couv'];
        }
        else{
            if (file_exists($dossier)){
                //si oui chercher une photo
                $doc = opendir($dossier);
                while(false != ($fichier = readdir($doc))){
                    if($fichier != '.' && $fichier != '..'){
                        $listphoto[] = $idann."/".$fichier;
                    }
                }
                if (isset($listphoto[0]) && $listphoto[0] != ""){
                    $couv = $listphoto[0];
                }
                else{$couv = "no-thumb.png";}
                closedir($doc);
            }
            else{
                $couv = "no-thumb.png";
            }
        }
        $photocouv = $chemin.$couv;
        return $photocouv;
    }

    //calcul du prix le plus bas d'une annonce
    public function prix_bas($hsnuit,$psnuit,$psweek,$hsweek)
    {
        $text = '';
        $pb = 10000;
        if($hsnuit != 0){
            $text = 'La nuit';
            $pb = $hsnuit;
        }
        if($psnuit != 0 && $pb>=$psnuit){
            $text = 'La nuit';
            $pb = $psnuit;
        }
        if($psweek != 0 && $pb>=$psweek){
            $text = 'La semaine';
            $pb = $psweek;
        }
        if($hsweek != 0 && $pb>=$hsweek){
            $text = 'La semaine';
            $pb = $hsweek;
        }
        if($pb != 0 && $pb != 10000){
            // $return = '<h4>'.$pb.'€</h4><p class="dureep">'.$text.'</p>';
            $return["prix"] = $pb;
            $return["periode"] = $text;
        }
        else{
            // $return= '<h4>nc</h4>';
            $return["prix"] = "nc";
            $return["periode"] = "";
        }
        return $return;
    }

    // liste de toutes les annonces de $id_user
    public function get_annonces_from($id_user)
    {
        $row = $this->db->select()
                    ->from('annonce')
                    ->where('id_user', $id_user)
                    ->get()
                    ->result_array();
        return $row;
    }

    public function get_regions()
    {
        $res=$this->db->select()
                        ->from('regions')
                        ->get()
                        ->result_array();

        return $res;
    }

    public function get_dep_by_region($reg)
    {
        $res=$this->select
                    ->from('dpartement')
                    ->where('id_region',$reg)
                    ->get()
                    ->result_array();
        return $res;
    }


 }

