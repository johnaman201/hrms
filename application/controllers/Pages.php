<?php



class Pages extends CI_Controller{

    function __construct(){

            parent::__construct();
            
          

        }
 public function testing($id = false){

      
           
                if(isset($this->session->userid)){
           
                $page = "testing";

                if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                    show_404();
                }

                $data['tableemp'] = $this->DB_model->get_employees($id);
                
                $data['emp'] = $this->DB_model->get_employee($id);

                 $data['employ'] = $this->DB_model->get_emp($id);

                $data['dept'] = $this->DB_model->get_department($id);

                $data['designations'] = $this->DB_model->get_designations($id);

                $data['positions'] = $this->DB_model->get_positions($id);

                $data['status'] = $this->DB_model->get_status($id);

               


                $this->load->view('pages/'.$page, $data);
              

            
        }else{
            
           redirect(site_url(''));
        }       

    }

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
            
                    $data['title'] = "HRMS";
                    $data['login_user'] = "SAMPLE";
            
                    $this->load->view('templates/header');
                    $this->load->view('pages/'.$page, $data);
                    $this->load->view('templates/footer'); 

            }else{
                    $result = $this->DB_model->login();
                    //echo '<pre>'.print_r($result);die;
                    if($result){

                        $user_data = array(

                            'userid' => $result['id'],
                            'firstname' => $result['fname'],
                            'lastname' => $result['lname'],
                            'fullname' => $result['fname'].' '.$result['lname'],
                            'userpic' => $result['emppic'],
                            'logged_in' => true
                        );
                    
                        $this->session->set_userdata($user_data);
                        $this->session->set_flashdata('success','You are now logged in as '.$this->session->fullname);
                        $this->session->keep_flashdata('success');

                        redirect(site_url('dashboard'));
                    }
                    else{
                        $this->session->set_flashdata('error','Wrong Username or Password --- User Account needs to be Activated');
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
                    $data['employees'] = $this->DB_model->get_sum_emp();
                    $data['departments'] = $this->DB_model->get_sum_dept();
                    $data['positions'] = $this->DB_model->get_sum_post();
                    $data['users'] = $this->DB_model->get_sum_user();
                    $data['events'] = $this->DB_model->get_events();
                    //echo '<pre>'.print_r($data['events']);die;
                    //$data['login_user'] = 'User Login';
            
                    $this->load->view('templates/header');
                    //$this->load->view('templates/sidenav');
                    $this->load->view('pages/'.$page, $data);
                    $this->load->view('templates/footer');
    
                
            }else{
                
               redirect(site_url(''));
            }       
   
    }
    public function employees($id = false){

        if(isset($this->session->userid)){
           
                $page = "employees";

                if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                    show_404();
                }
                

                $data['greet'] = "Hello, ";
                $data['logout'] = 'Logout';
                $data['list'] = 'List of Employees';
                $data['adddata'] = 'Add New Employee';

                $data['tableemp'] = $this->DB_model->get_employees($id);
                $data['emp'] = $this->DB_model->get_employee($id);
                $data['employ'] = $this->DB_model->get_emp($id);
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

        public function empchart($id = false){

        if(isset($this->session->userid)){
           
                $page = "empchart";

                if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                    show_404();
                }
        
                $data['greet'] = "Hello, ";
                $data['logout'] = 'Logout';
                $data['list'] = 'List of Employees';
                $data['adddata'] = 'Employee Information';

                $data['tableemp'] = $this->DB_model->get_employees($id);
                
                $data['emp'] = $this->DB_model->get_employee($id);

                $data['designations'] = $this->DB_model->get_designations($id);

                $data['positions'] = $this->DB_model->get_positions($id);

                $data['status'] = $this->DB_model->get_status($id);

                $data['dept'] = $this->DB_model->get_department($id);

                $data['employ'] = $this->DB_model->get_emp($id);

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
                

                $this->form_validation->set_rules('fname','fname','required');
                $this->form_validation->set_rules('lname','lname','required');
                $this->form_validation->set_rules('gender','gender','required');

               
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

                $data['designations'] = $this->DB_model->get_designations_active();
                $data['positions'] = $this->DB_model->get_positions_active();
                $data['status'] = $this->DB_model->get_status_active();

        
                $this->load->view('templates/header');
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
                        $emppic = $this->input->post('old_emppic');
                    }

                    $data = array(


                         //PERSONAL INFO

                        'fname' => strtoupper($this->input->post('fname')),
                        'mname' => strtoupper($this->input->post('mname')),
                        'lname' => strtoupper($this->input->post('lname')),
                        'gender' => strtoupper($this->input->post('gender')),
                        'age' => $this->input->post('age'),
                        'bday' => $this->input->post('bday'),
                        'bplace' => strtoupper($this->input->post('bplace')),

                        'readd' => strtoupper($this->input->post('readd')),
                        'retype' => strtoupper($this->input->post('retype')),
                        'restay' => strtoupper($this->input->post('restay')),

                        'peadd' => strtoupper($this->input->post('peadd')),
                        'petype' => strtoupper($this->input->post('petype')),
                        'pestay' => strtoupper($this->input->post('pestay')),

                        'zipcode' => $this->input->post('zipcode'),

                        'civilstats' => strtoupper($this->input->post('civilstats')),

                        'cellno' => $this->input->post('cellno'),
                        'teleno' => $this->input->post('teleno'),

                        'sss' => $this->input->post('sss'),
                        'tin' => $this->input->post('tin'),
                        'philhealth' => $this->input->post('philhealth'),
                        'pagibig' => $this->input->post('pagibig'),

                        'email' => $this->input->post('email'),

                        'nickname' => strtoupper($this->input->post('nickname')),

                        //FAMILY INFO

                        'spouse' => strtoupper($this->input->post('spouse')),
                        'spouseplace' => strtoupper($this->input->post('spouseplace')),
                        'spouseoccu' => strtoupper($this->input->post('spouseoccu')),
                        'spousebday' => $this->input->post('spousebday'),

                        'child1' => strtoupper($this->input->post('child1')),
                        'bday1' => $this->input->post('bday1'),
                        'place1' => strtoupper($this->input->post('place1')),

                        'child2' => strtoupper($this->input->post('child2')),
                        'bday2' => $this->input->post('bday2'),
                        'place2' => strtoupper($this->input->post('place2')),

                        'father' => strtoupper($this->input->post('father')),
                        'fplace' => strtoupper($this->input->post('fplace')),

                        'mother' => strtoupper($this->input->post('mother')),
                        'mplace' => strtoupper($this->input->post('mplace')),

                        'parentadd' => strtoupper($this->input->post('parentadd')),

                        //WORK EXP

                        'precompany1' => strtoupper($this->input->post('precompany1')),
                        'preposition1' => strtoupper($this->input->post('preposition1')),
                        'prefdate1' => $this->input->post('prefdate1'),
                        'preldate1' => $this->input->post('preldate1'),

                        'precompany2' => strtoupper($this->input->post('precompany2')),
                        'preposition2' => strtoupper($this->input->post('preposition2')),
                        'prefdate2' => $this->input->post('prefdate2'),
                        'preldate2' => $this->input->post('preldate2'),

                        //OTHER INFO

                        'dole' => strtoupper($this->input->post('dole')),
                        'issuecom' => strtoupper($this->input->post('issuecom')),
                        'assoc' => strtoupper($this->input->post('assoc')),


                        //EMPLOYEMENT INFORMATION
                         'designation' => strtoupper($this->input->post('designation')),
                        'status' => strtoupper($this->input->post('status')),

                        'position' => strtoupper($this->input->post('position')),

                        'empid' => $this->input->post('empid'),

                        'empdate' => $this->input->post('empdate'),
                        'lempdate' => $this->input->post('lempdate'),

                        'empsalary' => $this->input->post('empsalary'),
                        'empallowance' => $this->input->post('empallowance'),
                        'emptotal' => $this->input->post('emptotal'),
                    

                        //'emppic' => $emppic

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

    public function departments($id = false){

        if(isset($this->session->userid)){
               
               $page = "departments";
               if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
    
            $data['greet'] = "Hello, ";
            $data['logout'] = 'Logout';
            $data['list'] = 'List of Departments';
            $data['adddata'] = 'Add New Department'; 

            $data['designations'] = $this->DB_model->get_designations($id);//dept
            $data['tableemp'] = $this->DB_model->get_employees($id);
            $data['dept'] = $this->DB_model->get_department($id);


                
                //echo '<pre>'.print_r($data['designations']);die;
                //$data['login_user'] = 'User Login';
        
                $this->load->view('templates/header');
                //$this->load->view('templates/sidenav');
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer');

                }else{
            
           redirect(site_url(''));
        }
    }


            public function deptchart($id = false){

                if(isset($this->session->userid)){
                       
            $page = "deptchart";
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
             show_404();
         }

                     $data['greet'] = "Hello, ";
                     $data['logout'] = 'Logout';
                     $data['list'] = 'List of Departments';
                     $data['adddata'] = 'List of Employees';

                    $data['designations'] = $this->DB_model->get_designations($id);
                    $data['tableemp'] = $this->DB_model->get_employees($id); 
                    $data['dept'] = $this->DB_model->get_department($id);
                    //$data['catemp'] = $this->DB_model->get_categories($id);
             

                    $this->load->view('templates/header');
                    //$this->load->view('templates/sidenav');
                    $this->load->view('pages/'.$page, $data);
                    $this->load->view('templates/footer');

             }else{
                    
                   redirect(site_url(''));
                }
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
                    'deptname' => strtoupper($this->input->post('deptname')),
                    'deptstatus' => strtoupper($this->input->post('deptstatus'))                    
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

        public function positions($id = false){

            if(isset($this->session->userid)){
                       
            $page = "positions";
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
             show_404();
         }

         $data['greet'] = "Hello, ";
         $data['logout'] = 'Logout';
         $data['list'] = 'List of Positions';
         $data['adddata'] = 'Add New Position'; 


            $data['positions'] = $this->DB_model->get_positions($id);
            $data['tableemp'] = $this->DB_model->get_employees($id);
             $data['post'] = $this->DB_model->get_position($id); 
             
             //echo '<pre>'.print_r($data['designations']);die;
             //$data['login_user'] = 'User Login';

             $this->load->view('templates/header');
             //$this->load->view('templates/sidenav');
             $this->load->view('pages/'.$page, $data);
             $this->load->view('templates/footer');
             }else{
                
               redirect(site_url(''));
            }
        }

        public function postchart($id = false){

            if(isset($this->session->userid)){
                       
            $page = "postchart";
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
             show_404();
         }

         $data['greet'] = "Hello, ";
         $data['logout'] = 'Logout';
         $data['list'] = 'List of Positions';
         $data['adddata'] = 'List of Employees'; 


            $data['positions'] = $this->DB_model->get_positions($id);
            $data['tableemp'] = $this->DB_model->get_employees($id); 
            $data['post'] = $this->DB_model->get_position($id);
             
             //echo '<pre>'.print_r($data['designations']);die;
             //$data['login_user'] = 'User Login';

             $this->load->view('templates/header');
             //$this->load->view('templates/sidenav');
             $this->load->view('pages/'.$page, $data);
             $this->load->view('templates/footer');
             }else{
                        
                 redirect(site_url(''));
                }
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
                $this->session->set_flashdata('post_val_error',"Please fill up the required fields!");
                $this->session->keep_flashdata('post_val_error');
            }
            
            //echo validation_errors();
            //echo form_error('fname');
            
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

        $data['greet'] = "Hello, ";
        $data['logout'] = 'Logout';
        $data['list'] = 'List of Positions';
        if($id){
            $data['adddata'] = 'Edit Position Data';
        }else{
            $data['adddata'] = 'Add Position Data';
        }
        
        $data['post'] = $this->DB_model->get_position($id);
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
                'positionname' => strtoupper($this->input->post('postname')),
                'positionstatus' => strtoupper($this->input->post('poststatus'))                    
            );
            //echo '<pre>'.print_r($id);die;
            if(!$id){
                
                $result = $this->DB_model->insert_new_post($data);
                if($result){

                    $this->session->set_flashdata('post_add_success','New Position Added');
                    $this->session->keep_flashdata('post_add_success'); 
                    redirect(site_url('positions'));
                }
                else{
                    $this->session->set_flashdata('post_add_error','New Position not Added');
                    $this->session->keep_flashdata('post_add_error');
                    redirect(site_url('postadd'));
                }
            }
            else{
                
                $result = $this->DB_model->update_post($id,$data);
                
                if($result){

                    $this->session->set_flashdata('post_update_success','Position Data Updated');
                    $this->session->keep_flashdata('post_update_success');

                    redirect(site_url('positions'));
                }
                else{
                    $this->session->set_flashdata('post_update_error','Position Data not Updated');
                    $this->session->keep_flashdata('post_update_error');
                    redirect(site_url('postadd/').$id);
                }

            }
            
        }

    
    }else{
        
       redirect(site_url(''));
    }
}

