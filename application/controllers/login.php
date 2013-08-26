<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

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
     
}


public function index()
	{	 if ( isset($_SESSION["auth"]) )  {
      	redirect("$this->base"."administrator");
       
    }
		$data['title'] = "Binary Consulting - Your IT partner";
		$data['nav']= $this->Bc_model->get_bc_menu();
		
		$data['main'] = 'login';
		
		$this->load->vars($data);
		$this->load->view('admin_master');


	}

	public function process() {
  // authenticate
  $uname = $this->input->post('username');
  $pwd = $this->input->post('password');
  $data= $this->Bc_model->get_bc_user("administrator",$uname,sha1($pwd));
  //echo $uname;
  //$swd = sha1($pwd) ;
  //echo $swd;
//print_r($data);
  if ( $data!=null )  {
    $_SESSION["auth"] = true;
    if($this->input->post('remember')== "1")
    	{$timeout = 9999999;
    	$_SESSION['timeout'] = time() + $timeout;}
    
    session_regenerate_id();
   redirect ("$this->base"."administrator/");
  } else {

$this->index();
  // redirect back to login page
  }
}

public function logout() {
session_destroy();
session_unset();
 redirect ("$this->base"."login/");
}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */