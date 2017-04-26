<?php include "head.php" ?>
<?php include('connection.php'); ?>
<?php
    $id = $_GET['id'];
?>
<?php 
    
    $d = isset($_POST['date'])? $_POST['date']: '';
    $bg = isset($_POST['BloodGroup'])? $_POST['BloodGroup']: '';
    $sys = isset($_POST['SYS'])? $_POST['SYS']: '';
    $dia = isset($_POST['DIA'])? $_POST['DIA']: '';
    $fbs = isset($_POST['FBS'])? $_POST['FBS']: '';
    $w = isset($_POST['weight'])? $_POST['weight']: '';
    $h = isset($_POST['height'])? $_POST['height']: '';
    $ch = isset($_POST['chr'])? $_POST['chr']: '';
    $in = isset($_POST['into'])? $_POST['into']: '';
    $di = isset($_POST['disa'])? $_POST['disa']: '';
    $f = isset($_POST['food'])? $_POST['food']: '';
    $bos = isset($_POST['Smoke'])? $_POST['Smoke']: '';
    $boa = isset($_POST['Drink'])? $_POST['Drink']: '';
    $ex = isset($_POST['exercise'])? $_POST['exercise']: '';
    $wa = isset($_POST['homeArea1'])? $_POST['homearea1']: '';
    $nf = isset($_POST['homeArea2'])? $_POST['homearea2']: '';
    $year = explode("-", $d);
    

    if(isset($_POST["insert"])){
        $query = "INSERT INTO health_info VALUES('$id','$year[0]','$d','$bg','$sys','$dia','$fbs','$w','$h','$ch','$in','$f','$di','$bos','$bos','$ex','$wa','$nf')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<script>alert('เพิ่มข้อมูลเรียบร้อย'); location.href = 's_record.php';</script>";
        }else{
            echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้'); location.href='adddata.php?id=$id'; </script>";
        }
    }
