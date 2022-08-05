<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo site_url('dashboard');?>"><?= $greet; ?><?php echo ' '.$this->session->firstname?></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo (!empty($this->session->emppic)) ? "<img src='".$this->session->emppic."' width='50' height='50'>":"<i class='fas fa-user fa-fw'></i>" ;?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="<?php echo site_url('employees');?>">Employees</a>
                        <a class="dropdown-item" href="<?php echo site_url('departments');?>">Departments/Stores</a>
                        <a class="dropdown-item" href="<?php echo site_url('positions');?>">Positions</a>
                        <a class="dropdown-item" href="<?php echo site_url('status');?>">Employement Status</a>
                        <a class="dropdown-item" href="<?php echo site_url('systemusers');?>">System User Accounts</a>
                        <a class="dropdown-item" href="#" id="help">Help</a>
                        
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
                                    <a class="nav-link active" href="<?php echo site_url('employees'); ?>" style="font-size: 14px;"><i class="far fa-address-card" style="margin-right:5px;"></i>Employees</a>

                                    <a class="nav-link " href="<?php echo site_url('departments'); ?>" style="font-size: 14px;"><i class="fas fa-building" style="margin-right:5px;"></i>Departments/Stores</a>

                                    <a class="nav-link" href="<?php echo site_url('positions'); ?>" style="font-size: 14px;"><i class="fas fa-address-book" style="margin-right:5px;"></i>Positions</a>

                                    <a class="nav-link" href="<?php echo site_url('status'); ?>" style="font-size: 14px;"><i class="far fa-id-card" style="margin-right:5px;"></i>Status</a>

                                    <a class="nav-link" href="<?php echo site_url('systemusers'); ?>" style="font-size: 14px;"><i class="fas fa-user-secret" style="margin-right:5px;"></i> User Accounts</a>
                                </nav>
                            </div>

                            <!--<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsesLayouts" aria-expanded="false" aria-controls="collapsesLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-download"></i></div>
                                Lucena Forms
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>-->

                            <div class="collapse" id="collapsesLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">

                                    <a class="nav-link" href="<?php echo site_url('stAccounting'); ?>" style="font-size: 14px;"><i class="fas fa-clipboard-check" style="margin-right:5px;"></i>Accounting</a>

                                   

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
                                <?= validation_errors();?>
                            <?= form_open_multipart(empty($emp->id) ? "empadd":"empadd/".$emp->id) ?>
                            <!--<div class="row">
                                <div class="col-md-4"> 
                                </div>
                                <div class="col-md-4">
                                <div class="picture-container">
								<div class="picture">
									<img src="<?php echo (!empty($emp->emppic)) ? base_url().'assets/admin/images/emppics/'.$emp->emppic:base_url().'assets/admin/images/emppics/default.png' ;  ?>" class="picture-src" id="wizardPicturePreview" title="">
									<input type="file" id="wizard-picture" name ="emppic" class="">
									<input type="hidden" name="old_emppic" value="<?= (!empty($emp->emppic)) ? $emp->emppic:''; ?>">
								</div>
								<h6 class="">Choose a Picture</h6><br>

							</div>
                            </div>
                            </div>-->
						  
