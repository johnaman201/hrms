<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo site_url('dashboard');?>"><?= $greet; ?><?php echo ' '.$this->session->firstname?></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo site_url('logout'); ?>"><?= $logout; ?></a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           
                            <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                           
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                HR/Payroll
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse show in" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link active" href="<?php echo site_url('employees'); ?>">Employees</a>
                                    <a class="nav-link" href="<?php echo site_url('department'); ?>">Departments/Stores</a>
                                    <a class="nav-link" href="<?php echo site_url('benefits'); ?>">Benefits</a>
                                    <a class="nav-link" href="<?php echo site_url('dataentry'); ?>">Data Entries</a>
                                    <a class="nav-link" href="<?php echo site_url('payslip'); ?>">Payslip</a>
                                    <a class="nav-link" href="<?php echo site_url('attendance'); ?>">Attendance</a>
                                </nav>
                            </div>
                            
                            
                    
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Add New Employee</h1>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Fill up the Fields
                                
                            </div>
                            <div class="card-body">
                            
					  	
						  <div class="picture-container">
								<div class="picture">
									<img src="<?php echo base_url().'assets/admin/images/profilepics/';  ?>" class="picture-src" id="wizardPicturePreview" title="">
									<input type="file" id="wizard-picture" name ="profilepic" class="">
									<input type="hidden" name="old_profilepic" value="">
								</div>
								<h6 class="">Choose a Picture</h6><br>

							</div>
							
            			    
                        
            				
            					
           							<?php
									   $data	= array('name'=>'firstname', 'placeholder'=>'firstname', 'value'=>set_value('firstname', ''));
									   echo form_input($data); 
                                    ?>	
            					
            				
            				
           							<?php
									   $data	= array('name'=>'lastname', 'placeholder'=>'lastname', 'value'=>set_value('lastname', ''));
									   echo form_input($data); 
                                    ?>	
            				
            			
            			
            						<select name="gender" id="country2" class="frm-field required">
                                        <option hidden="hidden"><?php //echo lang('gender') ?></option>
            							<option value="M" <?php //echo ($gender==1)?'selected="selected"':'' ?> >Male</option>
										<option value="F" <?php //echo ($gender==2)?'selected="selected"':'' ?> >Female</option>
            						</select>
            				
            				
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
           							<?php
									$data	= array('name'=>'dob', 'placeholder'=>'dob', 'value'=>set_value('dob', ''), 'class'=>'datepicker','autocomplete'=>'off');
									echo form_input($data); ?>
            					
                       
            				
           							<?php
									$data	= array('name'=>'email','placeholder'=>'email', 'value'=>set_value('email', ''));
									echo form_input($data); ?>
									<input type="hidden" name="old_email" value="" />
            				
            				
           							<?php
									$data	= array('name'=>'mobile', 'placeholder'=>'mobile', 'value'=>set_value('mobile', ''));
									echo form_input($data); ?>
            					
            			
                        
            				
           							<?php
									$data	= array('name'=>'password', 'placeholder'=>'password', 'value'=>set_value('password', ''));
									echo form_password($data); ?>
            					
            				
           							<?php
									$data	= array('name'=>'confirm', 'placeholder'=>'password_confirm', 'value'=>set_value('confirm_password'));
									echo form_password($data); 
                                    ?>
            					
            		
                       
            				
            						<select name="country_id" id="country_id"  class="dropdown frm-field required">
                                        <option hidden="hidden"><?php //echo lang('country') ?></option>
            							
										  <option value="<?php //echo $cn->id?>" <?php //echo ($country_id==$cn->id)?'selected="selected"':'' ?> ><?php ?></option>
                                        
            					
            				
            						<select name="region_id" id="region_id"  class="dropdown frm-field required">
                                        <option hidden="hidden"><?php //echo lang('region') ?></option>
            							
    										<option value="<?php //echo $st->id?>" <?php //echo ($state_id==$st->id)?'selected="selected"':'' ?> ><?php //echo $st->name?></option>
    									
            						</select>
            				
            	
                        
                        
                        
            				
            						<select name="city_id" id="city_id"  class="dropdown frm-field required">
                                        <option hidden="hidden"><?php //echo lang('city') ?></option>
            							
										<option value="<?php //echo $ct->id?>" <?php //echo ($city_id==$ct->id)?'selected="selected"':'' ?> ><?php //echo $ct->name?></option>
    									
            						</select>
            					
            				
           							<?php
									$data	= array('name'=>'address','placeholder'=>'address', 'value'=>set_value('address', ''));
									echo form_input($data); ?>
            					
            			
                        
                        
                        
            				
            						<select name="id_type" id="id_type"  class="dropdown frm-field required">
                                        <option hidden="hidden"><?php //echo lang('select_id_type') ?></option>
            							<option value="Passport" <?php //echo ($id_type=="Passport")?'selected="selected"':'' ?> >Passport</option>
									    <option value="Driving License" <?php //echo ($id_type=="Driving License")?'selected="selected"':'' ?> >Driving License</option>
									    <option value="Adhar Card" <?php //echo ($id_type=="Adhar Card")?'selected="selected"':'' ?> >Adhar Card</option>
            						</select>
            				
            				
           							<?php
									$data	= array('name'=>'id_no','placeholder'=>'id_no', 'value'=>set_value('id_no', ''));
									echo form_input($data); ?>
            					
            			
                        
                        
                        
            				
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="file" name="id_upload"  />
    								        <input type="hidden" name="old_id" value="<?php //echo $id_upload?>" />
                                        </div>
                                        <div class="col-md-6">
                                            
        									   <a href="<?php //echo base_url('assets/admin/uploads/ids/')?>" class="btn btn-default" download><?php //echo lang('download')?>Download</a>
        									
                                        </div>
                                    </div>
            					
            				
           							<?php
									$data	= array('name'=>'remark','placeholder'=>'remark', 'value'=>set_value('remark', ''));
									echo form_input($data); ?>
            					
                        
            			
				   	         <input type="submit" value="<?php //echo lang('update')?>"/>
            			
            		
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        


