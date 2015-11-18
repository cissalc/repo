<?php
class Weixin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        //$this->load->model('user_model');
        $this->load->model('menu_model');
        $this->load->model('item_model');
        $this->load->helper('url_helper');
    }
	public function index(){
	    $data['title'] = '微信管理';
	    $data['menus'] = $this->menu_model->get_menus();
		$items = $this->item_model->get_items();
		$arrayItems = array();
		$i=0;
		foreach ( $data['menus'] as $value ) {
       		$menuId = $value['id'];
       		$menuName = $value['name'];
       		$arrayItems[$i] = array();
       		$j=0;
       		foreach( $items as $item){
       			if($item['menuId'] == $menuId){
       				$item['menuName'] = $menuName;
       				$arrayItems[$i][$j]=$item;
       				$j++;
       			}
       		}
       		$i++;
		}
		$data['items'] = $arrayItems;
	    $this->load->view('templates/header', $data);
	    $this->load->view('weixin/weixin_index', $data);
	    $this->load->view('templates/footer');
	}	
}
?>
