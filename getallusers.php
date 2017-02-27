<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>

<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
</head>

<body>


<script>

$(document).ready(function(){
    $('#myTable').DataTable();
});

</script>


<?php
$q = intval($_GET['q']);

$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM volunteers";
$result = mysqli_query($con,$sql);
//echo "Connected successfully";
/*?>echo "
<div id='filter' class='dataTables_filter'
<label>
Search: <input type='search' class placeholder aria-controls='search'>
</label>
<div>
";<?php */

echo "<table id='myTable' class='display nowrap dataTable dtr-inline' data-searching='true' data-role ='datatable'>
<tr>
<th>Name</th>
<th>ID</th>
<th>Age</th>
<th>Email</th>
<th>Phone Number</th>
<th>Home City</th>
<th>Home State</th>
<th>Total Hours</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['phoneNumber'] . "</td>";
	echo "<td>" . $row['homeCity'] . "</td>";
	echo "<td>" . $row['homeState'] . "</td>";
	echo "<td>" . $row['totalHours'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>