<!DOCTYPE HTML>
<?php
	session_start();
	if($_SESSION['login']==1 && $_SESSION['user']=="student"){
		header('Location: student_home.php');
		exit;
	}else if($_SESSION['login']==1 && $_SESSION['user']=="instructor"){
		header('Location: instructor_home.php');
		exit;
	}else if($_SESSION['login']==1 && $_SESSION['user']=="encoder"){
		header('Location: encoder_home.php');
		exit;
	}else if($_SESSION['login']==1 && $_SESSION['user']=="admin"){
		header('Location: admin_home.php');
		exit;
	}
	
?>

<html>
	<head>
		<title>
			ICS SAIS
		</title>
	</head>
	<body>
		<form name="home_signup" action="home_signup_redirect.php" method="post">
			<a href="home.php"><< Back </a><br/>
			<h2>Sign-up</h2>
				<table>
					<tr>
						<td>
							<input type="radio" name="signup_role" value="student" required="required"  title="Invalid role."/> Student
							<input type="radio" name="signup_role" value="instructor" required="required"  title="Invalid role."/> Instructor
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="signup_number1" required="required" autocomplete="on" pattern="^(1[0-9]{3}|19(09|[1-9][0-9])|(20((0[0-9])|(1[0-2]))))" maxlength="4" size="4"  title="Invalid student number." placeholder="Role"/>-
							<input type="text" name="signup_number2" required="required" autocomplete="on" pattern="[0-9]{5}" maxlength="5" size="5"  title="Invalid student number." placeholder="Number"/>
						</td>
					</tr>
					<tr>
						<td><input type="text" name="signup_firstname" required="required" autocomplete="on" pattern="^(([A-Z][a-z]*\ )|([A-Z][a-z]*))*"  title="Invalid first name." placeholder="First Name"/></td>
					</tr>
					<tr>
						<td><input type="text" name="signup_lastname" required="required" autocomplete="on" pattern="^(([A-Z][a-z]*\ )|([A-Z][a-z]*))*"  title="Invalid last name." placeholder="Last Name"/></td>
					</tr>
					<tr>
						<td>
							<input type="radio" name="signup_gender" value="Male" required="required"  title="Invalid gender." /> Male
							<input type="radio" name="signup_gender" value="Female" required="required"  title="Invalid gender."/> Female
						</td>
					</tr>
					<tr>
						<td><input type="email" name="signup_emailaddress" required="required" autocomplete="on" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"  title="Invalid email address." placeholder="Email Address"/></td>
					</tr>
					<tr>
						<td><input type="text" name="signup_username" required="required" autocomplete="on" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]{8,}$"  title="Invalid username." placeholder="Username"/></td>
					</tr>
					<tr>
						<td><input type="password" name="signup_password" required="required" autocomplete="on" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]{8,}$"  title="Invalid password." placeholder="Password"/></td>
						<?php
							if($_SESSION["signup_password_match_error"]==1){
								echo "<td>Passwords do not match!</td>";
								$_SESSION["signup_password_match_error"]=0;
							}
						?>
					</tr>
					<tr>
						<td><input type="password" name="signup_password_retype" required="required" autocomplete="on" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]{8,}$"  title="Invalid password." placeholder="Retype Password"/></td>
					</tr>
					<tr>
						<td><input type="submit" name="signup_submit" value="Sign Up"/></td>
					</tr>
				</table>

		</form>
	</body>
	
</html>

