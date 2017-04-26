<?php include "head.php" ?>
<?php include "connection.php"; 
//Sending form data to sql db.
$sql_insert = "INSERT INTO home VALUES('$_POST[homeNo]', '$_POST[homeID]', '$_POST[status]', '$_POST[district]', '$_POST[subdistrict]', '$_POST[Province]', '$_POST[Postalcode]' ) ";
mysqli_query($con,$sql_insert); ?>

<div>
    <div class="container" style="background:white">
        <div class="row">
            <div class="col-lg-12">
                <div style="width:100%" >
                    <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>เพิ่มข้อมูลเสร็จสิ้น</h1>   
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