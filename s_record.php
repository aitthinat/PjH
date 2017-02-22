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

 //  function validateForm() {
 //    var sys = document.forms["myForm"]["SYS"].value;
    
 //    var sys_oper = 0
    
 //    if ( sys == null || sys == "" ) {
 //      document.getElementById("SYS_DIV").className += " has-danger"
 //      document.getElementById("SYS").className += " form-control-danger"
 //      document.getElementById("al2").style.visibility = 'visible';    
 //      sys_oper = 1;
 //    } else {
 //      if ( document.getElementById("SYS_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
 //        document.getElementById("SYS_DIV").className = document.getElementById("SYS_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
 //        document.getElementById("SYS").className = document.getElementById("SYS").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " )
 //        document.getElementById("SYS_DIV").className += " has-success"
 //        document.getElementById("SYS").className += " form-control-success"
 //        document.getElementById("al2").style.visibility = 'hidden';    
 //        sys_oper = 0;
 //      } else {
 //        document.getElementById("SYS_DIV").className += " has-success"
 //        document.getElementById("SYS").className += " form-control-success"
 //        document.getElementById("al2").style.visibility = 'hidden';    
 //        sys_oper = 0;
 //      }
 //    }
 // }
 function clean_not_int(input){
  var regex = /[^0-9/]/gi;
  input.value = input.value.replace(regex, "");
}

function clean_not_char(input){
  var regex = /[^a-zA-Zก-์]/gi;
  input.value = input.value.replace(regex, "");
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
                  <input class="form-control" type="text" id="findhome" name="findhome" pattern="[0-9/]+.{1,}" title="กรุณากรอกเลขที่บ้านใหม่อีกครั้ง" onkeyup="clean_not_int(this)" onkeydown="clean_not_int(this)" placeholder="บ้านเลขที่">
              </div>
            </div>
            <!-- Name -->
            <div class="form-group row" style="margin-left:5%;margin-right:10%">
                <label class="col-2 col-form-label">ชื่อ-สกุล</label>
                <div class="col-10">
                  <input class="form-control" type="text" id="findFname" name="findFname" placeholder="ชื่อ" pattern="[a-zA-Zก-์]+" title="กรุณากรอกตัวอักษร A-Z, a-z, ก-ฮ และสระในภาษาไทย" onkeyup="clean_not_char(this)" onkeydown="clean_not_char(this)">
                  <input class="form-control" type="text" id="findLname" name="findLname" placeholder="สกุล" pattern="[a-zA-Zก-์]+" title="กรุณากรอกตัวอักษร A-Z, a-z, ก-ฮ และสระในภาษาไทย" onkeyup="clean_not_char(this)" onkeydown="clean_not_char(this)">
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