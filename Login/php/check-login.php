<!-- Q#: Start session here -->
<?php  
session_start();
// Import db_conn.php for database connection
include "../db_conn.php";

// Q1: Check session with isset function for all the login form input from index.php
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])){

		// Q2: Write a function to test the input from the login form to eliminate XSS attack
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

       // Q3: Check the login form input with the function in Q2
		$username = test_input($_POST['username']);
		$password = test_input($_POST['password']);
		$role = test_input($_POST['role']);
	

	// Q4: Check if the username is null. If null, redirect to index.php and print the error message
	if (empty($username)) {
		header("Location: ../index.php?error=User Name is Required");
	// Q5: Check if the password is null. If null, redirect to index.php and print the error message
	} else if (empty($password)) {
		header("Location: ../index.php?error=Password is Required");
	// If all the input from the login form are not null, retrieve login data from table for user authentication 
	} else {

		// Hashing or encrypt the password using md5 function
		$password = md5($password);
        
		// Q6: Retrieve data from table users for user authentication
        $sql = "SELECT * FROM customer WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// The user name must be unique
        	$row = mysqli_fetch_assoc($result);
		
			// Q7: Check whether retrieved password and role match with the input from login form
			if ($row['password']===$password && $row['role']==$role){
		
				// Q8: If match is true, assign session to user
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
				$_SESSION['role'] = $row['role'];
				$_SESSION['username'] = $row['username'];

				// Q9: Redirect user to home.php - login is successful
        		header("Location: ../home.php");

        	}else { // Q10: If match is false, redirect to index.php with error message
        		header("Location: ../index.php?error=Incorect user name or password");
			}
        }else { // Q11: If username does not exist, redirect to index.php with error message
        	header("Location: ../index.php?error=Incorect user name or password");
			}
		 }
        } else { // Q12: If username and password and role are null, redirect to index.php to enforce login
	header("Location: index.php");
} ?>