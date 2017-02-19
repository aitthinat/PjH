<?php include "head.php" ?>

<div style="background:#d8e9f3">
    <div class="container">
    <div>
        <div style="padding-bottom: 20px"><center><img class="img-responsive" src="img/onpage_3.png" height="100" width="200"></center></div>
        <div><center><h1>ตรวจสอบภาวะเสี่ยง</h1></center><br/></div>
            <!-- Please Edit!! form, value, aria-label, selectAll -->
            <form name="myForm" onsubmit="return validateForm()" action="info_edd.php" method="POST" >
            <!-- Select Disease -->
            <!-- Dis1 : diabetes โรคเบาหวาน -->
            <!-- Dis2 : hypertension ความดันโลหิตสูง -->
            <!-- Dis3 : heart disease โรคหัวใจ -->
            <!-- Dis4 : liver disease โรคตับ -->
                <div class="form-check form-group row" style="margin-left:10%">
                    <label class="form-check-label"  style="margin-left:27%;margin-right:10%">
                        <input class="form-check-input" type="checkbox" id="selectAll" name="selectAll" value="0" aria-label="...">เลือกทั้งหมด
                    </label> <br/>

                    <label class="form-check-label" style="margin-left:27%;margin-right:10%">
                        <input class="form-check-input" type="checkbox" id="selectDis1" name="selectDis1" value="1" aria-label="...">โรคเบาหวาน
                    </label><br/>

                    <label class="form-check-label" style="margin-left:27%;margin-right:10%">
                        <input class="form-check-input" type="checkbox" id="selectDis2" name="selectDis2" value="1" aria-label="...">ความดันโลหิตสูง
                    </label><br/>

                    <label class="form-check-label" style="margin-left:27%;margin-right:10%">
                        <input class="form-check-input" type="checkbox" id="selectDis3" name="selectDis3" value="1" aria-label="...">โรคหัวใจ
                    </label><br/>

                    <label class="form-check-label" style="margin-left:27%;margin-right:10%">
                        <input class="form-check-input" type="checkbox" id="selectDis4" name="selectDis4" value="1" aria-label="...">โรคตับ
                    </label><br/>


                </div>


            </form>

            <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="center">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>

    </div>
    </div>
</div>

<?php include "foot.php" ?>