public function systemusers(){

    if(isset($this->session->userid)){
               
    $page = "systemusers";
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
     show_404();
 }

 $data['greet'] = "Hello, ";
 $data['logout'] = 'Logout';
 $data['list'] = 'List of Users';
 $data['adddata'] = 'Add New User'; 

     $data['users'] = $this->DB_model->get_users();
     
     //echo '<pre>'.print_r($data['designations']);die;
     //$data['login_user'] = 'User Login';

     $this->load->view('templates/header');
     //$this->load->view('templates/sidenav');
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates/footer');
     }else{
        
       redirect(site_url(''));
    }
}

public function useradd($id = false){
            

    if(isset($this->session->userid)){
        

        //$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('empid','empid','required');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('confirm_password','confirm','required|matches[password]');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('userstatus','userstatus','required');
        //$this->form_validation->set_rules('salary','salary','required');
       
        if($this->form_validation->run() == FALSE){
            $page = "useradd";

            if(!empty(validation_errors())){
                $this->session->set_flashdata('user_val_error',"Please fill up the required fields!");
                $this->session->keep_flashdata('user_val_error');
            }
            
            //echo validation_errors();
            //echo form_error('fname');
            
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

        $data['greet'] = "Hello, ";
        $data['logout'] = 'Logout';
        $data['list'] = 'List of System Users';
        if($id){
            $data['adddata'] = 'Edit User Data';
        }else{
            $data['adddata'] = 'Add User Data';
        }
        
        $data['user'] = $this->DB_model->get_user_id($id);
        $data['employees'] = $this->DB_model->get_employees();
        $data['userid'] = $id;
        //$data['designations'] = $this->DB_model->get_designations();
        //$data['positions'] = $this->DB_model->get_positions();
        //echo '<pre>'.print_r($data['userid']);die;
        //$data['login_user'] = 'User Login';                                             .

        $this->load->view('templates/header');
        //$this->load->view('templates/sidenav');
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
           

        }else{
            //
           
            //echo '<pre>'.print_r($usercheck);die;
            
                $data = array(
                    'emp_id' => $this->input->post('empid'),
                    'username' => $this->input->post('username'),
                    'pword'  =>   $this->input->post('password'),
                    'status'  =>   $this->input->post('userstatus')                
                );
                //echo '<pre>'.print_r($id);die;
                if(!$id){
                    $usercheck = $this->DB_model->check_username($this->input->post('username'));
                    if(empty($usercheck)){
                        $result = $this->DB_model->insert_new_user($data);
                    
                        if($result){
        
                            $this->session->set_flashdata('user_add_success','New User Added');
                            $this->session->keep_flashdata('user_add_success');
        
                            redirect(site_url('systemusers'));
                        }
                        else{
                            $this->session->set_flashdata('user_add_error','New User not Added');
                            $this->session->keep_flashdata('user_add_error');
                            redirect(site_url('useradd'));
                        }

                    }
                    else{
                        //echo '<pre>'.print_r($id);die;
                        $this->session->set_flashdata('user_add_error','Username already exist');
                        $this->session->keep_flashdata('user_add_error');
                        redirect(site_url('useradd'));
                    }
                    
                    
                }
                else{
                    
                    $result = $this->DB_model->update_user($id,$data);
                    
                    if($result){
    
                        $this->session->set_flashdata('user_update_success','User Data Updated');
                        $this->session->keep_flashdata('user_update_success');
    
                        redirect(site_url('systemusers'));
                    }
                    else{
                        $this->session->set_flashdata('user_update_error','User Data not Updated');
                        $this->session->keep_flashdata('user_update_error');
                        redirect(site_url('useradd/').$id);
                    }
    
                }
        }

    
    }else{
        
       redirect(site_url(''));
    }
}

