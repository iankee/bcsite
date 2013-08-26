<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

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
       
    }

	public function index()
	{
		$data['nav']= $this->Bc_model->get_bc_menu();
		$data['gmap']= $this->Bc_model->get_bc_config("googlemap");
		$data['caddres']= $this->Bc_model->get_bc_config("company_adress");
		$data['main'] = 'contact';
		$data['subheader'] = '<div id="sub-header-bg"></div>';

		$data['title'] = "Binary Consulting - Your IT partner - $data[main]";
		$this->load->vars($data);
		$this->load->view('home');

	}

	


	public function about()
	{
		$data['nav']= $this->Bc_model->get_bc_menu();

		$data['main'] = 'content_about';
		$data['subheader'] = '<div id="sub-header-bg"></div>';
		$data['title'] = "Binary Consulting - Your IT partner - $data[main]";
		$this->load->vars($data);
		$this->load->view('home');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */