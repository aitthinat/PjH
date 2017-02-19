<?php include "head.php" ?>
<script language="Javascript">
function validateForm() {
     var findhome = document.forms["myForm"]["findhome"].value;
     var findFname = document.forms["myForm"]["findFname"].value;
     var findLname = document.forms["myForm"]["findLname"].value;
     var sex = document.forms["myForm"]["sex"].value;
     var age = document.forms["myForm"]["age"].value;
    
     if (( findhome == null || findhome == "" ) && ( age == null || age == "" ) && ( sex == null || sex == "" ) && ( findFname == null || findFname == "" ) && ( findLname == null || findLname == "" )) {
      alert("กรุณากรอกข้อมูลอย่างน้อย 1 ช่อง");
      return false;
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
                <div class="col-10">
                  <input class="form-control" type="text" id="findhome" name="findhome" pattern="[0-9/]+.{1,}" title="กรุณากรอกเลขที่บ้านใหม่อีกครั้ง">
              </div>
            </div>
            <!-- Name -->
            <div class="form-group row" style="margin-left:5%;margin-right:10%">
                <label class="col-2 col-form-label">ชื่อ-สกุล</label>
                <div class="col-10">
                  <input class="form-control" type="text" id="findFname" name="findFname" placeholder="ชื่อ" pattern="[a-zA-Zก-์]+" title="กรุณากรอกตัวอักษร A-Z, a-z, ก-ฮ และสระในภาษาไทย">
                  <input class="form-control" type="text" id="findLname" name="findLname" placeholder="สกุล" pattern="[a-zA-Zก-์]+" title="กรุณากรอกตัวอักษร A-Z, a-z, ก-ฮ และสระในภาษาไทย">
              </div>
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