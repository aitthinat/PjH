<?php include "head.php" ?>
<?php include('connection.php'); ?>
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
<div>

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <center><h1>ประมวลผลภาวะเสี่ยง</h1></center><br/>

        <div class="container" style="background-color:rgba(255,255,255,.3);border-radius:25px;padding-left:2em;padding-right:2em" id="L1" 
<?php 
if (empty($_POST["selectDis1"])) {?>
    hidden=""
<?php } ?>
        >
            <!-- <center><img src="img/dis1.png"></center> -->
            <center><h3>โรคเบาหวาน</h3><br/></center>

            <!-- waitting -->
            <!-- ################################## Link Database ##################################-->
            <br/>
            <?php

            $sql = "SELECT * FROM person AS p INNER JOIN (SELECT Hcid, MAX(Year) AS Y FROM health_info GROUP BY Hcid) AS dtbl ON p.Citizen_ID = dtbl.Hcid";
            $result = mysqli_query($con, $sql);

            // $sql = "SELECT MAX(year), Title, Fname, Lname, HomeNo, Citizen_ID, Weight, Height, FBS, Exercise, BP_SYS, BP_DIA FROM person, home, health_info WHERE person.Hid=home.HomeID AND person.Citizen_ID=health_info.Hcid GROUP BY Citizen_ID";

            


            // $sql = "SELECT Title, Fname, Lname, HomeNo, Citizen_ID FROM person, home, health_info WHERE person.Hid=home.HomeID AND person.Citizen_ID=health_info.Hcid AND (((Weight/Power((Height*0.01),2)) > 23  AND FBS > 100 AND Exercise=0) OR (BP_SYS >= 120 OR BP_DIA >= 80))";



            // $result_t = mysqli_query($con, $sql);
            // ==============ADD IN ARRAY=============
            // $numOfRows = mysqli_num_rows($result_t);

            // for ($c = 0; $c < $numOfRows; $c++) 
            // { 
            //     $row_arr = mysqli_fetch_array($result_t); 
            //     $result_array[$c] = $row_arr["Citizen_ID"]; 
            //     echo "add";
            // }
            // =======================================

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<table class='myTable'><thead><tr><th>ลำดับที่</th><th>คำนำหน้า</th><th>ชื่อ</th><th>นามสกุล</th></tr></thead><tbody>";
                $i = 1;
                while($row = mysqli_fetch_assoc($result)) {
                    $ci_cur = $row["Citizen_ID"];
                    echo $row["Citizen_ID"] . "<br/>";
                    
                    $sql_h = "SELECT * FROM health_info";
                    $result_h = mysqli_query($con, $sql_h);
                    while ($row_h = mysqli_fetch_assoc($result_h)) {
                        echo $row["Citizen_ID"] . " " . $row_h["Hcid"] . "<br/>";
                        if ($row_h["Year"]==$row["Y"] and $row_h["Hcid"]==$row["Citizen_ID"]) {
                            # code...
                            if (((($row_h["Weight"]/pow(($row_h["Height"]*0.01),2)) > 23) AND ($row_h["FBS"] > 100) AND ($row_h["Exercise"]=0)) OR ($row_h["BP_SYS"] >= 120 OR $row_h["BP_DIA"] >= 80)) {
                                # code...
                                echo "<tr><td>" . $i . "</td><td>" . $row["Title"]. "</td><td>" . $row["Fname"]. "</td><td>" . $row["Lname"]. "</td></tr>";
                            $i+=1;
                            // ================= INSERT INTO HAVE_HEALTH ====================
                            $sql_check = "SELECT * FROM have_health AS hh, person AS p WHERE hi.Hhcid=p.Citizen_ID AND p.Citizen_ID='$ci' AND hh.Rno='01'";
                            $re = mysqli_query($con, $sql_check);
                            if (mysqli_num_rows($re) == 0) {
                                // echo "Insert" . mysqli_num_rows($re) . $row["Citizen_ID"];
                                $sql_in = "INSERT INTO have_health VALUES('$ci', '01')";
                                $re_in = mysqli_query($con, $sql_in);
                            } 
                            // ==============================================================
                            }
                        }
                    }

                    
                    
                }
                        
                      
                echo "</tbody></table>";
            // =======DELETE=======
            // $sql_de = "SELECT * FROM have_health WHERE Hhcid NOT IN ($result_array)";
            // $re_de = mysqli_query($con, $sql_de);
            // if (mysqli_num_rows($re_de) == 0){
            //    echo "ok";
            //     # code...
            // }

            } ?>
            <!-- ###################################################################################-->
    <br/><br/>
        <div style="background:rgba(32,178,170,.2); border-radius:25px;">
        <br/>
        <h4 style="padding-left:2em; color: red">ข้อแนะนำ</h4>
        <h5 style="padding-left:5em;padding-right:5em">1.ต้องหาแรงจูงใจ
            <br/><br/>2. ก่อนอาหารมื้อเย็นให้รับประทานผลไม้ที่ไม่หวานรองท้อง และ น้ำเปล่าครึ่งแก้ว เพื่อทำให้รับประทานข้าวได้น้อยลง
            <br/><br/>3. หลัก 3 ส ได้แก่ “สกัด” (ห้ามใจไม่ให้รับประทาน) “สะกด” (มีสติ) และ “สะกิด” (ให้คนข้างๆ ช่วยเตือน)
            <br/><br/>4. หลังรับประทานอาหารมื้อเย็นให้นั่งพัก 30 นาทีและลุกขึ้นเคลื่อนไหวร่างกายเบาๆ จะช่วยเผาผลาญพลังงานได้ถึง 30%
            <br/><br/>5. เวลาที่รับประทานอาหารเย็นต้องให้ห่างจากเวลาเข้านอนอย่างน้อย 3 – 4 ชั่วโมง

            <br/><br/><p style="text-align:right; font-size:15px;color:gray;"><i>ที่มา : เว็บไซต์กรุงเทพธุรกิจออนไลน์</i></p> </h5>

        <br/>
        </div>
        <br/>
        </div>
    <br/><br/>
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="container" style="background-color:rgba(255,255,255,.3);border-radius:25px;padding-left:2em;padding-right:2em"
<?php 
if (empty($_POST["selectDis2"])) {?>
    hidden=""
<?php } ?>

        >

            <center><h3>โรคความดันโลหิตสูง</h3><br/></center>
            <!-- ################################## Link Database ##################################-->
            <br/>
            <?php
            $sql = "SELECT Title, Fname, Lname, HomeNo, Citizen_ID FROM person, home, health_info WHERE person.Hid=home.HomeID AND person.Citizen_ID=health_info.Hcid AND (BP_SYS >= 120 OR BP_DIA >= 80)";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<table class='myTable'><thead><tr><th>ลำดับที่</th><th>คำนำหน้า</th><th>ชื่อ</th><th>นามสกุล</th><th>บ้านเลขที่</th></tr></thead><tbody>";
                $i = 1;
                while($row = mysqli_fetch_assoc($result)) {
                        # code...
                        $ci = $row["Citizen_ID"];
                        echo "<tr><td>" . $i . "</td><td>" . $row["Title"]. "</td><td>" . $row["Fname"]. "</td><td>" . $row["Lname"]. "</td><td>" . $row["HomeNo"]. "</td></tr>";


                        // ================= UPDATE HAVE_HEALTH ====================
                        $sql_check = "SELECT Rno FROM have_health, person WHERE have_health.Hhcid=person.Citizen_ID AND person.Citizen_ID='$ci' AND Rno='02'";
                        $re = mysqli_query($con, $sql_check);
                        if (mysqli_num_rows($re) == 0) {
                            // echo "Insert" . mysqli_num_rows($re) . $row["Citizen_ID"];
                            $sql_in = "INSERT INTO have_health VALUES('$ci', '02')";
                            $re_in = mysqli_query($con, $sql_in);
                        } else {
                            // ถ้ามีข้อมูลแล้วยังเสี่ยงอยู่/หายเสี่ยงแล้ว
                            // echo "Update";
                        }
                        mysqli_free_result($re);
                        //==========================================================
                      $i+=1;
                      }
                echo "</tbody></table>";
            } ?>
            <!-- ###################################################################################-->
    <br/><br/>
        <div style="background: rgba(32,178,170,.2); border-radius:25px;">
        <br/>
            <h4 style="padding-left:2em; color: red">ข้อแนะนำ</h4>
            <h5 style="padding-left:5em;padding-right:5em">1. ถ้าอ้วน ควรควบคุมน้ำหนักตัวให้อยู่ในเกณฑ์ที่เหมาะสม โดยกินอาหารให้ครบ 5 หมู่ และหลากหลาย เพิ่มอาหารที่เส้นใย เช่น ผัก ผลไม้ที่มีรสหวานน้อย ข้าวก้อง ถั่วเมล็ดแห้ง เป็นต้น และหลีกเลี่ยงอาหารที่มีไขมันสูง เช่น หมูสามชั้น หนังเป็ด หนังไก่ อาหารใส่กะทิ ขนมหวาน อาหารที่โคเลสเตอรอลสูง เช่น สมองสัตว์ ปลาหมึกใหญ่ ไข่แดง ไข่นกกระทา เครื่องในสัตว์ หอยนางรม เป็นต้น
            <br/><br/>2. ลดอาหารเค็ม อาหารใส่ผงชูรส เครื่องปรุงต่างๆ ของหมักดอง
            <br/><br/>3. ควรเปลี่ยนวิธีการปรุงอาหาร จากทอดเป็น ต้ม ตุ๋น นึ่ง ยำแทน
            <br/><br/>4. งดเครื่องดื่มที่มีแอลกฮอล์และงดสูบบุหรี่
            <br/><br/>5. ออกกำลังกายอย่างถูกวิธี เหมาะสมกับสภาพร่างกาย เพศ และวัย อย่างน้อยสัปดาห์ละ 3 วัน วันละ 30 นาที ห้ามออกกำลังกายที่ใช้กำลังและแรงเบ่งสูง เช่น ยกน้ำหนัก วิดพื้น วิ่งอย่างเร็ว
            <br/><br/>6. หลีกเลี่ยงความเครียด พักผ่อนให้เพียงพอ ทำจิตใจให้แจ่มใส
            <br/><br/>7. สตรีที่กินยาคุมกำเนิด ควรเปลี่ยนเป็นวิธีการอื่นแทน
            <br/><br/>8. ตรวจรักษาและกินยาตามคำสั่งแพทย์อย่างสม่ำเสมอ ห้ามหยุดยาเอง ทั้งนี้ ออกกำลังกายอย่างสม่ำเสมอและทานอาหารให้ครบโภชนาการ จะนำมาซึ่งสุขภาพดีและแข็งแรง
            <br/><br/><p style="text-align:right; font-size:15px;color:gray;"><i>ที่มา : สสส.</i></p> </h5>
            <br/>
        </div>
         <br/>
        </div>
    <br/><br/>
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="container" style="background-color:rgba(255,255,255,.3);border-radius:25px;padding-left:2em;padding-right:2em"
<?php 
if (empty($_POST["selectDis3"])) {?>
    hidden=""
<?php } ?>
        >
            <center><h3>โรคหัวใจ</h3><br/></center>
            <!-- ################################## Link Database ##################################-->
            <br/>
            <?php
            $sql = "SELECT Title, Fname, Lname, HomeNo, Citizen_ID FROM person, home, health_info WHERE person.Hid=home.HomeID AND person.Citizen_ID=health_info.Hcid AND (((Weight/Power((Height*0.01),2)) > 25 AND FBS > 100 AND Exercise=0) OR (BOA>0 OR BOS>0))";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<table class='myTable'><thead><tr><th>ลำดับที่</th><th>คำนำหน้า</th><th>ชื่อ</th><th>นามสกุล</th><th>บ้านเลขที่</th></tr></thead><tbody>";
                $i = 1;
                while($row = mysqli_fetch_assoc($result)) {
                        # code...
                        $ci = $row["Citizen_ID"];
                        echo "<tr><td>" . $i . "</td><td>" . $row["Title"]. "</td><td>" . $row["Fname"]. "</td><td>" . $row["Lname"]. "</td><td>" . $row["HomeNo"]. "</td></tr>";

                        // ================= UPDATE HAVE_HEALTH ====================
                        $sql_check = "SELECT Rno FROM have_health, person WHERE have_health.Hhcid=person.Citizen_ID AND person.Citizen_ID='$ci' AND Rno='03'";
                        $re = mysqli_query($con, $sql_check);
                        if (mysqli_num_rows($re) == 0) {
                            // echo "Insert" . mysqli_num_rows($re) . $row["Citizen_ID"];
                            $sql_in = "INSERT INTO have_health VALUES('$ci', '03')";
                            $re_in = mysqli_query($con, $sql_in);
                        } else {
                            // ถ้ามีข้อมูลแล้วยังเสี่ยงอยู่/หายเสี่ยงแล้ว
                            // echo "Update";
                        }
                        mysqli_free_result($re);
                        //==========================================================


                      $i+=1;
                      }
                echo "</tbody></table>";
            } ?>
            <!-- ###################################################################################-->
    <br/><br/>
        <div style="background:rgba(32,178,170,.2); border-radius:25px;">
        <br/>
        <h4 style="padding-left:2em; color: red">ข้อแนะนำ</h4>
        <h5 style="padding-left:5em;padding-right:5em">1. สังเกตความผิดปกติของตัวเองอยู่เสมอ โดยเฉพาะอาการผิดปกติที่เกิดขึ้นเฉียบพลัน เช่น ดูว่าอัตราการเต้นของหัวใจปกติดีหรือไม่ เจ็บหน้าอก ใจสั่นบ่อย ๆ หรือเปล่า เป็นต้น      
            <br/><br/>2. ออกกำลังกายเป็นประจำ ซึ่งนอกจากจะทำให้ร่างกายแข็งแรงสมบูรณ์ สุขภาพจิตแจ่มใสแล้ว ยังช่วยให้หัวใจสูบฉีดเลือดได้ดีขึ้นอีกด้วย
            <br/><br/>3. ดูแลสุขภาพใจให้ผ่องใสอยู่เสมอ พยายามไม่เครียด รู้จักควบคุมอารมณ์ และพึงระลึกไว้เสมอว่า ความเครียดและความโกรธ เป็นตัวการสำคัญที่ทำให้หัวใจเต้นแรง และทำงานหนักขึ้น
            <br/><br/>4. รับประทานอาหารที่ดีต่อสุขภาพ โดยงดอาหารที่มีไขมันสูง ซึ่งทำให้ความดันโลหิตสูง เกิดภาวะเส้นเลือดหัวใจตีบได้ง่าย และหันไปกินผักผลไม้ให้มากขึ้น        
            <br/><br/>5. ควรไปตรวจสุขภาพเป็นประจำทุกปี เพื่อป้องกันและรักษาโรคร้ายที่อาจคาดไม่ถึง เช่น โรคหัวใจ ซึ่งแฝงอยู่ในตัวเราตั้งแต่เนิ่น ๆ
            <br/><br/>6. งดการดื่มสุราและสูบบุหรี่
            <br/><br/><p style="text-align:right; font-size:15px;color:gray;"><i>ที่มา : เว็บไซต์กระปุกดอทคอม</i></p> </h5>

        <br/>
        </div>
        <br/>
        </div>
    <br/><br/>
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="container" style="background-color:rgba(255,255,255,.3);border-radius:25px;padding-left:2em;padding-right:2em"
<?php 
if (empty($_POST["selectDis4"])) {?>
    hidden=""
<?php } ?>
        >
            <h3>โรคตับ</h3><br/>
            <!-- ################################## Link Database ##################################-->
            <br/>
            <?php
            $sql = "SELECT Title, Fname, Lname, HomeNo, Citizen_ID FROM person, home WHERE person.Hid=home.HomeID ";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<table class='myTable'><thead><tr><th>ลำดับที่</th><th>คำนำหน้า</th><th>ชื่อ</th><th>นามสกุล</th><th>บ้านเลขที่</th></tr></thead><tbody>";
                $i = 1;
                while($row = mysqli_fetch_assoc($result)) {
                        # code...
                        $ci = $row["Citizen_ID"];
                        echo "<tr><td>" . $i . "</td><td>" . $row["Title"]. "</td><td>" . $row["Fname"]. "</td><td>" . $row["Lname"]. "</td><td>" . $row["HomeNo"]. "</td></tr>";

                        // ================= UPDATE HAVE_HEALTH ====================
                        // $sql_check = "SELECT Rno FROM have_health, person WHERE have_health.Hhcid=person.Citizen_ID AND person.Citizen_ID='$ci' AND Rno='04'";
                        // $re = mysqli_query($con, $sql_check);
                        // if (mysqli_num_rows($re) == 0) {
                        //     // echo "Insert" . mysqli_num_rows($re) . $row["Citizen_ID"];
                        //     $sql_in = "INSERT INTO have_health VALUES('$ci', '04')";
                        //     $re_in = mysqli_query($con, $sql_in);
                        // } else {
                        //     // ถ้ามีข้อมูลแล้วยังเสี่ยงอยู่/หายเสี่ยงแล้ว
                        //     // echo "Update";
                        // }
                        // mysqli_free_result($re);
                        //==========================================================

                      $i+=1;
                      }
                echo "</tbody></table>";
            } ?>
            <!-- ###################################################################################-->
    <br/><br/>
        <div style="background:rgba(32,178,170,.2); border-radius:25px;">
        <br/>
        <h4 style="padding-left:2em; color: red">ข้อแนะนำ</h4>
        <h5 style="padding-left:5em;padding-right:5em">1. หลีกเลี่ยงการดื่มเครื่องดื่มแอลกอฮอล์ในปริมาณมาก และถ้าตรวจพบว่าเป็นพาหะของเชื้อไวรัสตับอักเสบบีหรือซี ควรงดดื่มโดยเด็ดขาด
            <br/><br/>2. ฉีดวัคซีนป้องกันตับอักเสบจากไวรัสบี ซึ่งนิยมฉีดตั้งแต่แรกเกิด
            <br/><br/>3. ระมัดระวังการใช้ยาที่อาจมีพิษต่อตับ โดยควรใช้ยาภายใต้การควบคุมของแพทย์แลละเภสัชกรทุกครั้ง   
            <br/><br/>4. อย่ารับประทานยา ยาสมุนไพร ผลิตภัณฑ์อาหารเสริมโดยไม่ทราบที่มาหรือเพียงเพราะคำโฆษณา 
            <br/><br/>5. สวมถุงมือ สวมหน้ากากป้องกัน หากต้องสัมผัสหรือสูดดมสารเคมี
            <br/><br/>6. ไม่สำส่อนทางเพศ
            <br/><br/>7. ไม่ใช้ของมีคมร่วมกับผู้อื่น เช่น มีดโกน แปรงสีฟัน กรรไกรตัดเล็บ และเข็มฉีดยา 
            <br/><br/>8. ตรวจสุขภาพร่างกายทุกปี
            <br/><br/><p style="text-align:right; font-size:15px;color:gray;"><i>ที่มา : เว็บไซต์กระปุกดอทคอม</i></p> </h5>

        <br/>
        </div>
        <br/>
        </div>
    <br/><br/>      


</div>

<?php include "foot.php" ?>