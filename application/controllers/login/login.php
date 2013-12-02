<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index($msg = NULL){
		// Load our view to be displayed
		// to the user
		$this->load->helper('url');

		if($this->session->userdata('userEmail'))
		{
			//redirect('what_is_linkedin', 'refresh');
			$data['picPath']=$this->session->userdata('profileImagePath');
			$this->load->view('header2_view',$data);
			redirect('home','refresh');
		
		}
		else
		{
			$data['msg'] = $msg;
			//$this->load->view('header_view',$data);
			$this->load->view('signIn_view', $data);
		}
		//$this->load->view('common/footer',$data);
	}
	
	public function process(){
		// Load the model
		$this->load->model('login_model');
		// Validate the user can login
		$result = $this->login_model->validate();
		// Now we verify the result
		if(! $result){
			// If user did not validate, then show them login page again
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}else{
			// If user did validate, 
			// Send them to members area
			//$this->load->view('header_view');
			redirect('home','refresh');
			//$this->load->view('default_view');
				}		
	}
	public function do_logout(){
		$this->session->sess_destroy();
		redirect('login/login','refresh');
	}
}
?>