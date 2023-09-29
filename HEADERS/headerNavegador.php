<?php
$navegadorWeb = $_SERVER['HTTP_USER_AGENT'];
$detectarFirefox = null;
if (strpos($navegadorWeb, "Firefox")) {
    $detectarFirefox = 'Firefox detectado';
} else {
    echo '<script>alert("Solo puedes entrar desde Firefox!");</script>';
    header("Location: error.php");
}
echo $detectarFirefox;

?>