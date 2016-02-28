<?php
mysql_connect("localhost","root")or die(mysql_error());
/*echo "Successfully connected";
$create="create database myDB";
mysql_query($create);
//echo "Database created successfully";*/
mysql_select_db("myDB");
/*$regTable="create table registerData(firstname varchar(50) not null ,lastname varchar(50) not null ,username varchar(50) not null,password varchar(50) not null ,email varchar(50) not null ,phone varchar(50) not null, PRIMARY KEY(username,email,phone))";
if (mysql_query($regTable)) {
   echo "Table registerData created successfully";
} else {
    echo "Error creating table: " . die(mysql_error());
}*/
$issues="create table issues(issue char(120),solution char(240),email char(50))";
if (mysql_query($issues))
{
echo "Table issues created successfully";
}
else {
    echo "Error creating table: " . die(mysql_error());
}
mysql_close();
?>
