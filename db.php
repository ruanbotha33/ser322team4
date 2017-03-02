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
        $this->con=mysql_connect($this->host,$this->user,$this->pass);
        if(!$this->con)
        {
            echo mysql_error();
        }
        $sel=mysql_select_db($this->data, $this->con);
        if(!$sel)
        {
            echo mysql_error();
        }
    }
    public function insert($fname,$lname,$email,$phone,$city,$state)
    {
    	//Edit this to match your query
        $sql=mysql_query("INSERT INTO volunteers(name, number) VALUES('$name', '$number')");
        if(!$sql)
        {
            echo mysql_error();
        }
    }
}
}
?>

</body>
</html>