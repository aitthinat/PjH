<?php include "head.php" ?>
<?php include('connection.php'); ?>
<?php session_start();
    if(isset($_POST['btnsearch'])){
        $_SESSION["findhome"] = $_POST["findhome"]; 
        $_SESSION["findFname"] = $_POST["findFname"];
        $_SESSION["findLname"] = $_POST["findLname"];
    }
?>
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
function clean_not_int(input){
 var regex = /[0-9/]/gi;
 if (input.value.match(regex)) {
  document.getElementById("al2").style.visibility = 'hidden';
} else {
  document.getElementById("al2").style.visibility = 'visible';
}
}

function clean_not_char(input){
  var regex = /[^a-zA-Zก-์]/gi;
  input.value = input.value.replace(regex, "");
}
function clean_not_char(input){
  var regex = /[^0-9/]/gi;
  if (input.value.match(regex)|| input.value == "") {
    document.getElementById("al3").style.visibility = 'hidden';
  } else {
    document.getElementById("al3").style.visibility = 'visible';
  }
}
function clean_not_char2(input){
  var regex = /[^0-9/]/gi;
  if (input.value.match(regex) || input.value == "") {
    document.getElementById("al4").style.visibility = 'hidden';
  } else {
    document.getElementById("al4").style.visibility = 'visible';
  }
}
function isNumber(evt, value) {
    if (value.length + 1 > 9) {
        return false;
    }
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 47 || charCode > 57)) {
        return false;
    }
    return true;
}

function lettersOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
if (charCode == 32) {
    return true;
}
if ((charCode >= 3585 && charCode <= 3642) || (charCode >= 3648 && charCode <= 3662)) {
    return true;
}
if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
    return false;
}
return true;
}

</script>
<div>
  <div class="container">
    <div>
      <div style="padding-bottom: 20px"><center><img class="img-responsive" src="img/onpage_4.png" height="100" width="200"></center></div>
      <!-- Please Edit!! -->
      <form name="myForm" onsubmit="return validateForm()" action="info_edd.php" method="POST">
        <!-- House ID -->
        <div class="form-group row" style="margin-left:5%;margin-right:10%">
          <label class="col-2 col-form-label">บ้านเลขที่</label>
          <div class="col-10">
            <input class="form-control" type="text" id="findhome" name="findhome" pattern="[0-9/]+.{1,}" onkeypress="return isNumber(event,value)" placeholder="บ้านเลขที่">
            <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
            <div class="col-10" id="al2"  style="visibility: hidden;color: red">*กรุณากรอกเลขที่บ้านเฉพาะตัวเลข</div>
           
          </div>
        </div>
        <!-- Name -->
        <div class="form-group row" style="margin-left:5%;margin-right:10%">
          <label class="col-2 col-form-label">ชื่อ-สกุล</label>
          <div class="col-10">
            <input class="form-control" type="text" id="findFname" name="findFname" placeholder="ชื่อ" pattern="[a-zA-Zก-์]+" title="กรุณากรอกตัวอักษร A-Z, a-z, ก-ฮ และสระในภาษาไทย" onkeypress="return lettersOnly(event)">
          </div>
          <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
          <div class="col-10" id="al3"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวอักษร</div>
          <label class="col-2 col-form-label"></label>
          <div class="col-10">
            <input class="form-control" type="text" id="findLname" name="findLname" placeholder="สกุล" pattern="[a-zA-Zก-์]+" title="กรุณากรอกตัวอักษร A-Z, a-z, ก-ฮ และสระในภาษาไทย" onkeypress="return lettersOnly(event)">
          </div>
          <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
          <div class="col-10" id="al4"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวอักษร</div>
        </div>

        <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="center">
          <button type="submit" name = "btnsearch" class="btn btn-primary">Search</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include "foot.php" ?>