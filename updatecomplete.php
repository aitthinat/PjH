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

$sql_update = "UPDATE person 
            SET Citizen_ID = '$txtresult', 
            Title = '$title' , Fname = '$fname', Lname = '$lname', Birth_date = '$Bdate', Tel = '$tel', Education = '$educate', Job = '$job', Salary = '$salary', RWO = '$RWO'  WHERE Citizen_ID='$id'";

mysqli_query($con,$sql_update); ?>
<div>
    <div class="container" style="background:white">
        <div class="row">
            <div class="col-lg-12">
                <div style="width:100%" >
                    <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>แก้ไขข้อมูลเสร็จสิ้น</h1>   
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">คำนำหน้าชื่อ</label>
                        <label class="form-check-label">

                            <h4><label style="padding-right:10px"></label><label style="padding-right:20px"><?php echo $title; ?></label></h4>
                        </label>
                    </div>                    
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">ชื่อ - สกุล</label>
                        <label class="form-check-label">

                            <h4><label style="padding-right:10px"></label><label style="padding-right:20px"><?php echo $fname; ?></label><label><?php echo $lname; ?></label></h4>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">เพศ</label>
                        <label class="form-check-label">
                            <label style="padding-right:10px">
                            <?php if ($sex == 'M') {
                                echo "ชาย";
                            } else {
                                echo "หญิง";
                            }
                            ?>
                            </label>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">รหัสประจำตัวประชาชน</label>
                        <label class="form-check-label">
                            <!-- <label style="padding-right:10px"><?php echo $txtID1;?> - <?php echo $txtID2;?> - <?php echo $txtID3;?> - <?php echo $txtID4;?> - <?php echo $txtID5;?></label> -->
                            <label style="padding-right:10px"><?php echo $txtresult;?></label>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">วันเดือนปีเกิด</label>
                        <label class="form-check-label">
                            <?php  echo $Bdate;?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">สถานะ</label>
                        <label class="form-check-label">
                            <?php  
                            if ($RWO == 1) {
                                echo "เจ้าบ้าน ";
                            } else if ($RWO == 2) {
                                echo "เป็น สามี/ภรรยา กับเจ้าของบ้าน";
                            } else if ($RWO == 3) {
                                echo "เป็น บุตร/หลาน กับเจ้าของบ้าน";
                            } else if ($RWO == 4) {
                                echo "เป็น พี่/น้อง กับเจ้าของบ้าน";
                            } else {
                                echo "เป็น บิดา/มารดา กับเจ้าของบ้าน";
                            }
                            ?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">การศึกษา</label>
                        <label class="form-check-label">
                            <?php 
                            if ($educate == 1) {
                                echo "ไม่ได้ศึกษา";
                            } else if ($educate == 2) {
                                echo "ประถมศึกษา";
                            } else if ($educate == 3) {
                                echo "มัธยมศึกษาตอนต้น";
                            } else if ($educate == 4) {
                                echo "มัธยมศึกษาตอนปลาย หรือ อาชีวะศึกษา";
                            } else {
                                echo "อุดมศึกษา";
                            }
                            ?>
                        </label>
                    </div>
                    <div class="form-group row" style="margin-left:10%;margin-right:10%">
                     <div class="col-10">
                     </div>
                     <div class="col-10">
                     </div>
                 </div>
                 <div class="form-check form-group row" style="margin-left:10%">
                    <label class="col-2 col-form-label">อาชีพ</label>
                    <label class="form-check-label">
                        <label style="padding-right:10px">
                        <?php 
                        if ($job == 1) {
                            echo "เกษตรกรรม";
                        } else if ($job == 2) {
                            echo "รับจ้าง";
                        } else if ($job == 3) {
                            echo "รับราชการ/รัฐวิสาหกิจ";
                        } else if ($job == 4) {
                            echo "ค้าขาย";
                        } else {
                            echo "อื่นๆ";
                        } 


                        ?>
                            
                        </label><label style="padding-right:20px"></label>
                    </label>
                </div>
                <div class="form-check form-group row" style="margin-left:10%">
                <label class="col-2 col-form-label">รายได้</label>
                    <label class="form-check-label">
                        <label style="padding-right:10px">
                        <?php 
                        if ($salary == 1) {
                            echo "ไม่มีรายได้";
                        } else if ($salary == 2) {
                            echo "ต่ำกว่า 5,000 บาท";
                        } else if ($salary == 3) {
                            echo "5,001 - 9,000 บาท";
                        } else if ($salary == 4) {
                            echo "9,001 - 13,000 บาท";
                        } else {
                            echo "มากกว่า 13,000 บาท";
                        } 
                        ?>
                            
                        </label><label style="padding-right:20px"></label>
                    </label>
                </div>
                <div class="form-check form-group row" style="margin-left:10%">
                <label class="col-2 col-form-label">เบอร์โทรศัพท์</label>
                    <label class="form-check-label">
                        <label style="padding-right:10px"><?php echo $tel; ?></label><label style="padding-right:20px"></label>
                    </label>
                </div>
                <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="right">
                    <a href="index.php"><button type="button"  class="btn btn-primary" onclick="Finish_Check()">กลับสู่หน้าหลัก</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>







<?php include "foot.php" ?>