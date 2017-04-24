<?php include "head.php" ?>
<?php include "connection.php" ?>
<script type="text/javascript"> 
  function keyup(obj,e){
    var keynum;
    var keychar;
    var id = '';
    if(window.event) {// IE
      keynum = e.keyCode;
    }
    else if(e.which) {// Netscape/Firefox/Opera
      keynum = e.which;
    }
    keychar= String.fromCharCode(keynum); 

    var tagInput = document.getElementsByTagName('input');
    for(i=0;i<=tagInput.length;i++){
      if(tagInput[i] == obj){ 
        var prevObj = tagInput[i-1];
        var nextObj = tagInput[i+1];
        break;
      }
    } 
    if(obj.value.length == 0 && keynum == 8) prevObj.focus();

    if(obj.value.length == obj.getAttribute('maxlength')){ 
      for(i=0;i<=tagInput.length;i++){
        if(tagInput[i].id.substring(0,5) == 'txtID'){ 
          if(tagInput[i].value.length == tagInput[i].getAttribute('maxlength')){
            id += tagInput[i].value;
            if(tagInput[i].id == 'txtID5') break;
          }
          else{
            tagInput[i].focus();
            return;
          }
        }
      } 
      if(checkID(id)) {

        if ( document.getElementById("hal6").className.match(/(?:^|\s)has-danger(?!\S)/) ){
          document.getElementById("hal6").className = document.getElementById("hal6").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
          document.getElementById("txtID5").className = document.getElementById("txtID5").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " )
        }
        document.getElementById("hal6").className += " has-success";
        document.getElementById("txtID5").className += " form-control-success";
        document.getElementById("al6").style.visibility = 'hidden';
        nextObj.focus();
      }
      else {
        document.getElementById("al6").style.visibility = 'visible';
        document.getElementById("hal6").className += " has-danger";
        document.getElementById("txtID5").className += " form-control-danger";
        alert('รหัสประชาชนไม่ถูกต้อง');
      };
      nextObj.focus();
    }

  }

  function checkID(id){
    if(id.length != 13) return false;
    for(i=0, sum=0; i < 12; i++)
      sum += parseFloat(id.charAt(i))*(13-i); 
    if((11-sum%11)%10!=parseFloat(id.charAt(12)))
      return false; 
    return true;
  }
