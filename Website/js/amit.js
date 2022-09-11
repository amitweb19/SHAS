function dis0()
		{	
			xmlhttp = new XMLHttpRequest();
			xmlhttp.open("GET", "counter.txt",false);
			xmlhttp.send(null);
			document.getElementById("ctrNum").innerHTML = xmlhttp.responseText;
			if(xmlhttp.responseText <= '1')
			{
				if(xmlhttp.responseText <= 0)
					document.getElementById("counter").className = "inactive shadow2 radius2";
				else
					document.getElementById("counter").className = "active shadow2 radius2";
				document.getElementById("ctrP").innerHTML = "People";
			}
			else
			{
				document.getElementById("counter").className = "active shadow2 radius2";
				document.getElementById("ctrP").innerHTML = "Peoples";
			}
		}
		dis0();
	setInterval(function(){
		dis0();
	},500);

	

	function dis1()
	{
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "bulb1.txt",false);
		xmlhttp.send(null);
		if(xmlhttp.responseText === 'off')
			document.getElementById("bulb1").innerHTML = "<div class=\"devices devicesOff shadow2\"></div>";
		else
			document.getElementById("bulb1").innerHTML = "<div class=\"devices devicesOnR shadow2\"></div>";
	}
	dis1();

	setInterval(function(){
		dis1();
	},500);

	function dis2()
	{
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "bulb2.txt",false);
		xmlhttp.send(null);
		if(xmlhttp.responseText === 'off')
			document.getElementById("bulb2").innerHTML = "<div class=\"devices devicesOff shadow2\"></div>";
		else
			document.getElementById("bulb2").innerHTML = "<div class=\"devices devicesOnG shadow2\"></div>";
	}
	dis2();

	setInterval(function(){
		dis2();
	},500);

	function dis3()
	{
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "bulb3.txt",false);
		xmlhttp.send(null);
		if(xmlhttp.responseText == 'off')
			document.getElementById("bulb3").innerHTML = "<div class=\"devices devicesOff shadow2\"></div>";
		else
			document.getElementById("bulb3").innerHTML = "<div class=\"devices devicesOnB shadow2\"></div>";
	}
	dis3();

	setInterval(function(){
		dis3();
	},500);

	function dis4()
	{
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "bulb4.txt",false);
		xmlhttp.send(null);
		if(xmlhttp.responseText == 'off')
			document.getElementById("bulb4").innerHTML = "<div class=\"devices devicesOff shadow2\"></div>";
		else
			document.getElementById("bulb4").innerHTML = "<div class=\"devices devicesOnY shadow2\"></div>";
	}
	dis4();

	setInterval(function(){
		dis4();
	},500);


	function dis5()
	{
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "bulb4.txt",false);
		xmlhttp.send(null);
		if(xmlhttp.responseText == 'off')
			document.getElementById("alarmBox").innerHTML = "<div id=\"alarm\" class=\"alarmOff\"></div>";
		else if(xmlhttp.responseText == 'on')
			document.getElementById("alarmBox").innerHTML = "<div id=\"alarm\" class=\"alarmOn\"></div>";
		else
			document.getElementById("alarmBox").innerHTML = "<div id=\"alarm\" class=\"alarmActive\"></div>";
	}
	dis5();

	setInterval(function(){
		dis5();
	},500);


	function dis6()
	{
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "door1.txt",false);
		xmlhttp.send(null);
		if(xmlhttp.responseText == 'off')
			document.getElementById("door1").innerHTML = "<b>#Door 1</b><br><img src=\"img/doorClose2.png\"><br><font color=\"red\" size=\"5\"><i>since 5 min.</i></font>";
		else
			document.getElementById("door1").innerHTML = "<b>#Door 1</b><br><img src=\"img/doorOpen2.png\"><br><font color=\"green\" size=\"5\"><i>since 5 min.</i></font>";
	}
	dis6();

	setInterval(function(){
		dis6();
	},500);


	function dis7()
	{
		xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "door2.txt",false);
		xmlhttp.send(null);
		if(xmlhttp.responseText == 'off')
			document.getElementById("door2").innerHTML = "<b>#Door 2</b><br><img src=\"img/doorClose2.png\"><br><font color=\"red\" size=\"5\"><i>since 5 min.</i></font>";
		else
			document.getElementById("door2").innerHTML = "<b>#Door 2</b><br><img src=\"img/doorOpen2.png\"><br><font color=\"green\" size=\"5\"><i>since 5 min.</i></font>";
	}
	dis7();

	setInterval(function(){
		dis7();
	},500);
	