<?php
if ($_GET['randomId'] != "RGwcUhM27oc7xaVbinUCvYtNAb6UtudPfFfE4MMhW15RnFZDzpfLf1WHX9_FGe8q") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
