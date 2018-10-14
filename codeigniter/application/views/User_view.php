<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
<table>
	<tr>
		<th>UserId</th>
	<th>Username</th>
	<th>Email</th>
	</tr>
	<?php
	foreach ($userArray as $key => $value) {
	echo "<tr>
	<td>". $value['UserId']."</td>
	<td>". $value['Username']."</td>
	<td>". $value['Email']."</td>
	</tr>";
	}
	?>
	
</table>
</body>
</html>

<?php
/*echo "<pre>";
print_r($userArray);
echo "</pre>"; */
?>