public function status($id = false){

    if(isset($this->session->userid)){
               
    $page = "status";
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
     show_404();
 }

 $data['greet'] = "Hello, ";
 $data['logout'] = 'Logout';
 $data['list'] = 'List of Status';
 $data['adddata'] = 'Add New Status'; 

     $data['status'] = $this->DB_model->get_status($id);
     $data['stats'] = $this->DB_model->get_status_id($id);
     $data['tableemp'] = $this->DB_model->get_employees($id);

     
     //echo '<pre>'.print_r($data['designations']);die;
     //$data['login_user'] = 'User Login';

     $this->load->view('templates/header');
     //$this->load->view('templates/sidenav');
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates/footer');

     }else{
        
       redirect(site_url(''));
    }
}

public function statchart($id = false){

    if(isset($this->session->userid)){
               
    $page = "statchart";
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
     show_404();
 }

 $data['greet'] = "Hello, ";
 $data['logout'] = 'Logout';
 $data['list'] = 'List of status';
 $data['adddata'] = 'List of Employees'; 

     $data['status'] = $this->DB_model->get_status($id);
     $data['tableemp'] = $this->DB_model->get_employees($id); 
     $data['stats'] = $this->DB_model->get_status_id($id);

     $this->load->view('templates/header');
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates/footer');

     }else{
        
       redirect(site_url(''));
    }
}


