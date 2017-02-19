<?php include "head.php" ?>
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
    if(checkID(id)) nextObj.focus();
    else alert('รหัสประชาชนไม่ถูกต้อง');
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
   var status = document.forms["myForm"]["status"].value;
   var sex = document.forms["myForm"]["sex"].value;
   var txtID1 = document.forms["myForm"]["txtID1"].value;
   var txtID2 = document.forms["myForm"]["txtID2"].value;
   var txtID3 = document.forms["myForm"]["txtID3"].value;
   var txtID4 = document.forms["myForm"]["txtID4"].value;
   var txtID5 = document.forms["myForm"]["txtID5"].value;
   var educate = document.forms["myForm"]["educate"].value;


  
   if ( txtID1 == null || txtID1 == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  } 
  if ( txtID2 == null || txtID2 == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  } 
  if ( txtID3 == null || txtID3 == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  } 
  if ( txtID4 == null || txtID4 == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  } 
  if ( txtID5 == null || txtID5 == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  } 
   if ( status == null || status == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  } 
  if ( sex == null || sex == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( educate == null || educate == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( fname == null || fname == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( lname == null || lname == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  
  

}

</script>
<div style="background:#d8e9f3">
  <div class="form-check form-group row" style="margin-left:10%;margin-bottom:-12px">
    <h2>
      <label class="col-3 col-form-label">บ้านเลขที่ :</label>
      <label class="col-form-label">123 / 123</label>
    </h2>
  </div>
  <div class="form-check form-group row" style="margin-left:10%">
    <h4>
      <label class="col-3 col-form-label">เลขที่ประจำบ้าน :</label>
      <label class="col-form-label">560x-xxxxxx-x</label>
    </h4>
  </div>
  <div class="container" style="background:#f2f3f4">
    <div class="row">
      <div class="col-lg-12">
        <div style="width:100%" >
          <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>บันทึกข้อมูลการตรวจสุขภาพ</h1></div>
          <form name="myForm" action="accept_adddata.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group row" style="margin-left:10%;margin-right:10%">
              <label class="col-2 col-form-label">ชื่อ - สกุล</label>
              <div class="col-10">
                <input class="form-control" type="text" id="fname" name="fname" placeholder="ชื่อ" pattern="[a-zA-Zก-๑]+" title="กรุณาใส่ชื่ออีกครั้ง">
                <input class="form-control" type="text" id="lname" name="lname"  placeholder="สกุล"  pattern="[a-zA-Zก-๑]+" title="กรุณาใส่นามสกุลอีกครั้ง">
              </div>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-2 col-form-label">เพศ</label>
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="sex" id="sex" value="M"> ชาย
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input class="form-check-input" type="radio" name="sex" id="sex" value="W"> หญิง
              </label>
            </div>
            <div class="form-inline row" style="margin-left:10%;margin-right:10%;margin-bottom: 10px">
              <label class="col-2 col-form-label">รหัสประจำตัวประชาชน : </label>
              <div class="col-10 form-inline">
                <div><input class="form-control" type="text" name="txtID1" id="txtID1" size="3px" maxlength=1 onkeyup="keyup(this,event)" onkeypress="return Numbers(event)">-</div>
                <div><input class="form-control" type="text" name="txtID2" id="txtID2" size="7px" maxlength=4 onkeyup="keyup(this,event)" onkeypress="return Numbers(event)">-</div>
                <div><input class="form-control" type="text" name="txtID3" id="txtID3" size="7px" maxlength=5 onkeyup="keyup(this,event)" onkeypress="return Numbers(event)">-</div>
                <div><input class="form-control" type="text" name="txtID4" id="txtID4" size="5px" maxlength=2 onkeyup="keyup(this,event)" onkeypress="return Numbers(event)">-</div>
                <div><input class="form-control" type="text" name="txtID5" id="txtID5" size="3px" maxlength=1 onkeyup="keyup(this,event)" onkeypress="return Numbers(event)"></div>
              </div>
            </div>
            <div class="form-group row" style="margin-left:10%;margin-right:10%">
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
        </div>
        <div class="form-group row" style="margin-left:10%;margin-right:10%">
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