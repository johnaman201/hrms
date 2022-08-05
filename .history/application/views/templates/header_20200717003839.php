<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HRMS</title>
<!-- Latest compiled and minified CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>



<link href="<?=base_url()?>assets/admin/css/styles.css" rel="stylesheet" />
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
<!--<style type="text/css">


	/* The side navigation menu */
.sidebar {
  margin-top: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 1080px;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 100%;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
#dataempsearch {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#emptbl {
  border-collapse: collapse; /* Collapse borders */
 width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  /*font-size: 18px; /* Increase font-size */
  height: 10px;
  max-height: 50px;
  overflow-y: auto;
  position: scroll;
}

#emptbl th, #emptbl td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#emptbl tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#emptbl tr.dataempheader, #emptbl tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
#logoutlink:hover{
	text-decoration: underline;
}
</style>-->
<script type="text/javascript">
		$(document).ready(function(){
        //alert('loaded');
		   
		   

		});
		function dataempsearchf() {
				//alert("try!");
			  // Declare variables
			  var input, filter, table, tr, td, i, txtValue;
			  input = document.getElementById("empsearch");
			  filter = input.value.toUpperCase();
			  table = document.getElementById("emptbl");
			  tr = table.getElementsByTagName("tr");

			  // Loop through all table rows, and hide those who don't match the search query
			  for (i = 0; i < tr.length; i++) {
			    td = tr[i].getElementsByTagName("td")[0];
			    if (td) {
			      txtValue = td.textContent || td.innerText;
			      if (txtValue.toUpperCase().indexOf(filter) > -1) {
			        tr[i].style.display = "";
			      } else {
			        tr[i].style.display = "none";
			      }
			    }
			  }
			}
      function getempdata(userid){
         //alert(userid);
          $.ajax({
            url: "http://slimapp/api/employees/"+userid,
            method: "GET",
           data:{data_action: 'fetch_all'},
            dataType: 'json',
            success:function(data)
            {
              //var obj = JSON.parse(data);
               //$.each(data, function(key, value){
                //console.log(data[0].fname);
                $("#efullname").text(data[0].fname+" "+data[0].mname+" "+data[0].lname);
                $("#efname").val(data[0].fname);
                $("#emname").val(data[0].mname);
                $("#elname").val(data[0].lname);
                $("#ebday").val(data[0].bday);
              // });
               
            }
          });
        }
		
</script>
</head>
<body>