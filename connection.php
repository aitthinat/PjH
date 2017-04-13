<?php
    $db = mysqli_connect("127.0.0.1","root","","health") or die ("Error: . mysqli_connect($db)");
    mysqli_query($db, "SET NAMES 'utf8' ");
?>