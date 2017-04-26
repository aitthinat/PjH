<?php include "head.php" ?>
<?php include "connection.php" ?>
<form name="from" method="POST" action="t1.php">
<br><br>
<center><select name="type" class="btn btn-default">
  <option value="2014" style="background-color: #F2A4F2;color: #000000;">2014</option>
    <option value="2017" style="background-color: #F2A4F2;color: #000000;">2017</option>


  
</select>
&nbsp;


  <input type="submit" name="a" value="ค้นหา"></center>
  </form>
 


<?php

function multiple_table($type){

     $servername = "localhost";
$username = "root";
$password = "";
$dbname = "health";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connection failed:".$conn->connect_error);
    }
  $conn->set_charset("utf8");


   
   
$sql = "SELECT * FROM health_info WHERE Hcid = '3400123345510' and years = '$type'";

   
    $result = $conn->query($sql);
      
  

 
        if($result->num_rows>0){


          
            while ($row=$result->fetch_assoc()) { 
          
                   $y = $row["Years"];
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
                    


                         

                  
                   <div class="container" style="background-color:#E0E0E0;width: 80%; margin-bottom:30px">
        <div class="form-check form-group row" style="margin-left:10%;margin-top: 30px">
                            <label class="col-2 col-form-label">วันที่</label>
                            <label class="form-check-label">
                                <label style="padding-right:10px"><?php
                                    echo $d;
                                ?>
                                </label>
                            </label>
                        </div>
            <div class="form-check form-group row" style="margin-left:10%;margin-top: 30px">
                        <label class="col-2 col-form-label">กรุ๊ปเลือด</label>
                        <label class="form-check-label">
                            <label style="padding-right:10px"><?php
                                echo $bg;
                            ?>
                            </label>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">ความดันโลหิต</label>
                        <label class="form-check-label">
                            <label style="padding-right:10px"><?php
                                echo $sys; echo "/"; echo $dia; ?>
                            </label>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">ระดับน้ำตาลในเลือด</label>
                        <label class="form-check-label"><?php
                            echo $fbs; ?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">น้ำหนัก</label>
                        <label class="form-check-label"><?php
                            echo $w; ?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">ส่วนสูง</label>
                        <label class="form-check-label"><?php
                            echo $h; ?>
                        </label>
                    </div>
                    <div class="form-group row" style="margin-left:10%;margin-right:10%">
                       <div class="col-10">
                       </div>
                       <div class="col-10">
                       </div>
                   </div>
                   <div class="form-check form-group row" style="margin-left:10%">
                    <label class="col-2 col-form-label">อายุ</label>
                    <label class="form-check-label">
                        <label style="padding-right:10px"><?php
                            echo $age; ?>
                        </label><label style="padding-right:20px">ปี</label>
                    </label>
                </div>
                <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">โรคประจำตัว</label>
                        <label class="form-check-label"><?php
                            echo $chr; ?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">การแพ้ยา</label>
                        <label class="form-check-label"><?php
                            echo $into; ?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">อาหารที่แพ้</label>
                        <label class="form-check-label"><?php
                            echo $food; ?>
                        </label>
                    </div><div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-2 col-form-label">ความพิการ</label>
                        <label class="form-check-label"><?php
                        if(dis == 0){
                            echo "ไม่พิการ"; 
                        }else{
                            echo "พิการ";
                        }?>
                        </label>
                    </div>
                <div class="form-check form-group row" style="margin-left:10%">
                    <label class="col-8 col-form-label">ข้อมูลในช่วง 1 ปีที่ผ่านมา</label>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">พฤติกรรมการดื่มสุรา(จำนวนครั้งต่อสัปดาห์)</label>
                        <label class="form-check-label"><?php
                            if($boa == 0){
                                echo "ไม่ดื่ม";
                            }else if($boa == 1){
                                echo "1-2 ครั้ง / สัปดาห์";
                            }else if($boa == 2){
                                echo "3-5ครั้ง/สัปดาห์";
                            }elseif ($boa == 3) {
                                echo "6 ครั้งขึ้นไป/สัปดาห์";
                            }?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">พฤติกรรมการสูบบุหรี่(จำนวนมวนต่อวัน)</label>
                        <label class="form-check-label">
                            <?php
                            if($bos == 0){
                                echo "ไม่สูบบุหรี่";
                            }else if($bos == 1){
                                echo "1-5 มวน / วัน";
                            }else if($bos == 2){
                                echo "6-10 มวน/วัน";
                            }elseif ($bos == 3) {
                                echo "11-19 มวน/วัน";
                            }elseif($bos == 4){
                                echo "1 ซองขึ้นไป/วัน";
                            }?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                        <label class="col-5 col-form-label">พฤติกรรมการออกกำลังกาย (วันต่อสัปดาห์)</label>
                        <label class="form-check-label">
                            <?php
                            if($ex == 0){
                                echo "ไม่ได้ออกกำลังกาย";
                            }else if($ex == 1){
                                echo "1-3 วัน/สัปดาห์";
                            }else if($ex == 2){
                                echo "มากกว่า 4 วัน/สัปดาห์";
                            }?>
                        </label>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%">
                            <label class="col-5 col-form-label">สภาพแวดล้อมบริเวณที่เป็นอยู่</label>
                            <label class="form-check-label"><?php
                                if($wa == 1 && $nf == 1){
                                    echo "มีแอ่งน้ำ หรือ พื้นที่น้ำขัง, ใกล้โรงงาน";
                                } 
                                if($wa == 1){
                                    echo "มีแอ่งน้ำ หรือ พื้นที่น้ำขัง";
                                }if($nf == 1){
                                    echo "ใกล้โรงงาน";
                                }else{
                                    echo "สภาพแวดล้อมปกติ";
                                }?>
                            
                            </label>
                        </div>
                    </div>
                    <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="right">
                        <a href="index.php"><button type="button" name= "back" class="btn btn-primary" onclick="Finish_Check()">กลับ</button></a>
                    </div>

                </div>
    </div>

<!-- <select id="type">
    <option value="item1">item1</option>
    <option value="item2">item2</option>
    <option value="item3">item3</option>
</select>
<select id="size">
    <option value=""> select one  </option>
</select> -->
  </div>
            
       


            
<?php
        }else{
           echo "<br><center><h3 >ไม่พบข้อมูล</h3></center>";
        }
      
        

    $conn->close();
 


}

echo "<br><br>";



if(isset($_POST['a'])){
  $type = $_POST['type'];
   echo "<h2>ผลการค้นหา: $type </h2><br>";

multiple_table($type);


}


?>
