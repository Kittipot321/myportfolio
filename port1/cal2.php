<?php
$name= $_POST["name"];
$power= $_POST["power"];
$time= $_POST["time"];
$unit= $_POST["amount"];
$total = ($power*$time)/1000;
$baht = $total*$unit;
echo "<b>Result</b> <br>";
printf ("Name : %s <br>", $name);
printf ("Duration of time : %i hour(s)<br>", $time);
printf ("Use of power %.1f unit(s)<br> ", $unit);
printf ("Electricity cost : %.2f baht<br>", $baht);
?>