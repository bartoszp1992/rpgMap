<?php
$_SESSION['name'] = 'Bartosz';
echo $_SESSION['name'];
?>

<?php

$_SESSION['posx'] = 5;
$posx = $_SESSION['posx'] + 1;
echo $posx;
?>

<?php
echo GD_VERSION;
?>
