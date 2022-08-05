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
                            <div class="reservation">
					  	<div class="reservation-grids">
						  <div class="picture-container">
								<div class="picture">
									<img src="<?php echo base_url().'assets/admin/uploads/profilepics/';  ?>" class="picture-src" id="wizardPicturePreview" title="">
									<input type="file" id="wizard-picture" name ="profilepic" class="">
									<input type="hidden" name="old_profilepic" value="">
								</div>
								<h6 class="">Choose a Picture</h6><br>

							</div>
							<div class="clearfix"> </div>
							<div class="clearfix"> </div> 
            			</div>
                        <div class="reservation-grids">
            				<div class="reservation-grid-left">
            					<div class="keywords">
           							<?php
									   $data	= array('name'=>'firstname', 'placeholder'=>lang('firstname'), 'value'=>set_value('firstname', ''));
									   echo form_input($data); 
                                    ?>	
            					</div>
            				</div>
            				<div class="reservation-grid-right">
            					<div class="keywords">
           							<?php
									   $data	= array('name'=>'lastname', 'placeholder'=>lang('lastname'), 'value'=>set_value('lastname', ''));
									   echo form_input($data); 
                                    ?>	
            					</div>
            				</div>
            				<div class="clearfix"> </div>
            			</div>
            			<div class="reservation-grids">
            				<div class="reservation-grid-left">
            					<div class="section_room">
            						<select name="gender" id="country2" class="frm-field required">
                                        <option hidden="hidden"><?php echo lang('gender') ?></option>
            							<option value="M" <?php echo ($gender==1)?'selected="selected"':'' ?> >Male</option>
										<option value="F" <?php echo ($gender==2)?'selected="selected"':'' ?> >Female</option>
            						</select>
            					</div>
            				</div>
            				<div class="reservation-grid-right">
            					<div class="keywords">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
           							<?php
									$data	= array('name'=>'dob', 'placeholder'=>lang('dob'), 'value'=>set_value('dob', ''), 'class'=>'datepicker','autocomplete'=>'off');
									echo form_input($data); ?>
            					</div>
            				</div>
            				<div class="clearfix"> </div>
            			</div>
                        <div class="reservation-grids">
            				<div class="reservation-grid-left">
            					<div class="keywords">
           							<?php
									$data	= array('name'=>'email','placeholder'=>lang('email'), 'value'=>set_value('email', ''));
									echo form_input($data); ?>
									<input type="hidden" name="old_email" value="" />
            					</div>
            				</div>
            				<div class="reservation-grid-right">
            					<div class="keywords">
           							<?php
									$data	= array('name'=>'mobile', 'placeholder'=>lang('mobile'), 'value'=>set_value('mobile', ''));
									echo form_input($data); ?>
            					</div>
            				</div>
            				<div class="clearfix"> </div>
            			</div>
                        <div class="reservation-grids">
            				<div class="reservation-grid-left">
            					<div class="keywords">
           							<?php
									$data	= array('name'=>'password', 'placeholder'=>lang('password'), 'value'=>set_value('password', ''));
									echo form_password($data); ?>
            					</div>
            				</div>
            				<div class="reservation-grid-right">
            					<div class="keywords">
           							<?php
									$data	= array('name'=>'confirm', 'placeholder'=>lang('password_confirm'), 'value'=>set_value('confirm_password'));
									echo form_password($data); 
                                    ?>
            					</div>
            				</div>
            				<div class="clearfix"> </div>
            			</div>
                        <div class="reservation-grids">
            				<div class="reservation-grid-left">
            					<div class="section_room">
            						<select name="country_id" id="country_id"  class="dropdown frm-field required">
                                        <option hidden="hidden"><?php echo lang('country') ?></option>
            							<?php foreach($countries as $cn){?>
										  <option value="<?php echo $cn->id?>" <?php echo ($country_id==$cn->id)?'selected="selected"':'' ?> ><?php echo $cn->name?></option>
                                        <?php } ?>
            						</select>
            					</div>
            				</div>
            				<div class="reservation-grid-right">
            					<div class="section_room">
            						<select name="region_id" id="region_id" onchange="change_country(this.value)" class="dropdown frm-field required">
                                        <option hidden="hidden"><?php echo lang('region') ?></option>
            							<?php 
    										if(!empty($country_id)){
    											$states		=	$this->location_model->get_zones($country_id);
    											foreach($states as $st){?>
    										<option value="<?php echo $st->id?>" <?php echo ($state_id==$st->id)?'selected="selected"':'' ?> ><?php echo $st->name?></option>
    									<?php 	} 
    										}
    									?>
            						</select>
            					</div>
            				</div>
            				<div class="clearfix"> </div>
            			</div>
                        
                        
                        <div class="reservation-grids" style="margin-top: 15px;">
            				<div class="reservation-grid-left">
            					<div class="section_room keywords">
            						<select name="city_id" id="city_id" onchange="change_country(this.value)" class="dropdown frm-field required">
                                        <option hidden="hidden"><?php echo lang('city') ?></option>
            							<?php 
										if(!empty($state_id)){
											$cities		=	$this->location_model->get_zone_areas($state_id);
											foreach($cities as $ct){?>
										<option value="<?php echo $ct->id?>" <?php echo ($city_id==$ct->id)?'selected="selected"':'' ?> ><?php echo $ct->name?></option>
    									<?php 	} 
    										}
    									?>
            						</select>
            					</div>
            				</div>
            				<div class="reservation-grid-right">
                                <div class="keywords">
           							<?php
									$data	= array('name'=>'address','placeholder'=>lang('address'), 'value'=>set_value('address', $address));
									echo form_input($data); ?>
            					</div>
            				</div>
            				<div class="clearfix"> </div>
            			</div>
                        
                        
                        <div class="reservation-grids">
            				<div class="reservation-grid-left">
            					<div class="section_room">
            						<select name="id_type" id="id_type" onchange="change_country(this.value)" class="dropdown frm-field required">
                                        <option hidden="hidden"><?php echo lang('select_id_type') ?></option>
            							<option value="Passport" <?php echo ($id_type=="Passport")?'selected="selected"':'' ?> >Passport</option>
									    <option value="Driving License" <?php echo ($id_type=="Driving License")?'selected="selected"':'' ?> >Driving License</option>
									    <option value="Adhar Card" <?php echo ($id_type=="Adhar Card")?'selected="selected"':'' ?> >Adhar Card</option>
            						</select>
            					</div>
            				</div>
            				<div class="reservation-grid-right">
                                <div class="keywords">
           							<?php
									$data	= array('name'=>'id_no','placeholder'=>lang('id_no'), 'value'=>set_value('id_no', $id_no));
									echo form_input($data); ?>
            					</div>
            				</div>
            				<div class="clearfix"> </div>
            			</div>
                        
                        
                        <div class="reservation-grids">
            				<div class="reservation-grid-left">
            					<div class="keywords">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="file" name="id_upload"  />
    								        <input type="hidden" name="old_id" value="<?php echo $id_upload?>" />
                                        </div>
                                        <div class="col-md-6">
                                            <?php if(!empty($id_upload)){?>
        									   <a href="<?php echo base_url('assets/admin/uploads/ids/'.$id_upload)?>" class="btn btn-default" download><?php echo lang('download')?></a>
        									<?php } ?>
                                        </div>
                                    </div>
            					</div>
            				</div>
            				<div class="reservation-grid-right">
                                <div class="keywords">
           							<?php
									$data	= array('name'=>'remark','placeholder'=>lang('remark'), 'value'=>set_value('remark', $remark));
									echo form_input($data); ?>
            					</div>
            				</div>
            				<div class="clearfix"> </div>
            			</div>
                        
            			<div class="keywords">	
				   	         <input type="submit" value="<?php echo lang('update')?>"/>
            			</div>
            		</div>
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

        


