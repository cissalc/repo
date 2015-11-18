<?php
class User_model extends CI_Model{
	public function __construct()
    {
        $this->load->database();
    }
    public function get_users(){
    	$query = $this->db->get('p_user');
	    return $query->result_array();
    }
    public function set_user(){
    	$this->load->helper('url');
	    $data = array(
	        'FirstName' => $this->input->post('firstName'),
	        'LastName' => $this->input->post('lastName'),
	        'Age' => $this->input->post('age')
	    );
	    return $this->db->insert('p_user', $data);
    }
    public function delete_user($userCode){
    	return $this->db->delete('p_user',array('userCode' => $userCode));
    }
    public function get_userByUserCode($userCode){
    	return $this->db->get_where('p_user',array('userCode' => $userCode))->result_array();
    	//return $this->db->query('select  *  from userCode = '.$userCode)->result_array();
    }
    public function update_user(){
    	$userCode = $_POST['userCode'];
    	$firstName = $_POST['firstName'];
    	$lastName = $_POST['lastName'];
    	$age = $_POST['age'];
    	return $this->db->update('p_user',array('FirstName'=>$firstName,'LastName'=>$lastName,'Age'=>$age),array('userCode'=>$userCode));
    }
}
?>