?>

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
    var sys = document.forms["myForm"]["SYS"].value;
    var bg = document.forms["myForm"]["BloodGroup"].value;
    var dia = document.forms["myForm"]["DIA"].value;
    var w = document.forms["myForm"]["weight"].value;
    var h = document.forms["myForm"]["height"].value;
    var d = document.forms["myForm"]["Drink"].value;
    var s = document.forms["myForm"]["Smoke"].value;
    var ex = document.forms["myForm"]["exercise"].value;
    var tex = document.forms["myForm"]["time-exercise"].value;
    var food = document.forms["myForm"]["Food"].value;
    var into = document.forms["myForm"]["into"].value;
    var disa = document.forms["myForm"]["disa"].value;
    var date = document.forms["myForm"]["date"].value;
    var chr = document.forms["myForm"]["chr"].value;
    var fbs = document.forms["myForm"]["FBS"].value;
    

    var sys_oper = 0
    var bg_oper = 0
    var dia_oper = 0
    var w_oper = 0
    var h_oper = 0
    var d_oper = 0
    var s_oper = 0
    var ex_oper = 0
    var tex_oper = 0
    var fbs_oper = 0;
    var food_oper = 0;
    var disa_oper = 0;
    var chr_oper = 0;
    var into_oper = 0;
    var date_oper = 0;
    var sh_opers = 0;

    if ( sys == null || sys == "" ) {
      document.getElementById("SYS_DIV").className += " has-danger";
      document.getElementById("SYS").className += " form-control-danger";
      document.getElementById("al2").style.visibility = 'visible';    
      sys_oper = 1;
    } else {
      if ( document.getElementById("SYS_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("SYS_DIV").className = document.getElementById("SYS_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
        document.getElementById("SYS").className = document.getElementById("SYS").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
        document.getElementById("SYS_DIV").className += " has-success";
        document.getElementById("SYS").className += " form-control-success;"
        document.getElementById("al2").style.visibility = 'hidden';    
        sys_oper = 0;
      } else {
        document.getElementById("SYS_DIV").className += " has-success";
        document.getElementById("SYS").className += " form-control-success";
        document.getElementById("al2").style.visibility = 'hidden';    
        sys_oper = 0;
      }
    }


    if ( bg == null || bg == "" ) {
      document.getElementById("bg_DIV").className += " has-danger";
      bg_oper = 1;
    } else {
      if ( document.getElementById("bg_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("bg_DIV").className = document.getElementById("bg_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
        document.getElementById("bg_DIV").className += " has-success";
        bg_oper = 0;
      } else {
        document.getElementById("bg_DIV").className += " has-success";
        bg_oper = 0;
      }
    }


    if ( dia == null || dia == "" ) {
      document.getElementById("dia_DIV").className += " has-danger";
      document.getElementById("DIA").className += " form-control-danger";
      document.getElementById("dl2").style.visibility = 'visible';    
      dia_oper = 1;
    } else {
      if ( document.getElementById("dia_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("dia_DIV").className = document.getElementById("dia_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
        document.getElementById("DIA").className = document.getElementById("DIA").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " )
        document.getElementById("dia_DIV").className += " has-success";
        document.getElementById("DIA").className += " form-control-success";
      document.getElementById("dl2").style.visibility = 'hidden';    
        dia_oper = 0;
      } else {
        document.getElementById("dia_DIV").className += " has-success";
        document.getElementById("DIA").className += " form-control-success";
      document.getElementById("dl2").style.visibility = 'hidden';    
        dia_oper = 0;
      }
    }

    if ( w == null || w == "" ) {
      document.getElementById("w_DIV").className += " has-danger";
      document.getElementById("weight").className += " form-control-danger";
      document.getElementById("wl2").style.visibility = 'visible';    
      w_oper = 1;
    } else {
      if ( document.getElementById("w_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("w_DIV").className = document.getElementById("w_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
        document.getElementById("weight").className = document.getElementById("weight").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
        document.getElementById("w_DIV").className += " has-success";
        document.getElementById("weight").className += " form-control-success";
        document.getElementById("wl2").style.visibility = 'hidden';    
        w_oper = 0;
      } else {
        document.getElementById("w_DIV").className += " has-success";
        document.getElementById("weight").className += " form-control-success";
        document.getElementById("wl2").style.visibility = 'hidden';    
        dia_oper = 0;
      }
    }

    if ( h == null || h == "" ) {
      document.getElementById("h_DIV").className += " has-danger";
      document.getElementById("height").className += " form-control-danger";
      document.getElementById("hl2").style.visibility = 'visible';    
      h_oper = 1;
    } else {
      if ( document.getElementById("h_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("h_DIV").className = document.getElementById("h_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
        document.getElementById("height").className = document.getElementById("height").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " )
        document.getElementById("h_DIV").className += " has-success"
        document.getElementById("height").className += " form-control-success"
        document.getElementById("hl2").style.visibility = 'hidden';    
        h_oper = 0;
      } else {
        document.getElementById("h_DIV").className += " has-success"
        document.getElementById("height").className += " form-control-success"
        document.getElementById("hl2").style.visibility = 'hidden';    
        dia_oper = 0;
      }
    }
    if ( d == null || d == "" ) {
      document.getElementById("d_DIV").className += " has-danger"
      document.getElementById("dsub_DIV").className += " has-danger"
      d_oper = 1;
    } else {
      if ( document.getElementById("d_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("d_DIV").className = document.getElementById("d_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
        document.getElementById("dsub_DIV").className = document.getElementById("dsub_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
        document.getElementById("d_DIV").className += " has-success"
        document.getElementById("dsub_DIV").className += " has-success"
        d_oper = 0;
      } else {
        document.getElementById("d_DIV").className += " has-success"
        document.getElementById("dsub_DIV").className += " has-success"
        bg_oper = 0;
      }
    }
    if ( s == null || s == "" ) { 
      document.getElementById("s_DIV").className += " has-danger"
      document.getElementById("ssub_DIV").className += " has-danger"
      d_oper = 1;
    } else {
      if ( document.getElementById("s_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("s_DIV").className = document.getElementById("s_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
        document.getElementById("ssub_DIV").className = document.getElementById("ssub_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
        document.getElementById("s_DIV").className += " has-success"
        document.getElementById("ssub_DIV").className += " has-success"
        d_oper = 0;
      } else {
        document.getElementById("s_DIV").className += " has-success"
        document.getElementById("ssub_DIV").className += " has-success"
        bg_oper = 0;
      }
    }

    if ( ex == null || ex == "" ) {
      document.getElementById("ex_DIV").className += " has-danger"
      document.getElementById("exsub_DIV").className += " has-danger"
      d_oper = 1;
    } else {
      if ( document.getElementById("ex_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("ex_DIV").className = document.getElementById("ex_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
        document.getElementById("exsub_DIV").className = document.getElementById("exsub_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
        document.getElementById("ex_DIV").className += " has-success"
        document.getElementById("exsub_DIV").className += " has-success"
        d_oper = 0;
      } else {
        document.getElementById("ex_DIV").className += " has-success"
        document.getElementById("exsub_DIV").className += " has-success"
        bg_oper = 0;
      }
    }
    if (( ex == "1" || ex == "2" )&&(tex == null || tex =="")) {
      if ( document.getElementById("tex_DIV").className.match(/(?:^|\s)has-success(?!\S)/) ){
        document.getElementById("tex_DIV").className = document.getElementById("tex_DIV").className.replace( /(?:^|\s)has-success(?!\S)/g , " " )
      }
      document.getElementById("tex_DIV").className += " has-danger"
      d_oper = 1;
    } else if ( ex == "0") {
      if ( document.getElementById("tex_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("tex_DIV").className = document.getElementById("tex_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
      }
      document.getElementById("tex_DIV").className += " has-success"
      d_oper = 0;
    } else {
      if ( document.getElementById("tex_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("tex_DIV").className = document.getElementById("tex_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " )
        document.getElementById("tex_DIV").className += " has-success"
        d_oper = 0;
      } else {
        document.getElementById("tex_DIV").className += " has-success"
        bg_oper = 0;
      }
    }
      if ( fbs == null || fbs == "" ) {
      document.getElementById("FBS_DIV").className += " has-danger";
      document.getElementById("FBS").className += " form-control-danger";
      document.getElementById("fl2").style.visibility = 'visible';    
      fbs_oper = 1;
    } else {
      if ( document.getElementById("FBS_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("FBS_DIV").className = document.getElementById("FBS_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
        document.getElementById("FBS").className = document.getElementById("FBS").className.replace( /(?:^|\s)form-has-danger(?!\S)/g , " " );
        document.getElementById("FBS_DIV").className += " has-success";
        document.getElementById("FBS").className += " form-control-success;"
        document.getElementById("fl2").style.visibility = 'hidden';    
        fbs_oper = 0;
      } else {
        document.getElementById("FBS_DIV").className += " has-success";
        document.getElementById("FBS").className += " form-control-success";
        document.getElementById("fl2").style.visibility = 'hidden';    
        fbs_oper = 0;
      }
    } if ( disa == null || disa == "" ) {
      document.getElementById("dis_DIV").className += " has-danger";
      disa_oper = 1;
    } else {
      if ( document.getElementById("dis_DIV").className.match(/(?:^|\s)has-danger(?!\S)/) ){
        document.getElementById("dis_DIV").className = document.getElementById("dis_DIV").className.replace( /(?:^|\s)has-danger(?!\S)/g , " " );
        document.getElementById("dis_DIV").className += " has-success";
        disa_oper = 0;
      } else {
        document.getElementById("dis_DIV").className += " has-success";
        disa_oper = 0;
      }
    }
    if(food == null || food == ""){
       alert("กรุณากรอกข้อมูลให้ครบถ้วน");
       return false;
    }
    if(into == null || into == "" ){
        alert("กรุณากรอกข้อมูลให้ครบถ้วน");
        return false;
    }if(ch == null||ch == ""){
        alert("กรุณากรอกข้อมูลให้ครบถ้วน");
        return false;
    }
    if (sys_oper || bg_oper || dia_oper || w_oper || h_oper || d_oper || s_oper || ex_oper || tex_oper || fbs_oper||disa_oper){
     alert("กรุณากรอกข้อมูลให้ครบถ้วน");
     return false;
   }
 }
 function clean(input){
  var regex = /[^0-9]/gi;
  input.value = input.value.replace(regex, "");
}
</script>

<div> 
  <div class="container" style="background:white">
    <div class="row">
      <div class="col-lg-12">
        <div style="width:100%" >
          <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>บันทึกข้อมูลการตรวจสุขภาพ</h1></div>
          <form name="myForm"  method="POST" onsubmit="return validateForm()">
              <div class="form-group row" style="margin-left:10%;margin-right:10%" id="lname_div">
            <label class="col-2 col-form-label">วันที่</label>
            <div class="col-10">
                
              <input class="form-control" type="date" class="form-control" id="date" name = "date" placeholder="Date" >
            </div>
            </div>
            <?php 
                $sql = "SELECT Title,Fname,Lname, Year(CURRENT_DATE)-Year(Birth_date) AS Age FROM person WHERE Citizen_ID = '$id'";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    $title = $row["Title"];
                    $fname = $row["Fname"];
                    $lname = $row["Lname"];
                    $age = $row["Age"];
                }
            ?>
              <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-2 col-form-label">ชื่อ - สกุล</label>
              <label class="form-check-label">
                <h4><label style="padding-right:10px">
                      <?php 
                        echo $title;
                      ?>
                      </label><label style="padding-right:20px">
                      <?php 
                        echo $fname;
                      ?>
                      </label><label>
                      <?php 
                        echo $lname;
                      ?>
                      </label></h4>
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%" id="bg_DIV">
              <label class="col-2 col-form-label">กรุ๊ปเลือด</label>
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="BloodGroup" id="inlineRadioA" value="A"> A
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input class="form-check-input" type="radio" name="BloodGroup" id="inlineRadioB" value="B"> B
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input class="form-check-input" type="radio" name="BloodGroup" id="inlineRadioAB" value="AB"> AB
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input class="form-check-input" type="radio" name="BloodGroup" id="inlineRadioO" value="O"> O
              </label>
            </div>
            <div class="form-group row" style="margin-left:10%;margin-right:10%" id="SYS_DIV">
              <label class="col-2 col-form-label">ความดันโลหิต</label>
              <div class="col-10">
                <input class="form-control" type="number" id="SYS" name="SYS" onkeyup="clean(this)" onkeydown="clean(this)" placeholder="SYS" min="1" max="999">
              </div>
              <label class="col-2 col-form-label" id="al" style="visibility: hidden;"></label>
              <div class="col-10" id="al2"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวเลข</div>
            </div>
            <div class="form-group row" style="margin-left:10%;margin-right:10%" id="dia_DIV">
              <label class="col-2 col-form-label"></label>
              <div class="col-10">
                <input class="form-control" type="number" id="DIA" name="DIA" onkeyup="clean(this)" onkeydown="clean(this)" placeholder="DIA" min="1" max="999">
              </div>
              <label class="col-2 col-form-label" id="dl" style="visibility: hidden;"></label>
              <div class="col-10" id="dl2"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวเลข</div>
            </div>
              <div class="form-group row" style="margin-left:10%;margin-right:10%" id="FBS_DIV">
              <label class="col-2 col-form-label">ระดับน้ำตาลในเลือด</label>
              <div class="col-10">
                <input class="form-control" type="number" id="FBS" name="FBS" onkeyup="clean(this)" onkeydown="clean(this)" placeholder="FBS" min="1" max="999">
              </div>
              <label class="col-2 col-form-label" id="fl" style="visibility: hidden;"></label>
              <div class="col-10" id="fl2"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวเลข</div>
            </div>
            <div class="form-group row" style="margin-left:10%;margin-right:10%" id="w_DIV">
             <label class="col-2 col-form-label">น้ำหนัก</label>
             <div class="col-10">
              <input class="form-control" type="number" id="weight" name="weight" onkeyup="clean(this)" onkeydown="clean(this)" placeholder="kilogram" min="1" max="999">
            </div>
            <label class="col-2 col-form-label" id="wl" style="visibility: hidden;"></label>
            <div class="col-10" id="wl2"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวเลข</div>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="h_DIV">
            <label class="col-2 col-form-label">ส่วนสูง</label>
            <div class="col-10">
              <input class="form-control" type="number" id="height" name="height" onkeyup="clean(this)" onkeydown="clean(this)" placeholder="meter" min="1" max="999">
            </div>
            <label class="col-2 col-form-label" id="hl" style="visibility: hidden;"></label>
            <div class="col-10" id="hl2"  style="visibility: hidden;color: red">*กรุณากรอกเฉพาะตัวเลข</div>
          </div>
          <div class="form-check form-group row" style="margin-left:10%">
            <label class="col-2 col-form-label">อายุ</label>
            <label class="form-check-label">
              <label style="padding-right:10px"><?php
                  echo $age; ?>
                </label><label style="padding-right:20px">ปี</label>
            </label>
          </div>
           <div class="form-group row" style="margin-left:10%;margin-right:10%" id="fname_div">
              <label class="col-2 col-form-label">โรคประจำตัว</label>
              <div class="col-10">
                <input class="form-control" type="text" id="chr" name="chr" placeholder="โรคประจำตัว" onkeyup="clean_not_char(this)" onkeydown="clean_not_char(this)">
              </div>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="fname_div">
              <label class="col-2 col-form-label">การแพ้ยา</label>
              <div class="col-10">
                <input class="form-control" type="text" id="into" name="into" placeholder="การแพ้ยา" onkeyup="clean_not_char(this)" onkeydown="clean_not_char(this)">
              </div>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="fname_div">
              <label class="col-2 col-form-label">อาหารที่แพ้</label>
              <div class="col-10">
                <input class="form-control" type="text" id="food" name="food" placeholder="อาหารที่แพ้" onkeyup="clean_not_char(this)" onkeydown="clean_not_char(this)">
              </div>
          </div>
              <div class="form-check form-group row" style="margin-left:10%" id="dis_DIV">
            <label class="col-8 col-form-label">ความพิการ</label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" id="dissub_DIV">
            <label class="form-check-label"  style="margin-left:5%">
              <input class="form-check-input" type="radio" name="disa" id="disa0" value="0" onclick="disabled_TE()">ไม่พิการ
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="disa" id="disa1" value="1" onclick="enabled_TE()">พิการ
            </label>
          </div>
<!--
          <div class="form-check" id="sh_DIV">
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">ความสามารถในการช่วยเหลือตนเอง</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <input class="form-check-input" type="radio" name="selfhelp" value="0" id="TE1" disabled>ช่วยเหลือตนเองไม่ได้
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input class="form-check-input" type="radio" name="selfhelp" value="1" id="TE2" disabled>ช่วยเหลือตนเองได้
              </label>
            </div>
          </div>
-->
          <div class="form-check form-group row" style="margin-left:10%">
            <label class="col-8 col-form-label">ข้อมูลในช่วง 1 ปีที่ผ่านมา</label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" id="d_DIV">
            <label class="col-8 col-form-label">พฤติกรรมการดื่มสุรา(จำนวนครั้งต่อสัปดาห์)</label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" id="dsub_DIV">
            <label class="form-check-label" style="margin-left:5%">
              <input class="form-check-input" type="radio" name="Drink" id="drink0" value="0"> ไม่ดื่ม
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="Drink" id="drink1" value="1"> 1-2
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="Drink" id="drink2" value="2"> 3-5
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="Drink" id="drink4" value="3"> 6 ครั้งขึ้นไป
            </label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" id="s_DIV">
            <label class="col-8 col-form-label">พฤติกรรมการสูบบุหรี่(จำนวนมวนต่อวัน)</label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" id="ssub_DIV">
            <label class="form-check-label"  style="margin-left:5%">
              <input class="form-check-input" type="radio" name="Smoke" id="Smoke0" value="0"> ไม่สูบ
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="Smoke" id="Smoke1" value="1"> 1-5
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="Smoke" id="Smoke2" value="2"> 6-10
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="Smoke" id="Smoke3" value="3"> 11-19
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="Smoke" id="Smoke4" value="4"> 1 ซองขึ้นไป
            </label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" id="ex_DIV">
            <label class="col-8 col-form-label">พฤติกรรมการออกกำลังกาย (วันต่อสัปดาห์)</label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" id="exsub_DIV">
            <label class="form-check-label"  style="margin-left:5%">
              <input class="form-check-input" type="radio" name="exercise" id="exercise0" value="0" onclick="disabled_TE()">ไม่ได้ออกกำลังกาย
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="exercise" id="exercise1" value="1" onclick="enabled_TE()">1-3 วัน
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="radio" name="exercise" id="exercise2" value="2" onclick="enabled_TE()">มากกว่า 4 วัน
            </label>
          </div>
<!--
          <div class="form-check" id="tex_DIV">
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">จำนวนชั่วโมงในวันที่ออกกำลังกาย</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <input class="form-check-input" type="radio" name="time-exercise" value="0" id="TE1" disabled>น้อยกว่า 1 ชั่วโมง
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input class="form-check-input" type="radio" name="time-exercise" value="1" id="TE2" disabled>1-3 ชั่วโมง
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input class="form-check-input" type="radio" name="time-exercise" value="2" id="TE3" disabled>มากกว่า 3 ชั่วโมง
              </label>
            </div>
          </div>
-->
          <div class="form-check form-group row" style="margin-left:10%">
            <label class="col-8 col-form-label">สภาพแวดล้อมบริเวณที่เป็นอยู่</label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%">
            <label class="form-check-label"  style="margin-left:5%">
              <input class="form-check-input" type="checkbox" id="homearea1" name="homeArea1" value="1" aria-label="...">มีแอ่งน้ำ หรือ พื้นที่น้ำขัง
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class="form-check-input" type="checkbox" id="homearea2" name="homeArea2" value="2" aria-label="...">ใกล้โรงงาน
            </label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="right">
            <button type="submit" name = "insert" class="btn btn-primary">Submit</button>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>
</div>

<?php include "foot.php" ?>