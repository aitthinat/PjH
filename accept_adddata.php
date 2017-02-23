<?php include "head.php" ?>

<?php 
$blood = $_POST["BloodGroup"]; 
$SYS = $_POST["SYS"];
$DIA = $_POST["DIA"];
$weight = $_POST["weight"];
$height = $_POST["height"];
$Drink = $_POST["Drink"];
$Smoke = $_POST["Smoke"];
$exercise = $_POST["exercise"];

if ($exercise != 0) {
    $texercise = $_POST["time-exercise"]; 
}
if (!empty($_POST["homeArea1"])) {
    $homeArea1 = $_POST["homeArea1"];
}
if (!empty($_POST["homeArea2"])) {
    $homeArea2 = $_POST["homeArea2"];
}
if ($exercise == 0) {
    $tname = "นาง";
    $fname = "จันทร์";
    $lname = "คำใหญ่";
} else {
    $tname = "นาย";
    $fname = "คำ";
    $lname = "หัวดำ";
}
?>
<script language="Javascript">
    function Finish_Check() {
      alert("ยืนยันข้อมูลเสร็จสิ้น กำลังกลับสู่เมนูหลัก");
}

</script>






<div>
    <div class="container" style="background:white">
        <div class="row">
            <div class="col-lg-12">
                <div style="width:100%" >
                    <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>ตรวจสอบข้อมูลการบันทึกข้อมูลการตรวจสุขภาพ</h1>   
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">ชื่อ - สกุล</label>
                        <label class="form-check-label">

                            <h4><label style="padding-right:10px"><?php echo $tname; ?></label><label style="padding-right:20px"><?php echo $fname; ?></label><label><?php echo $lname; ?></label></h4>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">กรุ๊ปเลือด</label>
                        <label class="form-check-label">
                            <label style="padding-right:10px"><?php echo $blood; ?></label>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">ความดันโลหิต</label>
                        <label class="form-check-label">
                            <label style="padding-right:10px"><?php echo $SYS; ?> / <?php echo $DIA; ?></label>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">น้ำหนัก</label>
                        <label class="form-check-label">
                            <?php echo $weight; ?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">ส่วนสูง</label>
                        <label class="form-check-label">
                            <?php echo $height; ?>
                        </label>
                    </div>
                    <div class="form-group row" style="margin-left:10%;margin-right:10%">
                       <div class="col-10">
                       </div>
                       <div class="col-10">
                       </div>
                   </div>
                   <div class="form-check form-group row" style="margin-left:10%">
                    <label class="col-2 col-form-label">อายุ</label>
                    <label class="form-check-label">
                        <label style="padding-right:10px">58</label><label style="padding-right:20px">ปี</label>
                    </label>
                </div>
                <div class="form-check form-group row" style="margin-left:10%">
                    <label class="col-8 col-form-label">ข้อมูลในช่วง 1 ปีที่ผ่านมา</label>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">พฤติกรรมการดื่มสุา(จำนวนครั้งต่อสัปดาห์)</label>
                        <label class="form-check-label">
                            <?php
                            if ($Drink == 0) {
                                echo "ไม่ดื่มสุรา";
                            } else if ($Drink == 1) {
                                echo "1-2 ครั้ง / สัปดาห์";
                            } else if ($Drink == 2) {
                                echo "3-5 ครั้ง / สัปดาห์";
                            } else if ($Drink == 3) {
                                echo "6 ครั้งขึ้นไป / สัปดาห์";
                            } 
                            ?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">พฤติกรรมการสูบบุหรี่(จำนวนมวนต่อวัน)</label>
                        <label class="form-check-label">
                            <?php
                            if ($Smoke == 0) {
                                echo "ไม่สูบบบุหรี่";
                            } else if ($Smoke == 1) {
                                echo "1-5 มวล";
                            } else if ($Smoke == 2) {
                                echo "6-10 มวล";
                            } else if ($Smoke == 3) {
                                echo "11-19";
                            } else{
                                echo "1 ซองขึ้นไป";
                            }
                            ?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">พฤติกรรมการออกกำลังกาย (วันต่อสัปดาห์)</label>
                        <label class="form-check-label">
                            <?php
                            if ($exercise == 0) {
                                echo "ไม่ได้ออกกำลังกาย";
                            } else if ($exercise == 1) {
                                echo "1-3 วัน";
                            } else if ($exercise == 2) {
                                echo "มากกว่า 3 ชั่วโมง";
                            }
                            ?>
                            
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">จำนวนชั่วโมงในวันที่ออกกำลังกาย</label>
                        <label class="form-check-label">
                            <?php
                            if ($exercise == 0) {
                                echo "-"; 
                            } else {
                                if ($texercise == 0) {
                                    echo "น้อยกว่า 1 ชั่วโมง";
                                } else if ($texercise == 1) {
                                    echo "1-3 ชั่วโมง";
                                } else {
                                    echo "มากกว่า 3 ชั่วโมง";
                                } 
                            }
                            
                            ?></label>
                        </div>

                        <div class="form-check form-group row" style="margin-left:10%">
                            <label class="col-5 col-form-label">สภาพแวดล้อมบริเวณที่เป็นอยู่</label>
                            <label class="form-check-label">
                            <?php
                            if (empty($_POST["homeArea1"]) && empty($_POST["homeArea2"])) {
                                echo "สภาพแวดล้อมปกติ"; 
                            } else {
                                if (!empty($_POST["homeArea1"])) {
                                    echo "มีแอ่งน้ำ / น้ำขัง ";
                                }
                                if (!empty($_POST["homeArea1"]) && !empty($_POST["homeArea2"])) {
                                    echo "  และ  ";
                                }
                                if (!empty($_POST["homeArea2"])) {
                                    echo "ใกล้โรงงาน";
                                }
                            }
                            ?>
                            </label>
                        </div>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="right">
                        <a href="index.php"><button type="button" class="btn btn-primary" onclick="Finish_Check()">ยืนยันข้อมูล</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<?php include "foot.php" ?>