<!-- PERSONAL INFO @@@@@@@@@@@@@@@@@@@@@@@@@ -->
                                
                    <div  class="card bg-light mb-5 mx-auto mt-5" >
                        
                            <div class="card-header" style="font-weight: bold;">I. PERSONAL INFORMATION</div>
                                
                        <div class="row">

                                    <div class="col-sm-4 ml-5 mt-3">
                                        <div class="form-group">

                                            <label for="fname"><strong>First Name:<span style="color: red;"> </span></strong></label>
                                                <input type="text" class="form-control" name="fname" id="fname" autocomplete="off" value="<?= (!empty($emp->fname)) ? $emp->fname:''; ?>" required>
            
                                        </div>
                                    </div>

                                    <div class="col-sm-3 mt-3">
                                        <div class="form-group">
                                            <label for="mname"><strong>Middle Name:</strong></label>
                                                <input type="text" class="form-control" name="mname" id="mname" autocomplete="off"  value="<?= (!empty($emp->mname)) ? $emp->mname:''; ?>">
                                        </div>
                                    </div>


                                   <div class="col-sm-4  mt-3">
                                        <div class="form-group">
                                            <label for="lname"><strong>Last Name:</strong></label>
                                                <input type="text" class="form-control" name="lname" id="lname" autocomplete="off"  value="<?= (!empty($emp->lname)) ? $emp->lname:''; ?>"required>
                                         </div>  
                                    </div>

                                    <div class="col-sm-2 ml-5">
                                        <div class="form-group">
                                            <label for="gender"><strong>Gender:<span style="color: red;"> </span></strong></label>
                                                <select name="gender" id="gender" class="form-control" required>
                                                <option value="">Select Gender</option>
                                                <?php if(!empty($emp->gender)){?>
                                                    <option value="MALE" <?php echo ($emp->gender == "MALE") ? "selected":"" ;?>>Male</option>
                                                    <option value="FEMALE"<?php echo ($emp->gender == "FEMALE") ? "selected":"" ;?>>Female</option>
                                                <?php }else{?>
                                                    <option value="MALE">Male</option>
                                                    <option value="FEMALE">Female</option>
                                                <?php }?>                                       
                                                </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label for="age"><strong>Age:<span style="color: red;"> </span></strong></label>
                                            <input type="text" onkeypress="validate(event)" class="form-control" name="age" id="age" autocomplete="off" value="<?= (!empty($emp->age)) ? $emp->age:''; ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-3 ">
                                        <div class="form-group">
                                            <label for="bday"><strong>Date of Birth:<span style="color: red;"> </span></strong></label>
                                            <input type="date" class="form-control" placeholder="mm-dd-yyyy" name="bday" id="bday" autocomplete="off" value="<?= (!empty($emp->bday)) ? $emp->bday:''; ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-5 ">
                                        <div class="form-group">
                                            <label for="bplace"><strong>Birth of Place:<span style="color: red;"> </span></strong></label>
                                            <input type="text" class="form-control" name="bplace" id="bplace" autocomplete="off" value="<?= (!empty($emp->bplace)) ? $emp->bplace:''; ?>">
                                        </div>
                                    </div>

                                     <div class="col-sm-6 ml-5">
                                        <div class="form-group">
                                            <label for="readd"><strong>Residential Address:<span style="color: red;"> </span></strong></label>
                                            <input type="text" class="form-control" name="readd" id="readd" autocomplete="off" value="<?= (!empty($emp->readd)) ? $emp->readd:''; ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-3 ">
                                        <div class="form-group">
                                            <label for="retype"><strong>Residential Type:<span style="color: red;"> </span></strong></label>
                                                <select name="retype" id="retype" class="form-control">
                                                <option value="">Select Residential Type</option>
                                                <?php if(!empty($emp->retype)){?>
                                                    <option value="OWNED" <?php echo ($emp->retype == "OWNED") ? "selected":"" ;?>>Owned</option>
                                                    <option value="RENT"<?php echo ($emp->retype == "RENT") ? "selected":"" ;?>>Rent</option>
                                                <?php }else{?>
                                                    <option value="OWNED">Owned</option>
                                                    <option value="RENT">Rent</option>
                                                <?php }?>
                                                
                                                
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2 ">
                                        <div class="form-group">
                                            <label for="restay"><strong>Years of Stay:<span style="color: red;"> </span></strong></label>
                                                <input type="text" onkeypress="validate(event)" class="form-control" name="restay" id="restay" autocomplete="off" value="<?= (!empty($emp->restay)) ? $emp->restay:''; ?>">
                                                </div>
                                    </div>

                                     <div class="col-sm-6 ml-5">
                                        <div class="form-group">
                                            <label for="peadd"><strong>Permanent Address:<span style="color: red;"> </span></strong></label>
                                            <input type="text" class="form-control" name="peadd" id="peadd" autocomplete="off" value="<?= (!empty($emp->peadd)) ? $emp->peadd:''; ?>">
                                        </div>
                                    </div>

                                    <div class="col-sm-3 ">
                                        <div class="form-group">
                                            <label for="petype"><strong>Permanent Type:<span style="color: red;"> </span></strong></label>

                                                <select name="petype" id="retype" class="form-control">
                                                <option value="">Select Permanent Type</option>
                                                <?php if(!empty($emp->retype)){?>
                                                    <option value="OWNED" <?php echo ($emp->retype == "OWNED") ? "selected":"" ;?>>Owned</option>
                                                    <option value="RENT"<?php echo ($emp->retype == "RENT") ? "selected":"" ;?>>Rent</option>
                                                <?php }else{?>
                                                    <option value="OWNED">Owned</option>
                                                    <option value="RENT">Rent</option>
                                                <?php }?>                             
                                                </select>

                                        </div>
                                    </div>
                                    <div class="col-sm-2 ">
                                        <div class="form-group">
                                            <label for="pestay"><strong>Years of Stay:<span style="color: red;"> </span></strong></label>
                                                <input type="text" onkeypress="validate(event)" class="form-control" name="pestay" id="pestay" autocomplete="off" value="<?= (!empty($emp->pestay)) ? $emp->pestay:''; ?>">
                                                </div>
                                    </div>

                                    <div class="col-sm-2 ml-5">
                                        <div class="form-group">
                                            <label for="zipcode"><strong>Zip Code:<span style="color: red;"> </span></strong></label>
                                            <input type="text" class="form-control" name="zipcode" id="zipcode" autocomplete="off" value="<?= (!empty($emp->zipcode)) ? $emp->zipcode:''; ?>">
                                        </div>
                                    </div>

                                <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <label for="civilstats"><strong>Civil Status:<span style="color: red;"> </span></strong></label>
                                        <select name="civilstats" id="civilstats" class="form-control">
                                        <option value="">Select Status</option>
                                        <?php if(!empty($emp->civilstats)){?>
                                            <option value="SINGLE" <?php echo ($emp->civilstats == "SINGLE") ? "selected":"" ;?>>Single</option>
                                            <option value="SINGLE WITH KIDS" <?php echo ($emp->civilstats == "WITH KIDS") ? "selected":"" ;?>>Single with kids</option>
                                            <option value="MARRIED"<?php echo ($emp->civilstats == "MARRIED") ? "selected":"" ;?>>Married</option>
                                            <option value="LIVE-IN"<?php echo ($emp->civilstats == "LIVE-IN") ? "selected":"" ;?>>Live-in</option>
                                            <option value="SEPERATE"<?php echo ($emp->civilstats == "SEPERATE") ? "selected":"" ;?>>Seperated</option>
                                            <option value="WIDOW"<?php echo ($emp->civilstats == "WIDOW") ? "selected":"" ;?>>Widow</option>

                                        <?php }else{?>
                                            <option value="SINGLE">Single</option>
                                            <option value="SINGLE WITH KIDS">Single with kids</option>
                                            <option value="MARRIED">Married</option>
                                            <option value="LIVE-IN">Live-in</option>
                                            <option value="SEPERATED">Seperated</option>
                                            <option value="WIDOW">Widow</option>                                       
                                             <?php }?>
                                        </select>
                                    </div>
                                </div>

                                 <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <label for="cellno"><strong>Cellphone Number:<span style="color: red;"> </span></strong></label>
                                        <input type="text" onkeypress="validate(event)" class="form-control" name="cellno" id="cellno" autocomplete="off" value="<?= (!empty($emp->zipcode)) ? $emp->cellno:''; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <label for="teleno"><strong>Telephone Number:<span style="color: red;"> </span></strong></label>
                                        <input type="text" onkeypress="validate(event)" class="form-control" name="teleno" id="teleno" autocomplete="off" value="<?= (!empty($emp->zipcode)) ? $emp->teleno:''; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 ml-5">
                                    <div class="form-group">
                                            <label for="sss"><strong>SSS Number:</strong></label>
                                            <input type="text" class="form-control" name="sss" id="sss" autocomplete="off" value="<?= (!empty($emp->sss)) ? $emp->sss:''; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-5 ">
                                    <div class="form-group">
                                        <label for="tin"><strong>Tin Number:</strong></label>
                                        <input type="text" class="form-control" name="tin" id="tin" autocomplete="off" value="<?= (!empty($emp->tin)) ? $emp->tin:''; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 ml-5">
                                    <div class="form-group">
                                        <label for="philhealth"><strong>PhilHealth:</strong></label>
                                        <input type="text" class="form-control" name="philhealth" id="philhealth" autocomplete="off" value="<?= (!empty($emp->philhealth)) ? $emp->philhealth:''; ?>">
                                    </div>
                                </div>


                                 
                                <div class="col-sm-5 ">
                                    <div class="form-group">
                                        <label for="pagibig"><strong>Pag-IBIG:</strong></label>
                                        <input type="text" class="form-control" name="pagibig" id="pagibig" autocomplete="off" value="<?= (!empty($emp->pagibig)) ? $emp->pagibig:''; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-6 ml-5">
                                    <div class="form-group">
                                        <label for="email"><strong>Email Address:</strong></label>
                                        <input type="email" class="form-control" name="email" id="email" autocomplete="off" value="<?= (!empty($emp->email)) ? $emp->email:''; ?>">
                                    </div>

                                </div>

                                <div class="col-sm-5 ">

                                    <label for="nickname"><strong>Nickname:</strong></label>
                                        <input type="nickname" class="form-control" name="nickname" id="nickname" autocomplete="off" value="<?= (!empty($emp->nickname)) ? $emp->nickname:''; ?>">

                                </div>

                        </div>

                    </div>

