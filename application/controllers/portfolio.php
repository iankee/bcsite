<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

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
        $this->load->helper("url");
        $this->load->library("pagination");

    }

	public function index($id=null)
	{
	
	$data['nav']= $this->Bc_model->get_bc_menu();
			
		if ($id != null) {
			$data ['main'] = 'portfolio_detail';
		}
		else {
			$data['main'] = 'portfolio';	
		}
		$data['content']= $this->Bc_model->get_bc_content("$id","Portfolio");
		if($data['content']==null){
			show_404();
		}
		$data['subheader'] = '<div id="sub-header-bg"></div>';
		$data['title'] = "Binary Consulting - Your IT partner - $data[main]";
		$this->load->vars($data);
		$this->load->view('home');
	}


	
}	