<?php
class FoodClass extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }
	public function index($page = 'class1'){
	    $data['title'] = ' ';
	    $data['num'] = $page;
	    $this->load->view('templates/header', $data);
	    //$this->load->view('weixin/weixin_index', $data);
	    $this->load->view('templates/footer');
	}	
}
?>
