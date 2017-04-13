<?php include "head.php" ?>
<?php include('connection.php'); ?>
<style>
.myTable { 
  width: 100%;
  text-align: left;
  /*lemonchiffon */
  border-collapse: collapse;
  }
.myTable th { 
  background-color: rgba(255,0,0,.3);
  color: lemonchiffon; 
  }
.myTable td, 
.myTable th { 
  padding: 10px;
  border: 1px solid lemonchiffon; 
  }
</style>
<div>

        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="container" style="background-color:rgba(255,0,0,.1);border-radius:25px;padding-left:2em;padding-right:2em" id="L1" 
<?php 
if (empty($_POST["selectDis1"])) {?>
    hidden=""
<?php } ?>
        >
            <h2>โรคเบาหวาน</h2><br/>
            <!-- waitting -->
            <!-- ################################## Link Database ##################################-->
            <?php
            $sql = "SELECT Title, FirstName, LastName, Village_no FROM person ";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<table class='myTable'><thead><tr><th>ลำดับที่</th><th>คำนำหน้า</th><th>ชื่อ</th><th>นามสกุล</th><th>บ้านเลขที่</th></tr></thead><tbody>";
                $i = 1;
                while($row = mysqli_fetch_assoc($result)) {
                        # code...
                        echo "<tr><td>" . $i . "</td><td>" . $row["Title"]. "</td><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td>" . $row["Village_no"]. "</td></tr>";

                      $i+=1;
                      }
                echo "</tbody></table>";
            } ?>
            <!-- ###################################################################################-->
    <br/><br/>
        <div style="background:rgba(255,0,0,.2); border-radius:25px;">
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
        <div class="container" style="background-color:rgba(255,0,0,.1);border-radius:25px;padding-left:2em;padding-right:2em"
<?php 
if (empty($_POST["selectDis2"])) {?>
    hidden=""
<?php } ?>

        >

            <h2>โรคความดันโลหิตสูง</h2><br/>
            <!-- ################################## Link Database ##################################-->
            <?php
            $sql = "SELECT Title, FirstName, LastName, Village_no FROM person ";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<table class='myTable'><thead><tr><th>ลำดับที่</th><th>คำนำหน้า</th><th>ชื่อ</th><th>นามสกุล</th><th>บ้านเลขที่</th></tr></thead><tbody>";
                $i = 1;
                while($row = mysqli_fetch_assoc($result)) {
                        # code...
                        echo "<tr><td>" . $i . "</td><td>" . $row["Title"]. "</td><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td>" . $row["Village_no"]. "</td></tr>";

                      $i+=1;
                      }
                echo "</tbody></table>";
            } ?>
            <!-- ###################################################################################-->
    <br/><br/>
        <div style="background: rgba(255,0,0,.2); border-radius:25px;">
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
        <div class="container" style="background-color:rgba(255,0,0,.1);border-radius:25px;padding-left:2em;padding-right:2em"
<?php 
if (empty($_POST["selectDis3"])) {?>
    hidden=""
<?php } ?>
        >
            <h2>โรคหัวใจ</h2><br/>
            <!-- ################################## Link Database ##################################-->
            <?php
            $sql = "SELECT Title, FirstName, LastName, Village_no FROM person ";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<table class='myTable'><thead><tr><th>ลำดับที่</th><th>คำนำหน้า</th><th>ชื่อ</th><th>นามสกุล</th><th>บ้านเลขที่</th></tr></thead><tbody>";
                $i = 1;
                while($row = mysqli_fetch_assoc($result)) {
                        # code...
                        echo "<tr><td>" . $i . "</td><td>" . $row["Title"]. "</td><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td>" . $row["Village_no"]. "</td></tr>";

                      $i+=1;
                      }
                echo "</tbody></table>";
            } ?>
            <!-- ###################################################################################-->
    <br/><br/>
        <div style="background:rgba(255,0,0,.2); border-radius:25px;">
        <br/>
        <h4 style="padding-left:2em; color: red">ข้อแนะนำ</h4>
        <h5 style="padding-left:5em;padding-right:5em">1. สังเกตความผิดปกติของตัวเองอยู่เสมอ โดยเฉพาะอาการผิดปกติที่เกิดขึ้นเฉียบพลัน เช่น ดูว่าอัตราการเต้นของหัวใจปกติดีหรือไม่ เจ็บหน้าอก ใจสั่นบ่อย ๆ หรือเปล่า เป็นต้น      
            <br/><br/>2. ออกกำลังกายเป็นประจำ ซึ่งนอกจากจะทำให้ร่างกายแข็งแรงสมบูรณ์ สุขภาพจิตแจ่มใสแล้ว ยังช่วยให้หัวใจสูบฉีดเลือดได้ดีขึ้นอีกด้วย
            <br/><br/>3. ดูแลสุขภาพใจให้ผ่องใสอยู่เสมอ พยายามไม่เครียด รู้จักควบคุมอารมณ์ และพึงระลึกไว้เสมอว่า ความเครียดและความโกรธ เป็นตัวการสำคัญที่ทำให้หัวใจเต้นแรง และทำงานหนักขึ้น
            <br/><br/>4. รับประทานอาหารที่ดีต่อสุขภาพ โดยงดอาหารที่มีไขมันสูง ซึ่งทำให้ความดันโลหิตสูง เกิดภาวะเส้นเลือดหัวใจตีบได้ง่าย และหันไปกินผักผลไม้ให้มากขึ้น        
            <br/><br/>5. ควรไปตรวจสุขภาพเป็นประจำทุกปี เพื่อป้องกันและรักษาโรคร้ายที่อาจคาดไม่ถึง เช่น โรคหัวใจ ซึ่งแฝงอยู่ในตัวเราตั้งแต่เนิ่น ๆ
            <br/><br/><p style="text-align:right; font-size:15px;color:gray;"><i>ที่มา : เว็บไซต์กระปุกดอทคอม</i></p> </h5>

        <br/>
        </div>
        <br/>
        </div>
    <br/><br/>
        <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="container" style="background-color:rgba(255,0,0,.1);border-radius:25px;padding-left:2em;padding-right:2em"
<?php 
if (empty($_POST["selectDis4"])) {?>
    hidden=""
<?php } ?>
        >
            <h2>โรคตับ</h2><br/>
            <!-- ################################## Link Database ##################################-->
            <?php
            $sql = "SELECT Title, FirstName, LastName, Village_no FROM person ";
            $result = mysqli_query($db, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<table class='myTable'><thead><tr><th>ลำดับที่</th><th>คำนำหน้า</th><th>ชื่อ</th><th>นามสกุล</th><th>บ้านเลขที่</th></tr></thead><tbody>";
                $i = 1;
                while($row = mysqli_fetch_assoc($result)) {
                        # code...
                        echo "<tr><td>" . $i . "</td><td>" . $row["Title"]. "</td><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td>" . $row["Village_no"]. "</td></tr>";

                      $i+=1;
                      }
                echo "</tbody></table>";
            } ?>
            <!-- ###################################################################################-->
    <br/><br/>
        <div style="background:rgba(255,0,0,.2); border-radius:25px;">
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