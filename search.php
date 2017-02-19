<?php include "head.php" ?>

<div style="background:#d8e9f3">
    <div class="container">

        <div>
            <div style="padding-bottom: 20px"><center><img class="img-responsive" src="img/onpage_2.png" height="100" width="200"></center></div>
            <form name="myForm" onsubmit="return validateForm()" action="info_edd.php" method="POST" >
            <!-- House ID -->
              <div class="form-group row" style="margin-left:27%;margin-right:10%">
                <label class="col-2 col-form-label">บ้านเลขที่</label>
                <div class="col-5">
                  <input class="form-control" type="text" id="findhome" name="findhome" pattern="[0-9/]+.{1,}" title="กรุณากรอกเลขที่บ้านใหม่อีกครั้ง">
              </div>
            </div>
            <!-- Name -->
            <div class="form-group row" style="margin-left:27%;margin-right:10%">
                <label class="col-2 col-form-label">ชื่อ-สกุล</label>
                <div class="col-5">
                  <input class="form-control" type="text" id="findFname" name="findFname" placeholder="ชื่อ" pattern="[a-zA-Zก-์]+" title="กรุณากรอกตัวอักษร A-Z, a-z, ก-ฮ และสระในภาษาไทย">
                  <input class="form-control" type="text" id="findLname" name="findLname" placeholder="สกุล" pattern="[a-zA-Zก-์]+" title="กรุณากรอกตัวอักษร A-Z, a-z, ก-ฮ และสระในภาษาไทย">
              </div>
            </div>

            <!-- Sex -->
            <div class="form-group row" style="margin-left:27%;margin-right:10%">
                <label class="col-2 col-form-label">เพศ</label>
                <div class="col-5">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="sex" id="sex" value="M"> ชาย
                </label>
                 <label class="form-check-label" style="margin-left:2%">
                    <input class="form-check-input" type="radio" name="sex" id="sex" value="W"> หญิง
                </label>
              </div>
            </div>

            <!-- Age -->

            <div class="form-group row" style="margin-left:27%;margin-right:10%">
           <label class="col-2 col-form-label">อายุ</label>
           <div class="col-5">
            <select name="educate" class="form-control form-control-lg">
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
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
<?php include "foot.php" ?>