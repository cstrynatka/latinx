CREATE TABLE `newsletter_signups` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` text NOT NULL,
 `email` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1

<?php

$host="localhost";
$username="root";
$password="";
$databasename="sample";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['submit_form']))
{
 $name=$_POST["user_name"];
 $email=$_POST["email"];
 
 mysql_query("insert into short_urls values('','$name','$email')");
 echo "Thank You For Joining Our Newsletter";
}
?>