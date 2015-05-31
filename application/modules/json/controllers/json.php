<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('json_model');
		

	}

	public function index()
	{
		       
       
	}


	function connexion($login,$pass){

		//$login = $this->security->xss_clean($this->input->post('login'));
        //$pass = $this->security->xss_clean($this->input->post('pass'));
        

        //get student id and parents id
        if($this->json_model->check_credentials($login, $pass)){
        	$result_from_db=$this->json_model->check_credentials($login, $pass);
		    foreach ($result_from_db as $value) {

			$id_student=$value->id_etudiants;
			$id_parent=$value->id_parents;


            }

		           //get parents infos from your id
		        if($this->json_model->get_parent_info($id_parent)){

		        	$all_parent_infos=$this->json_model->get_parent_info($id_parent);
		        	foreach ($all_parent_infos as $value) {

					$parent_name=$value->nom_parents;
					$parent_surname=$value->prenom_parents;
					$id_ecole=$value->id_ecole;

		            }




		        }


		        //get students infos from your id
		        if($this->json_model->get_student_info($id_student)){

		        	$all_student_infos=$this->json_model->get_student_info($id_student);
		        	foreach ($all_student_infos as $value) {

					$student_name=$value->nom_etudiant;
					$student_surname=$value->prenom_etudiant;
					$student_birthdate=$value->date_de_naissance_etudiant;
					$student_birthplace=$value->lieu_de_naissance_etudiant;


		            }

		        	
		        }


		        //Send data in json to client with parents,students and  school id
		            
		         echo json_encode(array(
		                                        'result' =>1,
		                                        'school_ID'=>$id_ecole, 
		                                        'parent_name' =>$parent_name, 
		                                        'parent_surname' =>$parent_surname,
		                                        'student_name'=>$student_name, 
		                                        'student_surname' =>$student_surname, 
		                                        'student_birthdate' =>$student_birthdate,

		                                        
		                                        )
		                                    );

        }
        else
        {
        	echo json_encode(array('result' =>1,));

        }
	
		
	}


	function show_students_absence($id_etudiant){


		if($this->json_model->get_students_courses_missed($id_etudiant)){

			$get_info_coursesMissed=$this->json_model->get_students_courses_missed($id_etudiant);
			echo json_encode(array(
		                                        'result' =>1,
		                                        'coursesMissed' =>$get_info_coursesMissed,

		                                        
		                                        )
		                                    );

		}

    }


    function show_students_coming_late($id_etudiant){


		if($this->json_model->get_students_courses_coming_late($id_etudiant)){

			$get_info_courses_coming_late=$this->json_model->get_students_courses_coming_late($id_etudiant);
			echo json_encode(array(
		                                        'result' =>1,
		                                        'courses_coming_late' =>$get_info_courses_coming_late,

		                                        
		                                        )
		                                    );

		}
	
    }

    function show_class_schedule($class_id){

		if($this->json_model->get_class_schedule($class_id)){

			$get_class_schedule=$this->json_model->get_class_schedule($class_id);
			echo json_encode(array(
		                                        'result' =>1,
		                                        'class_schedule_infos' =>$get_class_schedule,

		                                        
		                                        )
		                                    );

		}

    }

    function show_class_events($class_id){

		if($this->json_model->get_class_events($class_id)){

			$get_class_events=$this->json_model->get_class_events($class_id);
			echo json_encode(array(
		                                        'result' =>1,
		                                        'events' =>$get_class_events,

		                                        
		                                        )
		                                    );

		}

    }

    function show_student_balance_sheet($student_id){

		if($this->json_model->get_student_balance_sheet($student_id)){

			$get_student_balance_sheet=$this->json_model->get_student_balance_sheet($student_id);
			echo json_encode(array(
		                                        'result' =>1,
		                                        'balance_sheets' =>$get_student_balance_sheet,

		                                        
		                                        )
		                                    );

		}

    }


    


 }

  
 