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
            $vilno = "SELECT HomeNo FROM home WHERE HomeNo = '$findhome' ";
            $resultVilno = mysqli_query($con,$vilno);
            $resno = mysqli_fetch_assoc($resultVilno);
            echo $resno["HomeNo"];
        } else {
            echo "-";
        }
          ?></label><br>
        <label class="col-3 col-form-label">ชื่อ :</label>
        <label class="col-form-label"><?php 
            if (!empty($_POST["findFname"])) {
              $name = "SELECT Fname FROM person WHERE Fname = '$findFname' ";
              $resultName = mysqli_query($con,$name);
              $resname = mysqli_fetch_assoc($resultName);
              echo $resname["Fname"];
            } else {
              echo "-";
            }
        ?></label><br>
        <label class="col-3 col-form-label">สกุล :</label>
        <label class="col-form-label"><?php 
            if (!empty($_POST["findLname"])) {
              $surname = "SELECT Lname FROM person WHERE Lname = '$findLname' ";
              $resultSurname = mysqli_query($con,$surname);
              $ressurname = mysqli_fetch_assoc($resultSurname);
              echo $ressurname["Lname"];
            } else {
              echo "-";
            }
        ?></label>
        </h2>
      </div>
      <!-- <div class="form-check form-group row" style="margin-left:10%">
        <h4>
          <label class="col-3 col-form-label">เลขที่ประจำบ้าน :</label>
            
          <label class="col-form-label"><!?php
              if (!empty($_POST["findhome"])){
                  $idh = "SELECT HomeID FROM Home WHERE HomeNo = '$findhome' ";
                  $result_idh = mysqli_query($con,$idh);
                  $res = mysqli_fetch_assoc($result_idh);
                  echo $res["HomeID"];   
                  #echo $idhome;
              }else{
                  echo "ไม่มีข้อมูล";
              }
              
              ?>
            </label>
        </h4>
        
      </div> -->
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
                    <th>บ้านเลขที่</th>
                    <th>ตรวจสุขภาพ</th>
                    <th>แก้ไขข้อมูล</th>
                    <th>ลบข้อมูล</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php 
                      if((!empty($_POST["findhome"]))&&(!empty($_POST["findFname"]))&&(!empty($_POST["findLname"]))){
                        $query = "SELECT Title,Fname,Lname,HomeNo,Citizen_ID,years, Year(CURRENT_DATE)-Year(Birth_date) AS Age,Hid FROM person,home,health_info WHERE Citizen_ID = Hcid and year(current_date) = years and HomeID = Hid and HomeNo = '$findhome'  and Fname = '$findFname' and Lname = '$findLname' ORDER BY HomeNo ASC" or die("Error:" . mysqli_error());
                      }else if((!empty($_POST["findhome"]))&& (!empty($_POST["findFname"]))){
                          $query = "SELECT Title,Fname,Lname,HomeNo,Citizen_ID,years, Years(CURRENT_DATE)-Years(Birth_date) AS Age,Hid FROM person,home,health_info WHERE Citizen_ID = Hcid and year(current_date) = years and HomeID = Hid and HomeNo = '$findhome' AND Fname = '$findFname' ORDER BY HomeNo ASC" or die("Error:" . mysqli_error());
                      }else if((!empty($_POST["findhome"]))&&(!empty($_POST["findLname"]))){
                          $query = "SELECT Title,Fname,Lname,HomeNo,Citizen_ID,years, Year(CURRENT_DATE)-Year(Birth_date) AS Age,Hid FROM person LEFT OUTER JOIN health_info ON Citizen_id = Hcid and year(current_date) = years JOIN home ON Hid = HomeID AND HomeNo = '$findhome' AND Lname = '$findLname' ORDER BY HomeNo ASC" or die("Error:" . mysqli_error());
                      }else if((!empty($_POST["findFname"]))&&(!empty($_POST["findLname"]))){
                          $query = "SELECT Title,Fname,Lname,HomeNo,Citizen_ID,years, Year(CURRENT_DATE)-Year(Birth_date) AS Age,Hid FROM person,home,health_info WHERE Citizen_ID = Hcid and year(current_date) = years and HomeID = Hid and Fname = '$findFname' and Lname = '$findLname' ORDER BY HomeNo ASC" or die("Error:" . mysqli_error());
                      }
                    
                      else if(!empty($_POST["findhome"])){
                        $query = "SELECT Title,Fname,Lname,HomeNo,Citizen_ID,years, Year(CURRENT_DATE)-Year(Birth_date) AS Age,Hid FROM person LEFT OUTER JOIN health_info ON Citizen_id = Hcid and year(current_date) = years JOIN home ON Hid = HomeID AND HomeNo = '$findhome' ORDER BY HomeNo ASC" or die("Error:" . mysqli_error());
                      }else if(!empty($_POST["findFname"])){
                          $query = "SELECT Title,Fname,Lname,HomeNo,Citizen_ID,years, Year(CURRENT_DATE)-Year(Birth_date) AS Age,Hid FROM person LEFT OUTER JOIN health_info ON   Citizen_id = Hcid and year(current_date) = years JOIN home ON Hid = HomeID  AND Fname = '$findFname'  ORDER BY HomeNo ASC" or die("Error:" . mysqli_error());
                      }else if(!empty($_POST["findLname"])){
                          $query = "SELECT Title,Fname,Lname,HomeNo,Citizen_ID,years, Year(CURRENT_DATE)-Year(Birth_date) AS Age,Hid FROM person LEFT OUTER JOIN health_info ON Citizen_id = Hcid and year(current_date) = years JOIN home ON Hid = HomeID AND Lname = '$findLname' ORDER BY HomeNo ASC" or die("Error:" . mysqli_error());
                      }
                      $result = mysqli_query($con,$query);
                      $i = 1;
                          while($row = mysqli_fetch_array($result)){
                            $id = $row["Citizen_ID"];
                            $Hid = $row["Hid"];
                                echo "<tr>";
                                    echo "<th >". $i ."</th>";
                                    echo "<th>" .$row["Title"] . "</th>";  
                                    echo "<td>" .$row["Fname"] . "</td>";
                                    echo "<td>" .$row["Lname"] . "</td>";
                                    echo "<td>" .$row["HomeNo"] . "</td>";
                                    $sql = "SELECT health_info.years FROM health_info, person WHERE health_info.Hcid = person.Citizen_ID and year(current_date) = years AND person.Citizen_ID='$id' " or die("Error:" . mysqli_error()); 
                                    $r = mysqli_query($con,$sql);
                                    if(mysqli_num_rows($r) == 0){
                                        echo "<td><a href='adddata.php?id=$id' style='color: red'>ไม่ได้ตรวจ</a></td>"; 
                                    }else{
                                       echo "<td><a href='adddata-old-case.php?id=$id' style='color: green'>ตรวจแล้ว</a></td>";
                                       
                                    }
                                    echo "<td><a href='edit_inval.php?id=$id'><button type='button' class='btn btn-primary'>แก้ไขข้อมูล</button></a></td>";
                                    echo "<td><a href='delete_person.php?id=$id'><button type='button' class='btn btn-primary'>ลบข้อมูล</button></a></td>";
                                echo "</tr>";
                                $i++;
                              #mysqli_close($con);
                              #echo $_SESSION['id'] = $row["Citizen_ID"]+ "    ";
                              
                             
                      }
                      ?>
                  </tr>
              </tbody>
            </table>
          

        </div>
      </div>
    </div>
  </div>
  <div style="padding-right:80px;padding-top: 20px" align="right"><a href='add_inval.php?Hid=<?php echo $Hid;?>' ><img class="img-responsive" src="img/onpage_1-2.png" height="200" width="200"></a></div>
<!--</div>-->

<!--?php include "foot.php" ?>