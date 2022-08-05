
<!--<div class="container-fuild" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1 style="text-align:center; margin-bottom:50px;"><?= $title; ?></h1>
            <hr>
            <?= validation_errors();?>
           

            <?= form_open('');?>
            <h4 style="text-align: center;"><?= $login_user;?></h4>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" value="<?= set_value('username');?>" class="form-control" placeholder="Enter Username" autocomplete="off">
            </div>
                <label for="password">Password</label>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        
        <div class="col-md-4"></div>
    </div>
</div>--><body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            
                            <div class="col-lg-5">
                                 <div></div>
                                <div class="card shadow-lg border-1 rounded-lg mt-5">
                                    <div class="card-header"><h1 class="text-center"><?= $title; ?></h1><h3 class="text-center font-weight-light my-4"><?= $login_user;?></h3></div>
                                    <?= validation_errors();?>
                                    <div class="card-body">
                                    <?= form_open('');?>
                                            <div class="form-group">
                                                <label class="small mb-1" for="username">Username</label>
                                                <input class="form-control py-4" name="username" type="text" value="<?= set_value('username');?>" placeholder="Enter Username" autocomplete="off" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" type="password" placeholder="Enter password" />
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        
                                    </div>
                                    <div class="card-footer text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
