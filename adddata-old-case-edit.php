<?php include "head.php" ?>
<?php include "connection.php" ?>
<?php
    $id = $_GET['id'];
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
  }if(disa == null || disa == ""){
    alert("กรุณากรอกข้อมูลให้ครบถ้วน");
    return false;
  }

}

</script>

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
    $waerr = "";
    $nferr = "";
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
    }if(empty($_POST["homearea1"])){
        $waerr = '';
    }else{
      $wa = $_POST["homearea1"];
    }if(empty($_POST["homearea2"])){
      $nferr = '';
    }else{
      $nf = $_POST["homearea2"];
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
    <label class="col-form-label"><a href="#" style="color: red"><u>แก้ไขข้อมูล</u></a></label>
  </div>
  <div class="form-check form-group col" style="margin-right:10%" align="right">
    <label class="col-form-label"><?php echo "<a href='adddata-old-case-view.php?id=$id' style='color: red'>"?><u>ดูข้อมูลย้อนหลัง</u></a></label>
  </div>
</div>
    <div class="container" style="background:white" d>
      <div class="row">
        <div class="col-lg-12">
          <div style="width:100%" >
            <div align="center" style="padding-top:10px;padding-bottom:20px"><h1>บันทึกข้อมูลการตรวจสุขภาพ</h1></div>
            <form name="myForm" action="<?php $p?>" method="POST" onsubmit="return validateForm()">
              <?php 
                  $sql = "SELECT * FROM health_info WHERE Hcid = '$id' ";
                  $result = mysqli_query($con,$sql);
                  while($row = mysqli_fetch_array($result)){
                      $id = $row["Hcid"];
                      $y = $row["Year"];
                      $d = $row["Date_of_Health"];
                      $w = $row["Weight"];
                      $h = $row["Height"];
                      $bg = $row["Blood_group"];
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
                      $wa = $row["Water_area"];
                      $nf = $row["Near_factory"];
                  }
              ?>
              <div class="form-group row" style="margin-left:10%;margin-right:10%" id="lname_div">
            <label class="col-2 col-form-label">วันที่</label>
            <div class="col-10">
              <?php echo "<input class='form-control' type='date' class='form-control' id='date' placeholder='Date' maxlength='0' value='$d'>"?>
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
              <div class="form-check form-group row" style="margin-left:10%">
                <label class="col-2 col-form-label">กรุ๊ปเลือด</label>
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="BloodGroup" id="inlineRadioA" value='$bg' <?php if($bg == 'A') echo "checked"; ?>>A
                </label>
                <label class="form-check-label" style="margin-left:2%">
                  <input class='form-check-input' type='radio' name='BloodGroup' id='inlineRadioA' value='$bg' <?php if($bg == 'B') echo "checked"; ?>>B
                </label>
                <label class="form-check-label" style="margin-left:2%">
                  <input class='form-check-input' type='radio' name='BloodGroup' id='inlineRadioA' value='$bg'<?php if($bg == 'AB') echo "checked"; ?>>AB
                </label>
                <label class="form-check-label" style="margin-left:2%">
                  <input  class='form-check-input' type='radio' name='BloodGroup' id='inlineRadioA' value='$bg' <?php if($bg == 'O') echo "checked";?>>O
                </label>
              </div>
              <div class="form-group row" style="margin-left:10%;margin-right:10%">
                <label class="col-2 col-form-label">ความดันโลหิต</label>
                <div class="col-10">
                  <?php echo "<input  class='form-control' type='number' id='SYS' name='SYS' placeholder='SYS' min='1' max='999' value='$sys'>" ?>
                  <?php echo "<input  class='form-control' type='number' id='DIA' name='DIA'  placeholder='DIA' min='1' max='999' value='$dia'>" ?>
                </div>
              </div>
              <div class="form-group row" style="margin-left:10%;margin-right:10%">
                  <label class="col-2 col-form-label">ระดับน้ำตาลในเลือด</label>
                <div class="col-10">
                  <?php echo "<input class='form-control' type='number' id='FBS' name='FBS' placeholder='FBS' min='1' max='999' value='$fbs'>" ?>
                </div>
              </div>
              <div class="form-group row" style="margin-left:10%;margin-right:10%">
               <label class="col-2 col-form-label">น้ำหนัก</label>
               <div class="col-10">
                <?php echo "<input class='form-control' type='number' id='weight' name='weight' placeholder='kilogram' min='1' max='999' value='$w'>" ?>
              </div>
              <label class="col-2 col-form-label">ส่วนสูง</label>
              <div class="col-10">
                <?php echo "<input class='form-control' type='number' id='height' name='height' placeholder='meter' min='1' max='999' value='$h'>" ?>
              </div>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-2 col-form-label">อายุ</label>
              <label class="form-check-label">
                <label style="padding-right:10px">
                    <?php 
                        echo $age;
                    ?>
                  </label><label style="padding-right:20px">ปี</label>
              </label>
            </div>
                <div class="form-group row" style="margin-left:10%;margin-right:10%" id="chr_div">
              <label class="col-2 col-form-label">โรคประจำตัว</label>
              <div class="col-10">
                <?php echo"<input  class='form-control' type='text' id='chr' name='chr' placeholder='โรคประจำตัว' onkeyup='clean_not_char(this)' onkeydown='clean_not_char(this)' value = '$chr'>" ?>
              </div>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="into_div">
              <label class="col-2 col-form-label">การแพ้ยา</label>
              <div class="col-10">
                <?php echo "<input  class='form-control' type='text' id='into' name='into' placeholder='การแพ้ยา' onkeyup='clean_not_char(this)' onkeydown='clean_not_char(this)' value = '$into'>" ?>
              </div>
          </div>
          <div class="form-group row" style="margin-left:10%;margin-right:10%" id="food_div">
              <label class="col-2 col-form-label">อาหารที่แพ้</label>
              <div class="col-10">
                <?php echo "<input class='form-control' type='text' id='food' name='food' placeholder='อาหารที่แพ้' onkeyup='clean_not_char(this)' onkeydown='clean_not_char(this)' value='$food'>" ?>
              </div>
          </div>
              <div class="form-check form-group row" style="margin-left:10%" >
            <label class="col-8 col-form-label">ความพิการ</label>
          </div>
          <div class="form-check form-group row" style="margin-left:10%" >
            <label class="form-check-label"  style="margin-left:5%">
              <input class='form-check-input' type='radio' name='disa' id='disa0' value='$dis' <?php if($dis == 0) echo "checked"?>>ไม่พิการ
            </label>
            <label class="form-check-label" style="margin-left:2%">
              <input class='form-check-input' type='radio' name='disa' id='disa1' value='$dis' <?php if($dis == 1) echo "checked"?>>พิการ
            </label>
          </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">ข้อมูลในช่วง 1 ปีที่ผ่านมา</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">พฤติกรรมการดื่มสุา(จำนวนครั้งต่อสัปดาห์)</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label" style="margin-left:5%">
                <input class='form-check-input' type='radio' name='Drink' id='drink0' value='$boa' <?php if($boa == 0) echo "checked"?>> ไม่ดื่ม
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input  class='form-check-input' type='radio' name='Drink' id='drink1' value='$boa' <?php if($boa == 1) echo "checked"?>> 1-2
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input  class='form-check-input' type='radio' name='Drink' id='drink2' value='$boa' <?php if($boa == 2) echo "checked"?>> 3-5
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input  class='form-check-input' type='radio' name='Drink' id='drink3' value='$boa' <?php if($boa == 3) echo "checked"?>> 6 ครั้งขึ้นไป
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">พฤติกรรมการสูบบุหรี่(จำนวนมวนต่อวัน)</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <input  class='form-check-input' type='radio' name='Smoke' id='Smoke0' value='$bos' <?php if($bos == 0) echo "checked"?>> ไม่สูบ
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input class='form-check-input' type='radio' name='Smoke' id='Smoke1' value='$bos' <?php if($bos == 1) echo "checked"?>> 1-5
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input class='form-check-input' type='radio' name='Smoke' id='Smoke2' value='$bos' <?php if($bos == 2) echo "checked"?>> 6-10
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input  class='form-check-input' type='radio' name='Smoke' id='Smoke3' value='$bos' <?php if($bos == 3) echo "checked"?>> 11-19
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input  class='form-check-input' type='radio' name='Smoke' id='Smoke4' value='$bos'<?php if($bos == 4) echo "checked"?>> 1 ซองขึ้นไป
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">พฤติกรรมการออกกำลังกาย (วันต่อสัปดาห์)</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <input  class='form-check-input' type='radio' name='exercise' id='exercise0' value='$ex' <?php if($ex == 0) echo "checked" ?>>ไม่ได้ออกกำลังกาย
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input  class='form-check-input' type='radio' name='exercise' id='exercise1' value='$ex' <?php if($ex == 1) echo "checked"?>>1-3 วัน
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input  class='form-check-input' type='radio' name='exercise' id='exercise2' value='$ex' <?php if($ex == 2) echo "checked"?>>4-7 วัน
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="col-8 col-form-label">สภาพแวดล้อมบริเวณที่เป็นอยู่</label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%">
              <label class="form-check-label"  style="margin-left:5%">
                <input  class='form-check-input' type='checkbox' id='homearea1' name='homeArea1' value='$wa' <?php if($wa == 1) echo "checked"?> aria-label='...'>มีแอ่งน้ำ หรือ พื้นที่น้ำขัง
              </label>
              <label class="form-check-label" style="margin-left:2%">
                <input  class='form-check-input' type='checkbox' id='homearea2' name='homeArea2' value='$nf' <?php if($nf == 1) echo "checked"?> aria-label='...'>ใกล้โรงงาน
              </label>
            </div>
            <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="right">
              <button type="submit" name = "send" class="btn btn-primary" >Submit</button>
            </div>
            <?php 
                if(isset($_POST["send"])){
                    $query = "UPDATE health_info SET
                    Date_of_health = '$d',
                    Blood_group = '$bg',
                    BP_SYS = '$sys',
                    BP_DIA = '$dia',
                    FBS = '$fbs',
                    Weight = '$w',
                    Height = '$h',
                    Chronic_Disease = '$ch',
                    Intolerance = '$in',
                    Food_allergies = '$f',
                    Disability = '$di',
                    BOA = '$boa',
                    BOS = '$bos',
                    Exercise = '$ex',
                    Water_area = $wa,
                    Near_factory = $nf
                    Where Hcid = '$id';
                    ";
                    if(mysqli_query($con,$query)){
                        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย'); location.href = 'adddata-old-case.php?id=$id'</script>";
                    }else{
                        echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้'); location.href= 'adddata-old-case-edit.php?id=$id'</script>";
                    }
                }
                ?>

          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include "foot.php" ?>
            