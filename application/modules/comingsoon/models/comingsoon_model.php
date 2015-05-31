<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comingsoon_model extends CI_Model {

    function __construct() {
        parent::__construct();

        
    }



    /* +++++++++++++++++++ Manage admin in db */

    /* method for adding admin in db */
    function add_admin_md($data){

        $this->db->insert('admin', $data); 


    }

    /* method for updating admin in db */
    function updating_admin_md($id_ads){


    }

    /* method for deleting ads in db */
    function deleting_admin_md($id_admin){

      $this->db->where('id_admin',$id_admin);
      $this->db->delete('admin'); 
           
    }

    /* method for showing admins in db */
    function show_admins_md(){

           
       $q = $this->db->get('admin');
       if($q->num_rows()>0)
       {
           foreach ($q->result() as $lign)
           {
               $data[]=$lign;
           }
           
           return $data;
       }
        

    }

    /* +++++++++++++++++++  End admin in db */

    
		  
 }