<?php 
// Q1: Start the session
   session_start();
   include "db_conn.php";
   // Q2: Check session (username and id) is null 
   if(isset($_SESSION['username']) && isset($_SESSION['id'])){

?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
	  <!-- Q3: Authorize role for admin -->
      	<?php if($_SESSION['role'] == 'admin'){?>
      		<!-- For Admin -->
      		<div class="card" style="width: 18rem;"><!-- Using card as content container for image and text -->
			<!-- Q4: Set the path for thumbnail image for admin -->
			  <img src="img/admin-default.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
					<!-- Q5: Display out name of the admin -->
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div>
			<div class="p-3">
				<!-- Get all users account from table users -->
				<?php 
				include 'php/members.php';
                 if (mysqli_num_rows($res) > 0) {?>
                 <!-- Print all users account --> 
				<h1 class="display-4 fs-1">Members</h1>
				<table class="table" 
				       style="width: 32rem;">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">User name</th>
				      <th scope="col">Role</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php 
				  	$i =1;
				  	while ($rows = mysqli_fetch_assoc($res)) {?>
				    <tr>
				      <th scope="row"><?=$i?></th>
				      <td><?=$rows['name']?></td>
				      <td><?=$rows['username']?></td>
				      <td><?=$rows['role']?></td>
				    </tr>
				    <?php $i++; }?>
				  </tbody>
				</table>
				<?php }?>
			</div>
      	<?php } else { ?> <!-- if session[role] is not admin -->
      		<!-- FOR USERS -->
      		<div class="card" style="width: 18rem;">
			<!-- Q6: Set the path for thumbnail image for admin -->	
			  <img src="img/user-default.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
					<!-- Q7: Display out name of the admin -->
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div>
      	<?php } ?>
      </div>
</body>
</html>
<!-- this is the paired else from if isset in line 6 -->
<!-- if session is null, redirect to login page -->
<?php }else{
	header("Location: index.php");
} ?>