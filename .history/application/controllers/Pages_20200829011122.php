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
                    $data['addemp'] = 'Edit Employee Data';
                }else{
                    $data['addemp'] = 'Add Employee Data';
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
                        'salary' => $this->input->post('salary'),
                        'lempdate' => $this->input->post('lempdate'),
                        'sss' => $this->input->post('sss'),
                        'tin' => $this->input->post('tin'),
                        'philhealth' => $this->input->post('philhealth')

                    );
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

    public function logout(){
        //$userdata = array();
        $userdata = array_keys($this->session->userdata());
        
        $this->session->unset_userdata($userdata);
        $this->session->set_flashdata('logout_success','Succesfully Logout!');
        $this->session->keep_flashdata('logout_success');
        
        redirect(site_url());
    }

}