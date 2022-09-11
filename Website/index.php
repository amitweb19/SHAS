<?php
if(isset($_POST["e"])){
    $e = $_POST["e"];
	$m = $_POST["m"];
	if($e == 'bulb1')
	{
		$file = fopen('bulb1.txt','w+');
		if($m == 'off') {
			fwrite($file, 'off');
		}
		else {
			fwrite($file, 'on');
		}
		fclose($file);
	}
	if($e == 'bulb2')
	{
		$file = fopen('bulb2.txt','w+');
		if($m == 'off') {
			fwrite($file, 'off');
		}
		else {
			fwrite($file, 'on');
		}
		fclose($file);
	}
	if($e == 'bulb3')
	{
		$file = fopen('bulb3.txt','w+');
		if($m == 'off') {
			fwrite($file, 'off');
		}
		else {
			fwrite($file, 'on');
		}
		fclose($file);
	}
	if($e == 'bulb4')
	{
		$file = fopen('bulb4.txt','w+');
		if($m == 'off') {
			fwrite($file, 'off');
		}
		else {
			fwrite($file, 'on');
		}
		fclose($file);
	}
	if($e == 'alarm')
	{
		$file = fopen('alarm.txt','w+');
		if($m == 'off') {
			fwrite($file, 'off');
		}
		elseif($m == 'on') {
			fwrite($file, 'on');
		}
		else {
			fwrite($file, 'on');
		}
		fclose($file);
	}
	if($e == 'counter')
	{
		$file = fopen('counter.txt','w+');
		if($m == 'reset') {
			fwrite($file, '0');
		}
		fclose($file);
	}
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome in AshokaHub</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
	<div id="headerborder">
		<div id="mastseal">
			<img id="sealfront" alt="seal_front" src="img/logoBW2.png">
			<img id="sealback" alt="seal_back" src="img/logoCLR2.png">
		</div>
	</div>
	<div id="loginMenu" >
		<span>Email:</span> &nbsp;&nbsp;<input type="text" />&nbsp; &nbsp;
		<span>Password:</span> &nbsp;&nbsp;<input type="password" />
		<a>forget?</a><button>Submit</button>
	</div>
</header>
<nav>
	<div id="leftLogo" class="public" style="cursor: pointer;"></div>
	<div id="content">
		<div id="heading">
			<h1>>> <b>S</b>mart <b>H</b>ome <b>A</b>utomation <b>S</b>ystem <<</h1>
		</div>
		<div id="menu" class="shadow radius">
			<div id="leftMenu">
				<div id="counter" onclick="amit('counter','reset');">
					<div id="ctrNum"></div>
					<div id="ctrP"></div>
				</div>
				<div id="door">
					<div id="door1" class="devices" onclick="door1(this)"></div>
					<div id="door2" class="devices" onclick="door2(this)"></div>
				</div>
			</div>
			<div id="rightMenu" class="one-edge-shadow">
				<div id="bulb1"></div>
				<div id="bulb2"></div>
				<div id="bulb3"></div>
				<div id="bulb4"></div>
				<div id="alarmBox" onclick="alarm('alarm','on')"></div>
		</div>
	</div>
</nav>
<div id="sideMenu" onclick="toggleCP()">I<br>N<br>V<br>I<br>T<br>E</div>
<div id="sideMenuContent">
	#Invitation<br><br>
	<span>Date & Time : 
		<input type="datetime-local" name="field2" id="field2" />
	</span>
	<br>
	<span>
		<br>Person : <br>
		<select  id="member" onchange="addFields()">
			<option value=""></option>
			<?php for($i=1; $i<100; $i++) echo '<option value="'.$i.'">'.$i.'</option>'; ?>
		</select>
		<br><br>
		<div id="container"></div>
		<br>
	</span>
	<span><button>Submit</button>&nbsp;<button onclick="toggleCP()">Hide</button></span>
</div>
<footer>
	<div id="foot_rule"></div>
	<div id="foot_copy"><i>©2017</i> <b>AshokaHub</b>. <i>All Rights Reserved</i></div>
</footer>
<script src="ajax.js"></script>
<script type="text/javascript">
	function amit(el, mode){
		var ajax = ajaxObj("POST","index.php",true);
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax) == true) {

			}
		}
		ajax.send("e="+el+"&m="+mode);
	}
