<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

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
        $this->data['nav']= $this->Bc_model->get_bc_menu();
        $this->data['tag']= $this->Bc_model->get_bc_tag();

        

    }

	public function index($offset="0")
	{
	

		 
		$this->data['content_count']= $this->Bc_model->get_bc_content("","Blog");
			$this->data['main'] = 'blog';	
			$this->tittle = $this->data['main'];
			 $config = array();
			 $config['full_tag_open'] = '<ul class="pagination">';
			 $config['full_tag_close'] = '</ul>';
$config['next_link'] = 'Next';
$config['prev_link'] = 'Prev';
$config['cur_tag_open'] = '<li class="current">';
$config['cur_tag_close'] = '</li>';
$config['prev_tag_open'] = '<li class="prev">';
$config['prev_tag_close'] = '</li>';
$config['next_tag_open'] = '<li class="next">';
$config['next_tag_close'] = '</li>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
        $config["base_url"] = base_url() . "blog";
        $config["per_page"] = 2;
        $config["uri_segment"] = 2;
		$config["total_rows"] = count($this->data['content_count']);
		$this->pagination->initialize($config);
       $this->data['content']= $this->Bc_model->get_bc_content("","Blog",$offset,"$config[per_page]");
        $this->data["links"] = $this->pagination->create_links();
		$this->data['subheader'] = '<div id="sub-header-bg"></div>';
		$this->data['title'] = "Binary Consulting - Your IT partner - $this->tittle ";
		$this->load->vars($this->data);
		$this->load->view('home');
	}
	public function post($id=null){
		
	
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

		$this->load->vars($this->data);
		$this->load->view('home');

	}
	public function tag($tag=null){
		
		$this->data ['main'] = 'blog';
		$this->data['content']= $this->Bc_model->get_all_bc_content("Blog",$tag);
		$this->data['subheader'] = '<div id="sub-header-bg"></div>';
		$this->data['title'] = "Binary Consulting - Your IT partner ";
		 $this->data["links"] = "";
		$this->load->vars($this->data);
		$this->load->view('home');

	}
	public function cari($offset=0){
		

		$this->data['content_count']= $this->Bc_model->get_bc_content("","Blog");
			$this->data['main'] = 'blog';	
			$tittle = $this->data['main'];
			 $config = array();
			 $config['full_tag_open'] = '<ul class="pagination">';
			 $config['full_tag_close'] = '</ul>';
$config['next_link'] = 'Next';
$config['prev_link'] = 'Prev';
$config['cur_tag_open'] = '<li class="current">';
$config['cur_tag_close'] = '</li>';
$config['prev_tag_open'] = '<li class="prev">';
$config['prev_tag_close'] = '</li>';
$config['next_tag_open'] = '<li class="next">';
$config['next_tag_close'] = '</li>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
        $config["base_url"] = base_url() . "blog";
        
        $config["per_page"] = 2;
        $config["uri_segment"] = 2;
    
        $id = $this->input->post('carisaya');
       if($id!=null ){

       	$this->data['content']= $this->Bc_model->get_bc_content("$id","Blog",$offset,"$config[per_page]");
       if($this->data['content']!=null){
       $config["total_rows"] = count($this->data['content']);
}
else{
	show_404();
}       }
       else{
       	show_404();
     
        }
        $this->pagination->initialize($config);
        $this->data["links"] = $this->pagination->create_links();


		$this->data['subheader'] = '<div id="sub-header-bg"></div>';
		$this->data['title'] = "Binary Consulting - Your IT partner - $tittle ";
		
		$this->load->vars($this->data);
		$this->load->view('home');

	}
}	