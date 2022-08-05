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
                           
                            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                HR Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse show in" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo site_url('employees'); ?>" active>Employees</a>
                                    <a class="nav-link" href="<?php echo site_url('departments'); ?>">Departments/Stores</a>
                                    <a class="nav-link" href="<?php echo site_url('positions'); ?>">Positions</a>
                                    <a class="nav-link" href="<?php echo site_url('status'); ?>">Employment Status</a>
                                    <a class="nav-link" href="<?php echo site_url('userroles'); ?>">User Roles</a>
                                    <a class="nav-link" href="<?php echo site_url('useraccounts'); ?>">System User Accounts</a>
                                </nav>
                            </div>
                            
                            
                    
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $adddata; ?></h1>
                        <ul class="breadcrumb">
                        <li><a href="<?php echo site_url('employees')?>">Employees</a></li>
                        <li><a href="#"><?= $adddata; ?></a></li>
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
                                    <input type="text" class="form-control" name="fname" id="fname" autocomplete="off" value="<?= (!empty($emp->fname)) ? $emp->fname:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="mname"><strong>Middle Name:</strong></label>
                                    <input type="text" class="form-control" name="mname" id="mname"  value="<?= (!empty($emp->mname)) ? $emp->mname:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="lname"><strong>Last Name:<span style="color: red;">*</span></strong></label>
                                    <input type="text" class="form-control" name="lname" id="lname"  value="<?= (!empty($emp->lname)) ? $emp->lname:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="email"><strong>Email Address:</strong></label>
                                    <input type="email" class="form-control" name="email" id="email"  value="<?= (!empty($emp->email)) ? $emp->email:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="gender"><strong>Gender:<span style="color: red;">*</span></strong></label>
                                        <select name="gender" id="gender" class="form-control">
                                        <option value="hidden">Select Gender</option>
                                        <?php if(!empty($emp->gender)){?>
                                            <option value="M" <?php echo ($emp->gender == "M") ? "selected":"" ;?>>Male</option>
                                            <option value="F"<?php echo ($emp->gender == "F") ? "selected":"" ;?>>Female</option>
                                        <?php }else{?>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                        <?php }?>
                                        
                                        
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="bday"><strong>Date of Birth:<span style="color: red;">*</span></strong></label>
                                    <input type="date" class="form-control" name="bday" id="bday" value="<?= (!empty($emp->bday)) ? $emp->bday:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="age"><strong>Age:<span style="color: red;">*</span></strong></label>
                                    <input type="number" class="form-control" name="age" id="age" value="<?= (!empty($emp->age)) ? $emp->age:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="contact"><strong>Contact Number:<span style="color: red;">*</span></strong></label>
                                    <input type="text" class="form-control" name="contact" id="contact" value="<?= (!empty($emp->contact)) ? $emp->contact:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="address"><strong>Address:<span style="color: red;">*</span></strong></label>
                                    <input type="text" class="form-control" name="address" id="address" value="<?= (!empty($emp->address)) ? $emp->address:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="ename"><strong>Emergency Contact Name:</strong></label>
                                    <input type="text" class="form-control" name="ename" id="ename" value="<?= (!empty($emp->ename)) ? $emp->ename:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="econtact"><strong>Emergency Contact Number:</strong></label>
                                    <input type="text" class="form-control" name="econtact" id="econtact" value="<?= (!empty($emp->econtact)) ? $emp->econtact:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="eadd"><strong>Emergency Contact Address:</strong></label>
                                    <input type="text" class="form-control" name="eadd" id="eadd" value="<?= (!empty($emp->eadd)) ? $emp->eadd:''; ?>">
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <label for="empno"><strong>Employee Number:</strong></label>
                                    <input type="text" class="form-control" name="empno" id="empno" value="<?= (!empty($emp->empno)) ? $emp->empno:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="empid"><strong>Emplyee ID Number:</strong></label>
                                    <input type="text" class="form-control" name="empid" id="empid" value="<?= (!empty($emp->empid)) ? $emp->empid:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="designation"><strong>Department/Store:<span style="color: red;">*</span></strong></label>
                                        <select name="designation" id="designation" class="form-control">
                                        <option value="hidden">Select Department/Store</option>
                                        <?php if(!empty($designations)){?>
                                        <?php foreach($designations as $row){?>
                                        <option value="<?php echo $row->id; ?>" <?php if(!empty($emp->designation)) {echo ($emp->designation == $row->id) ? "selected":"" ; }?>><?php echo $row->deptname; ?></option>
                                        <?php }?>
                                        <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="position"><strong>Position:<span style="color: red;">*</span></strong></label>
                                        <select name="position" id="position" class="form-control">
                                        <option value="hidden">Select Position</option>
                                        <?php if(!empty($positions)){?>
                                        <?php foreach($positions as $row){?>
                                        <option value="<?php echo $row->id; ?>" <?php if(!empty($emp->position)){echo ($emp->position == $row->id) ? "selected":"" ;} ?>><?php echo $row->positionname; ?></option>
                                        <?php }?>
                                        <?php }?>
                                        </select>
                                    </div>                                    
                                    <div class="form-group">
                                    <label for="empdate"><strong>Start Date of Employment:<span style="color: red;">*</span></strong></label>
                                    <input type="date" class="form-control" name="empdate" id="empdate" value="<?= (!empty($emp->empdate)) ? $emp->empdate:''; ?>">
                                    </div>
                                    <!--<div class="form-group">
                                    <label for="salary"><strong>Salary:<span style="color: red;">*</span></strong></label>
                                    <input type="number" class="form-control" name="salary" id="salary" value=" //$emp->salary; ">
                                    </div>-->
                                    <div class="form-group">
                                    <label for="status"><strong>Employment Status:<span style="color: red;">*</span></strong></label>
                                        <select name="status" id="status" class="form-control">
                                        <option value="hidden">Select Status</option>
                                        <?php if(!empty($emp->status)){?>
                                            <option value="Probitionary" <?php echo ($emp->status == "Probationary") ? "selected":"" ;?>>Probationary</option>
                                            <option value="Regular" <?php echo ($emp->status == "Regular") ? "selected":"" ;?>>Regular</option>
                                            <option value="Resigned" <?php echo ($emp->status == "Resigned") ? "selected":"" ;?>>Resigned</option>
                                            <option value="AWOL" <?php echo ($emp->status == "AWOL") ? "selected":"" ;?>>AWOL</option>
                                        <?php }else{?>
                                            <option value="Probitionary">Probationary</option>
                                            <option value="Regular" >Regular</option>
                                            <option value="Resigned">Resigned</option>
                                            <option value="AWOL">AWOL</option>
                                        <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="lempdate"><strong>Last Date of Employment:</strong></label>
                                    <input type="date" class="form-control" name="lempdate" id="lempdate" value="<?= (!empty($emp->lempdate)) ? $emp->lempdate:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="sss"><strong>SSS Number:</strong></label>
                                    <input type="text" class="form-control" name="sss" id="sss" value="<?= (!empty($emp->sss)) ? $emp->sss:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="tin"><strong>Tin Number:</strong></label>
                                    <input type="text" class="form-control" name="tin" id="tin" value="<?= (!empty($emp->tin)) ? $emp->tin:''; ?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="philhealth"><strong>PhilHealth:</strong></label>
                                    <input type="text" class="form-control" name="philhealth" id="philhealth" value="<?= (!empty($emp->philhealth)) ? $emp->philhealth:''; ?>">
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
 <script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
		$("#wizard-picture").change(function(){
			
        	readURL(this);
    	});
		
		function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			var pic = '<?php echo $emp->emppic; ?>';
			alert(pic);
			reader.onload = function (e) {
				
				$('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
			}
			reader.readAsDataURL(input.files[0]);
		}	
		}
	});
	
</script>
        


