<?php include "head.php" ?>

<?php 
session_start();
include "connection.php";
if (!empty($_POST["findhome"])) {
  $findhome = $_POST["findhome"];
}
if (!empty($_POST["findFname"])) {
  $findFname = $_POST["findFname"];
}
if (!empty($_POST["findLname"])) {
  $findLname = $_POST["findLname"];
}
if (!empty($_POST["sex"])) {
  $sex = $_POST["sex"];
}
if (!empty($_POST["age"])) {
  $age = $_POST["age"];
}
?>
<div>
  <div class="form-check form-group row" style="margin-left:10%;margin-bottom:-12px">
    <h2>
      <label class="col-3 col-form-label">บ้านเลขที่ :</label>
      <label class="col-form-label"><?php 

        if (!empty($_POST["findhome"])) {
            $sql = "SELECT 'HomeNo' FROM 'home' WHERE 'HomeNo' = '".$_POST["findhome"]."' ";
            $result = mysqli_query($con,$sql);
          echo "$result"; 
        } else {
          echo $findhome; }
          ?></label>
        </h2>
      </div>
      <div class="form-check form-group row" style="margin-left:10%">
        <h4>
          <label class="col-3 col-form-label">เลขที่ประจำบ้าน :</label>
            
          <label class="col-form-label"><?php
              if (empty($_POST["findhome"])){
                  $idh = "SELECT 'HomeID' FROM 'Home' WHERE HomeNo = ".$findhome." ";
                  $result_idh = mysqli_query($con,$idh);
                  echo "$result_idh";
              }else{
                  echo "";
              }
              
              ?>
            </label>
        </h4>
      </div>
      <div class="container" style="background:white">
        <div class="row">
          <div class="col-lg-12">
            <div style="width:100%" >
              <div align="center" style="padding-top:10px;padding-bottom:20px"></div>
              <div class="form-check form-group row" style="margin-left:8px;margin-bottom:-12px">
                <h2>
                  <label class="col-form-label">ข้อมูลผู้อาศัย</label>
                </h2>
              </div>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th colspan="3"><center>ชื่อ - สกุล</center></th>
                    <th>สถานะ</th>
                    <th>ตรวจสุขภาพ</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php 
                      $query = "SELECT Title,FName,LName,Status FROM person,home WHERE HomeID = Hid and HomeNo = ".$findhome.""or die("Error:" . mysqli_error()); 
                      $result = mysqli_query($con,$query);
                      $i = 1;
                      #if (mysqli_num_rows($result) > 0){
                          
                          while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<th >". $i ."</th>";
                                    echo "<th>" .$row["Title"] . "</th>";  
                                    echo "<td>" .$row["FName"] . "</td>";
                                    echo "<td>" .$row["LName"] . "</td>";
                                    echo "<td>" .$row["Status"] . "</td>";
                                    if(!empty($_POST["findhome"])){
                                        echo "<td><a href='adddata-old-case.php' style='color: green'>ตรวจแล้ว</a></td>";
                                    }else{
                                       echo "<td><a href='adddata-old-case.php' style='color: green'>ไม่ได้ตรวจ</a></td>"; 
                                    }
                                    echo "<td><a href='adddata-old-case-edit.php'><button type='button' class='btn btn-primary'>Edit</button></a></td>";
                                    $i++;
                                echo "</tr>";
                              #mysqli_close($con);
                              #}
                      }?>
                  </tr>
              </tbody>
            </table>
            <div class="form-check form-group row " style="margin-left:8px;margin-bottom:-12px">
              <h2>
                <label class="col-form-label">ข้อมูลที่อยู่อาศัยและที่ทำงาน</label>
              </h2>
            </div>
            <div align="right"><a href=""><button type="button" class="btn btn-primary">Edit</button></a></div>
          </div>
          <table class="table table-bordered">
            <tbody>
              <tr>
                <th scope="row">ขนาดที่อยู่อาศัย</th>
                <th>มี</th>
                <th>1 ไร่</th>
                <th>20 ตารางเมตร</th>
              </tr>
              <tr>
                <th scope="row">ขนาดที่ประกอบอาชีพ</th>
                <th>ไม่มี</th>
                <th>0 ไร่</th>
                <th>0 ตารางเมตร</th>
              </tr>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
  <div style="padding-right:80px;padding-top: 20px" align="right"><a href="add_inval.php"><img class="img-responsive" src="img/onpage_1-2.png" height="200" width="200"></a></div>
<!--</div>-->

<!--?php include "foot.php" ?>