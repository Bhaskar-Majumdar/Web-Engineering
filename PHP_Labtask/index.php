<?php  include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Student_Info</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<form method="post" action="server.php" >
		<div class="input-group">
			<label>FName</label>
			<input type="text" name="fname" value="">
		
		</div>
		<div class="input-group">
			<label>LName</label>
			<input type="text" name="lname" value="">
		</div>

		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>

		<div class="input-group">
				<button class="btn" name="save" type="submit" >Now Submit</button>
		</div>
	</form>
</body>

<table>
	<thead>
		<tr>
			<th>FName</th>
			<th>LName</th>
			<th>Address</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['fname']; ?></td>
			<td><?php echo $row['lname']; ?></td>
			<td><?php echo $row['address']; ?></td>
		</tr>
	<?php } ?>
</table>

</html>