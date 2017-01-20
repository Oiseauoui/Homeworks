<?php
   
   $year = 365;
   $day = 24;
   $hour = 60;
   $minute = 60;
   $second = $minute * $hour * $day * $year;
   $s = "$second секунд в году";

   echo $s;
   echo "<br/>";
   echo $resalt = $second % 2;
   
   $sec = array('year' => 365, 'day' => 24,  'hour' => 60,  'minute' => 60);
	$result = 1;
	
	foreach ($sec as $item)
	{
		$result *=$item;
	}
echo "$result секунд в году";
?>