<?php
date_default_timezone_set('Europe/Amsterdam');

$time = date('H:i:s');

if ($time >= '06:00:00' && $time < '12:00:00') {
  $greeting = "goedemorgen";
} elseif ($time >= '12:00:00' && $time < '18:00:00') {
  $greeting = "goedmiddag";
} else {
  $greeting = "goedenavond";
}

echo "Het is nu " . date('d-m-Y H:i:s') . "<br>";
echo $greeting;
?>
