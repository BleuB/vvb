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
            $i++;
		}
		return $result;

        
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
 }