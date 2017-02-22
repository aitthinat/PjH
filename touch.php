<?php include "head.php" ?>
<script language="Javascript">
function check(id) {
        var idValue = document.getElementsByName(id)[0];
        var Valueit = idValue.value;
                if (id == 'typeselect') {
                    if (idValue != '' && Valueit != 'off') {
                    document.getElementById(id + 'IMG').style.visibility = 'visible';
                    document.getElementById('secondstep').style.visibility = 'visible';
                    }
                    if (Valueit == 'off') {
                    document.getElementById(id + 'IMG').style.visibility = 'hidden';
                    document.getElementById('quantityIMG').style.visibility = 'hidden';
                    document.getElementById('secondstep').style.visibility = 'hidden';

                    }
                }
                if (id == 'quantity') {
                    function testallthetime() {
                    if (Valueit != '') {
                    document.getElementById(id + 'IMG').style.visibility = 'visible';
                    document.getElementById('secondstep').style.visibility = 'visible';
                    }
                    if (Valueit == '') {
                    document.getElementById(id + 'IMG').style.visibility = 'hidden';
                    document.getElementById('secondstep').style.visibility = 'visible';
                    }
                    }
                    setInterval(testallthetime(),1);

                }
        }


</script>
<label>
<select class="allselect" onChange="check(this.name)" name="typeselect" id="typeselect">
<option value="off">Select...</option>
<option value="normalshoes">normalshoes</option>
<option value="smallshoes">smallshoes</option>
<option value="bigshoes">bigshoes</option>
<option value="coats">coats</option>
<option value="regularpants">regularpants</option>
<option value="bigpants">bigpants</option>
<option value="tshirt">tshirt</option>
<option value="long">long</option>
<option value="big">big</option>
<option value="dress">dress</option>
<option value="hats">hats</option>
<option value="bags">bags</option>
<option value="glasses">glasses</option>
<option value="other">other</option>    
</select> 
</label>
<div id="typeselectIMG" class="status"><img src="http://oi62.tinypic.com/2d0l214.jpg" alt="OK" class="IMGself"></div>
<div id="secondstep">
<input type="text" class="quantity" onKeyPress="check(this.name)"  name="quantity" id="quantity">    
<div id="quantityIMG" class="status"><img src="http://oi62.tinypic.com/2d0l214.jpg" alt="OK" class="IMGself"></div>
</div>

<?php include "foot.php" ?>