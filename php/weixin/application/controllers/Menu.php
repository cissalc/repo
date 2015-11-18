<?php
class Menu extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('menu_model');
        $this->load->model('item_model');
        $this->load->helper('url_helper');
    }
	public function listMenus(){
		$data['title'] = '';
		$data['menus'] = $this->user_model->get_menus();
		$data['items'] = $this->user_model->get_items();
		
		$this->load->view('templates/header', $data);
	    $this->load->view('weixin/weixin_index', $data);
	    $this->load->view('templates/footer');
	}
}
?>
