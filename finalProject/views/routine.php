<?php 
	require_once('../controller/headerCookie.php');
?>

<html>
<head>
	<title>Notice</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--Top Menu-->
	<?php echo file_get_contents("html/topMenu.html"); ?>

	<section id="body">
		<?php echo file_get_contents("html/sideMenuS.html"); ?>
		<!---------------------------------------------------------------------------------------------------------------------------------------Content----------------------------------------------------------------------------------------------------------------------------------------------->
		<div id="content">
			<div id="notice">
				<h2>TIME TABLE</h2>
				<div id="notice_table">
					<table >
						
	<table width="100%" height="100" border=1 cellspacing="5" bgcolor="#FFCC99">
		<!--<caption>Timetable</caption>-->
		<tr>
			<td align="center" height="50"
				width="100"><br>
				<b>Day/Period</b></br>
			</td>
			<td align="center" height="50"
				width="100">
				<b>I<br>9:30-10:20</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>II<br>10:20-11:10</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>III<br>11:10-12:00</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>12:00-12:40</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>IV<br>12:40-1:30</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>V<br>1:30-2:20</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>VI<br>2:20-3:10</b>
			</td>
			<td align="center" height="50"
				width="100">
				<b>VII<br>3:10-4:00</b>
			</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Monday</b></td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Mat</td>
			<td align="center" height="50">Che</td>
			<td rowspan="6" align="center" height="50">
				<h2>L<br>U<br>N<br>C<br>H</h2>
			</td>
			<td colspan="3" align="center"
				height="50">LAB</td>
			<td align="center" height="50">Phy</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Tuesday</b>
			</td>
			<td colspan="3" align="center"
				height="50">LAB
			</td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Che</td>
			<td align="center" height="50">Mat</td>
			<td align="center" height="50">SPORTS</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Wednesday</b>
			</td>
			<td align="center" height="50">Mat</td>
			<td align="center" height="50">phy</td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Che</td>
			<td colspan="3" align="center"
				height="50">Arts
			</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Thursday</b>
			</td>
			<td align="center" height="50">Phy</td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Che</td>
			<td colspan="3" align="center"
				height="50">LAB
			</td>
			<td align="center" height="50">Mat</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Friday</b>
			</td>
			<td colspan="3" align="center"
				height="50">LAB
			</td>
			<td align="center" height="50">Mat</td>
			<td align="center" height="50">Che</td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Phy</td>
		</tr>
		<tr>
			<td align="center" height="50">
				<b>Saturday</b>
			</td>
			<td align="center" height="50">Eng</td>
			<td align="center" height="50">Che</td>
			<td align="center" height="50">Mat</td>
			<td colspan="3" align="center"
				height="50">SEMINAR
			</td>
			<td align="center" height="50">SPORTS</td>
		</tr>
	</table>
			</td>
		</tr>
	</table>
					
				</div>
			</div>
		</div>
	</section>

	<!--Footer-->
	<?php echo file_get_contents("html/footer.html"); ?>
</body>
</html>
