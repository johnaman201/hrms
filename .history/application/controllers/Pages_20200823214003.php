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


    public function empadd(){
            

            if(isset($this->session->userid)){

                //$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
                $this->form_validation->set_rules('fname','fname','required');
                $this->form_validation->set_rules('lname','lname','required');
                $this->form_validation->set_rules('bday','bday','required');
               
                if($this->form_validation->run() == FALSE){
                    $page = "empadd";
                    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                        show_404();
                    }
            
                    $data['greet'] = "Hello, ";
                    $data['logout'] = 'Logout';
                    $data['list'] = 'List of Employees';
                    $data['addemp'] = 'Add New Employee';
                    $data['tableemp'] = $this->DB_model->get_employees();

                    $this->session->set_flashdata('emp_val_error',validation_errors('', ''));
                    $this->session->keep_flashdata('emp_val_error');
                    echo validation_errors();
                    echo form_error('fname');
                    $this->load->view('templates/header');
                    //$this->load->view('templates/sidenav');
                    $this->load->view('pages/'.$page, $data);
                    $this->load->view('templates/f

                }else{
                    $result = $this->DB_model->insert_new_emp();
                    
                    if($result){

                        $this->session->set_flashdata('emp_add_success','New Employee Added');
                        $this->session->keep_flashdata('emp_add_success');

                        redirect(site_url('dashboard'));
                    }
                    else{
                        $this->session->set_flashdata('emp_add_error','New Employee not Added');
                        $this->session->keep_flashdata('emp_add_success');
                        redirect(site_url('dashboard'));
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