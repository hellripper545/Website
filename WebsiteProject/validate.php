<?php
$a=$_REQUEST["login_id"];
$b=$_REQUEST["pwd"];
$servername = "localhost";
$username = "root";
$password = "";
if($a==""&&$b=="")
{
echo "<center><p>User name and pass word should not be null</p></center>";
}
$conn = mysql_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysql_error());
}
mysql_select_db("myDB")or die(mysql_error());
$c="select username,password from registerData";
$d=mysql_query($c);
$flag=0;
while($e=mysql_fetch_array($d))
{
	if($a==$e['username']&&$b==$e['password']){ $flag=1; break; }
}
if($flag==1)
{
include("home.php");
echo "<p style='font-family:garamound;font-size:25px;color:black;align-text:right;'>Welcome " .$e['username']. "</p>";
include("home1.php");
}
else
{
echo "<center> <p style='font-family:garamound;font-size:40px;color:red'> Invalid user</p></center>";
}
mysql_close();
?>

