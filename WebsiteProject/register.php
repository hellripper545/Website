<?php
$firstName=(isset($_REQUEST['first_name']) ? $_REQUEST['first_name'] : null);
$lastName=(isset($_REQUEST['last_name']) ? $_REQUEST['last_name'] : null);
$userName=(isset($_REQUEST['username']) ? $_REQUEST['username'] : null);
$pass=(isset($_REQUEST['password']) ? $_REQUEST['password'] : null);
$email=(isset($_REQUEST['Email']) ? $_REQUEST['Email'] : null);
$phone=(isset($_REQUEST['Phone']) ? $_REQUEST['Phone'] : null);
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysql_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysql_error());
}
mysql_select_db("myDB")or die(mysql_error());
$sql="insert into registerData values('$firstName','$lastName','$userName','$pass','$email','$phone')";
if (mysql_query($sql)) {
    echo "New record created successfully";
} else {
    die("Error: " . mysql_error());
}
/*$sql = "SELECT *FROM regTable";
if ($result = mysqli_query($conn, $sql)) {
    while($row = mysqli_fetch_assoc($sql)) {
        echo "id: " . $row["firstName"]. " " . $row["lastname"]. "<br>";
    }
 mysqli_free_result($result);
}*/
mysql_close();
?>
