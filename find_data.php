<?php include "head.php" ?>
<div style="background:#d8e9f3">
<div class="container">

<div>
<form action="accept_adddata.php" method="POST" >
  <div class="form-group row" style="margin-left:25%;margin-right:10%">
    <label class="col-2 col-form-label">บ้านเลขที่</label>
    <div class="col-5">
      <input class="form-control" type="text" id="findhome" name="findhome" pattern=".[0-9/]+.{1,}">
    </div>
  </div>
</form>
</div>

</div>
</div>
<?php include "foot.php" ?>