public function statadd($id = false){
            

    if(isset($this->session->userid)){
        

        $this->form_validation->set_rules('statname','statname','required');
        $this->form_validation->set_rules('statstatus','statstatus','required');

       
        if($this->form_validation->run() == FALSE){
            $page = "statadd";

            if(!empty(validation_errors())){
                $this->session->set_flashdata('stat_val_error',"Please fill up the required fields!");
                $this->session->keep_flashdata('stat_val_error');
            }
            
            //echo validation_errors();
            //echo form_error('fname');
            
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

        $data['greet'] = "Hello, ";
        $data['logout'] = 'Logout';
        $data['list'] = 'List of Employment Status';


        if($id){
            $data['adddata'] = 'Edit Status Data';
        }else{
            $data['adddata'] = 'Add Status Data';
        }
        
        $data['stat'] = $this->DB_model->get_status_id($id);


        $this->load->view('templates/header');

        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
           

        }else{
            //
           
            $data = array(
                'statusname' => strtoupper($this->input->post('statname')),
                'statusstatus' => strtoupper($this->input->post('statstatus'))                    
            );
            //echo '<pre>'.print_r($id);die;
            if(!$id){
                
                $result = $this->DB_model->insert_new_stat($data);
                if($result){

                    $this->session->set_flashdata('stat_add_success','New Status Added');
                    $this->session->keep_flashdata('stat_add_success');

                    redirect(site_url('status'));
                }
                else{
                    $this->session->set_flashdata('stat_add_error','New Status not Added');
                    $this->session->keep_flashdata('stat_add_error');
                    redirect(site_url('statadd'));
                }
            }
            else{
                
                $result = $this->DB_model->update_stat($id,$data);
                
                if($result){

                    $this->session->set_flashdata('stat_update_success','Status Data Updated');
                    $this->session->keep_flashdata('stat_update_success');

                    redirect(site_url('status'));
                }
                else{
                    $this->session->set_flashdata('stat_update_error','Status Data not Updated');
                    $this->session->keep_flashdata('stat_update_error');
                    redirect(site_url('statadd/').$id);
                }

            } 
    //
        }
    
        }else{
                
               redirect(site_url(''));
        }
}