<!-- FAMILY INFO @@@@@@@@@@@@@@@@@@@@@@@@@ -->
                    <div  class="card bg-light mb-5 mx-auto mt-5" >
                        
                            <div class="card-header" style="font-weight: bold;">II. FAMILY BACKGROUND</div>
                                
                        <div class="row">

                            <div class="col-sm-6 ml-5 mt-3">
                                <div class="form-group">
                                        <label for="spouse"><strong>Name of Spouse:</strong></label>
                                        <input type="text" class="form-control" name="spouse" id="spouse"  autocomplete="off" value="<?= (!empty($emp->spouse)) ? $emp->spouse:''; ?>">
                                </div>
                            </div>

                            <div class="col-sm-5 mt-3">
                                <div class="form-group">
                                    <label for="spousebday"><strong>Date of Birth:<span style="color: red;"> </span></strong></label>
                                    <input type="date" class="form-control" name="spousebday" id="spousebday" autocomplete="off" value="<?= (!empty($emp->spousebday)) ? $emp->spousebday:''; ?>">
                                    
                                </div>
                            </div>

                            <div class="col-sm-6 ml-5">
                                <div class="form-group">
                                    <label for="spouseoccu"><strong>Occupation:</strong></label>
                                    <input type="text" class="form-control" name="spouseoccu" id="spouseoccu"  autocomplete="off" value="<?= (!empty($emp->spouseoccu)) ? $emp->spouseoccu:''; ?>">
                                </div>
                                
                            </div>

                            <div class="col-sm-5 ">
                                
                                <div class="form-group">
                                    <label for="spouseplace"><strong>Place of Birth:</strong></label>
                                    <input type="text" class="form-control" name="spouseplace" id="spouseplace"  autocomplete="off" value="<?= (!empty($emp->spouseplace)) ? $emp->spouseplace:''; ?>">
                                    
                                </div>
                            </div>

                            <div class="col-sm-4 ml-5">
                                <div class="form-group">
                                    <label ><strong>Children:</strong></label>

                                </div>
                                
                                <div class="form-group">
                                    <label ><strong>Name</strong></label>
                                    <input type="text" class="form-control" name="child1" id="child1"  autocomplete="off" value="<?= (!empty($emp->child1)) ? $emp->child1:''; ?>">
                                 </div>

                               <div class="form-group">
                                    <label ><strong>Name</strong></label>
                                <input type="text"  class="form-control" name="child2" id="child2"  autocomplete="off" value="<?= (!empty($emp->child2)) ? $emp->child2:''; ?>">
                                </div>

                                
                            </div>

                            <div class="col-sm-3 ">
                                <div class="form-group">
                                    <label ><strong>--</strong></label>
                                  
                                </div>
                                <div class="form-group">
                                     <label ><strong>Birthday</strong></label>
                                    <input type="date" class="form-control" name="bday1" id="bday1" autocomplete="off" value="<?= (!empty($emp->bday1)) ? $emp->bday1:''; ?>">
                                </div>
                                <div class="form-group">
                                    <label ><strong>Birthday</strong></label>
                                    <input type="date" class="form-control" name="bday2" id="bday2" autocomplete="off" value="<?= (!empty($emp->bday2)) ? $emp->bday2:''; ?>">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="place1"><strong>---</strong></label>
                                </div>
                                <div class="form-group">
                                    <label ><strong>Place of Birth</strong></label>
                                    <input type="text" class="form-control" name="place1" id="place1"  autocomplete="off" value="<?= (!empty($emp->place1)) ? $emp->place1:''; ?>">
                                </div>
                                <div class="form-group">
                                    <label ><strong>Place of Birth</strong></label>
                                    <input type="text" class="form-control" name="place2" id="place2"  autocomplete="off" value="<?= (!empty($emp->place2)) ? $emp->place2:''; ?>">
                                </div>
                                    
                            </div>

                            <div class="col-sm-6 ml-5">
                                    <div class="form-group">
                                        <label for="father"><strong>Father's Name:</strong></label>
                                        <input type="text" class="form-control" name="father" id="father" autocomplete="off" value="<?= (!empty($emp->father)) ? $emp->father:''; ?>">
                                    </div>
                            </div>
                            <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="fplace"><strong>Place of Birth:</strong></label>
                                        <input type="text" class="form-control" name="fplace" id="fplace" autocomplete="off" value="<?= (!empty($emp->fplace)) ? $emp->fplace:''; ?>">
                                    </div>
                            </div>

                             <div class="col-sm-6 ml-5">
                                    <div class="form-group">
                                        <label for="mother"><strong>Mother's Name:</strong></label>
                                        <input type="text" class="form-control" name="mother" id="mother" autocomplete="off" value="<?= (!empty($emp->mother)) ? $emp->mother:''; ?>">
                                    </div>
                            </div>
                            <div class="col-sm-5">
                                    <div class="form-group">
                                        <label for="mplace"><strong>Place of Birth:</strong></label>
                                        <input type="text" class="form-control" name="mplace" id="mplace" autocomplete="off" value="<?= (!empty($emp->mplace)) ? $emp->mplace:''; ?>">
                                    </div>
                            </div>

                            <div class="col-sm-11 ml-5">
                                    <div class="form-group">
                                        <label for="parentadd"><strong>Parents Address:</strong></label>
                                        <input type="text" class="form-control" name="parentadd" id="parentadd" autocomplete="off" value="<?= (!empty($emp->parentadd)) ? $emp->parentadd:''; ?>">
                                    </div>
                            </div>



                        </div>

                    </div>

