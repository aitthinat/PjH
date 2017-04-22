<?php include "head.php" ?>
<?php include "connection.php" ?>
<?php session_start(); ?>
<script language="Javascript">
  function disabled_TE()
  {
    document.getElementById("TE1").disabled = true;
    document.getElementById("TE2").disabled = true;
    document.getElementById("TE3").disabled = true;
  }
  function enabled_TE()
  {
    document.getElementById("TE1").disabled = false;
    document.getElementById("TE2").disabled = false;
    document.getElementById("TE3").disabled = false;
  }
  function validateForm() {
   var sys = document.forms["myForm"]["SYS"].value;
   var bg = document.forms["myForm"]["BloodGroup"].value;
   var dia = document.forms["myForm"]["DIA"].value;
   var fbs = document.forms["myForm"]["FBS"].value; 
   var w = document.forms["myForm"]["weight"].value;
   var h = document.forms["myForm"]["height"].value;
   var d = document.forms["myForm"]["Drink"].value;
   var s = document.forms["myForm"]["Smoke"].value;
   var ex = document.forms["myForm"]["exercise"].value;
   var tex = document.forms["myForm"]["time-exercise"].value;
   var fbs = documet.forms["myForm"]["FBS"].value;
   var food = document.forms["myForm"]["Food"].value;
   var into = document.forms["myForm"]["into"].value;
   var disa = document.forms["myForm"]["disa"].value;
   var date = document.forms["myForm"]["date"].value;
   var chr = document.forms["myForm"]["chr"].value;
   var selfh = document.forms["myForm"]["sh"].value;
   if ( sys == null || sys == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  } 
  if ( bg == null || bg == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( dia == null || dia == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( fbs == null || fbs == "" ){
      alert("กรุณากรอกข้อมูลให้ครบถ้วน");
      return false;
  }
  if ( w == null || w == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( h == null || h == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( d == null || d == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( s == null || s == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( ex == null || ex == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if (( ex == "1" || ex == "2" )&&(tex == null || tex =="")) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( disa == null || disa == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if (( disa == "1")&&(selfh == null || selfh =="")) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }

}

</script>
<div>
<div class="row">
<div class="form-check form-group col" style="margin-left:10%">
    <label class="col-form-label"><a href="adddata-old-case-edit.php" style="color: red"><u>แก้ไขข้อมูล</u></a></label>
  </div>
  <div class="form-check form-group col" style="margin-right:10%" align="right">
    <label class="col-form-label"><a href="#" style="color: red"><u>ดูข้อมูลย้อนหลัง</u></a></label>
  </div>
</div>
    <div class="container" style="background:white" d>
      <div class="row">
        <div class="col-lg-12">
          <div style="width:100%" >
            <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>บันทึกข้อมูลการตรวจสุขภาพ</h1></div>
            <form name="myForm" action="accept_adddata.php" method="post" onsubmit="return validateForm()">
              <div class="form-group row" style="margin-left:10%;margin-right:10%" id="lname_div">
            <label class="col-2 col-form-label">วันที่</label>
            <div class="col-10">
              <input disabled ="" class="form-control" type="date" class="form-control" id="date" placeholder="Date" maxlength="0">
            </div>
            </div>
              <div class="form-check form-group row" style="margin-left:10%">
                <label class="col-2 col-form-label">ชื่อ - สกุล</label>
                <label class="form-check-label">
                  <h4><label style="padding-right:10px">
                      <?php 
                        $sql = "SELECT Title FROM person,Home WHERE HomeNo = '$findhome' "; 
                        $result = mysqli_query($con,$sql);
                      ?>
                      </label><label style="padding-right:20px">
                      <?php 
                        $sql = "SELECT Fname FROM person,Home WHERE HomeNo = '$findhome ";
                        $result = mysqli_query($con,$sql);
                      ?>
                      </label><label>
                      <?php 
                        $sql = "SELECT Lname FROM person,Home WHERE HomeNo = '$findhome' "; 
                        $result = mysqli_query($con,$sql);
                      ?>
                      </label></h4>
                </label>
              </div>
              <div class="form-check form-group row" style="margin-left:10%">
                <label class="col-2 col-form-label">กรุ๊ปเลือด</label>
                <label class="form-check-label">
                  <input disabled="" class="form-check-input" type="radio" name="BloodGroup" id="inlineRadioA" value="A"> A
                </label>
                <label class="form-check-label" style="margin-left:2%">
                  <input disabled="" class="form-check-input" type="radio" name="BloodGroup" id="inlineRadioB" value="B"> B
                </label>
                <label class="form-check-label" style="margin-left:2%">
                  <input disabled="" class="form-check-input" type="radio" name="BloodGroup" id="inlineRadioAB" value="AB" checked=""> AB
                </label>
                <label class="form-check-label" style="margin-left:2%">
                  <input disabled="" class="form-check-input" type="radio" name="BloodGroup" id="inlineRadioO" value="O"> O
                </label>
              </div>
              <div class="form-group row" style="margin-left:10%;margin-right:10%">
                <label class="col-2 col-form-label">ความดันโลหิต</label>
                <div class="col-10">
                  <input disabled="" class="form-control" type="number" id="SYS" name="SYS" placeholder="SYS" min="1" max="999" value="119">
                  <input disabled="" class="form-control" type="number" id="DIA" name="DIA"  placeholder="DIA" min="1" max="999" value="78">
                </div>
              </div>
              <div class="form-group row" style="margin-left:10%;margin-right:10%">
                  <label class="col-2 col-form-label">ระดับน้ำตาลในเลือด</label>
                <div class="col-10">
                  <input disabled="" class="form-control" type="number" id="FBS" name="FBS" placeholder="FBS" min="1" max="999" value="119">
                </div>
              </div>
              <div class="form-group row" style="margin-left:10%;margin-right:10%">
               <label class="col-2 col-form-label">น้ำหนัก</label>
               <div class="col-10">
                <input disabled="" class="form-control" type="number" id="weight" name="weight" placeholder="kilogram" min="1" max="999" value="49">
              </div>
              <label class="col-2 col-form-label">ส่วนสูง</label>
              <div class="col-10">
                <input disabled="" class="form-control" type="number" id="height" name="height" placeholder="meter" min="1" max="999" value="160">
              </div>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-2 col-form-label">อายุ</label>
              <label class="form-check-label">
                <label style="padding-right:10px">
                    <?php 
                        $sql = "SELECT YEAR(CURRENT_TIMESTAMP) - YEAR(Birth_date)-(RIGHT(CURRENT_TIMESTAMP), 5) < RIGHT(Birth_date) FROM person WHERE fname = ";
                        $result = mysqli_query($con,$sql);
                    ?>
                  </label><label style="padding-right:20px">ปี</label>
              </label>
            </div>
                <div class="form-group row" style="margin-left:10%;margin-right:10%" id="fname_div">
              <label class="col-2 col-form-label">โรคประจำตัว</label>
              <div class="col-10">
                <input disabled="" class="form-control" type="text" id="chr" name="chr" placeholder="โรคประจำตัว" onkeyup="clean_not_char(this)" onkeydown="clean_not_char(this)">
              </div>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="fname_div">
              <label class="col-2 col-form-label">การแพ้ยา</label>
              <div class="col-10">
                <input disabled="" class="form-control" type="text" id="into" name="into" placeholder="การแพ้ยา" onkeyup="clean_not_char(this)" onkeydown="clean_not_char(this)">
              </div>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="fname_div">
              <label class="col-2 col-form-label">อาหารที่แพ้</label>
              <div class="col-10">
                <input disabled="" class="form-control" type="text" id="food" name="food" placeholder="อาหารที่แพ้" onkeyup="clean_not_char(this)" onkeydown="clean_not_char(this)">
              </div>
          </div>
              <div class="form-check form-group row" style="margin-left:10%" >
            <label class="col-8 col-form-label">ความพิการ</label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" >
            <label class="form-check-label"  style="margin-left:5%">
              <input disabled="" class="form-check-input" type="radio" name="disa" id="disa0" value="0" onclick="disabled_TE()">ไม่พิการ
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input disabled="" class="form-check-input" type="radio" name="disa" id="disa1" value="1" onclick="enabled_TE()">พิการ
            </label>
          </div>
          <div class="form-check">
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">ความสามารถในการช่วยเหลือตนเอง</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <input disabled="" class="form-check-input" type="radio" name="selfhelp" value="0" id="TE1" disabled>ช่วยเหลือตนเองไม่ได้
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="selfhelp" value="1" id="TE2" disabled>ช่วยเหลือตนเองได้
              </label>
            </div>
          </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">ข้อมูลในช่วง 1 ปีที่ผ่านมา</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">พฤติกรรมการดื่มสุา(จำนวนครั้งต่อสัปดาห์)</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label" style="margin-left:5%">
                <input disabled="" class="form-check-input" type="radio" name="Drink" id="drink0" value="0"> ไม่ดื่ม
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="Drink" id="drink1" value="1" checked=""> 1-2
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="Drink" id="drink2" value="2"> 3-5
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="Drink" id="drink4" value="3"> 6 ครั้งขึ้นไป
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">พฤติกรรมการสูบบุหรี่(จำนวนมวนต่อวัน)</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <input disabled="" class="form-check-input" type="radio" name="Smoke" id="Smoke0" value="0" checked=""> ไม่สูบ
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="Smoke" id="Smoke1" value="1"> 1-5
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="Smoke" id="Smoke2" value="2"> 6-10
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="Smoke" id="Smoke3" value="3"> 11-19
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="Smoke" id="Smoke4" value="4"> 1 ซองขึ้นไป
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">พฤติกรรมการออกกำลังกาย (วันต่อสัปดาห์)</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <input disabled="" class="form-check-input" type="radio" name="exercise" id="exercise0" value="0" onclick="disabled_TE()" checked="">ไม่ได้ออกกำลังกาย
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="exercise" id="exercise1" value="1" onclick="enabled_TE()">1-3 วัน
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="exercise" id="exercise2" value="2" onclick="enabled_TE()">มากกว่า 4-7 วัน
              </label>
            </div>
            <div class="form-check" >
              <div class="form-check form-group row" style="margin-left:10%">
                <label class="col-8 col-form-label">จำนวนชั่วโมงในวันที่ออกกำลังกาย</label>
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
              <label class="col-8 col-form-label">สภาพแวดล้อมบริเวณที่เป็นอยู่</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <input disabled="" class="form-check-input" type="checkbox" id="homearea1" name="homeArea1" value="1" aria-label="..." checked="">มีแอ่งน้ำ หรือ พื้นที่น้ำขัง
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="checkbox" id="homearea2" name="homeArea2" value="2" aria-label="...">ใกล้โรงงาน
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="right">
              <button type="submit" class="btn btn-primary" disabled="">Submit</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include "foot.php" ?>