<head>
	<title>login page</title>
</head>

<body>
	<center>
<?php


		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "resumebia");

		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)

	    $email = $_REQUEST['email'];
	    $password = $_REQUEST['password'];



		// Performing insert query execution
		// here our table name is college
		$sql = "SELECT email FROM register WHERE email = '$email' and password = '$password'";


		if(mysqli_query($conn, $sql)){

      {

      echo "<h3>User Logged In successfully! </h3>";

     //echo nl2br("\n $email\n "	. "$password");
    }

  }
  else{
			echo "ERROR: Hush! Sorry! Email is not valid. $sql. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);

   /*include("login.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id FROM register WHERE username = '$username' and passcode = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

        echo "<h3>User logged in successfully.</h3>";
      }

      else {
         $error = "Your Login Name or Password is invalid";
      }
   } */
?>


   </body>
</html>
