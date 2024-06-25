<!-- Q#4: Start your session here -->
<?php 
 
   // Q#5: Check your session with isset function. If null/false, stay on login page. If true, redirect to home.php
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page with Multi User Roles and Session</title>
	<!-- CSS bookstrap  -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="background-color: mediumseagreen;">
<div class="container d-flex justify-content-center align-items-center"
style="min-height: 100vh;"><!-- Q1: Set the form should go to check-login.php upon submit with method post-->
      	<form class="border shadow p-3 rounded"
      	      action="php/check-login.php"
      	      method="post" 
      	      style="width: 450px;background-color: cornsilk;">
      	      <h1 class="text-center p-3" >LOGIN</h1>
			  <!-- This PHP is for form validation -->
			  <!-- Q#1: Check for session here and display error message -->
      	      <?php if(isset($_GET['error'])) {?>
      	      <div class="alert alert-danger" role="alert"><!-- a div to print out the error message -->
				<!-- Q#2: Get the error and print it in this div -->
				  <?=$_GET['error']?> 
	  	      </div>
	  	      <?php } ?>
			 
			  <!-- Q#3: Remember to close the parentheses in PHP -->
			 
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">User name</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		  <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="admin">Admin</option>
		  </select>
		 
		  <button type="submit" 
		          class="btn btn-primary">LOGIN</button>
		</form>
      </div>
</body>
</html>
<!-- Q#6: Redirect to home.php if session exist
