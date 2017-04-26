<?php include "head.php" ?>
<?php include "connection.php"; 
//Sending form data to sql db.
$id = $_GET['id'];
$title = $_POST["title"]; 
$fname = $_POST["fname"]; 
$lname = $_POST["lname"]; 
$sex = $_POST["sex"]; 
$txtID1 = $_POST["txtID1"]; 
$txtID2 = $_POST["txtID2"]; 
$txtID3 = $_POST["txtID3"]; 
$txtID4 = $_POST["txtID4"]; 
$txtID5 = $_POST["txtID5"]; 
$txtresult = $txtID1.$txtID2.$txtID3.$txtID4.$txtID5;

$Bdate = $_POST["Bdate"];

$status = $_POST["status"]; 
if ($status == "1") {
    $RWO = "1";
} else {
    $RWO = $_POST["RWO"]; 
}
$educate = $_POST["educate"]; 
$job = $_POST["job"]; 
$salary = $_POST["salary"]; 
$tel = $_POST["tel"]; 

$sql_update = "UPDATE person SET Citizen_ID = '$txtresult', Title = '$title' , Fname = '$fname', Lname = '$lname', Birth_date = '$Bdate', Tel = '$tel', Education = $educate, Job = $job, Salary = $salary, RWO = '$RWO' ;   WHERE Citizen_ID='$id'";
mysqli_query($con,$sql_update); ?>
<div>
    <div class="container" style="background:white">
        <div class="row">
            <div class="col-lg-12">
                <div style="width:100%" >
                    <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>แก้ไขข้อมูลเสร็จสิ้น</h1>   
                    </div>
                <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="right">
                    <a href="index.php"><button type="button" class="btn btn-primary" onclick="Finish_Check()">กลับสู่หน้าหลัก</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>







<?php include "foot.php" ?>