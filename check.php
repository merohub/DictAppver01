<?php

    $word = $_POST['word'];

    //$password = $_POST['password'];

   // echo $word;

    //echo $lastName;

mysql_connect("mysql11.000webhost.com","a4377512_hitlar","!webhost123") or die(mysql_error());
mysql_select_db("a4377512_login") or die(mysql_error());
//mysql_connect("mysql11.000webhost.com","a4377512_hitlar","!webhost123") or die(mysql_error());
//mysql_select_db("a4377512_login") or die(mysql_error());
$sql = mysql_query("SELECT * FROM words WHERE word='$word' LIMIT 1");

$row = mysql_num_rows($sql);

if($row>0)
{
	while($row = mysql_fetch_array($sql)){

		$word = $row[1];
		$mean = $row[2];


		echo "<strong>".$word ."</strong><br/><br/>".$mean ; }   	
}

else
echo "No such word found";



?>