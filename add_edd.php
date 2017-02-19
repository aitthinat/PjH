<?php include "head.php" ?>
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
     var sys = document.forms["myForm"]["findhome"].value;
     if ( sys == null || sys == "" ) {
      alert("กรุณากรอกข้อมูลให้ครบถ้วน");
      return false;
    }
}

</script>
<div>
    <div class="container">

        <div>
            <div style="padding-bottom: 20px"><center><img class="img-responsive" src="img/onpage_1.png" height="100" width="200"></center></div>
            <form name="myForm" onsubmit="return validateForm()" action="info_edd.php" method="POST" >
              <div class="form-group row" style="margin-left:27%;margin-right:10%">
                <label class="col-2 col-form-label">บ้านเลขที่</label>
                <div class="col-5">
                  <input class="form-control" type="text" id="findhome" name="findhome" pattern="[0-9/]+.{1,}" title="กรุณากรอกเลขที่บ้านใหม่อีกครั้ง">
              </div>
          </div>
          <div class="form-check form-group row" style="margin-left:10%;margin-right:10%" align="center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
<?php include "foot.php" ?>