//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
 public function stAccounting($id = false){

    if(isset($this->session->userid)){
               
    $page = "stAccounting";
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
     show_404();
 }

 $data['greet'] = "Hello, ";
 $data['logout'] = 'Logout';
 $data['list'] = 'List of Forms';
 $data['adddata'] = 'Add New Forms'; 

$data['get_all_forms'] = $this->DB_model->get_acctforms($id);
$data['id_forms'] = $this->DB_model-> get_acctforms_id($id);
//$data['getLatest'] = $this->DB_model->get_latest_acct_ot($id);

     $this->load->view('templates/header');
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates/footer');

     }else{
        
       redirect(site_url(''));
    }
}

public function stAcctChart($id = false){

    if(isset($this->session->userid)){
               
    $page = "stAcctChart";
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
     show_404();
 }

 $data['greet'] = "Hello, ";
 $data['logout'] = 'Logout';
 $data['list'] = 'List of status';
 $data['adddata'] = 'List of Employees'; 

     $data['active_form'] = $this->DB_model->get_acctforms_active();

     $this->load->view('templates/header');
     $this->load->view('pages/'.$page, $data);
     $this->load->view('templates/footer');

     }else{
        
       redirect(site_url(''));
    }
}




public function stAcctADD($id = false){
            

    if(isset($this->session->userid)){
        

        $this->form_validation->set_rules('formsname','formsname','required');
        $this->form_validation->set_rules('formstat','formstat','required');

       
        if($this->form_validation->run() == FALSE){
            $page = "stAcctADD";

            if(!empty(validation_errors())){
                $this->session->set_flashdata('stat_val_error',"Please fill up the required fields!");
                $this->session->keep_flashdata('stat_val_error');
            }
            
            //echo validation_errors();
            //echo form_error('fname');
            
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

        $data['greet'] = "Hello, ";
        $data['logout'] = 'Logout';
        $data['list'] = 'List of Forms';


        if($id){
            $data['adddata'] = 'Edit Forms Data';
        }else{
            $data['adddata'] = 'Add Forms Data';
        }
        
        $data['forms_id'] = $this->DB_model->get_acctforms_id($id);


        $this->load->view('templates/header');

        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer');
           

        }else{
            //
           
            $data = array(
                'acct_forms' => strtoupper($this->input->post('formsname')),
                'forms_stats' => strtoupper($this->input->post('formstat'))                    
            );
            //echo '<pre>'.print_r($id);die;
            if(!$id){
                
                $result = $this->DB_model->insert_new_acctforms($data);
                if($result){

                    $this->session->set_flashdata('stat_add_success','New Forms Added');
                    $this->session->keep_flashdata('stat_add_success');

                    redirect(site_url('stAccounting'));
                }
                else{
                    $this->session->set_flashdata('stat_add_error','New Forms not Added');
                    $this->session->keep_flashdata('stat_add_error');
                    redirect(site_url('stAcctADD'));
                }
            }
            else{
                
                $result = $this->DB_model->update_acctforms($id,$data);
                
                if($result){

                    $this->session->set_flashdata('stat_update_success','Forms Data Updated');
                    $this->session->keep_flashdata('stat_update_success');

                    redirect(site_url('stAccounting'));
                }
                else{
                    $this->session->set_flashdata('stat_update_error','Forms Data not Updated');
                    $this->session->keep_flashdata('stat_update_error');
                    redirect(site_url('stAcctADD/').$id);
                }

            } 
    //
        }
    
        }else{
                
               redirect(site_url(''));
        }
}

//@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@



    public function logout(){
        //$userdata = array();
        $userdata = array_keys($this->session->userdata());
        
        $this->session->unset_userdata($userdata);
        $this->session->set_flashdata('logout_success','Succesfully Logout!');
        $this->session->keep_flashdata('logout_success');
        
        redirect(site_url());
    }
    public function addevent(){
        //$userdata = array();
        if(isset($_POST)){
            $data = array(
                'title' => $_POST['title'],
                'start' => $_POST['start'],
                'end' => $_POST['end']
            );

            return $this->DB_model->add_event($data);

        }
        else{
            show_404();
        }
        
        
    }
    public function editevent(){
        //$userdata = array();
        if(isset($_POST)){
            $data = array(
                'title' => $_POST['title'],
                'start' => $_POST['start'],
                'end' => $_POST['end']
            );
            $id =  $_POST['id'];
            return $this->DB_model->edit_event($id,$data);

        }
        else{
            show_404();
        }
        
        
    }
    public function deleteevent(){
        //$userdata = array();
        if(isset($_POST)){
            
            $id =  $_POST['id'];
            $this->DB_model->delete_event($id);
            echo 1;

        }
        else{
            show_404();
        }
        
        
    }

}
