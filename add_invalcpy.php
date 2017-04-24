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
   var fname = document.forms["myForm"]["fname"].value;
   var lname = document.forms["myForm"]["lname"].value; 
   var status = document.forms["myForm"]["status"].value;
   var sex = document.forms["myForm"]["sex"].value;
   var txtID1 = document.forms["myForm"]["txtID1"].value;
   var txtID2 = document.forms["myForm"]["txtID2"].value;
   var txtID3 = document.forms["myForm"]["txtID3"].value;
   var txtID4 = document.forms["myForm"]["txtID4"].value;
   var txtID5 = document.forms["myForm"]["txtID5"].value;
   var educate = document.forms["myForm"]["educate"].value;
   var salary = document.forms["myForm"]["salary"].value;
   var job = document.forms["myForm"]["job"].value;
   var tel = document.forms["myForm"]["tel"].value;
   var regex1 = /[^a-zA-Zก-๑]/gi;
   var regex2 = /[^0-9/]/gi;

   var fname_no = 1;
   var lname_no = 1;
   var status_no = 1;
   var sex_no = 1;
   var txtID1_no = 1;
   var educate_no = 1;
   var salary_no = 1;
   var job_no = 1;
   var tel_no = 1;
   if ( fname == null || fname == "" || fname.match(regex1)) {
    fname_no = 1;
    document.getElementById("al3").style.visibility = 'visible';
    document.getElementById("fname_div").className += " has-danger";
    document.getElementById("fname").className += " form-control-danger";
  } else {
    if ( document.getElementById("fname_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("fname_div").className = document.getElementById("fname_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
      document.getElementById("fname").className = document.getElementById("fname").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
      
    }
    document.getElementById("fname_div").className += " has-success";
    document.getElementById("fname").className += " form-control-success";
    document.getElementById("al3").style.visibility = 'hidden';    
    fname_no = 0;
  }
  if ( lname == null || lname == "") {
    lname_no = 1;
    document.getElementById("al4").style.visibility = 'visible';
    document.getElementById("lname_div").className += " has-danger";
    document.getElementById("lname").className += " form-control-danger";
  } else {
    if ( document.getElementById("lname_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("lname_div").className = document.getElementById("lname_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
      document.getElementById("lname").className = document.getElementById("lname").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
    }
    document.getElementById("lname_div").className += " has-success";
    document.getElementById("lname").className += " form-control-success";
    document.getElementById("al4").style.visibility = 'hidden';    
    lname_no = 0;
  } 
  if ((tel.length != 10 || tel.match(regex2)) || tel == null ||tel == "" ) {
    tel_no = 1;
    document.getElementById("al5").style.visibility = 'visible';
    document.getElementById("tel_div").className += " has-danger";
    document.getElementById("tel").className += " form-control-danger";
  } else {
    if ( document.getElementById("tel_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("tel_div").className = document.getElementById("tel_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
      document.getElementById("tel").className = document.getElementById("tel").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
    }
    document.getElementById("tel_div").className += " has-success";
    document.getElementById("tel").className += " form-control-success";
    document.getElementById("al5").style.visibility = 'hidden';    
    tel_no = 0;
  }
  if ( txtID1 == null || txtID1 == "" || txtID1.match(regex2)) {
    txtID1_no = 1
    document.getElementById("al6").style.visibility = 'visible';
    document.getElementById("hal6").className += " has-danger";
    document.getElementById("txtID5").className += " form-control-danger";

  } else if ( txtID2 == null || txtID2 == "" || txtID2.match(regex2)) {
    txtID1_no = 1
    document.getElementById("al6").style.visibility = 'visible';
    document.getElementById("hal6").className += " has-danger";
    document.getElementById("txtID5").className += " form-control-danger";

  } else if ( txtID3 == null || txtID3 == "" || txtID3.match(regex2)) {
    txtID1_no = 1
    document.getElementById("al6").style.visibility = 'visible';
    document.getElementById("hal6").className += " has-danger";
    document.getElementById("txtID5").className += " form-control-danger";

  } else if ( txtID4 == null || txtID4 == "" || txtID4.match(regex2)) {
    txtID1_no = 1

    document.getElementById("al6").style.visibility = 'visible';
    document.getElementById("hal6").className += " has-danger";
    document.getElementById("txtID5").className += " form-control-danger";
  }  else if ( txtID5 == null || txtID5 == "" || txtID5.match(regex2)) {
    txtID1_no = 1

    document.getElementById("al6").style.visibility = 'visible';
    document.getElementById("hal6").className += " has-danger";
    document.getElementById("txtID5").className += " form-control-danger";
  } else {
    txtID1_no = 0;
    if ( document.getElementById("hal6").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("hal6").className = document.getElementById("hal6").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
      document.getElementById("txtID5").className = document.getElementById("txtID5").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
    }
    document.getElementById("hal6").className += " has-success";
    document.getElementById("txtID5").className += " form-control-success";
    document.getElementById("al6").style.visibility = 'hidden';
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
  if ( sex == null || sex == "" ) {
    sex_no = 1;
    document.getElementById("sex_co").style.visibility = 'visible';
    document.getElementById("sex_div").className += " has-danger";
  } else {
    if ( document.getElementById("sex_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("sex_div").className = document.getElementById("sex_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
    }
    document.getElementById("sex_div").className += " has-success";
    document.getElementById("sex_co").style.visibility = 'hidden';    
    sex_no = 0;
  }
  if ( educate == null || educate == "" ) {
    educate_no = 1;
    document.getElementById("educate_co").style.visibility = 'visible';
    document.getElementById("educate_div").className += " has-danger";
  } else {
    if ( document.getElementById("educate_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("educate_div").className = document.getElementById("educate_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
    }
    document.getElementById("educate_div").className += " has-success";
    document.getElementById("educate_co").style.visibility = 'hidden';    
    educate_no = 0;
  } 
  if ( salary == null || salary == "" ) {
    salary_no = 1;
    document.getElementById("salary_co").style.visibility = 'visible';
    document.getElementById("salary_div").className += " has-danger";
  } else {
    if ( document.getElementById("salary_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("salary_div").className = document.getElementById("salary_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
    }
    document.getElementById("salary_div").className += " has-success";
    document.getElementById("salary_co").style.visibility = 'hidden';    
    salary_no = 0;
  }
  if ( job == null || job == "" ) {
    job_no = 1;
    document.getElementById("job_co").style.visibility = 'visible';
    document.getElementById("job_div").className += " has-danger";
  } else {
    if ( document.getElementById("job_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("job_div").className = document.getElementById("job_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
    }
    document.getElementById("job_div").className += " has-success";
    document.getElementById("job_co").style.visibility = 'hidden';    
    job_no = 0;
  }
  var regex3 = /[-]/gi;
  var regex4 = /[0-9]/gi;
  if ((tel.match(regex4) && tel.length == 10) || (tel.match(regex3) && tel.length == 1)){ 
   if ( document.getElementById("tel_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
    document.getElementById("tel_div").className = document.getElementById("tel_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
    document.getElementById("tel").className = document.getElementById("tel").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
  }
  document.getElementById("tel_div").className += " has-success";
  document.getElementById("tel").className += " form-control-success";
  document.getElementById("al5").style.visibility = 'hidden';
    tel_no = 0;
} else {
  document.getElementById("tel_div").className += " has-danger";
  document.getElementById("tel").className += " form-control-danger";
  document.getElementById("al5").style.visibility = 'visible';
  tel_no = 1;
}
if (txtID5.match(regex2) || txtID4.match(regex2) || txtID3.match(regex2) || txtID2.match(regex2) || txtID1.match(regex2) || lname.match(regex1) || fname.match(regex1)) {
  alert("กรุณาตรวจสอบใหม่อีกครั้ง");
  return false;
}
if ( fname_no || lname_no || status_no || sex_no || txtID1_no || educate_no || salary_no || job_no || tel_no) {
 alert("กรุณากรอกข้อมูลให้ครบถ้วน");
 return false; 
}
}
function clean_not_char(input){
  var regex = /[a-zA-Zก-๑]/gi;
  if (input.value.match(regex)) {
    if ( document.getElementById("fname_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("fname_div").className = document.getElementById("fname_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
      document.getElementById("fname").className = document.getElementById("fname").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
      w_oper = 0;
    }
    document.getElementById("fname_div").className += " has-success";
    document.getElementById("fname").className += " form-control-success";
    document.getElementById("al3").style.visibility = 'hidden';    
  } else {
    document.getElementById("al3").style.visibility = 'visible';
    document.getElementById("fname_div").className += " has-danger";
    document.getElementById("fname").className += " form-control-danger";
  }
}
function clean_not_char2(input){
  var regex = /[a-zA-Zก-๑]/gi;
  if (input.value.match(regex)) {
    if ( document.getElementById("lname_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
      document.getElementById("lname_div").className = document.getElementById("lname_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
      document.getElementById("lname").className = document.getElementById("lname").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
      w_oper = 0;
    }
    document.getElementById("lname_div").className += " has-success";
    document.getElementById("lname").className += " form-control-success";
    document.getElementById("al4").style.visibility = 'hidden';
  } else {
    document.getElementById("lname_div").className += " has-danger";
    document.getElementById("lname").className += " form-control-danger";
    document.getElementById("al4").style.visibility = 'visible';
  }
}
function validatetel(input){
  var regex = /[0-9]/gi;
  var regex2 = /[-]/gi;
  if ((input.value.match(regex) && input.value.length == 10) || (input.value.match(regex2) && input.value.length == 1)) {
   if ( document.getElementById("tel_div").className.match(/(?:^|\s)has-danger(?!\S)/) ){
    document.getElementById("tel_div").className = document.getElementById("tel_div").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
    document.getElementById("tel").className = document.getElementById("tel").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
  }
  document.getElementById("tel_div").className += " has-success";
  document.getElementById("tel").className += " form-control-success";
  document.getElementById("al5").style.visibility = 'hidden';
}
else {
  document.getElementById("tel_div").className += " has-danger";
  document.getElementById("tel").className += " form-control-danger";
  document.getElementById("al5").style.visibility = 'visible';
}
}
function validateID(input){
  var regex = /[0-9]/gi;
  var regex2 = /[^0-9]/gi;
  var txtID1 = document.forms["myForm"]["txtID1"].value;
  var txtID2 = document.forms["myForm"]["txtID2"].value;
  var txtID3 = document.forms["myForm"]["txtID3"].value;
  var txtID4 = document.forms["myForm"]["txtID4"].value;
  var txtID5 = document.forms["myForm"]["txtID5"].value;
  if (input.value.match(regex) || (txtID5.match(regex2) || txtID4.match(regex2) || txtID3.match(regex2) || txtID2.match(regex2) || txtID1.match(regex2))) {
    document.getElementById("al5").style.visibility = 'hidden';
  }
  else {
    document.getElementById("al5").style.visibility = 'visible';
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
    if (value.length + 1 > 10) {
        return false;
    }
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 47 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
<div>
  <div class="form-check form-group row" style="margin-left:10%;margin-bottom:-12px">
    <h2>
      <label class="col-3 col-form-label">บ้านเลขที่ :</label>
      <label class="col-form-label"><?php 

        if (!empty($_POST["findhome"])) {
            $sql = "SELECT HomeNo FROM home WHERE HomeNo = '$findhome' ";
            $result = mysqli_query($con,$sql);
            $res = mysqli_fetch_assoc($result);
            echo $res["HomeNo"];
        } else {
          echo mysqli_fetch_array($findhome); }
          ?></label>
    </h2>
  </div>
  <div class="form-check form-group row" style="margin-left:10%">
    <h4>
      <label class="col-3 col-form-label">เลขที่ประจำบ้าน :</label>
      <label class="col-form-label">560x-xxxxxx-x</label>
    </h4>
  </div>
  <div class="container" style="background:white">
    <div class="row">
      <div class="col-lg-12">
        <div style="width:100%" >
          <div align="center" style="padding-top:10px;margin-bottom:20px"></div>
          <form name="myForm" action="accept_add_inval.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group row" style="margin-left:10%;margin-right:10%" id="fname_div">
              <label class="col-2 col-form-label">ชื่อ - สกุล</label>
              <div class="col-10">
                <input class="form-control" type="text" id="fname" name="fname" placeholder="ชื่อ" onkeyup="clean_not_char(this)" onkeydown="clean_not_char(this)" onkeypress="return lettersOnly(event)">
              </div>
              <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
              <div class="col-10" id="al3"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวอักษร</div>
            </div>
          </div> 
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="lname_div">
            <label class="col-2 col-form-label"></label>
            <div class="col-10">
              <input class="form-control" type="text" id="lname" name="lname"  placeholder="สกุล" onkeyup="clean_not_char2(this)" onkeydown="clean_not_char2(this)" onkeypress="return lettersOnly(event)">
            </div>
            <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
            <div class="col-10" id="al4"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวอักษร</div>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" id="sex_div">
            <label class="col-2 col-form-label">เพศ</label>
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="sex" id="sex" value="M"> ชาย
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="sex" id="sex" value="W"> หญิง
            </label>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="sex_div">
            <label class="col-2 col-form-label"></label>
            <div class="col-10" id="sex_co" style="visibility: hidden;color: red">*กรุณาเลือกเพศ</div>
          </div>
          <div class="form-inline row" style="margin-left:10%;margin-right:10%;margin-bottom: 10px" id="hal6">
            <label class="col-2 col-form-label">รหัสประจำตัวประชาชน : </label>
            <div class="col-10 form-inline">
              <div><input class="form-control" type="text" name="txtID1" id="txtID1" size="3px" pattern="{1}" maxlength=1 onkeyup="keyup(this,event)" onkeypress="return Numbers(event)"></div><div>-</div>
              <div><input class="form-control" type="text" name="txtID2" id="txtID2" size="7px" pattern="{4}" maxlength=4 onkeyup="keyup(this,event)" onkeypress="return Numbers(event)"></div><div>-</div>
              <div><input class="form-control" type="text" name="txtID3" id="txtID3" size="7px" pattern="{5}" maxlength=5 onkeyup="keyup(this,event)" onkeypress="return Numbers(event)"></div><div>-</div>
              <div><input class="form-control" type="text" name="txtID4" id="txtID4" size="5px" pattern="{2}" maxlength=2 onkeyup="keyup(this,event)" onkeypress="return Numbers(event)"></div><div>-</div>
              <div><input class="form-control" type="text" name="txtID5" id="txtID5" size="3px" pattern="{1}" maxlength=1 onkeyup="keyup(this,event)" onkeypress="return Numbers(event)"></div><div></div>
            </div>
            <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
            <div class="col-10"  style="visibility: hidden;color: red"  id="al6">*กรุณาตรวจสอบใหม่อีกครั้ง</div>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="lname_div">
            <label class="col-2 col-form-label">วันเดือนปีเกิด</label>
            <div class="col-10">
              <input class="form-control" type="date" class="form-control" id="date" placeholder="Date of Birth" maxlength="0">
            </div>
            </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="status_div">
            <label class="col-2 col-form-label">สถานะ</label>
            <div class="col-10">
              <div class="form-check">
               <div class="form-inline style">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" id="status1" value="1">
                  เจ้าบ้าน
                </label>
              </div>
            </div>
            <div class="form-check">
              <div class="form-inline style">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="status" id="status2" value="2">
                  ผู้อาศัย
                </label>
              </div>
            </div>
          </div>
          <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
          <div class="col-10" id="status_co" style="visibility: hidden;color: red">*กรุณาเลือกสถานะ</div>
        </div>
        <div class="form-group row" style="margin-left:10%;margin-right:10%" id="educate_div">
         <label class="col-2 col-form-label">การศึกษา</label>
         <div class="col-10">
          <select name="educate" class="form-control form-control-lg">
            <option selected value="">----- เลือกระดับการศึกษา -----</option>
            <option value="1">ไม่ได้ศึกษา</option>
            <option value="2">ประถมศึกษา</option>
            <option value="3">มัธยมศึกษาตอนต้น</option>
            <option value="4">มัธยมศึกษาตอนปลาย หรือ อาชีวะศึกษา</option>
            <option value="5">อุดมศึกษา</option>
          </select>
        </div>
        <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
        <div class="col-10" id="educate_co" style="visibility: hidden;color: red">*กรุณาเลือกระดับการศึกษา</div>
      </div>
      <div class="form-group row" style="margin-left:10%;margin-right:10%" id="job_div">
        <label class="col-2 col-form-label">อาชีพ</label>
        <div class="col-10">
          <select name="job" class="form-control form-control-lg">
            <option selected value="">----- เลือกอาชีพ -----</option>
            <option value="1">เกษตรกรรม</option>
            <option value="2">รับจ้าง</option>
            <option value="3">รับราชการ/รัฐวิสาหกิจ</option>
            <option value="4">ค้าขาย</option>
            <option value="5">อื่นๆ</option>
          </select>
        </div>
        <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
        <div class="col-10" id="job_co" style="visibility: hidden;color: red">*กรุณาเลือกอาชีพ</div>
      </div>
      <div class="form-group row" style="margin-left:10%;margin-right:10%" id="salary_div">
       <label class="col-2 col-form-label">รายได้</label>
       <div class="col-10">
        <select name="salary" class="form-control form-control-lg">
          <option selected value="">----- เลือกรายได้-----</option>
          <option value="1">ไม่มีรายได้</option>
          <option value="2">ต่ำกว่า 5,000 บาท</option>
          <option value="3">5,001 - 9,000 บาท</option>
          <option value="3">9,001 - 13,000 บาท</option>
          <option value="4">มากกว่า 13,000 บาท</option>
        </select>
      </div>
      <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
      <div class="col-10" id="salary_co" style="visibility: hidden;color: red">*กรุณาเลือกรายได้</div>
    </div>
    <div class="form-group row" style="margin-left:10%;margin-right:10%" id="tel_div">
     <label class="col-2 col-form-label">เบอร์โทรศัพท์</label>
     <div class="col-10">
      <input class="form-control" type="tel" id="tel" name="tel" placeholder="0960000xxx" onkeyup="validatetel(this)" onkeydown="validatetel(this)" onkeypress="return isNumber(event,value)">
    </div>
    <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
    <div class="col-10"  style="visibility: hidden;color: red"  id="al5">*กรุณาตรวจสอบใหม่อีกครั้ง หากไม่มี ให้ใส่เครื่องหมาย -</div>
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