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
<body class="sb-nav-fixed">