// 
</script>
<script language="Javascript">
  function validateForm() {
   var homeNo = document.forms["myForm"]["homeNo"].value;
   var homeID = document.forms["myForm"]["homeID"].value; 
   var status = document.forms["myForm"]["status"].value;
   var district = document.forms["myForm"]["district"].value;
   var subdistrict = document.forms["myForm"]["subdistrict"].value;
   var Province = document.forms["myForm"]["Province"].value;
   var Postalcode = document.forms["myForm"]["Postalcode"].value;
   
   var homeNo_no = 1;
   var homeID_no = 1;
   var status_no = 1;
   var district_no = 1;
   var subdistrict_no = 1;
   var Province_no = 1;
   var regex1 = /[^a-zA-Zก-๑]/gi;
   var regex2 = /[^0-9/]/gi;   
   
   if ( homeNo == null || homeNo == "" || homeNo.match(regex2)) {
    homeNo_no = 1;
    document.getElementById("al3").style.visibility = 'visible';
    document.getElementById("homeNo_div").className += " has-danger";
    document.getElementById("homeNo").className += " form-control-danger";
  } else {
    if ( document.getElementById("homeNo_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("homeNo_div").className = document.getElementById("homeNo_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
      document.getElementById("homeNo").className = document.getElementById("homeNo").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
    }
    document.getElementById("homeNo_div").className += " has-success";
    document.getElementById("homeNo").className += " form-control-success";
    document.getElementById("al3").style.visibility = 'hidden';    
    homeNo_no = 0;
  }
  if ( homeID == null || homeID == "" || homeID.match(regex2)) {
    homeID_no = 1;
    document.getElementById("al4").style.visibility = 'visible';
    document.getElementById("homeID_div").className += " has-danger";
    document.getElementById("homeID").className += " form-control-danger";
  } else {
    if ( document.getElementById("homeID_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("homeID_div").className = document.getElementById("homeID_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
      document.getElementById("homeID").className = document.getElementById("homeID").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
    }
    document.getElementById("homeID_div").className += " has-success";
    document.getElementById("homeID").className += " form-control-success";
    document.getElementById("al4").style.visibility = 'hidden';    
    homeID_no = 0;
  } 
  if ( status == null || status == "" ) {
    status_no = 1;
    document.getElementById("status_co").style.visibility = 'visible';
    document.getElementById("status_div").className += " has-danger";
  } else {
    if ( document.getElementById("status_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("status_div").className = document.getElementById("status_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
    }
    document.getElementById("status_div").className += " has-success";
    document.getElementById("status_co").style.visibility = 'hidden';    
    status_no = 0;
  }
  
  if ( district == null || district == "" ) {
    district_no = 1;
    document.getElementById("district_co").style.visibility = 'visible';
    document.getElementById("district_div").className += " has-danger";
  } else {
    if ( document.getElementById("district_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("district_div").className = document.getElementById("district_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
    }
    document.getElementById("district_div").className += " has-success";
    document.getElementById("district_co").style.visibility = 'hidden';    
    district_no = 0;
  } 

  if ( subdistrict == null || subdistrict == "" ) {
    subdistrict_no = 1;
    document.getElementById("subdistrict_co").style.visibility = 'visible';
    document.getElementById("subdistrict_div").className += " has-danger";
  } else {
    if ( document.getElementById("subdistrict_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("subdistrict_div").className = document.getElementById("subdistrict_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
    }
    document.getElementById("subdistrict_div").className += " has-success";
    document.getElementById("subdistrict_co").style.visibility = 'hidden';    
    subdistrict_no = 0;
  } 


  if ( Province == null || Province == "" ) {
    Province_no = 1;
    document.getElementById("Province_co").style.visibility = 'visible';
    document.getElementById("Province_div").className += " has-danger";
  } else {
    if ( document.getElementById("Province_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("Province_div").className = document.getElementById("Province_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
    }
    document.getElementById("Province_div").className += " has-success";
    document.getElementById("Province_co").style.visibility = 'hidden';    
    Province_no = 0;
  }

  if ( Postalcode == null || Postalcode == "" || Postalcode.match(regex2)) {
    Postalcode_no = 1;
    document.getElementById("Postalcode_co").style.visibility = 'visible';
    document.getElementById("Postalcode_div").className += " has-danger";
    document.getElementById("Postalcode").className += " form-control-danger";
  } else {
    if ( document.getElementById("Postalcode_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("Postalcode_div").className = document.getElementById("Postalcode_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
      document.getElementById("Postalcode").className = document.getElementById("Postalcode").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
    }
    document.getElementById("Postalcode_div").className += " has-success";
    document.getElementById("Postalcode").className += " form-control-success";
    document.getElementById("Postalcode_co").style.visibility = 'hidden';    
    Postalcode_no = 0;
  } 
  
if ( homeNo_no || homeID_no || status_no || district_no || subdistrict_no || Province_no || Postalcode_no) {
 alert("กรุณากรอกข้อมูลให้ครบถ้วน");
 return false; 
}
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

function isNumber(evt, value) {
    if (value.length + 1 > 11) {
        return false;
    }
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 47 || charCode > 57)) {
        return false;
    }
    return true;
}
function isNumber2(evt, value) {
    if (value.length + 1 > 11) {
        return false;
    }
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
function isNumber3(evt, value) {
    if (value.length + 1 > 5) {
        return false;
    }
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
<div>
  <div class="form-check form-group row" style="margin-left:10%">
    <h2>
      <label class="col-3 col-form-label">เพิ่มข้อมูลบ้าน</label>
      <label class="col-form-label"></label>
    </h2>
  </div>
  <div class="container" style="background:white">
    <div class="row">
      <div class="col-lg-12">
        <div style="width:100%" >
          <div align="center" style="padding-top:10px;margin-bottom:20px"></div>
          <form name="myForm" action="send_form_home.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group row" style="margin-left:10%;margin-right:10%" id="homeNo_div">
              <label class="col-2 col-form-label">บ้านเลขที่</label>
              <div class="col-10">
                <input class="form-control" type="text" id="homeNo" name="homeNo" placeholder="บ้านเลขที่" onkeypress="return isNumber(event,value)">
              </div>
              <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
              <div class="col-10" id="al3"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวเลข</div>
            </div>
          </div> 
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="homeID_div">
            <label class="col-2 col-form-label">เลขประจำบ้าน</label>
            <div class="col-10">
              <input class="form-control" type="text" id="homeID" name="homeID"  placeholder="เลขประจำบ้าน" onkeypress="return isNumber2(event,value)">
            </div>
            <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
            <div class="col-10" id="al4"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวเลข</div>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" id="status_div">
            <label class="col-2 col-form-label">สถานะ</label>
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="status" id="status" value="เช่า"> เช่า
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="status" id="status" value="เป็นเจ้าของ"> เป็นเจ้าของ
            </label>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%">
            <label class="col-2 col-form-label"></label>
            <div class="col-10" id="status_co" style="visibility: hidden;color: red">*กรุณาเลือกสถานะ</div>
          </div>
          
        <div class="form-group row" style="margin-left:10%;margin-right:10%" id="district_div">
         <label class="col-2 col-form-label">อำเภอ</label>
         <div class="col-10">
          <input class="form-control" type="text" id="district" name="district" placeholder="อำเภอ" onkeypress="return lettersOnly(event)">
        </div>
        <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
        <div class="col-10" id="district_co" style="visibility: hidden;color: red">*กรุณากรอกอำเภอ</div>
      </div>

      <div class="form-group row" style="margin-left:10%;margin-right:10%" id="subdistrict_div">
         <label class="col-2 col-form-label">ตำบล</label>
         <div class="col-10">
          <input class="form-control" type="text" id="subdistrict" name="subdistrict" placeholder="ตำบล" onkeypress="return lettersOnly(event)">
        </div>
        <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
        <div class="col-10" id="subdistrict_co" style="visibility: hidden;color: red">*กรุณากรอกตำบล</div>
      </div>

      <div class="form-group row" style="margin-left:10%;margin-right:10%" id="Province_div">
         <label class="col-2 col-form-label">จังหวัด</label>
         <div class="col-10">
          <input class="form-control" type="text" id="Province" name="Province" placeholder="จังหวัด" onkeypress="return lettersOnly(event)">
        </div>
        <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
        <div class="col-10" id="Province_co" style="visibility: hidden;color: red">*กรุณากรอกจังหวัด</div>
      </div>

        <div class="form-group row" style="margin-left:10%;margin-right:10%" id="Postalcode_div">
            <label class="col-2 col-form-label">รหัสไปรษณีย์</label>
            <div class="col-10">
              <input class="form-control" type="text" id="Postalcode" name="Postalcode"  placeholder="รหัสไปรษณีย์" onkeypress="return isNumber3(event,value)">
            </div>
            <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
            <div class="col-10" id="Postalcode_co"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวเลข</div>
          </div>
    
    
  <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="right">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>

<?php include "foot.php" ?>