<!-- WORK EXP INFO @@@@@@@@@@@@@@@@@@@@@@@@@ -->

                     <div  class="card bg-light mb-5 mx-auto mt-5" >
                        
                            <div class="card-header" style="font-weight: bold;">III. WORK EXPERIENCE</div>
                                
                        <div class="row">

                            <div class="col-sm-3 ml-5 mt-3">
                                <div class="form-group">
                                        <label for="precompany1"><strong>Previous Company:</strong></label>
                                        <input type="text" class="form-control" name="precompany1" id="precompany1" autocomplete="off" value="<?= (!empty($emp->precompany1)) ? $emp->precompany1:''; ?>">
                                    </div>
                            </div>

                            <div class="col-sm-2 mt-3">
                                    <div class="form-group">
                                        <label for="preposition1"><strong>Previous Position:</strong></label>
                                        <input type="text" class="form-control" name="preposition1" id="preposition1" autocomplete="off" value="<?= (!empty($emp->preposition1)) ? $emp->preposition1:''; ?>">
                                    </div>
                            </div>

                            <div class="col-sm-3 mt-3">
                                    <div class="form-group">
                                        <label for="prefdate1"><strong>Date Hired</strong></label>
                                        <input type="date" class="form-control"  name="prefdate1" id="prefdate1" autocomplete="off" value="<?= (!empty($emp->prefdate1)) ? $emp->prefdate1:''; ?>">
                                    </div>
                            </div>
                            <div class="col-sm-3 mt-3">
                                    <div class="form-group">
                                        <label for="preldate1"><strong>Last Date Of Work</strong></label>
                                        <input type="date" class="form-control" name="preldate1" id="preldate1" autocomplete="off" value="<?= (!empty($emp->preldate1)) ? $emp->preldate1:''; ?>">
                                    </div>
                            </div>

                            <div class="col-sm-3 ml-5 ">
                                <div class="form-group">
                                        <label for="precompany2"><strong>Previous Company:</strong></label>
                                        <input type="text" class="form-control" name="precompany2" id="precompany2" autocomplete="off" value="<?= (!empty($emp->precompany2)) ? $emp->precompany2:''; ?>">
                                    </div>
                            </div>

                            <div class="col-sm-2 ">
                                    <div class="form-group">
                                        <label for="preposition2"><strong>Previous Position:</strong></label>
                                        <input type="text" class="form-control" name="preposition2" id="preposition2" autocomplete="off" value="<?= (!empty($emp->preposition2)) ? $emp->preposition2:''; ?>">
                                    </div>
                            </div>

                            <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <label for="prefdate2"><strong>Date Hired</strong></label>
                                        <input type="date" class="form-control"  name="prefdate2" id="prefdaten2" autocomplete="off" value="<?= (!empty($emp->prefdate2)) ? $emp->prefdate2:''; ?>">
                                    </div>
                            </div>
                            <div class="col-sm-3 ">
                                    <div class="form-group">
                                        <label for="preldate2"><strong>Last Date Of Work</strong></label>
                                        <input type="date" class="form-control" name="preldate2" id="preldate2" autocomplete="off" value="<?= (!empty($emp->preldate2)) ? $emp->preldate2:''; ?>">
                                    </div>
                            </div>




                        </div>
                    </div>

 <!-- OTHER INFO @@@@@@@@@@@@@@@@@@@@@@@@@ -->                   

                    <div  class="card bg-light mb-5 mx-auto mt-5" >
                        
                            <div class="card-header" style="font-weight: bold;">IV. OTHER INFORMATION</div>
                                
                        <div class="row">

                             <div class="col-sm-4 ml-5 mt-3">
                                <div class="form-group">
                                            <label for="dole"><strong>Do you have any case filed with DOLE:</strong></label>
                                                
                                        </div>
                             </div>

                             <div class="col-sm-4 mt-3">
                                <div class="form-group">
                                                    <select name="dole" id="dole" class="form-control">
                                                        <option value="">Select</option>
                                                        <?php if(!empty($emp->retype)){?>
                                                            <option value="YES" <?php echo ($emp->dole == "YES") ? "selected":"" ;?>>Yes</option>
                                                            <option value="NO"<?php echo ($emp->dole == "NO") ? "selected":"" ;?>>No</option>
                                                        <?php }else{?>
                                                            <option value="YES">Yes</option>
                                                            <option value="NO">No</option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>

                             <div class="col-sm-4 ml-5">
                                <div class="form-group">

                                            <label><strong>If Yes, Company Name:</strong></label>
                                                    
                                                </div>
                                            </div>

                         <div class="col-sm-4 ">
                            <div class="form-group">

                                <input type="text" placeholder="Company Name" class="form-control" name="issuecom" id="issuecom" autocomplete="off" value="<?= (!empty($emp->issuecom)) ? $emp->issuecom:''; ?>">

                            </div>
                        </div>

                        <div class="col-sm-4 ml-5">
                                <div class="form-group">

                                            <label><strong>Membership in Association/Organization:</strong></label>


                                                    
                                                </div>
                                            </div>

                         <div class="col-sm-4 ">
                            <div class="form-group">

                                <input type="text" placeholder="Association/Organization" class="form-control" name="assoc" id="assoc" autocomplete="off" value="<?= (!empty($emp->assoc)) ? $emp->assoc:''; ?>">

                            </div>
                        </div>

                        </div>
                    </div>


                        <div  class="card bg-light mb-5 mx-auto mt-5" >
                            
                                <div class="card-header" style="font-weight: bold;">EMPLOYEMENT INFORMATION</div>
                                    
                            <div class="row">

                                 <div class="col-sm-3 ml-5 mt-3">
                                <div class="form-group">

                               <label><strong>Department/Store:</strong></label>

                                </div>
                            </div>

                            <div class="col-sm-6 mt-3">
                                <div class="form-group">

                                    <select name="designation" id="designation" class="form-control" required>
                                        <option value="">Select Department/Store</option>
                                        <?php if(!empty($designations)){?>
                                        <?php foreach($designations as $row){?>
                                        <option value="<?php echo $row->id; ?>" <?php if(!empty($emp->designation)) {echo ($emp->designation == $row->id) ? "selected":"" ; }?>> <?php echo $row->deptname;?></option>
                                        <?php }?>
                                        <?php }?>
                                    </select>
                                    
                                </div>
                            </div>

                            <div class="col-sm-3 ml-5">
                                <div class="form-group">

                                    <label><strong>Position:</strong></label>
                                   

                                </div>
                            </div>

                            <div class="col-sm-6 ">
                                <div class="form-group">

                                    <select name="position" id="position" class="form-control" required>
                                        <option value="">Select Position</option>
                                        <?php if(!empty($positions)){?>
                                        <?php foreach($positions as $row){?>
                                        <option value="<?php echo $row->id; ?>" <?php if(!empty($emp->position)){echo ($emp->position == $row->id) ? "selected":"" ;} ?>><?php echo $row->positionname; ?></option>
                                        <?php }?>
                                        <?php }?>
                                        </select>

                                </div>
                            </div>

                            <div class="col-sm-3 ml-5">
                                <div class="form-group">

                                    <label><strong>Employment Status:</strong></label>
                                   

                                </div>
                            </div>

                            <div class="col-sm-6 ">
                                <div class="form-group">

                                    <select name="status" id="status" class="form-control" required>
                                        <option value="">Select Status</option>
                                        <?php if(!empty($status)){?>
                                            <?php foreach($status as $row){?>
                                                <option value="<?php echo $row->id; ?>" <?php if(!empty($emp->status)){echo ($emp->status == $row->id) ? "selected":"" ;} ?>><?php echo $row->statusname; ?></option>
                                            <?php } ?>
                                            
                                        <?php } ?>
                                        </select>

                                </div>
                            </div>

                            <div class="col-sm-3 ml-5">
                                <div class="form-group">

                                    <label for="empid"><strong>Employee ID Number:</strong></label>
                                   

                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="empid" id="empid" autocomplete="off" value="<?= (!empty($emp->empid)) ? $emp->empid:''; ?>">
                                </div>
                            </div>


                            <div class="col-sm-3 ml-5">
                                <div class="form-group">

                                    <label><strong>Date Hired:</strong></label>
                                   

                                </div>
                            </div>

                            <div class="col-sm-6 ">
                                <div class="form-group">

                                    <input type="date" class="form-control" name="empdate" id="empdate" autocomplete="off" value="<?= (!empty($emp->empdate)) ? $emp->empdate:''; ?>" required>

                                </div>
                            </div>

                            <div class="col-sm-3 ml-5">
                                <div class="form-group">

                                    <label><strong>Last Date:</strong></label>
                                   

                                </div>
                            </div>

                            <div class="col-sm-6 ">
                                <div class="form-group">

                                    <input type="date" class="form-control" name="lempdate" id="lempdate" autocomplete="off" value="<?= (!empty($emp->lempdate)) ? $emp->lempdate:''; ?>">

                                </div>
                            </div>

                            <div class="col-sm-3 ml-5">
                                <div class="form-group">

                                    <label><strong>Basic Salary:</strong></label>
                                   
                                </div>
                            </div>

                            <div class="col-sm-6 ">
                                <div class="form-group">

                                    <input  onkeypress="validate(event)" type="text" class="form-control" name="empsalary" id="empsalary" autocomplete="off" value="<?= (!empty($emp->empsalary)) ? $emp->empsalary:''; ?>" required>

                                </div>
                            </div>

                            <div class="col-sm-3 ml-5">
                                <div class="form-group">

                                    <label><strong>Allowance:</strong></label>
                                   
                                </div>
                            </div>

                            <div class="col-sm-6 ">
                                <div class="form-group">

                                    <input  onkeypress="validate(event)"  type="text" class="form-control" name="empallowance" id="empallowance" autocomplete="off" value="<?= (!empty($emp->empallowance)) ? $emp->empallowance:''; ?>" required>

                                </div>
                            </div>

                            <div class="col-sm-3 ml-5">
                                <div class="form-group">

                                    <label><strong>Total Salary:</strong></label>
                                   
                                </div>
                            </div>

                            <div class="col-sm-6 ">
                                <div class="form-group">

                                    <input type="text" class="form-control" name="emptotal" id="emptotal" autocomplete="off" value="<?= (!empty($emp->emptotal)) ? $emp->emptotal:''; ?>" readonly>

                                </div>
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
                            <div class="text-muted">Copyright &copy; HRMS 2020</div>
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

    function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]/;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
};

$(function () {
  $("empsalary, #empallowance").keyup(function () {
    $("#emptotal").val(+$("#empsalary").val() + +$("#empallowance").val());
  });
});


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        


