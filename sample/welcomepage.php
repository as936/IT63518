<?php
if(session_status() == PHP_SESSION_NONE){
	session_start();
}
if(!isset($_SESSION["username"])){
      	 header("location: signin.html");
        exit(0);
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Landing Page for IT DEFECT WEBSITE</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
	
  <?php
	include("table.php");
  ?>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">IT DEFECTS</a>
	   <div  style = "width:70px;
	height:auto;
	text-align:center;
	top:20;
	position:absolute;
	right:100;"
	>
	   <fieldset style ="width:200%">
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
	  </fieldset>
	</div>
	<div  style = "width:70px;
	height:auto;
	text-align:center;
	top:70;
	position:absolute;
	right:60;"
	>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#" ><strong>Sign out</strong></a>
        </li>
      </ul>
	  </div>
    </nav>
  
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">List of Tickets</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle"><a href="createTicket.php">
                Create Ticket
		</a>
              </button>
            </div>
          </div>

          <h2>Filter Status</h2>
	 <select id='status' onchange="myFunction(this.value)">
		<option value='0'>Please Select..</option>
		<option value='open'>open</option>
		<option value='In Progress'>In Progress</option>
		<option value='Closed'>Closed</option>
		<option value='Completed'>Completed</option>
	</select>
          <div class="table-responsive">
            <table id="myTable" class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Ticket Id#</th>
		  <th>Subject</th>
                  <th>Description</th>
                  <th>Status</th>
		  <th>Assigned To</th>
                </tr>
              </thead>
              <tbody>
       <?php
	$j=0;
          while( $i > 0 ){
            echo
            "<tr>
              <td>{$results[$j]['ticketID']}</td>
              <td>{$results[$j]['subject']}</td>
              <td>{$results[$j]['description']}</td>
              <td>{$results[$j]['status']}</td>
              <td>{$results[$j]['assignedTo']}</td>
	      <td><button id=editButton  class=editbtn onclick=getTable()>
		<a href=#>Edit</a></button></td>
		<td><button id=createButton  class=createbtn><a href=createSubTicket.php>Create Subticket</a></button></td>
            </tr></br>";
		$i--;
		$j++;
          }
        ?>
        <!-- <div id="editButton"><a href="edit.php"></a></div>-->  
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <!--Function for Grabbing Table Data
    ================================================== -->
<script>
function myFunction(filter) {


var table = document.getElementById("myTable");
var rows = table.getElementsByTagName("tr");
for (var i = 1; i<rows.length; i++) {

	data = rows[i].getElementsByTagName("td")[3].innerHTML;

	if(filter == 0){
	rows[i].style.display = "";
	}

	 else if(data == filter){
	     rows[i].style.display = "";
	}
	else{
	 rows[i].style.display = "none";
	}

}
}

</script>

<script>
function getTable(){

var htmlTable = document.getElementById('myTable');

var rowLength = htmlTable.rows.length;

for(i = 0; i < rowLength; i++){
	var htmlCells = htmlTable.rows.item(i).cells;
	var cellLength = htmlCells.length;
	
	for(var j = 0; j < cellLength; j++){
		
		var cellVal = htmlCells.item(j).innerHTML;
	//	alert(cellVal);		
		}

	}	
	window.location.href = '/sample/edit.php';

}

</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

