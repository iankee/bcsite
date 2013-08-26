<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$data['title'] = "Binary Consulting - Your IT partner";
		$data['nav']= $this->Bc_model->get_bc_menu();
		
		$data['main'] = 'content_home';
		$data['subheader'] = '';
		$this->load->vars($data);
		$this->load->view('home');

	}

	public function contact()
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
	public function services($id=null)
	{
		
		$data['nav']= $this->Bc_model->get_bc_menu();
		if (isset($id)) {
		
			$data['content']= $this->Bc_model->get_bc_content("$id","services");
			if ($data['content']==null){
				show_404();
			}

		}
		else{
			show_404();
		}
				
		
		$data['gmap']= $this->Bc_model->get_bc_config("googlemap");
		$data['caddres']= $this->Bc_model->get_bc_config("company_adress");
		$data['main'] = 'content_services';
		$data['subheader'] = '<div id="sub-header-bg"></div>';

		$data['title'] = "Binary Consulting - Your IT partner - $data[main]";
		$this->load->vars($data);
		$this->load->view('home');
	}

	public function content($id=null)
	{

		$this->data['nav']= $this->Bc_model->get_bc_menu();
		$this->data['content']= $this->Bc_model->get_bc_content("$id","Blog");
		if ($this->data['content'] != null and $id!=null) {
			$this->data ['main'] = 'blog_detail';
					$tittle =strip_tags($this->data['content']['0']['bc_content_tittle']);
		}
		else{
			show_404();
		}
		$this->data['subheader'] = '<div id="sub-header-bg"></div>';
		$this->data['title'] = "Binary Consulting - Your IT partner - $tittle ";
		$this->data['tag']= $this->Bc_model->get_bc_tag();
		$this->load->vars($this->data);
		$this->load->view('home');
	}
	public function notfound()
	{

		
				$this->load->view('404');
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */