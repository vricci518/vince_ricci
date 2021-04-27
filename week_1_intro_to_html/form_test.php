<!DOCTYPE HTML>
<html>

<head>
	<title>PHP Test</title>
</head>

<body>
	<h1>PHP Test Form</h1>
	<form action="form_test.php" method="post">
		FIRST NAME: <input type="text" name="first_name" /><br />
		LAST NAME: <input type="text" name="last_name" /><br />
		CITY: <input type="text" name="city" /><br />
		<input type="submit" name="submit_btn" value="Submit">
	</form>

	<?php
	if (isset($_POST['submit_btn'])) {
		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$city = $_POST['city'];
	}
	echo "<h2>PHP Test Input:</h2>";
	echo "$firstname ", "$lastname";
	echo "<br/>";
	echo $city;
	?>

	<div>
		<a href="index.html">Home</a>
	</div>
</body>

</html>