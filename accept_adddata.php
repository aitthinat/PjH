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
?>





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
                            <h4><label style="padding-right:10px">นาย</label><label style="padding-right:20px">คำ</label><label>หัวดำ</label></h4>
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
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="form-check-label" style="margin-left:5%">
                            <input class="form-check-input" type="radio" name="Drink" id="drink0" value="0"> ไม่ดื่ม
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="radio" name="Drink" id="drink1" value="1"> 1-5
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="radio" name="Drink" id="drink2" value="2"> 6-10
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="radio" name="Drink" id="drink3" value="3"> 11-15
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="radio" name="Drink" id="drink4" value="4"> 15ครั้งขึ้นไป
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                    <label class="col-5 col-form-label">พฤติกรรมการสูบบุหรี่(จำนวนมวนต่อวัน)</label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="form-check-label"  style="margin-left:5%">
                            <input class="form-check-input" type="radio" name="Smoke" id="Smoke0" value="0"> ไม่สูบ
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="radio" name="Smoke" id="Smoke1" value="1"> 1-5
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="radio" name="Smoke" id="Smoke2" value="2"> 6-10
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="radio" name="Smoke" id="Smoke3" value="3"> 11-19
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="radio" name="Smoke" id="Smoke4" value="4"> 1 ซองขึ้นไป
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                    <label class="col-5 col-form-label">พฤติกรรมการออกกำลังกาย (วันต่อสัปดาห์)</label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="form-check-label"  style="margin-left:5%">
                            <input class="form-check-input" type="radio" name="exercise" id="exercise0" value="0" onclick="disabled_TE()">ไม่ได้ออกกำลังกาย
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="radio" name="exercise" id="exercise1" value="1" onclick="enabled_TE()">1-3 วัน
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="radio" name="exercise" id="exercise2" value="2" onclick="enabled_TE()">มากกว่า 4-7 วัน
                        </label>
                    </div>
                    <div class="form-check" >
                        <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">จำนวนชั่วโมงในวันที่ออกกำลังกาย</label>
                        </div>
                        <div class="form-check form-group row" style="margin-left:10%">
                            <label class="form-check-label"  style="margin-left:5%">
                                <input class="form-check-input" type="radio" name="time-exercise" value="0" id="TE1" disabled>น้อยกว่า 1 ชั่วโมง
                            </label>
                            <label class="form-check-label" style="margin-left:2%">
                                <input class="form-check-input" type="radio" name="time-exercise" value="1" id="TE2" disabled>1-3 ชั่วโมง
                            </label>
                            <label class="form-check-label" style="margin-left:2%">
                                <input class="form-check-input" type="radio" name="time-exercise" value="2" id="TE3" disabled>มากกว่า 3 ชั่วโมง
                            </label>
                        </div>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                    <label class="col-5 col-form-label">สภาพแวดล้อมบริเวณที่เป็นอยู่</label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="form-check-label"  style="margin-left:5%">
                            <input class="form-check-input" type="checkbox" id="homearea1" name="homeArea1" value="0" aria-label="...">มีแอ่งน้ำ หรือ พื้นที่น้ำขัง
                        </label>
                        <label class="form-check-label" style="margin-left:2%">
                            <input class="form-check-input" type="checkbox" id="homearea2" name="homeArea2" value="1" aria-label="...">ใกล้โรงงาน
                        </label>
                    </div>
                    


                </div>


                
                <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>







<?php include "foot.php" ?>