<?php include "head.php" ?>
<div style="background:#d8e9f3">
    <div class="form-check form-group row" style="margin-left:10%;margin-bottom:-12px">
        <h2>
            <label class="col-3 col-form-label">บ้านเลขที่ :</label>
            <label class="col-form-label">123 / 123</label>
        </h2>
    </div>
    <div class="form-check form-group row" style="margin-left:10%">
        <h4>
            <label class="col-3 col-form-label">เลขที่ประจำบ้าน :</label>
            <label class="col-form-label">560x-xxxxxx-x</label>
        </h4>
    </div>
    <div class="container" style="background:#f2f3f4">
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
                      <th scope="row">1</th>
                      <th>นาง</th>
                      <td>จันทร์</td>
                      <td>คำใหญ่</td>
                      <td>หัวหน้าครอบครัว</td>
                      <td>ตรวจแล้ว</td>
                      <td><a href=""><button type="button" class="btn btn-primary">Edit</button></a></td>
                  </tr>
                  <tr>
                      <th scope="row">2</th>
                      <th>นาย</th>
                      <td>คำ</td>
                      <td>หัวดำ</td>
                      <td>ผู้อาศัย</td>
                      <td>ยังไม่ได้ตรวจ</td>
                      <td><a href=""><button type="button" class="btn btn-primary">Edit</button></a></td>
                  </tr>
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
<div style="padding-bottom: 20px; padding-right:60px" align="right"><a href="add_info_vila.php"><img class="img-responsive" src="img/add-button-copy.png" height="100" width="200"></a></div>
</div>

<?php include "foot.php" ?>