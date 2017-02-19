<?php include "head.php" ?>
<script language="Javascript">
function validateForm() {
     var findhome = document.forms["myForm"]["findhome"].value;
     var findFname = document.forms["myForm"]["findFname"].value;
     var findLname = document.forms["myForm"]["findLname"].value;
    
     if (( findhome == null || findhome == "" ) && ( findFname == null || findFname == "" ) && ( findLname == null || findLname == "" )) {
      alert("กรุณากรอกข้อมูลอย่างน้อย 1 ช่อง");
      return false;
  } 


}

</script>
<div>
    <div class="container">
        <div>
            <div style="padding-bottom: 20px"><center><img class="img-responsive" src="img/onpage_4.png" height="100" width="200"></center></div>
            <!-- Please Edit!! -->
            <form name="myForm" onsubmit="return validateForm()" action="info_edd.php" method="POST">
            <!-- House ID -->
              <div class="form-group row" style="margin-left:27%;margin-right:10%">
                <label class="col-2 col-form-label">บ้านเลขที่</label>
                <div>
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

            


          <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="center">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>
</div>
</div>
<?php include "foot.php" ?>