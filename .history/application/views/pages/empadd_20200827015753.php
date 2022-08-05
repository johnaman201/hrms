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
                        <h1 class="mt-4"><?= $addemp; ?></h1>
                        <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('employees')?>">Employees</a></li>
                        <li><a href="#"><?= $addemp; ?></a></li>
                        </ul>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Fill up the Fields
                                
                            </div>
                            <div class="card-body">
                            <?= form_open('empadd');?>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4"><div class="picture-container">
								<div class="picture">
									<img src="<?php echo base_url().'assets/admin/images/profilepics/';  ?>" class="picture-src" id="wizardPicturePreview" title="">
									<input type="file" id="wizard-picture" name ="profilepic" class="">
									<input type="hidden" name="old_profilepic" value="">
								</div>
								<h6 class="">Choose a Picture</h6><br>

							</div></div>
                                <div class="col-md-4"></div>
                            </div>
						  
							<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="fname"><strong>First Name:<span style="color: red;">*</span></strong></label>
                                    <input type="text" class="form-control" name="fname" id="fname" autocomplete="off" value="<?= $emp->fname; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="mname"><strong>Middle Name:</strong></label>
                                    <input type="text" class="form-control" name="mname" id="mname"  value="<?= $emp->mname; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="lname"><strong>Last Name:<span style="color: red;">*</span></strong></label>
                                    <input type="text" class="form-control" name="lname" id="lname"  value="<?= $emp->lname; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="email"><strong>Email Address:</strong></label>
                                    <input type="email" class="form-control" name="email" id="email"  value="<?= $emp->email; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="gender"><strong>Gender:<span style="color: red;">*</span></strong></label>
                                        <select name="gender" id="gender" class="form-control">
                                        <option value="hidden">Select Gender</option>
                                        <option value="M" <?php echo ($emp->gender == "M") ? "selected":"" ;?>>Male</option>
                                        <option value="F"<?php echo ($emp->gender == "F") ? "selected":"" ;?>>Female</option>
                                        
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="bday"><strong>Date of Birth:<span style="color: red;">*</span></strong></label>
                                    <input type="date" class="form-control" name="bday" id="bday" value="<?= $emp->bday; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="age"><strong>Age:<span style="color: red;">*</span></strong></label>
                                    <input type="number" class="form-control" name="age" id="age" value="<?= $emp->age; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="contact"><strong>Contact Number:<span style="color: red;">*</span></strong></label>
                                    <input type="text" class="form-control" name="contact" id="contact" value="<?= $emp->contact; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="address"><strong>Address:<span style="color: red;">*</span></strong></label>
                                    <input type="text" class="form-control" name="address" id="address" value="<?= $emp->address; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="ename"><strong>Emergency Contact Name:</strong></label>
                                    <input type="text" class="form-control" name="ename" id="ename" value="<?= $emp->ename; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="econtact"><strong>Emergency Contact Number:</strong></label>
                                    <input type="text" class="form-control" name="econtact" id="econtact" value="<?= $emp->econtact; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="eadd"><strong>Emergency Contact Address:</strong></label>
                                    <input type="text" class="form-control" name="eadd" id="eadd" value="<?= $emp->eadd; ?>">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="empno"><strong>Employee Number:</strong></label>
                                    <input type="text" class="form-control" name="empno" id="empno" value="<?= $emp->empno; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="empid"><strong>Emplyee ID Number:</strong></label>
                                    <input type="text" class="form-control" name="empid" id="empid" value="<?= $emp->empid; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="position"><strong>Position:<span style="color: red;">*</span></strong></label>
                                        <select name="position" id="position" class="form-control">
                                        <option value="hidden">Select Position</option>
                                        <option value="IT">IT</option>
                                        <option value="HR">HR</option>
                                        <option value="Purchaser">Purchaser</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="designation"><strong>Department/Store:<span style="color: red;">*</span></strong></label>
                                        <select name="designation" id="designation" class="form-control">
                                        <option value="hidden">Select Department/Store</option>
                                        <option value="IT">IT</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Accounting">Accounting</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="empdate"><strong>Start Date of Employment:<span style="color: red;">*</span></strong></label>
                                    <input type="date" class="form-control" name="empdate" id="empdate">
                                    </div>
                                    <div class="form-group">
                                    <label for="salary"><strong>Salary:<span style="color: red;">*</span></strong></label>
                                    <input type="number" class="form-control" name="salary" id="salary">
                                    </div>
                                    <div class="form-group">
                                    <label for="status"><strong>Employment Status:<span style="color: red;">*</span></strong></label>
                                        <select name="status" id="status" class="form-control">
                                        <option value="hidden">Select Status</option>
                                        <option value="Probitionary">Probitionary</option>
                                        <option value="Regular">Regular</option>
                                        <option value="Resigned">Resigned</option>
                                        <option value="AWOL">AWOL</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="lempdate"><strong>Last Date of Employment:</strong></label>
                                    <input type="date" class="form-control" name="lempdate" id="lempdate">
                                    </div>
                                    <div class="form-group">
                                    <label for="sss"><strong>SSS Number:</strong></label>
                                    <input type="text" class="form-control" name="sss" id="sss">
                                    </div>
                                    <div class="form-group">
                                    <label for="tin"><strong>Tin Number:</strong></label>
                                    <input type="text" class="form-control" name="tin" id="tin">
                                    </div>
                                    <div class="form-group">
                                    <label for="philhealth"><strong>PhilHealth:</strong></label>
                                    <input type="text" class="form-control" name="philhealth" id="philhealth">
                                    </div>
                                </div>
                            </div>
            			    
            					
                        
            			
				   	         <input type="submit" class="btn btn-primary pull-right" value="Save Data"/>
            			
            		
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

        


