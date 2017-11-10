<?php

class Example_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

     function get_all()
     {
       $str_query = "SELECT * FROM table";
       return $this->db->query($str_query)->result_array();
     }// get_all()


}
