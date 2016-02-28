<?php
$a=$_REQUEST["textarea1"];
$b=$_REQUEST["textarea2"];
$c=$_REQUEST["email"];
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysql_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysql_error());
}
mysql_select_db("myDB")or die(mysql_error());
if($a>0 && $b>0 && $c>0){
$a="insert into issues values('$a','$b','$c')";
mysql_query($a);
echo "<center><p style:'font-size:20px;font-family:arial;color:gray;'>Thanks for your response,we will soon look into it.</p></center>";
}
else {
echo "<center><p style:'font-size:20px;font-family:arial;color:gray;'>Atleast enter the issue :)</p></center>";
}
mysql_close();
?>
<html>
 <head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title></title>
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"/>
 </head>
<body bgcolor="F0F0F0">
 <center>
   <div class="card-panel yellow lighten-3">
    <form action="index.html">
	<button class="btn waves-effect waves-light" type="submit" name="action">Back to home
    </form>
   </div>
  </center>
 </body>
</html> 
