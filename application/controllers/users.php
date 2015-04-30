<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('text');
 
    }
	
    //Function to load the indux page
	function Index()
	{	$languages = $this->session->userdata('languages');
		$lg=$languages['language'];
		if($lg=='fr'){
			$this->lang->load('content','french');
		}
		elseif($lg=='en'){
			$this->lang->load('content','english');
		}
		elseif($lg=='dh'){
			$this->lang->load('content','dutch');
		}
		else{
			$this->lang->load('content','english');
		}
			
		$header_data['language']=array(
			'home'=>$this->lang->line('home'),
			'about'=>$this->lang->line('about'),
			'login'=>$this->lang->line('login')			
		);
		$data['language']=array(
			'content_head'=>$this->lang->line('content_head'),
			'content'=>$this->lang->line('content'),
			'read_more'=>$this->lang->line('read_more'),
			'comments'=>$this->lang->line('comments')
		);
		
		$slider_data['language']=array(
			'lang_select'=>$this->lang->line('lang_select'),
			'categories'=>$this->lang->line('categories'),
			'profile'=>$this->lang->line('profile'),
			'ch_pass'=>$this->lang->line('ch_pass'),
			'my_page'=>$this->lang->line('my_page'),
			'gallary'=>$this->lang->line('gallary'),
			'logout'=>$this->lang->line('logout')
		);
		
		$lg=$this->lang->line('key');
		$slider_data['val']=array(
			'lang'=>$lg
		);
		
		$this->load->view('header',$header_data);
		$this->load->view('home',$data);
		$this->load->view('slider',$slider_data);
		$this->load->view('footer');
	}
	
	//Function to chage language
	function changeLanguage(){
		if(isset($_POST)){
			$this->session->unset_userdata('languages');
			$lg=$this->input->post('sel_lang');
			$lang=array(
				'language'=>$lg
			);
			$this->session->set_userdata(array('languages'=>$lang));
			
			redirect('users/Index');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */