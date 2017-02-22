<?php include "head.php" ?>
<script>
function clean(el){
    var textfield = document.getElementById(el);
    var regex = /[^a-z 0-9?!.,]/gi;
    if(textfield.value.search(regex) > -1) {
        textfield.value = textfield.value.replace(regex, "");
        }
}
</script>
<textarea id="ta" name="ta" onkeyup="clean('ta')" onkeydown="clean('ta')"></textarea>


<?php include "foot.php" ?>