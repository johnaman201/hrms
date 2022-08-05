<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo site_url('dashboard');?>"><?= $greet; ?><?php echo ' '.$this->session->firstname; ?></a>
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
                        <a class="dropdown-item" href="<?php echo site_url('deparments');?>">Department/Stores</a>
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
                           
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                HR Management
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo site_url('employees'); ?>">Employees</a>
                                    <a class="nav-link" href="<?php echo site_url('departments'); ?>">Departments/Stores</a>
                                    <a class="nav-link" href="<?php echo site_url('positions'); ?>">Positions</a>
                                    <a class="nav-link" href="<?php echo site_url('status'); ?>">Employment Status</a>
                                    <a class="nav-link" href="<?php echo site_url('systemusers'); ?>">System User Accounts</a>
                                </nav>
                            </div>
                            
                            
                    
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Employees --- <?php echo $employees->empno?></div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Deparment/Stores --- <?php echo $departments->deptno?></div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Positions --- <?php echo $positions->postno?></div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">System Users --- <?php echo $users->userno?></div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-calendar mr-1"></i>
                                Calendar
                                <button type="button" class="btn btn-info btn-lg pull-right" data-toggle="modal" data-target="#eventModal">Add Event</button>
                            </div>
                            <div class="card-body">
                            <div class="response"></div>
                            <div id='calendar'></div>
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
  <div id="eventModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title pull-left">Add Event</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <?= form_open_multipart('dashboard') ?>
      <div class="modal-body">
      <div class="form-group">
        <label >Start Date</label>
        <input type="date" name="startdate" max="3000-12-31" 
                min="1000-01-01" class="form-control">
        </div>
        <div class="form-group">
        <label >End Date</label>
        <input type="date" name="enddate" min="1000-01-01"
                max="3000-12-31" class="form-control">
        </div>
        <label for="favcolor">Choose Event Color:</label>
        <input type="color" id="favcolor" name="favcolor" value="">

        <div class="form-group">
        <label for="comment">Description:</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script>
$(document).ready(function(){
      var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: "fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            $('#eventModal').show();
            /*var title = prompt('Event Title:');

            if (title) {
                var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");

                $.ajax({
                    url: 'add-event.php',
                    data: 'title=' + title + '&start=' + start + '&end=' + end,
                    type: "POST",
                    success: function (data) {
                        displayMessage("Added Successfully");
                    }
                });
                calendar.fullCalendar('renderEvent',
                        {
                            title: title,
                            start: start,
                            end: end,
                            allDay: allDay
                        },
                true
                        );
            }*/
            calendar.fullCalendar('unselect');
        },
        
        editable: true,
        eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: 'edit-event.php',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Updated Successfully");
                        }
                    });
                },
        eventClick: function (event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) {
                $.ajax({
                    type: "POST",
                    url: "delete-event.php",
                    data: "&id=" + event.id,
                    success: function (response) {
                        if(parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id);
                            displayMessage("Deleted Successfully");
                        }
                    }
                });
            }
        }

    });
		   
		   

    });
    function displayMessage(message) {
	    $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}
$('#help').on("click",function(){
    alert("Need Help? Call Me!!!!");
});
</script>