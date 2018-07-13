<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM volunteers WHERE Name = '".$q."'";
$result = mysqli_query($con,$sql);
echo "Connected successfully";
echo "<table>
<tr>
<th>Name</th>
<th>ID</th>
<th>Age</th>
<th>Home City</th>
<th>Home State</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['homeCity'] . "</td>";
    echo "<td>" . $row['homeState'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>