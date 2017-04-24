<?php include "connection.php"; 
//Sending form data to sql db.
$sql_insert = "INSERT INTO home VALUES('$_POST[homeNo]', '$_POST[homeID]', '$_POST[status]', '$_POST[district]', '$_POST[subdistrict]', '$_POST[Province]', '$_POST[Postalcode]' ) ";
mysqli_query($con,$sql_insert); ?>

now insert