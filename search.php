<?php include "head.php" ?>
<script language="Javascript">
  function validateForm() {
   var findhome = document.forms["myForm"]["findhome"].value;
   var findFname = document.forms["myForm"]["findFname"].value;
   var findLname = document.forms["myForm"]["findLname"].value;
   var sex = document.forms["myForm"]["sex"].value;
   var age = document.forms["myForm"]["age"].value;
   var regex = /[^0-9/]/gi;
   var regex1 = /[^a-zA-Zก-์]/gi;


   if (( findhome == null || findhome == "") && ( age == null || age == "" ) && ( sex == null || sex == "" ) && ( findFname == null || findFname == "" ) && ( findLname == null || findLname == "" )) {
    alert("กรุณากรอกข้อมูลอย่างน้อย 1 ช่อง");
    return false;
  }
  if (findhome.match(regex) || findFname.match(regex1)|| findLname.match(regex1)) {
    alert("กรุณาตรวจสอบใหม่อีกครั้ง");
    return false;
  }
}

function clean_not_int(input){
  var regex = /[0-9/]/gi;
  if (input.value.match(regex) || input.value == "") {
    document.getElementById("al2").style.visibility = 'hidden';
  } else {
    document.getElementById("al2").style.visibility = 'visible';
  }
}
function clean_not_char(input){
  var regex = /[a-zA-Zก-์]/gi;
  if (input.value.match(regex)|| input.value == "") {
    document.getElementById("al3").style.visibility = 'hidden';
  } else {
    document.getElementById("al3").style.visibility = 'visible';
  }
}
function clean_not_char2(input){
  var regex = /[a-zA-Zก-์]/gi;
  if (input.value.match(regex) || input.value == "") {
    document.getElementById("al4").style.visibility = 'hidden';
  } else {
    document.getElementById("al4").style.visibility = 'visible';
  }
}
</script>


<div>
  <div class="container">
    <div>
      <div style="padding-bottom: 20px"><center><img class="img-responsive" src="img/onpage_2.png" height="100" width="200"></center></div>
      <!-- Please Edit!! -->
      <form name="myForm" onsubmit="return validateForm()" action="info_edd.php" method="POST" >
        <!-- House ID -->
        <div class="form-group row" style="margin-left:5%;margin-right:10%">
          <label class="col-2 col-form-label">บ้านเลขที่</label>
          <div class="col-10" >
            <input class="form-control" type="text" id="findhome" name="findhome" title="กรุณากรอกเลขที่บ้านใหม่อีกครั้ง" placeholder="บ้านเลขที่" onkeyup="clean_not_int(this)" onkeydown="clean_not_int(this)">
          </div>
          <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
          <div class="col-10" id="al2"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวเลข</div>
        </div>
      </div>
      <!-- Name -->
      <div class="form-group row" style="margin-left:5%;margin-right:10%">
        <label class="col-2 col-form-label">ชื่อ-สกุล</label>
        <div class="col-10">
          <input class="form-control" type="text" id="findFname" name="findFname" placeholder="ชื่อ" title="กรุณากรอกตัวอักษร A-Z, a-z, ก-ฮ และสระในภาษาไทย" onkeyup="clean_not_char(this)" onkeydown="clean_not_char(this)">
        </div>
        <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
        <div class="col-10" id="al3"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวอักษร</div>
        <label class="col-2 col-form-label"></label>
        <div class="col-10">
          <input class="form-control" type="text" id="findLname" name="findLname" placeholder="สกุล" title="กรุณากรอกตัวอักษร A-Z, a-z, ก-ฮ และสระในภาษาไทย" onkeyup="clean_not_char2(this)" onkeydown="clean_not_char2(this)">
        </div>
        <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
        <div class="col-10" id="al4"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวอักษร</div>
      </div>

      <!-- Sex -->
      <div class="form-group row" style="margin-left:5%;margin-right:10%">
        <label class="col-2 col-form-label">เพศ</label>
        <div class="col-10">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="sex" id="sex" value="M"> ชาย
          </label>
          <label class="form-check-label" style="margin-left:2%">
            <input class="form-check-input" type="radio" name="sex" id="sex" value="W"> หญิง
          </label>
        </div>
      </div>

      <!-- Age -->

      <div class="form-group row" style="margin-left:5%;margin-right:10%">
       <label class="col-2 col-form-label">อายุ</label>
       <div class="col-10">
        <select name="age" class="form-control form-control-lg">
          <option selected value="">----- เลือกช่วงอายุ -----</option>
          <option value="1">น้อยกว่า 1 ปี</option>
          <option value="2">1 - 10 ปี</option>
          <option value="3">11 - 20 ปี</option>
          <option value="4">21 - 40 ปี</option>
          <option value="5">41 - 60 ปี</option>
          <option value="5">61 - 100 ปีขึ้นไป</option>
        </select>
      </div>
    </div>


    <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="center">
      <button type="submit" class="btn btn-primary">Search</button>
    </div>
  </form>
</div>
</div>
</div>
<?php include "foot.php" ?>