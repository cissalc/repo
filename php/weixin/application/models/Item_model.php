<?php
class Item_model extends CI_Model{
	public function __construct()
    {
        $this->load->database();
    }
    public function get_items(){
    	$query = $this->db->query('select pi.id,pi.name,pi.orderNum,pi.price,pi.sales,pi.picAddress,pi.menuId from p_item pi,p_menu pm ' .
    			'where pi.menuId = pm.id ' .
    			'order by pm.orderNum,pi.orderNum');
	    return $query->result_array();
    }
}
?>
