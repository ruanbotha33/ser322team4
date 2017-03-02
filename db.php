<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
class db
{
	public $host;
    public $user;
    public $pass;
    public $data;
    public $con;
    public $table;
	
    function db()
    {
        $this->host="botha.asuscomm.com";
        $this->user="ser322team4";
        $this->pass="Database1";
        $this->data="id899930_volunteers";   
    }   
    public function connect()
    {
		$this->con = mysqli_connect($this->host,$this->user,$this->pass,$this->data);
       	if (!$this->con) {
			echo "mysqli_error($this->con)";
   	 		die('Could not connect: ' . mysqli_error($this->con));
		}
        mysqli_select_db($this->con,"id899930_volunteers");
    }
    public function insert($name,$age,$email,$phone,$city,$state)
    {
    	//Edit this to match your query
        $sql=mysqli_query($this->con,"INSERT INTO volunteers(Name,ID,Age,email,phoneNumber,homeCity,homeState,totalHours) VALUES('$name',DEFAULT, 													'$age','$email','$phone','$city','$state',0)");
        if(!$sql)
        {
            echo mysqli_error($this->con);
        }
		if($sql)
            header('Location:http://ser-322team4.000webhostapp.com/newvolunteer.html?msg=added successfully');
			
		mysqli_close($this->con);
    }
	
}
?>

</body>
</html>