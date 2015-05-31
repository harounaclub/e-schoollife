<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comingsoon extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		 $this->load->model('comingsoon_model');
		
       
	}



	public function index()
	{
		
       $this->load->view('Comingsoon');
	}

	

}