<?php include "head.php" ?>
<?php include('connection.php'); ?>
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
   var sys = document.forms["myForm"]["findhome"].value;
   if ( sys == null || sys == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
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

</script>
<div style="margin-bottom: 50px">
  <div class="container">
    <div>
      <div style="padding-bottom: 20px"><center><img class="img-responsive" src="img/onpage_1.png" height="100" width="200"></center></div>
      <form name="myForm" onsubmit="return validateForm()" action="home_manu.php" method="POST" >
        <div class="form-group row" style="margin-left:5%;margin-right:10%">
          <label class="col-2 col-form-label">บ้านเลขที่</label>
          <div class="col-10">
            <input class="form-control" type="text" id="findhome" name="findhome" pattern="[0-9/]+.{1,}" onkeyup="clean_not_int(this)" onkeydown="clean_not_int(this)">
            <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
            <div class="col-10" id="al2"  style="visibility: hidden;color: red">*กรุณากรอกเลขที่บ้านเฉพาะตัวเลข</div>
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