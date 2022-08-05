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

        $this->db->select('E.*,D.deptname designation,P.positionname position,S.statusname empstatus');
        $this->db->join('tbl_departments D','D.id = E.designation','LEFT');
        $this->db->join('tbl_positions P','P.id = E.position','LEFT');
        $this->db->join('tbl_status S','S.id = E.status','LEFT');
        $result = $this->db->get('tbl_employees E');

        return $result->result_array();
    }
    public function get_designations(){

        $this->db->select('*');
        $result = $this->db->get('tbl_departments');

        return $result->result();
    }
    public function get_positions(){

        $this->db->select('*');
        $result = $this->db->get('tbl_positions');

        return $result->result();
    }
    public function get_status(){

        $this->db->select('*');
        $result = $this->db->get('tbl_status');

        return $result->result();
    }
    public function get_status(){

        $this->db->select('*');
        $result = $this->db->get('tbl_users');

        return $result->result();
    }
    public function get_designations_active(){

        $this->db->select('*');
        $this->db->where('deptstatus', 1);
        $result = $this->db->get('tbl_departments');

        return $result->result();
    }
    public function get_positions_active(){

        $this->db->select('*');
        $this->db->where('positionstatus', 1);
        $result = $this->db->get('tbl_positions');

        return $result->result();
    }
    public function get_status_active(){

        $this->db->select('*');
        $this->db->where('statusstatus', 1);
        $result = $this->db->get('tbl_status');

        return $result->result();
    }
    public function get_employee($id){

        
        $this->db->where('id',$id);
        $result = $this->db->get('tbl_employees');

        return $result->row();
    }

    public function insert_new_emp($data){

        
        return $this->db->insert('tbl_employees', $data);
    }
    public function update_emp($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('tbl_employees',$data);
    }

    public function get_department($id){

        
        $this->db->where('id',$id);
        $result = $this->db->get('tbl_departments');

        return $result->row();
    }
    public function insert_new_dept($data){

        
        return $this->db->insert('tbl_departments', $data);
    }
    public function update_dept($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('tbl_departments',$data);
    }
    public function get_position($id){

        
        $this->db->where('id',$id);
        $result = $this->db->get('tbl_positions');

        return $result->row();
    }
    public function insert_new_post($data){

        
        return $this->db->insert('tbl_positions', $data);
    }
    public function update_post($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('tbl_positions',$data);
    }
    public function get_status_id($id){

        
        $this->db->where('id',$id);
        $result = $this->db->get('tbl_status');

        return $result->row();
    }
    public function insert_new_stat($data){

        
        return $this->db->insert('tbl_status', $data);
    }
    public function update_stat($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('tbl_status',$data);
    }
}
