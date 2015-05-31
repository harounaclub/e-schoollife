<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class json_model extends CI_Model {

    function __construct() {
        parent::__construct();

    }
    

  function check_credentials($login_access,$pass_access){

    $this->db->where('login_access',$login_access);
    $this->db->where('pass_access', $pass_access);
    $q = $this->db->get('access');
    
    return $q->result();
      

  }
   

  function get_student_info($id_etudiant){

    $this->db->where('id_etudiant', $id_etudiant);
    $q = $this->db->get('etudiants');
   
    return $q->result();
     
  }

   function get_school_info($id_ecole){

    $this->db->where('id_ecole', $id_ecole);
    $q = $this->db->get('ecole');
    
    return $q->result();
     
   }


    function get_parent_info($id_parents){

    $this->db->where('id_parents', $id_parents);
    $q = $this->db->get('parents');
    
    return $q->result();
     
   }

   function get_students_courses_missed($id_etudiant)
   {

      $this->db->select()->from('etudiants');
      $this->db->where('id_etudiant',$id_etudiant);
      $this->db->join('absences','absences.id_etudiants=etudiants.id_etudiant');
      $this->db->join('heures','heures.id_heures=absences.id_heure');
     
      $q = $this->db->get();
      
      return $q->result();
       
   }

			  
 
}