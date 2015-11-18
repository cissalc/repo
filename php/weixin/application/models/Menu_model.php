<?php
/*
CREATE TABLE p_menu (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  orderNum int(11),
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


*/
class Menu_model extends CI_Model{
	public function __construct()
    {
        $this->load->database();
    }
    public function get_menus(){
    	$query = $this->db->query('select id,name,orderNum from p_menu order by orderNum');
	    return $query->result_array();
    }
}
?>
