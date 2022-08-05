
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>assets/admin/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?=base_url()?>assets/admin/js/chart-area-demo.js"></script>
        <script src="<?=base_url()?>assets/admin/js/chart-bar-demo.js"></script>
       <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        
        <script src="<?=base_url()?>assets/admin/js/datatables-demo.js"></script>
        <script src="<?=base_url()?>assets/admin/fullcalendar/lib/jquery.fullcalendar.min.js" crossorigin="anonymous"></script>        
<script src="<?=base_url()?>assets/admin/fullcalendar/lib/moment.min.js"></script>
<script src="<?=base_url()?>assets/admin/fullcalendar/fullcalendar.min.js"></script>
</body>
<?php
if($this->session->flashdata('notice') != ''){
echo '<script>toastr.warning("'.$this->session->flashdata('notice').'","Notice");</script>';
}
if($this->session->flashdata('logout_success') != ''){
echo '<script>toastr.warning("'.$this->session->flashdata('logout_success').'","Notice");</script>';
}

if($this->session->flashdata('error') != ''){
echo '<script>toastr.error("'.$this->session->flashdata('error').'","Error", { timeOut: 0 });</script>';
}

if($this->session->flashdata('success') != ''){
echo '<script>toastr.success("'.$this->session->flashdata('success').'","Welcome");</script>';
}

if($this->session->flashdata('emp_add_error') != ''){
echo '<script>toastr.error("'.$this->session->flashdata('emp_add_error').'","Error"); $("#emodal").modal("show");</script>';
}

if($this->session->flashdata('emp_val_error') != ''){
echo "<script>toastr.error('".$this->session->flashdata('emp_val_error')."','Validation  Errors Check Fields'); $('#emodal').modal('show');</script>";
}
    
if($this->session->flashdata('emp_add_success') != ''){
echo '<script>toastr.success("'.$this->session->flashdata('emp_add_success').'","Success");</script>';
}
if($this->session->flashdata('emp_update_success') != ''){
        echo '<script>toastr.success("'.$this->session->flashdata('emp_update_success').'","Success");</script>';
}
if($this->session->flashdata('emp_update_error') != ''){
        echo '<script>toastr.error("'.$this->session->flashdata('emp_update_error').'","Error"); $("#emodal").modal("show");</script>';
}
if($this->session->flashdata('dept_add_error') != ''){
        echo '<script>toastr.error("'.$this->session->flashdata('dept_add_error').'","Error"); $("#emodal").modal("show");</script>';
}
        
if($this->session->flashdata('dept_val_error') != ''){
        echo "<script>toastr.error('".$this->session->flashdata('dept_val_error')."','Validation  Errors Check Fields'); $('#emodal').modal('show');</script>";
}
            
if($this->session->flashdata('dept_add_success') != ''){
        echo '<script>toastr.success("'.$this->session->flashdata('dept_add_success').'","Success");</script>';
}
if($this->session->flashdata('dept_update_success') != ''){
        echo '<script>toastr.success("'.$this->session->flashdata('dept_update_success').'","Success");</script>';
}
if($this->session->flashdata('dept_update_error') != ''){
        echo '<script>toastr.error("'.$this->session->flashdata('dept_update_error').'","Error"); $("#emodal").modal("show");</script>';
}
if($this->session->flashdata('stat_val_error') != ''){
        echo "<script>toastr.error('".$this->session->flashdata('stat_val_error')."','Validation  Errors Check Fields'); $('#emodal').modal('show');</script>";
}
            
if($this->session->flashdata('stat_add_success') != ''){
        echo '<script>toastr.success("'.$this->session->flashdata('stat_add_success').'","Success");</script>';
}
if($this->session->flashdata('stat_update_success') != ''){
        echo '<script>toastr.success("'.$this->session->flashdata('stat_update_success').'","Success");</script>';
}
if($this->session->flashdata('stat_update_error') != ''){
        echo '<script>toastr.error("'.$this->session->flashdata('stat_update_error').'","Error"); $("#emodal").modal("show");</script>';
}
if($this->session->flashdata('user_val_error') != ''){
        echo "<script>toastr.error('".$this->session->flashdata('user_val_error')."','Validation  Errors Check Fields'); $('#emodal').modal('show');</script>";
}
            
if($this->session->flashdata('user_add_success') != ''){
        echo '<script>toastr.success("'.$this->session->flashdata('user_add_success').'","Success");</script>';
}
if($this->session->flashdata('user_update_success') != ''){
        echo '<script>toastr.success("'.$this->session->flashdata('user_update_success').'","Success");</script>';
}
if($this->session->flashdata('user_update_error') != ''){
        echo '<script>toastr.error("'.$this->session->flashdata('user_update_error').'","Error"); $("#emodal").modal("show");</script>';
}
    
?>


</html>