</script>
<script type="text/javascript">
	function counter()
	{
		var ajax = ajaxObj("GET", "counter.txt",false);
		ajax.onreadystatechange = function() {
			document.getElementById("ctrNum").innerHTML = ajax.responseText;
			if(ajax.responseText <= '1')
			{
				if(ajax.responseText <= 0)
					document.getElementById("counter").className = "inactive shadow2 radius2";
				else
					document.getElementById("counter").className = "active shadow2 radius2";
				document.getElementById("ctrP").innerHTML = "Person";
			}
			else
			{
				document.getElementById("counter").className = "active shadow2 radius2";
				document.getElementById("ctrP").innerHTML = "People";
			}
		}
		ajax.send(null);
	}
	
	function bulb1()
	{
		var ajax = ajaxObj("GET", "bulb1.txt",false);
		ajax.onreadystatechange = function() {
			if(ajax.responseText == 'off'){
				document.getElementById("bulb1").innerHTML = "<div class=\"devices devicesOff shadow2\"></div>";
				document.getElementById("bulb1").setAttribute("onclick","amit('bulb1','on');");
			}
			else
			{
				document.getElementById("bulb1").innerHTML = "<div class=\"devices devicesOnR shadow2\"></div>";
				document.getElementById("bulb1").setAttribute("onclick","amit('bulb1','off');");
			}
		}
		ajax.send(null);
	}
	
	function bulb2()
	{
		var ajax = ajaxObj("GET", "bulb2.txt",false);
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax) == true) {
				if(ajax.responseText == 'off'){
					document.getElementById("bulb2").innerHTML = "<div class=\"devices devicesOff shadow2\"></div>";
					document.getElementById("bulb2").setAttribute("onclick","amit('bulb2','on');");
				}
				else
				{
					document.getElementById("bulb2").innerHTML = "<div class=\"devices devicesOnG shadow2\"></div>";
					document.getElementById("bulb2").setAttribute("onclick","amit('bulb2','off');");
				}
			}
		}
		ajax.send(null);
	}
	
	function bulb3()
	{
		var ajax = ajaxObj("GET", "bulb3.txt",false);
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax) == true) {
				if(ajax.responseText == 'off'){
					document.getElementById("bulb3").innerHTML = "<div class=\"devices devicesOff shadow2\"></div>";
					document.getElementById("bulb3").setAttribute("onclick","amit('bulb3','on');");
				}
				else
				{
					document.getElementById("bulb3").innerHTML = "<div class=\"devices devicesOnB shadow2\"></div>";
					document.getElementById("bulb3").setAttribute("onclick","amit('bulb3','off');");
				}
			}
		}
		ajax.send(null);
	}
	
	function bulb4()
	{
		var ajax = ajaxObj("GET", "bulb4.txt",false);
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax) == true) {
				if(ajax.responseText == 'off'){
					document.getElementById("bulb4").innerHTML = "<div class=\"devices devicesOff shadow2\"></div>";
					document.getElementById("bulb4").setAttribute("onclick","amit('bulb4','on');");
				}
				else
				{
					document.getElementById("bulb4").innerHTML = "<div class=\"devices devicesOnY shadow2\"></div>";
					document.getElementById("bulb4").setAttribute("onclick","amit('bulb4','off');");
				}
			}
		}
		ajax.send(null);
	}
	
	function alarm()
	{
		var alarm = new Audio('audio/alarm.mp3');
		function stopAudio(audio) {
			audio.pause();
			audio.currentTime = 0;
		}
		var ajax = ajaxObj("GET", "alarm.txt",false);
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax) == true) {
				if(ajax.responseText == 'off')
				{
					document.getElementById("alarmBox").innerHTML = "<div id=\"alarm\" class=\"alarmOff\"></div>";
					document.getElementById("leftLogo").className = "public";
					document.getElementById("leftLogo").setAttribute("onclick","amit('alarm','on');");
				}
				else if(ajax.responseText == 'on')
				{
					document.getElementById("alarmBox").innerHTML = "<div id=\"alarm\" class=\"alarmOn\"></div>";
					document.getElementById("leftLogo").className = "private";
					document.getElementById("leftLogo").setAttribute("onclick","amit('alarm','off'););");
					stopAudio(alarm);
				}
				else
				{
					document.getElementById("alarmBox").innerHTML = "<div id=\"alarm\" class=\"alarmActive\"></div>";
					document.getElementById("leftLogo").className = "alert";
					document.getElementById("leftLogo").setAttribute("onclick","amit('alarm','on'); stopAudio(alarm);");
					document.getElementById("counter").style = "background: #FA5858;";
					alarm.play();
				}
			}
		}
		ajax.send(null);
	}
	
	function door1()
	{
		var ajax = ajaxObj("GET", "door1.txt",false);
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax) == true) {
				if(ajax.responseText == 'off')
					document.getElementById("door1").innerHTML = "<b>#Door 1</b><br><img src=\"img/doorClose2.png\"><br><font color=\"red\" size=\"5\">Close</font>";
				else
					document.getElementById("door1").innerHTML = "<b>#Door 1</b><br><img src=\"img/doorOpen2.png\"><br><font color=\"green\" size=\"5\">Open</font>";
			}
		}
		ajax.send(null);
	}
	
	function door2()
	{
		var ajax = ajaxObj("GET", "door2.txt",false);
		ajax.onreadystatechange = function() {
			if(ajaxReturn(ajax) == true) {
				if(ajax.responseText == 'off')
					document.getElementById("door2").innerHTML = "<b>#Door 2</b><br><img src=\"img/doorClose2.png\"><br><font color=\"red\" size=\"5\">Close</font>";
				else
					document.getElementById("door2").innerHTML = "<b>#Door 2</b><br><img src=\"img/doorOpen2.png\"><br><font color=\"green\" size=\"5\">Open</font>";
			}
		}
		ajax.send(null);
	}
	
	counter();
	bulb1();
	bulb2();
	bulb3();
	bulb4();
	alarm();
	door1();
	door2();
	setInterval(function(){
		counter();
	},500);
	setInterval(function(){
		bulb1();
	},2000);
	setInterval(function(){
		bulb2();
	},2000);
	setInterval(function(){
		bulb3();
	},2000);
	setInterval(function(){
		bulb4();
	},2000);
	setInterval(function(){
		alarm();
	},2000);
	setInterval(function(){
		door1();
	},2000);
	setInterval(function(){
		door2();
	},2000);

	
	
	function toggleCP(){
	var cp = document.getElementById("sideMenuContent");
	if(cp.style.visibility == "visible")
		cp.style.visibility="hidden";
	else
		cp.style.visibility = "visible";
	}
	
	function addFields(){
		var number = document.getElementById("member").value;
		var container = document.getElementById("container");
		while (container.hasChildNodes()) {
			container.removeChild(container.lastChild);
		}
		for (i=0;i<number;i++){
			// Append a node with a random text
			container.appendChild(document.createTextNode("#Mobile_" + (i+1)));
			// Create an <input> element, set its type and name attributes
			var input = document.createElement("input");
			input.type = "number";
			input.name = "member" + i;
			container.appendChild(input);
			// Append a line break 
			container.appendChild(document.createElement("br"));
		}
	}
</script>
</body>
</html>