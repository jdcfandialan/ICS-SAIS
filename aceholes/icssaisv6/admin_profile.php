<!DOCTYPE HTML>
<?php
	session_start();
?>

<html>
	<head>
		<title>
		
		</title>
	</head>
	<body>
		<form name="admin_profile"/>
			<a href ="admin_home.php">Home</a>	&nbsp;&nbsp;&nbsp;
			<a href ="admin_profile.php">Profile</a>	&nbsp;&nbsp;&nbsp;
			<a href ="home.php">Sign-out</a>
			
			<h4>BASIC INFORMATION</h4>
			<?php
				$conn = odbc_connect("Driver={Microsoft ODBC for Oracle};Server=localhost;Uid=tantan;Pwd=tantan;", 'tantan', 'tantan');

				if($conn){
					$result = odbc_exec($conn, "select afname, alname, agender, ahaddr, acaddr, ahcontact, accontact, amobile, aemail from administrator where afname = '".$_SESSION["fname"]."' and alname = '".$_SESSION["lname"]."'" );

					echo "<table border='1'>";
					while($row = odbc_fetch_array($result)) {
						echo "<tr>";
							echo "<td>FIRST NAME</td>";
							echo "<td>".$row["AFNAME"]."</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>LAST NAME</td>";
							echo "<td>".$row["ALNAME"]."</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>GENDER</td>";
							echo "<td>".$row["AGENDER"]."</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>HOME ADDRESS</td>";
							echo "<td>".$row["AHADDR"]."</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>COLLEGE ADDRESS</td>";
							echo "<td>".$row["ACADDR"]."</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>HOME CONTACT NO.</td>";
							echo "<td>".$row["AHCONTACT"]."</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>COLLEGE CONTACT NO.</td>";
							echo "<td>".$row["ACCONTACT"]."</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>MOBILE NO.</td>";
							echo "<td>".$row["AMOBILE"]."</td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>EMAIL ADDRESS</td>";
							echo "<td>".$row["AEMAIL"]."</td>";
						echo "</tr>";
						
					}
					echo "</table>";
				
					odbc_close($conn);
				}else{
					die('could not connect');
				}
			?>
			
			<!-- ikaw na bahala kung san to. :) -->
			<a href ="admin_edit_basic_info.php">Edit</a><br/>
			<a href ="admin_add_basic_info.php">Add</a><br/>
			<a href ="admin_delete_basic_info.php">Delete</a><br/>
			<a href ="admin_change_password.php">Change Password</a><br/><br/>
			
			<a href ="admin_view_users.php">View Users</a><br/>
			<a href ="admin_add_user.php">Add User</a><br/>
			<a href ="admin_delete_users.php">Delete Users</a><br/>
			<a href ="admin_request_approval.php">Registration Requests Approval</a><br/>
			<a href ="admin_account_activation.php">Account Activation</a><br/>
			<a href ="admin_log_files.php">User Log Files</a><br/>
		</form>
	</body>
</html>