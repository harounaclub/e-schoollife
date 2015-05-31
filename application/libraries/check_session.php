<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Check_session extends MX_Controller {

    public function check()
    {
    	if ($this->session->userdata('id_admin') ==False) {
    	   redirect('login');
    	}
    	

    }
}