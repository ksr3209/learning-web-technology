<?php 
	require_once('../controller/headerCookie.php');

	$uname =  $_SESSION['uname'];
	$file = fopen('../model/user.txt', 'r');
	while(!feof($file)){
		$user = fgets($file);
		$userArray = explode('|', $user);

		if(trim($userArray[1]) == $uname){
			$userData = $userArray;
			break;
		}
	}
?>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	
	<!-- Menu -->
	<table border="0" width="100%" height="100px">
		<tr>
			<td align="left">
				<img src="img/logo.png" width="100px" height="100px">
			</td>
			<td align="right">
				<h3>
					<a href="studentProfile.php">Profile</a> |
					<a href="../controller/logout.php"> Logout </a>
				</h3>
			</td>
		</tr>
	</table>
	<hr>

<!-- Content -->
	<table border="0" width="100%" height="500px">
		<tr>
			<td align="center" width="20%" valign="top">
				<table border="1"  width="100%" >
					<tr>
						<td align="center" height="50px">
							<a href="studentHome.php">Home</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="adminNotice.php">Notice</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="grading.php">Grading system</a>
						</td>
					</tr>
					<tr>
						<td align="center" height="50px">
							<a href="routine.php">Routine</a>
						</td>
					</tr>
				</table>
			</td>
			<td width="10%"></td>
			<td width="70%">
				<!-- Here -->
				<table>
					<tr>
						<td align="center"><img src="img/wc.png"></td>
						<td width="100px"></td>
						<td><h1><?=$userData[1]?></h1></td>
					</tr>
				</table>				
			</td>
		</tr>
	</table>

<!-- Footer -->	
	<hr>
	<table border="0" width="100%" height="50px">
		<tr>
			<td colspan="2" align="center">
				Copyright ~ Web Technology, Section: H, Group: 3
			</td>
		</tr>
	</table>
	
</body>
</html>