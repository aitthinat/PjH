<?php include "head.php" ?>
<script language="Javascript">

    function validateForm() {
       var select1 = document.forms["myForm"]["selectDis1"].checked;
       var select2 = document.forms["myForm"]["selectDis2"].checked;
       var select3 = document.forms["myForm"]["selectDis3"].checked;
       var select4 = document.forms["myForm"]["selectDis4"].checked;


       if ((select1 == false) &&(select2 == false) &&(select3 == false) &&(select4 == false)) {
          alert("กรุณาเลือกหัวข้อ อย่าน้อย 1  หัวข้อ");
          return false;
      }
  }
  function toggle(source) {
      document.getElementById("selectDis1").checked = source.checked;
      document.getElementById("selectDis2").checked = source.checked;
      document.getElementById("selectDis3").checked = source.checked;
      document.getElementById("selectDis4").checked = source.checked;

  }
</script>
<div>
    <div class="container">
        <div>
            <div style="padding-bottom: 20px"><center><img class="img-responsive" src="img/onpage_3.png" height="100" width="200"></center></div>
            <!-- Please Edit!! form, value, aria-label, selectAll -->
            <form name="myForm" onsubmit="return validateForm()" action="info_edd.php" method="POST" >
                <!-- Select Disease -->
                <!-- Dis1 : diabetes โรคเบาหวาน -->
                <!-- Dis2 : hypertension ความดันโลหิตสูง -->
                <!-- Dis3 : heart disease โรคหัวใจ -->
                <!-- Dis4 : liver disease โรคตับ -->
                <div class="form-check form-group row" style="margin-left:10%">
                    <label class="form-check-label"  style="margin-left:27%;margin-right:10%">
                        <input class="form-check-input" type="checkbox" id="selectAll" name="selectAll" value="0" aria-label="..." onClick="toggle(this)"">เลือกทั้งหมด
                    </label> <br/>

                    <label class="form-check-label" style="margin-left:27%;margin-right:10%">
                        <input class="form-check-input" type="checkbox" id="selectDis1" name="selectDis1" value="1" aria-label="...">โรคเบาหวาน
                    </label><br/>

                    <label class="form-check-label" style="margin-left:27%;margin-right:10%">
                        <input class="form-check-input" type="checkbox" id="selectDis2" name="selectDis2" value="2" aria-label="...">ความดันโลหิตสูง
                    </label><br/>

                    <label class="form-check-label" style="margin-left:27%;margin-right:10%">
                        <input class="form-check-input" type="checkbox" id="selectDis3" name="selectDis3" value="3" aria-label="...">โรคหัวใจ
                    </label><br/>

                    <label class="form-check-label" style="margin-left:27%;margin-right:10%">
                        <input class="form-check-input" type="checkbox" id="selectDis4" name="selectDis4" value="4" aria-label="...">โรคตับ
                    </label><br/>


                </div>


            <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="center">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
            </form>


        </div>
    </div>
</div>

<?php include "foot.php" ?>