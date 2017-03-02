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

<br />Activities with less than 10 volunteers: <br />
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM id899930_volunteers.activities WHERE numVolunteers < 10";
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
<th>eventName</th>
<th>numVolunteers</th>
<th>eventID</th>
<th>locationID</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['eventName'] . "</td>";
    echo "<td>" . $row['numVolunteers'] . "</td>";
    echo "<td>" . $row['eventID'] . "</td>";
    echo "<td>" . $row['locationID'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

<br />Activities at Location ID 1: <br />
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM id899930_volunteers.activities WHERE locationID = 1";
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
<th>eventName</th>
<th>numVolunteers</th>
<th>eventID</th>
<th>locationID</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['eventName'] . "</td>";
    echo "<td>" . $row['numVolunteers'] . "</td>";
    echo "<td>" . $row['eventID'] . "</td>";
    echo "<td>" . $row['locationID'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

<br />Side Branch Locations: <br />
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM id899930_volunteers.locations WHERE type = 'Side Branch'";
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
<th>type</th>
<th>locationID</th>
<th>streetAddress</th>
<th>city</th>
<th>state</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['locationID'] . "</td>";
    echo "<td>" . $row['streetAddress'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['state'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

<br />Locations in Phoenix: <br />
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM id899930_volunteers.locations WHERE city = 'Phoenix'";
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
<th>type</th>
<th>locationID</th>
<th>streetAddress</th>
<th>city</th>
<th>state</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['type'] . "</td>";
    echo "<td>" . $row['locationID'] . "</td>";
    echo "<td>" . $row['streetAddress'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['state'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

<br />Schedules with event ID 5: <br />
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM id899930_volunteers.schedules WHERE eventID = 5";
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
<th>volunteerID</th>
<th>locationID</th>
<th>startDate</th>
<th>endDate</th>
<th>eventID</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['volunteerID'] . "</td>";
    echo "<td>" . $row['locationID'] . "</td>";
    echo "<td>" . $row['startDate'] . "</td>";
    echo "<td>" . $row['endDate'] . "</td>";
    echo "<td>" . $row['eventID'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

<br />Schedules starting on 11/11/2016: <br />
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM id899930_volunteers.schedules WHERE startDate = '11/11/2016'";
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
<th>volunteerID</th>
<th>locationID</th>
<th>startDate</th>
<th>endDate</th>
<th>eventID</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['volunteerID'] . "</td>";
    echo "<td>" . $row['locationID'] . "</td>";
    echo "<td>" . $row['startDate'] . "</td>";
    echo "<td>" . $row['endDate'] . "</td>";
    echo "<td>" . $row['eventID'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

<br />Volunteers over age 30: <br />
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM id899930_volunteers.volunteers WHERE Age > 30";
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
<th>email</th>
<th>phoneNumber</th>
<th>homeCity</th>
<th>homeState</th>
<th>totalHours</th>
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

<br />Volunteers who's home state is California: <br />
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM id899930_volunteers.volunteers WHERE homeState = 'California'";
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
<th>email</th>
<th>phoneNumber</th>
<th>homeCity</th>
<th>homeState</th>
<th>totalHours</th>
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

<br />Volunteers who worked less than 3 hours: <br />
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM id899930_volunteers.volunteertime WHERE totalTime < 3";
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
<th>volunteerID</th>
<th>checkIn</th>
<th>checkOut</th>
<th>totalTime</th>
<th>locationID</th>
<th>totalHours</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['volunteerID'] . "</td>";
    echo "<td>" . $row['checkIn'] . "</td>";
    echo "<td>" . $row['checkOut'] . "</td>";
    echo "<td>" . $row['totalTime'] . "</td>";
    echo "<td>" . $row['locationID'] . "</td>";
    echo "<td>" . $row['totalHours'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

<br />Volunteers who worked at location ID 3: <br />
<?php
$q = intval($_GET['q']);
$con = mysqli_connect('botha.asuscomm.com','ser322team4','Database1','id899930_volunteers');
if (!$con) {
	echo "mysqli_error($con)";
    die('Could not connect: ' . mysqli_error($con));
}
mysqli_select_db($con,"id899930_volunteers");
$sql="SELECT * FROM id899930_volunteers.volunteertime WHERE locationID = 3";
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
<th>volunteerID</th>
<th>checkIn</th>
<th>checkOut</th>
<th>totalTime</th>
<th>locationID</th>
<th>totalHours</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['volunteerID'] . "</td>";
    echo "<td>" . $row['checkIn'] . "</td>";
    echo "<td>" . $row['checkOut'] . "</td>";
    echo "<td>" . $row['totalTime'] . "</td>";
    echo "<td>" . $row['locationID'] . "</td>";
    echo "<td>" . $row['totalHours'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>
