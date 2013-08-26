<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct() {
        parent:: __construct();
        session_start();
      	$this->load->helper("url");
      	$this->base=base_url();
      	 $this->check_isvalidated();

       
    }


public function index()
	{
		$data['title'] = "Binary Consulting - Your IT partner";
		$data['nav']= $this->Bc_model->get_bc_menu();
		
		$data['main'] = 'dashboard';
		$data['sub_main'] = 'dashboard_home';
		
		$this->load->vars($data);
		$this->load->view('admin_master');


	}


private function check_isvalidated(){
		if( $_SESSION["auth"] != TRUE){
			redirect("$this->base"."login/");
		}
		if (isset($_SESSION['timeout'])){
			
		if(time() > $_SESSION['timeout']){
			session_destroy();
			session_unset();
			
			
		}
	}
	else{
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 60)) {
    // last request was more than 30 minates ago
    session_destroy();   // destroy session data in storage
    session_unset();     // unset $_SESSION variable for the runtime
    redirect("$this->base"."login/");
}
		$_SESSION['LAST_ACTIVITY'] = time();
	}
	
	}

	
public function webconfig() {
  // authenticate
  

   $data['title'] = "Binary Consulting - Your IT partner";
   	$data['main'] = 'dashboard';
   	$data['sub_main'] = 'dashboard_config';
   	$this->load->vars($data);
   	$this->load->view('admin_master');



}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */