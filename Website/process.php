<?php
/*
	$counter = fopen('counter.txt','w+');
	$door1 = fopen('door1.txt','w+');
	$door2 = fopen('door2.txt','w+');
	$bulb1 = fopen('bulb1.txt','w+');
	$bulb2 = fopen('bulb2.txt','w+');
	$bulb3 = fopen('bulb3.txt','w+');
	$bulb4 = fopen('bulb4.txt','w+');
	$alarm = fopen('alarm.txt','w+');
	$mode  = fopen('mode.txt', 'w+');
	
	fwrite($counter, '<div id="alarm" class="alarmOff" style="cursor: pointer;"></div>');

	fclose($counter);
	fclose($door1);
	fclose($door2);
	fclose($bulb1);
	fclose($bulb2);
	fclose($bulb3);
	fclose($bulb4);
	fclose($alarm);
	fclose($mode); 

*/
if(isset($_POST["e"])){
    $e = $_POST["e"];
	$m = $_POST["m"];
	if($e == 'bulb1')
		$bulb = fopen('bulb1.txt','w+');
	elseif ($e == 'bulb2') {
		$bulb = fopen('bulb2.txt','w+');
	}
	elseif ($e == 'bulb3') {
		$bulb = fopen('bulb3.txt','w+');
	}
	else
	{
		$bulb = fopen('bulb4.txt','w+');
	}
	if($m == 'off')
	{
		fwrite($bulb, '<div class="devices devicesOff shadow2" onclick="$bulb(\'$bulb\',\'on\')" style="cursor: pointer;"></div>');
	}
	else
	{
		fwrite($bulb, '<div class="devices devicesOnR shadow2" onclick="$bulb(\'$bulb\',\'off\')" style="cursor: pointer;"></div>');
	}
	fclose($bulb);
	exit();
}
?>
