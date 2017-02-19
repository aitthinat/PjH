<?php include "head.php" ?>
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
   var w = document.forms["myForm"]["weight"].value;
   var h = document.forms["myForm"]["height"].value;
   var d = document.forms["myForm"]["Drink"].value;
   var s = document.forms["myForm"]["Smoke"].value;
   var ex = document.forms["myForm"]["exercise"].value;
   var tex = document.forms["myForm"]["time-exercise"].value;
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

}

</script>
<div>
  
  <div class="container" style="background:white" >
    <div class="row">
      <div class="col-lg-12">
        <div style="width:100%" >
          <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>บันทึกข้อมูลการตรวจสุขภาพ</h1></div>
          <div align="center" style="padding-top:10px;padding-bottom:20px"><h3>ดูข้อมูลย้อนหลัง</h3></div>
          <div class="form-check form-group row" style="margin-left:10%">
            <label class="col-2 col-form-label">ชื่อ - สกุล</label>
            <label class="form-check-label">
              <h4><label style="padding-right:10px">นาง</label><label style="padding-right:20px">จันทร์</label><label>คำใหญ่</label></h4>
            </label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%">
          <label class="col-2 col-form-label">ปี (พ.ศ.)</label>
            <label class="form-check-label">
              <select class="custom-select">
                <option selected>-----กรุณาเลือกปีที่ต้องการทราบ-----</option>
                <option value="1">2560</option>
              </select>

            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="background-color:#E0E0E0">
            <div class="form-check form-group row" style="margin-left:10%;margin-top: 30px">
                        <label class="col-2 col-form-label">กรุ๊ปเลือด</label>
                        <label class="form-check-label">
                            <label style="padding-right:10px">AB</label>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">ความดันโลหิต</label>
                        <label class="form-check-label">
                            <label style="padding-right:10px">119 / 78</label>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">น้ำหนัก</label>
                        <label class="form-check-label">
                            49
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">ส่วนสูง</label>
                        <label class="form-check-label">
                            160
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
                            1-2 ครั้ง / สัปดาห์
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">พฤติกรรมการสูบบุหรี่(จำนวนมวนต่อวัน)</label>
                        <label class="form-check-label">
                            ไม่สูบบุหรี่
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">พฤติกรรมการออกกำลังกาย (วันต่อสัปดาห์)</label>
                        <label class="form-check-label">
                            ไม่ได้ออกกำลังกาย
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">จำนวนชั่วโมงในวันที่ออกกำลังกาย</label>
                        <label class="form-check-label">
                            -
                            </label>
                        </div>

                        <div class="form-check form-group row" style="margin-left:10%">
                            <label class="col-5 col-form-label">สภาพแวดล้อมบริเวณที่เป็นอยู่</label>
                            <label class="form-check-label">
                            มีแอ่งน้ำ / น้ำขัง
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

<?php include "foot.php" ?>