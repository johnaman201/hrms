<?php

class DB_model extends CI_Model{

    public function __construct(){

        $this->load->database();
    }

    public function login(){

        $this->db->select('*');
        $this->db->where('username',$this->input->post('username',true));
        $this->db->where('pword',$this->input->post('password', true));
        $this->db->limit(1);
        $result = $this->db->get('tbl_users');
        //echo '<pre>'.print_r($result);die;
        if($result->num_rows() == 1){
                $result = $result->row_array();
                $this->db->select('*');
                $this->db->where('id', $result['emp_id']);
                $this->db->limit(1);
                $result = $this->db->get('tbl_employees');

                return $result->row_array();
                //'<pre>'.print_r($result);die;
        }
        else{

            return false;
        }
    }
    public function get_employees(){

        $this->db->select('*');
        $result = $this->db->get('tbl_employees');

        return $result->result_array();
    }

    public function insert_new_emp(){

        $data = array(
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'lname' => $this->input->post('lname'),
            'bday' => $this->input->post('bday')
        );
        return $this->db->insert('tbl_employees', $data);
    }
    public function update_emp(){
        
    }
}
