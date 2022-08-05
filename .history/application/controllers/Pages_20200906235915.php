<?php

class Pages extends CI_Controller{

    public function view(){

        if(!isset($this->session->userid)){
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
            $this->form_validation->set_rules('username','username','required');
            $this->form_validation->set_rules('password','password','required');
            if($this->form_validation->run() == FALSE){

                    $page = "home";

                    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                        show_404();
                    }
            
                    $data['title'] = "Michelene's Mart";
                    $data['login_user'] = 'User Login';
            
                    $this->load->view('templates/header');
                    $this->load->view('pages/'.$page, $data);
                    $this->load->view('templates/footer'); 

            }else{
                    $result = $this->DB_model->login();
                    
                    if($result){

                        $user_data = array(

                            'userid' => $result['id'],
                            'firstname' => $result['fname'],
                            'lastname' => $result['lname'],
                            'fullname' => $result['fname'].' '.$result['lname'],
                            'logged_in' => true
                        );
                    
                        $this->session->set_userdata($user_data);
                        $this->session->set_flashdata('success','Your aren now logged in as '.$this->session->fullname);
                        $this->session->keep_flashdata('success');

                        redirect(site_url('dashboard'));
                    }
                    else{
                        $this->session->set_flashdata('error','Wrong Username or Password!!!');
                        redirect(site_url(''));
                    }
            
            //
            }

        }else{
            redirect(site_url('dashboard'));
        }
        
        
    
            
        
        
    }

    public function dashboard(){

            if(isset($this->session->userid)){
               
                    $page = "dashboard";
    
                    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                        show_404();
                    }
            
                    $data['greet'] = "Hello, ";
                    $data['logout'] = 'Logout';
                    $data['list'] = 'List of Employees';
                    $data['addemp'] = 'Add New Employee';
                    $data['tableemp'] = $this->DB_model->get_employees();
                    //echo '<pre>'.print_r($data['tableemp']);die;
                    //$data['login_user'] = 'User Login';
            
                    $this->load->view('templates/header');
                    //$this->load->view('templates/sidenav');
                    $this->load->view('pages/'.$page, $data);
                    $this->load->view('templates/footer');
    
                
            }else{
                
               redirect(site_url(''));
            }       
   
    }
    public function employees(){

        if(isset($this->session->userid)){
           
                $page = "employees";

                if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                    show_404();
                }
        
                $data['greet'] = "Hello, ";
                $data['logout'] = 'Logout';
                $data['list'] = 'List of Employees';
                $data['adddata'] = 'Add New Employee';
                $data['tableemp'] = $this->DB_model->get_employees();
                //echo '<pre>'.print_r($data['tableemp']);die;
                //$data['login_user'] = 'User Login';
        
                $this->load->view('templates/header');
                //$this->load->view('templates/sidenav');
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer');

            
        }else{
            
           redirect(site_url(''));
        }       

    }


    public function empadd($id = false){
            

            if(isset($this->session->userid)){
                

                //$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
                $this->form_validation->set_rules('fname','fname','required');
                $this->form_validation->set_rules('lname','lname','required');
                $this->form_validation->set_rules('gender','gender','required');
                $this->form_validation->set_rules('bday','bday','required');
                $this->form_validation->set_rules('age','age','required');
                $this->form_validation->set_rules('contact','contact','required');
                $this->form_validation->set_rules('address','address','required');
                $this->form_validation->set_rules('empdate','empdate','required');
                $this->form_validation->set_rules('status','status','required');
                $this->form_validation->set_rules('designation','designation','required');
                $this->form_validation->set_rules('position','position','required');
                //$this->form_validation->set_rules('salary','salary','required');
               
                if($this->form_validation->run() == FALSE){
                    $page = "empadd";

                    if(!empty(validation_errors())){
                        $this->session->set_flashdata('emp_val_error',"Please fill up the required fields!");
                        $this->session->keep_flashdata('emp_val_error');
                    }
                    
                    //echo validation_errors();
                    //echo form_error('fname');
                    
                    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                        show_404();
                    }
        
                $data['greet'] = "Hello, ";
                $data['logout'] = 'Logout';
                $data['list'] = 'List of Employees';
                if($id){
                    $data['adddata'] = 'Edit Employee Data';
                }else{
                    $data['adddata'] = 'Add Employee Data';
                }
                
                $data['emp'] = $this->DB_model->get_employee($id);
                $data['designations'] = $this->DB_model->get_designations();
                $data['positions'] = $this->DB_model->get_positions();
                //echo '<pre>'.print_r($data['designations']);die;
                //$data['login_user'] = 'User Login';
        
                $this->load->view('templates/header');
                //$this->load->view('templates/sidenav');
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer');
                   

                }else{
                    //
                    if(!empty($_FILES['emppic']['name'])){
                        $_FILES['userfile']['name']= time().rand(1,988).'.'.substr(strrchr($_FILES['emppic']['name'],'.'),1);	
                        $_FILES['userfile']['tmp_name']= $_FILES['emppic']['tmp_name'];
                        $_FILES['userfile']['type']= $_FILES['emppic']['type'];
                        $_FILES['userfile']['error']= $_FILES['emppic']['error'];
                        $_FILES['userfile']['size']= $_FILES['emppic']['size'];
                        
                        $emppic = $_FILES['userfile']['name'];
                        
                        move_uploaded_file($_FILES['userfile']['tmp_name'],BASEPATH.'../assets/admin/images/emppics/'.$_FILES['userfile']['name']);
    
                        if(!empty($this->input->post('old_emppic'))){
                            if(file_exists(BASEPATH.'../assets/admin/images/emppics/'.$this->input->post('old_emppic')))
                            unlink(BASEPATH.'../assets/admin/images/emppics/'.$this->input->post('old_emppic'));
                        }
                    }
                    if(empty($emppic)){
                        $emppic = '';
                    }
                    $data = array(
                        'fname' => $this->input->post('fname'),
                        'mname' => $this->input->post('mname'),
                        'lname' => $this->input->post('lname'),
                        'email' => $this->input->post('email'),
                        'gender' => $this->input->post('gender'),
                        'bday' => $this->input->post('bday'),
                        'age' => $this->input->post('age'),
                        'contact' => $this->input->post('contact'),
                        'address' => $this->input->post('address'),
                        'ename' => $this->input->post('ename'),
                        'econtact' => $this->input->post('econtact'),
                        'eadd' => $this->input->post('eadd'),
                        'empdate' => $this->input->post('empdate'),
                        'status' => $this->input->post('status'),
                        'designation' => $this->input->post('designation'),
                        'position' => $this->input->post('position'),
                        'empno' => $this->input->post('empno'),
                        'empid' => $this->input->post('empid'),
                        //'salary' => $this->input->post('salary'),
                        'lempdate' => $this->input->post('lempdate'),
                        'sss' => $this->input->post('sss'),
                        'tin' => $this->input->post('tin'),
                        'philhealth' => $this->input->post('philhealth'),
                        'emppic' => $emppic

                    );
                    //echo '<pre>'.print_r($id);die;
                    if(!$id){
                        
                        $result = $this->DB_model->insert_new_emp($data);
                        if($result){

                            $this->session->set_flashdata('emp_add_success','New Employee Added');
                            $this->session->keep_flashdata('emp_add_success');
    
                            redirect(site_url('employees'));
                        }
                        else{
                            $this->session->set_flashdata('emp_add_error','New Employee not Added');
                            $this->session->keep_flashdata('emp_add_error');
                            redirect(site_url('empadd'));
                        }
                    }
                    else{
                        
                        $result = $this->DB_model->update_emp($id,$data);
                        
                        if($result){

                            $this->session->set_flashdata('emp_update_success','Employee Data Updated');
                            $this->session->keep_flashdata('emp_update_success');
    
                            redirect(site_url('employees'));
                        }
                        else{
                            $this->session->set_flashdata('emp_update_error','Employee Data not Updated');
                            $this->session->keep_flashdata('emp_update_error');
                            redirect(site_url('empadd/').$id);
                        }
    
                    }
                    
                    
                    
            
            //
                }

            
        }else{
            
           redirect(site_url(''));
        }
    }
    public function departments(){
               
               $page = "departments";
               if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
    
            $data['greet'] = "Hello, ";
            $data['logout'] = 'Logout';
            $data['list'] = 'List of Departments';
            $data['adddata'] = 'Add New Department'; 
                $data['designations'] = $this->DB_model->get_designations();
                
                //echo '<pre>'.print_r($data['designations']);die;
                //$data['login_user'] = 'User Login';
        
                $this->load->view('templates/header');
                //$this->load->view('templates/sidenav');
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer');
    }
    public function deptadd($id = false){
            

        if(isset($this->session->userid)){
            

            //$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
            $this->form_validation->set_rules('deptname','deptname','required');
            $this->form_validation->set_rules('deptstatus','deptstatus','required');
            //$this->form_validation->set_rules('salary','salary','required');
           
            if($this->form_validation->run() == FALSE){
                $page = "deptadd";

                if(!empty(validation_errors())){
                    $this->session->set_flashdata('dept_val_error',"Please fill up the required fields!");
                    $this->session->keep_flashdata('dept_val_error');
                }
                
                //echo validation_errors();
                //echo form_error('fname');
                
                if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                    show_404();
                }
    
            $data['greet'] = "Hello, ";
            $data['logout'] = 'Logout';
            $data['list'] = 'List of Departments';
            if($id){
                $data['adddata'] = 'Edit Department Data';
            }else{
                $data['adddata'] = 'Add Department Data';
            }
            
            $data['dept'] = $this->DB_model->get_department($id);
            //$data['designations'] = $this->DB_model->get_designations();
            //$data['positions'] = $this->DB_model->get_positions();
            //echo '<pre>'.print_r($data['dept']);die;
            //$data['login_user'] = 'User Login';
    
            $this->load->view('templates/header');
            //$this->load->view('templates/sidenav');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
               

            }else{
                //
               
                $data = array(
                    'deptname' => $this->input->post('deptname'),
                    'deptstatus' => $this->input->post('deptstatus')                    
                );
                //echo '<pre>'.print_r($id);die;
                if(!$id){
                    
                    $result = $this->DB_model->insert_new_dept($data);
                    if($result){

                        $this->session->set_flashdata('dept_add_success','New Department Added');
                        $this->session->keep_flashdata('dept_add_success');

                        redirect(site_url('departments'));
                    }
                    else{
                        $this->session->set_flashdata('dept_add_error','New Department not Added');
                        $this->session->keep_flashdata('dept_add_error');
                        redirect(site_url('deptadd'));
                    }
                }
                else{
                    
                    $result = $this->DB_model->update_dept($id,$data);
                    
                    if($result){

                        $this->session->set_flashdata('dept_update_success','Department Data Updated');
                        $this->session->keep_flashdata('dept_update_success');

                        redirect(site_url('departments'));
                    }
                    else{
                        $this->session->set_flashdata('dept_update_error','Department Data not Updated');
                        $this->session->keep_flashdata('dept_update_error');
                        redirect(site_url('deptadd/').$id);
                    }

                }
                
                
                
        
        //
            }

        
    }else{
        
       redirect(site_url(''));
    }
}
public function positions(){
               
    $page = "positions";
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
     show_404();
 }

 $data['greet'] = "Hello, ";
 $data['logout'] = 'Logout';
 $data['list'] = 'List of Positions';
 $data['adddata'] = 'Add New Positions'; 
     $data['positions'] = $this->DB_model->get_positions();
     
     //echo '<pre>'.print_r($data['designations']);die;
     //$data['login_user'] = 'User Login';

     $this->load->view('templates/header');
     //$this->load->view('templates/sidenav');
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates/footer');
}
public function postadd($id = false){
            

    if(isset($this->session->userid)){
        

        //$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
        $this->form_validation->set_rules('postname','postname','required');
        $this->form_validation->set_rules('poststatus','poststatus','required');
        //$this->form_validation->set_rules('salary','salary','required');
       
        if($this->form_validation->run() == FALSE){
            $page = "postadd";

            if(!empty(validation_errors())){
                $this->session->set_flashdata('dept_val_error',"Please fill up the required fields!");
                $this->session->keep_flashdata('dept_val_error');
            }
            
            //echo validation_errors();
            //echo form_error('fname');
            
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

        $data['greet'] = "Hello, ";
        $data['logout'] = 'Logout';
        $data['list'] = 'List of Departments';
        if($id){
            $data['adddata'] = 'Edit Department Data';
        }else{
            $data['adddata'] = 'Add Department Data';
        }
        
        $data['dept'] = $this->DB_model->get_department($id);
        //$data['designations'] = $this->DB_model->get_designations();
        //$data['positions'] = $this->DB_model->get_positions();
        //echo '<pre>'.print_r($data['dept']);die;
        //$data['login_user'] = 'User Login';

        $this->load->view('templates/header');
        //$this->load->view('templates/sidenav');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
           

        }else{
            //
           
            $data = array(
                'deptname' => $this->input->post('deptname'),
                'deptstatus' => $this->input->post('deptstatus')                    
            );
            //echo '<pre>'.print_r($id);die;
            if(!$id){
                
                $result = $this->DB_model->insert_new_dept($data);
                if($result){

                    $this->session->set_flashdata('dept_add_success','New Department Added');
                    $this->session->keep_flashdata('dept_add_success');

                    redirect(site_url('departments'));
                }
                else{
                    $this->session->set_flashdata('dept_add_error','New Department not Added');
                    $this->session->keep_flashdata('dept_add_error');
                    redirect(site_url('deptadd'));
                }
            }
            else{
                
                $result = $this->DB_model->update_dept($id,$data);
                
                if($result){

                    $this->session->set_flashdata('dept_update_success','Department Data Updated');
                    $this->session->keep_flashdata('dept_update_success');

                    redirect(site_url('departments'));
                }
                else{
                    $this->session->set_flashdata('dept_update_error','Department Data not Updated');
                    $this->session->keep_flashdata('dept_update_error');
                    redirect(site_url('deptadd/').$id);
                }

            }
            
            
            
    
    //
        }

    
}else{
    
   redirect(site_url(''));
}
}

    public function logout(){
        //$userdata = array();
        $userdata = array_keys($this->session->userdata());
        
        $this->session->unset_userdata($userdata);
        $this->session->set_flashdata('logout_success','Succesfully Logout!');
        $this->session->keep_flashdata('logout_success');
        
        redirect(site_url());
    }

}