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

   function get_students_courses_missed($student_id)
   {

      $this->db->select()->from('etudiants');
      $this->db->where('id_etudiant',$student_id);
      $this->db->where('id_type_absence',1);
      $this->db->join('absences','absences.id_etudiants=etudiants.id_etudiant');
      $this->db->join('heures','heures.id_heures=absences.id_heure');
     
      $q = $this->db->get();
      
      return $q->result();
       
   }

   function get_students_courses_coming_late($student_id)
   {

      $this->db->select()->from('etudiants');
      $this->db->where('id_etudiant',$student_id);
      $this->db->where('id_type_absence',2);
      $this->db->join('absences','absences.id_etudiants=etudiants.id_etudiant');
      $this->db->join('heures','heures.id_heures=absences.id_heure');
     
      $q = $this->db->get();
      
      return $q->result();
       
   }


   function get_class_schedule($class_id)
   {

      $this->db->select()->from('emploi_temps');
      $this->db->where('id_classe',$class_id);
      $this->db->join('jours','jours.id_jour=emploi_temps.id_jours');
      $this->db->join('heures','heures.id_heures=emploi_temps.id_horaire');
      $this->db->join('classes','classes.id_classe=emploi_temps.id_classes');
      $this->db->join('matieres','matieres.id_matieres=emploi_temps.id_matiere');
     
      $q = $this->db->get();
      
      return $q->result();
       
   }

   function get_class_events($class_id)
   {

      $this->db->select()->from('evenements');
      $this->db->where('id_classes',$class_id);
      
     
      $q = $this->db->get();
      
      return $q->result();
       
   }


   function get_student_balance_sheet($student_id)
   {

      $this->db->select()->from('bilan');
      $this->db->where('id_etudiants',$student_id);
      
     
      $q = $this->db->get();
      
      return $q->result();
       
   }

			  
 
}