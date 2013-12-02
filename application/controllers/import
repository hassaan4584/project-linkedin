<?php


class Import extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		}
	
	
	public function index($msg = NULL){
		// Load our view to be displayed
		
		//$this->load->view('connect');

		$data['firstName']=$this->session->userdata('userFirstName');
		$data['lastName']=$this->session->userdata('userlastName');
		$data['countryName']='Pakistan';
		$data['jobTitle']='Student';
		$data['companyName']='Ntional University of Computer and emerging Sciences Lahore';

		$this->load->view('share_social',$data);
	}





}
?>