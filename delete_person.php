<?php include "head.php" ?>
<?php include "connection.php"; 
    $id = $_GET['id'];
//Sending form data to sql db.
$sql_delete = " DELETE FROM person WHERE Citizen_ID = '$id' ";
mysqli_query($con,$sql_delete); ?>


<div>
    <div class="container" style="background:white">
        <div class="row">
            <div class="col-lg-12">
                <div style="width:100%" >
                    <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>ลบข้อมูลเสร็จสิ้น</h1>   
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