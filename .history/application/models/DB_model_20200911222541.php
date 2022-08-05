<?php

class DB_model extends CI_Model{

    public function __construct(){

        $this->load->database();
    }

    public function login(){

        $this->db->select('*');
        $this->db->where('username',$this->input->post('username',true));
        $this->db->where('pword',$this->input->post('password', true));
        $this->db->where('status',"1");
        $this->db->limit(1);
        $result = $this->db->get('tbl_users');
        //echo '<pre>'.print_r($result);die;
        if($result->num_rows() == 1){
                $result = $result->row_array();
                if($result['emp_id'] != 0){
                    $this->db->select('*');
                    $this->db->where('id', $result['emp_id']);
                    $this->db->limit(1);
                    $result = $this->db->get('tbl_employees');
                    return $result->row_array();
                }
                else{
                    $user_data = array(

                        'id' => 0,
                        'fname' => "Master",
                        'lname' => 'Admin',
                        'fullname' =>'Master Admin',
                        'userpic' => '',
                        'logged_in' => true
                    );
                    return $user_data;
                }
                

                
                //'<pre>'.print_r($result);die;
        }
        else{

            return false;
        }
    }
    public function get_employees(){

        $this->db->select('E.*,D.deptname designation,P.positionname position,S.statusname empstatus');
        $this->db->where('E.id !=',"0");
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
    public function get_users(){

        $this->db->select('U.*,E.fname fname,E.mname mname, E.lname lname');
        $this->db->where('U.username !=',"masteradmin");
        $this->db->join('tbl_employees E','E.id = U.emp_id', 'LEFT');
        $result = $this->db->get('tbl_users U');

        return $result->result();
    }
    public function get_events(){

        $this->db->order_by('id');
        $result = $this->db->get('tbl_events')->result_array();

        return json_encode($result);
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
    public function get_user_id($id){

        if(empty($id)){
            return false;
        }else{
            $this->db->where('emp_id',$id);
        $result = $this->db->get('tbl_users');

        return $result->row();

        }
        
    }
    public function insert_new_user($data){

        
        return $this->db->insert('tbl_users', $data);
    }
    public function update_user($id,$data){
        $this->db->where('id',$id);
        return $this->db->update('tbl_users',$data);
    }
    public function check_username($username){
        $this->db->where('username',$username);
        $result = $this->db->get('tbl_users');

        return $result->row();
    }
    public function get_sum_emp(){
        $this->db->select("COUNT(id) as empno");
        $where = "status = 1 OR status = 2";
        $this->db->where($where);
       
        $return = $this->db->get('tbl_employees');

        return $return->row();
    }
    public function get_sum_dept(){
        $this->db->select("COUNT(id) as deptno");
        $this->db->where("deptstatus","1");
        $return = $this->db->get('tbl_departments');

        return $return->row();

    }
    public function get_sum_post(){
        $this->db->select("COUNT(id) as postno");
        $this->db->where("positionstatus","1");
        $return = $this->db->get('tbl_positions');

        return $return->row();

    }
    public function get_sum_user(){
        $this->db->select("COUNT(id) as userno");
        $this->db->where("status","1");
        $this->db->where("username !=",'masteradmin');
        $return = $this->db->get('tbl_users');

        return $return->row();

    }
    public function add_event($data){

        
        return $this->db->insert('tbl_events', $data);
    }
}
