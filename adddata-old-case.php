<?php include "head.php" ?>
<?php include "connection.php" ?>
<?php session_start(); 
    $cid = isset($_SESSION['id'])? $_SESSION['id']: '';
    $title = isset($_SESSION['tt'])? $_SESSION['tt']: '';
    $fname = isset($_SESSION['fn'])? $_SESSION['fn']: '';
    $lname = isset($_SESSION['ln'])? $_SESSION['ln']: '';
    $Age = isset($_SESSION['age'])? $_SESSION['age']: '';
?>
<?php 
    $d = isset($_POST['date'])? $_SESSION['date']: '';
    $bg = isset($_POST['BloodGroup'])? $_SESSION['BloodGroup']: '';
    $sys = isset($_SESSION['SYS'])? $_SESSION['SYS']: '';
    $dia = isset($_SESSION['DIA'])? $_SESSION['DIA']: '';
    $fbs = isset($_SESSION['FBS'])? $_SESSION['FBS']: '';
    $w = isset($_SESSION['weight'])? $_SESSION['weight']: '';
    $h = isset($_SESSION['height'])? $_SESSION['height']: '';
    $ch = isset($_SESSION['chr'])? $_SESSION['chr']: '';
    $in = isset($_SESSION['into'])? $_SESSION['into']: '';
    $di = isset($_SESSION['disa'])? $_SESSION['disa']: '';
    $f = isset($_SESSION['food'])? $_SESSION['food']: '';
    $sm = isset($_SESSION['Smoke'])? $_SESSION['Smoke']: '';
    $dr = isset($_SESSION['Drink'])? $_SESSION['Drink']: '';
    $envi = isset($_SESSION['env'])? $_SESSION['env']: '';
    $ex = isset($_SESSION['exercise'])? $_SESSION['exercise']: '';
?>

<!--?php 
    $d = $_POST['cid'];
    $sql = "SELECT Title,Fname,Lname FROM person WHERE Citizen_ID = '$cid'";
    $res = mysqli_query($con,$sql);
    while($r = mysqli_fetch_array($res)){
        $title = $r["Title"];
        $fname = $r["Fname"];
        $lname = $r["Lname"];
    }
