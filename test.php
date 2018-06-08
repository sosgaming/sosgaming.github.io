<?php

$target_time = mktime(17,30,0,2,29,2016);

$current_time = time();

$difference = $target_time - $current_time;

$years = floor($difference / 3.154e+7);

$mouths = floor($difference / 2.628e+6);

$weeks = floor($difference / 604800);

$days = floor($difference / 86400);

$hours = floor($difference / 3600);

$minute = floor($difference / 60);

$seconds = floor($difference / 1);

echo "<h3>Countdown<h3><br>
<p>Y</p>	$yesrs<br>
<p>M</p>	$mouths<br>
<p>W</p>	$weeks<br>
<p>D</p>	$days<br>
<p>H</p>	$hours<br>
<p>H</p>	$minute<br>
<p>S</p>	$seconds"



?>