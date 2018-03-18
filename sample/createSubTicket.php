<?php
if(session_status() == PHP_SESSION_NONE){
        session_start();
}
if(!isset($_SESSION["username"])){
         header("location: signin.html");
        exit(0);
}

?>
<html>
<head>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
box-sizing: border-box;
}

input[type=text], select, textarea {
width: 50%;
padding: 20px;
border: 2px solid #ccc;
border-radius: 10px;
resize: vertical;
}

label {
padding: 12px 12px 12px 0;
display: inline-block;
}

input[type=submit] {
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
float: right;
position: relative;
left: -53%;
}

input[type=submit]:hover {
background-color: #45a049;
}

.container {
border-radius: 5px;

padding: 5px;
}

.col-25 {
float: left;
width: 10%;
margin-top: 6px;
font-weight: bold;

}

.col-75 {
float: left;
width: 75%;
margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
}
h1{
text-align: center;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
.col-25, .col-75, input[type=submit] {
width: 100%;
margin-top: 0;
}
}
</style>
</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
<div style = "font-size:200px;">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="welcomepage.php">
  <span data-feather="home"></span>IT DEFECTS<span class="sr-only">(current)</span>
  </a>
</div>
  <div  style = "width:200px;
font-size: 20px;
height:auto;
float:right;
top:70;ss
left:10;"
>
    <ul class="navbar-nav px-">
<li class="nav-item text-nowrap">
	  <a class="nav-link active" href="test.html"">
	  <span data-feather="log-out"></span>
	  Sign Out <span class="sr-only">(current)</span>
	</a>
</li>
</ul>
  </div>
</nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">

<h2>Create Sub-Ticket</h2>
<div class="container">
<form method="POST" action="creatSubTicketSQL.php">
<div class="row">
 <div class="col-25">
  <label for="fname">Sub-Ticket</label>
	</div>
	<div class="col-75">
	<input type="text" id="subTicketID" name="subTicketID" value="Sub-Ticket ID" readonly>
	</div>
	</div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Ticket ID</label>
      </div>
      <div class="col-75">
        <input type="text" id="ticketID" name="ticketID" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Subject</label>
      </div>
      <div class="col-75">
        <input type="text" id="subject" name="subject" placeholder="Subject" required>
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="lname">Assigned To</label>
      </div>
      <div class="col-75">
	<select id="assignedTo" name="assignedTo">
	<?php
	include('assign.php');
	$j=0;

	while($i > 0){
	echo "<option value=".$results[$j]['name'].">" .$results[$j]['name']."</option>";
	
	$i--;
	$j++;
	}
?> 
</select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="status">Status</label>
      </div>
      <div class="col-75">
        <select id="status" name="status">
          <option value="open">Open</option>
        </select>
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="description">Description</label>
      </div>
      <div class="col-75">
        <textarea id="description" name="description" placeholder="Write something.." style="height:100px" required></textarea>
      </div>
    </div>	
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

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
</body>
</html>