?-->
<?php 
    $derr ="";
    $bgerr= "";
    $syserr = "";
    $diaerr = "";
    $fbserr = "";
    $werr = "";
    $herr = "";
    $cherr = "";
    $inerr = "";
    $dierr = "";
    $ferr = "";
    $smerr = "";
    $drerr = "";
    $envierr = "";
    if(empty($_POST["date"])){
        $derr = "";
    }else{
        $d = $_POST["date"];
    }if(empty($_POST["BloodGroup"])){
        $bgerr = "";
    }else{
        $bg = $_POST["BloodGroup"];
    }if(empty($_POST["SYS"])){
        $syserr = "";
    }else{
        $sys = $_POST["SYS"];
    }if(empty($_POST["DIA"])){
        $diaerr = "";
    }else{
        $dia = $_POST["DIA"];
    }if(empty($_POST["FBS"])){
        $fbserr = "";
    }else{
        $fbs = $_POST["FBS"];
    }if(empty($_POST["weight"])){
        $werr = "";
    }else{
        $w = $_POST["weight"];
    }if(empty($_POST["height"])){
        $herr = "";
    }else{
        $h = $_POST["height"];
    }if(empty($_POST["chr"])){
        $cherr = "";
    }else{
        $ch = $_POST["chr"];
    }if(!empty($_POST["disa"])){
        $di = $_POST["disa"];
    }if(empty($_POST["food"])){
        $ferr = "";
    }else{
        $f = $_POST["food"];
    }if(empty($_POST["into"])){
        $inerr = "";
    }else{
        $in = $_POST["into"];
    }if(!empty($_POST["Smoke"])){
        $sm = $_POST["Smoke"];
    }if(!empty($_POST["Drink"])){
        $dr = $_POST["Drink"];
    }if(!empty($_POST["exercise"])){
        $ex = $_POST["exercise"];
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
   var fbs = document.forms["myForm"]["FBS"].value; 
   var w = document.forms["myForm"]["weight"].value;
   var h = document.forms["myForm"]["height"].value;
   var d = document.forms["myForm"]["Drink"].value;
   var s = document.forms["myForm"]["Smoke"].value;
   var ex = document.forms["myForm"]["exercise"].value;
   var tex = document.forms["myForm"]["time-exercise"].value;
   var fbs = documet.forms["myForm"]["FBS"].value;
   var food = document.forms["myForm"]["Food"].value;
   var into = document.forms["myForm"]["into"].value;
   var disa = document.forms["myForm"]["disa"].value;
   var date = document.forms["myForm"]["date"].value;
   var chr = document.forms["myForm"]["chr"].value;
   var selfh = document.forms["myForm"]["sh"].value;
   if ( sys == null || sys == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  } 
  if ( bg == null || bg == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( dia == null || dia == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( fbs == null || fbs == "" ){
      alert("กรุณากรอกข้อมูลให้ครบถ้วน");
      return false;
  }
  if ( w == null || w == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( h == null || h == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( d == null || d == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( s == null || s == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( ex == null || ex == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if (( ex == "1" || ex == "2" )&&(tex == null || tex =="")) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if ( disa == null || disa == "" ) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }
  if (( disa == "1")&&(selfh == null || selfh =="")) {
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }

}
</script>

<?php 
    $sql = "SELECT * FROM health_info WHERE Hcid = '$cid' ";
    $result = mysqli_query($con,$sql);
    #echo mysqli_num_rows($result);
    while($row = mysqli_fetch_array($result)){
        $id = $row["Hcid"];
        $y = $row["Year"];
        $d = $row["Date_of_Health"];
        $w = $row["Weight"];
        $h = $row["Height"];
        $bg = $row["Blood_group"];
        $env = $row["Environment"];
        $dis= $row["Disability"];
        $into = $row["Intolerance"];
        $food = $row["Food_allergies"];
        $sys = $row["BP_SYS"];
        $dia = $row["BP_DIA"];
        $fbs = $row["FBS"];
        $chr = $row["Chronic_Disease"];
        $bos = $row["BOS"];
        $boa = $row["BOA"];
        $ex = $row["Exercise"];
    }
?>
<?php 
        if(isset($_SESSION['PHP_SELF'])){
        $p = htmlspecialchars($_SESSION['PHP_SELF']);
    }else{
        $p = '';
    }
?>
<div>
<div class="row">
<div class="form-check form-group col" style="margin-left:10%">
    <label class="col-form-label"><a href="adddata-old-case-edit.php" style="color: red"><u>แก้ไขข้อมูล</u></a></label>
  </div>
  <div class="form-check form-group col" style="margin-right:10%" align="right">
    <label class="col-form-label"><a href="#" style="color: red"><u>ดูข้อมูลย้อนหลัง</u></a></label>
  </div>
</div>
    <div class="container" style="background:white" d>
      <div class="row">
        <div class="col-lg-12">
          <div style="width:100%" >
            <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>บันทึกข้อมูลการตรวจสุขภาพ</h1></div>
            <form name="myForm" action="<?$p?>" method="post" onsubmit="return validateForm()">
              <div class="form-group row" style="margin-left:10%;margin-right:10%" id="lname_div">
            <label class="col-2 col-form-label">วันที่</label>
            <div class="col-10">
              <?php echo "<input disabled ='' class='form-control' type='date' class='form-control' id='date' placeholder='Date' maxlength='0' value='$d'>"?>
            </div>
            </div>
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
              <div class="form-check form-group row" style="margin-left:10%">
                <label class="col-2 col-form-label">กรุ๊ปเลือด</label>
                <label class="form-check-label">
                  <?php echo"<input disabled='' class='form-check-input' type='radio' name='BloodGroup' id='inlineRadioA' value='$bg' checked> A" ?>
                </label>
                <label class="form-check-label" style="margin-left:2%">
                  <?php echo"<input disabled='' class='form-check-input' type='radio' name='BloodGroup' id='inlineRadioA' value='$bg'> B" ?>
                </label>
                <label class="form-check-label" style="margin-left:2%">
                  <?php echo"<input disabled='' class='form-check-input' type='radio' name='BloodGroup' id='inlineRadioA' value='$bg'> AB" ?>
                </label>
                <label class="form-check-label" style="margin-left:2%">
                  <?php echo"<input disabled='' class='form-check-input' type='radio' name='BloodGroup' id='inlineRadioA' value='$bg'> O" ?>
                </label>
              </div>
              <div class="form-group row" style="margin-left:10%;margin-right:10%">
                <label class="col-2 col-form-label">ความดันโลหิต</label>
                <div class="col-10">
                  <?php echo "<input disabled='' class='form-control' type='number' id='SYS' name='SYS' placeholder='SYS' min='1' max='999' value='$sys'>" ?>
                  <?php echo "<input disabled='' class='form-control' type='number' id='DIA' name='DIA'  placeholder='DIA' min='1' max='999' value='$dia'>" ?>
                </div>
              </div>
              <div class="form-group row" style="margin-left:10%;margin-right:10%">
                  <label class="col-2 col-form-label">ระดับน้ำตาลในเลือด</label>
                <div class="col-10">
                  <?php echo "<input disabled='' class='form-control' type='number' id='FBS' name='FBS' placeholder='FBS' min='1' max='999' value='$fbs'>" ?>
                </div>
              </div>
              <div class="form-group row" style="margin-left:10%;margin-right:10%">
               <label class="col-2 col-form-label">น้ำหนัก</label>
               <div class="col-10">
                <?php echo "<input disabled='' class='form-control' type='number' id='weight' name='weight' placeholder='kilogram' min='1' max='999' value='$w'>" ?>
              </div>
              <label class="col-2 col-form-label">ส่วนสูง</label>
              <div class="col-10">
                <?php echo "<input disabled='' class='form-control' type='number' id='height' name='height' placeholder='meter' min='1' max='999' value='$h'>" ?>
              </div>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-2 col-form-label">อายุ</label>
              <label class="form-check-label">
                <label style="padding-right:10px">
                    <?php 
                        echo $Age;
                    ?>
                  </label><label style="padding-right:20px">ปี</label>
              </label>
            </div>
                <div class="form-group row" style="margin-left:10%;margin-right:10%" id="chr_div">
              <label class="col-2 col-form-label">โรคประจำตัว</label>
              <div class="col-10">
                <?php echo"<input disabled='' class='form-control' type='text' id='chr' name='chr' placeholder='โรคประจำตัว' onkeyup='clean_not_char(this)' onkeydown='clean_not_char(this)' value = '$chr'>" ?>
              </div>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="into_div">
              <label class="col-2 col-form-label">การแพ้ยา</label>
              <div class="col-10">
                <?php echo "<input disabled='' class='form-control' type='text' id='into' name='into' placeholder='การแพ้ยา' onkeyup='clean_not_char(this)' onkeydown='clean_not_char(this)' value = '$into'>" ?>
              </div>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="food_div">
              <label class="col-2 col-form-label">อาหารที่แพ้</label>
              <div class="col-10">
                <?php echo "<input disabled='' class='form-control' type='text' id='food' name='food' placeholder='อาหารที่แพ้' onkeyup='clean_not_char(this)' onkeydown='clean_not_char(this)' value='$food'>" ?>
              </div>
          </div>
              <div class="form-check form-group row" style="margin-left:10%" >
            <label class="col-8 col-form-label">ความพิการ</label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" >
            <label class="form-check-label"  style="margin-left:5%">
              <?php echo "<input disabled='' class='form-check-input' type='radio' name='disa' id='disa0' value='$dis' checked onclick='disabled_TE()'>ไม่พิการ" ?>
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <?php echo "<input disabled='' class='form-check-input' type='radio' name='disa' id='disa1' value='$dis' onclick='enabled_TE()'>พิการ" ?>
            </label>
          </div>
<!--
          <div class="form-check">
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">ความสามารถในการช่วยเหลือตนเอง</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <input disabled="" class="form-check-input" type="radio" name="selfhelp" value="0" id="TE1" disabled>ช่วยเหลือตนเองไม่ได้
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input disabled="" class="form-check-input" type="radio" name="selfhelp" value="1" id="TE2" disabled>ช่วยเหลือตนเองได้
              </label>
            </div>
          </div>
-->
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">ข้อมูลในช่วง 1 ปีที่ผ่านมา</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">พฤติกรรมการดื่มสุา(จำนวนครั้งต่อสัปดาห์)</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label" style="margin-left:5%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='Drink' id='drink0' value='$boa' checked> ไม่ดื่ม" ?>
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='Drink' id='drink1' value='$boa'> 1-2" ?>
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='Drink' id='drink2' value='$boa'> 3-5" ?>
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='Drink' id='drink3' value='$boa'> 6 ครั้งขึ้นไป" ?>
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">พฤติกรรมการสูบบุหรี่(จำนวนมวนต่อวัน)</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='Smoke' id='Smoke0' value='$bos' checked> ไม่สูบ" ?>
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='Smoke' id='Smoke1' value='$bos'> 1-5" ?>
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='Smoke' id='Smoke2' value='$bos'> 6-10" ?>
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='Smoke' id='Smoke3' value='$bos'> 11-19"?>
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='Smoke' id='Smoke4' value='$bos'> 1 ซองขึ้นไป" ?>
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">พฤติกรรมการออกกำลังกาย (วันต่อสัปดาห์)</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='exercise' id='exercise0' value='$ex' checked  onclick='disabled_TE()'>ไม่ได้ออกกำลังกาย" ?>
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='exercise' id='exercise1' value='$ex' onclick= 'enabled_TE()'>1-3 วัน" ?>
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <?php echo "<input disabled='' class='form-check-input' type='radio' name='exercise' id='exercise2' value='$ex' onclick='enabled_TE()'>มากกว่า 4-7 วัน"?>
              </label>
            </div>
<!--
            <div class="form-check" >
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
                <?php echo"<input disabled='' class='form-check-input' type='checkbox' id='homearea1' name='homeArea1' value='$env' aria-label='...'>มีแอ่งน้ำ หรือ พื้นที่น้ำขัง" ?>
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <?php echo "<input disabled='' class='form-check-input' type='checkbox' id='homearea2' name='homeArea2' value='$env' aria-label='...'>ใกล้โรงงาน" ?>
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="right">
              <button type="submit" name = "send" class="btn btn-primary" disabled="">Submit</button>
            </div>
            
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include "foot.php" ?>