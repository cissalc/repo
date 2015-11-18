<?php
class User extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }
	public function index(){
	    $data['title'] = '用户管理';
	    $this->load->view('templates/header', $data);
	    $this->load->view('user/index', $data);
	    $this->load->view('templates/footer');
	}	
	public function listUser(){
		$data['title'] = '用户列表';
	//	$data['users'] = $this->user_model->get_users();
		$this->load->view('templates/header', $data);
	    $this->load->view('user/listUser', $data);
	    $this->load->view('templates/footer');
	}
	public function addUserView(){
		$this->load->helper('form');
	    $this->load->library('form_validation');
		$data['title'] = '新增用户';
		$this->form_validation->set_rules('firstName', 'FirstName', 'required');
	    $this->form_validation->set_rules('lastName', 'LastName', 'required');
	    $this->form_validation->set_rules('age', 'Age', 'required');
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('templates/header', $data);
	        $this->load->view('user/addUserView');
	        $this->load->view('templates/footer');
	
	    }
	    else
	    {
	        $this->user_model->set_user();
	        $this->load->view('templates/header', $data);
	        $this->load->view('user/success');
	        $this->load->view('templates/footer');
	    }
	}
	public function deleteUserView(){
		$data['title'] = '删除用户';
		$data['users'] = $this->user_model->get_users();
		$this->load->view('templates/header', $data);
        $this->load->view('user/deleteUserView',$data);
        $this->load->view('templates/footer');
	}
	public function deleteUser(){
		$data['title'] = '用户管理';
		$userCode = $_GET['userCode'];
		$data['userCode'] = $userCode;
		$this->user_model->delete_user($userCode);	
		$this->load->view('templates/header', $data);
        $this->load->view('user/success');
        $this->load->view('templates/footer');
	}
	public function updateUserListView(){
		$data['title'] = '更新用户';
		$data['users'] = $this->user_model->get_users();
		$this->load->view('templates/header', $data);
        $this->load->view('user/updateUserListView',$data);
        $this->load->view('templates/footer');
	}
	public function updateUserView(){
		$data['title'] = '更新用户';
		$userCode = $_GET['userCode'];
		$data['users'] = $this->user_model->get_userByUserCode($userCode);
		foreach ( $data['users'] as $value ) {
       		$data['userT'] = $value;
		}
		$this->load->view('templates/header', $data);
        $this->load->view('user/updateUserView',$data);
        $this->load->view('templates/footer');
	}
	public function updateUser(){
		$this->user_model->update_user();
		$this->updateUserListView();
	}
}
?>
