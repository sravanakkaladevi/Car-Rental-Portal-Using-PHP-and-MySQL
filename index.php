<?php
$target = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
$target = ($target === '' || $target === '.') ? '/carrental/' : $target . '/carrental/';

header('Location: ' . $target);
exit;
?>
