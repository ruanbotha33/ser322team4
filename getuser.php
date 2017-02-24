<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('8471.us-imm-sql1.000webhost.io','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM volunteers WHERE Name LIKE '".$q."%'";
$result = mysqli_query($con,$sql);
echo "Connected successfully";
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email Address</th>
<th>Hometown</th>
<th>City</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Email Address'] . "</td>";
    echo "<td>" . $row['Hometown'] . "</td>";
    echo "<td>" . $row['City'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>