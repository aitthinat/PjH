<?php include "head.php" ?>
<?php include('connection.php'); ?>
<?php session_start(); ?>
<style>
.myTable { 
  width: 100%;
  text-align: left;
  border-collapse: collapse;
  }
.myTable th { 
  background-color: rgba(32,178,170,.3);
  color: #008B8B; 
  }
.myTable td, 
.myTable th { 
  padding: 10px;
  border: 1px solid #008B8B; 
  }
</style>
<?php 
session_start();
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

<div style="margin-bottom: 50px">
  <div class="container">
  <div><h2><label class="col-3 col-form-label">ข้อมูลบ้าน</label></h2></div>
    <div>
     <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>บ้านเลขที่</th>
                    <th>เลขที่ประจำบ้าน</th>
                    <th>จังหวัด</th>
                    <th>อำเภอ</th>
                    <th>ตำบล</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                      <?php $sql = "SELECT * FROM home WHERE '$findhome' = HomeNo";
                            $result = mysqli_query($con, $sql);
                        #-------------------------------------------------
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<th><a href='info_edd.php'>" .$row["HomeNo"] . "</a></th>";  
                                        echo "<td>" .$row["HomeID"] . "</td>";
                                        echo "<td>" .$row["Province"] . "</td>";
                                        echo "<td>" .$row["District"] . "</td>";
                                        echo "<td>" .$row["Sub_district"] . "</td>";
                                        echo "</tr>";
                                              #mysqli_close($con);
                                        $_SESSION['hno'] = $row["HomeNo"];
                                        $_SESSION['id'] = $row["HomeID"];
                                              
                                      }
                      ?>
                    </tr>
         </tbody>
        </table>
      </div>
    </div>
</div>
<?php include "foot.php" ?>