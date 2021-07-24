<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="images/14.ico" type="image/png" />
<head><title>Tao thích mầy</title>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<script>      
window.scrollBy(0, 1)      
window.resizeTo(0,0)      
window.moveTo(0,0)                
//setInterval("move()",30);      
setTimeout("move()", 1);      
var mxm=50      
var mym=25      
var mx=0      
var my=0      
var sv=50      
var status=1     
var szx=0      
var szy=0      
var c=255      
var n=0      
var sm=30      
var cycle=2      
var done=2      
function move()      
	{      
	if (status == 1)      
		{      
		mxm=mxm/1.05      
		mym=mym/1.05      
		mx=mx+mxm      
		my=my-mym      
		mxm=mxm+(400-mx)/100      
		mym=mym-(300-my)/100      
		window.moveTo(mx,my)      
		rmxm=Math.round(mxm/10)      
		rmym=Math.round(mym/10)      
		if (rmxm == 0)      
			{      
			if (rmym == 0)      
				{      
				status=2      
				}      
			}      
		}      
	if (status == 2)      
		{      
		sv=sv/1.1      
		scrratio=1+1/3      
		mx=mx-sv*scrratio/2      
		my=my-sv/2      
		szx=szx+sv*scrratio      
		szy=szy+sv      
		window.moveTo(mx,my)      
		window.resizeTo(szx,szy)      
		if (sv < 0.1)      
			{      
			status=3      
			}      
		}      
	if (status == 3)      
		{      
		document.fgColor=0xffffFF      
		c=c-16       
		if (c<0)      
			{status=8}      
		}      
	if (status == 4)      
		{      
		c=c+16      
		document.bgColor=c*65536      
		document.fgColor=(255-c)*65536      
		if (c > 239)      
			{status=5}      
		}      
	if (status == 5)      
		{      
		c=c-16      
		document.bgColor=c*65536      
		document.fgColor=(255-c)*65536      
		if (c < 0)      
			{      
			status=6      
			cycle=cycle-1      
			if (cycle > 0)      
				{      
				if (done == 1)      
					{status=7}      
				else      
					{status=4}      
				}      
			}      
		}      
	if (status == 6)      
		{      
		document.title = "LlyKil"      
		alert("LlyKil")      
		cycle=2      
		status=4      
		done=1      
		}      
	if (status == 7)      
		{      
		c=c+4      
		document.bgColor=c*65536      
		document.fgColor=(255-c)*65536      
		if (c > 128)      
			{status=8}      
		}      
	if (status == 8)      
		{      
		window.moveTo(0,0)      
		sx=screen.availWidth      
		sy=screen.availHeight      
		window.resizeTo(sx,sy)      
		status=9      
}      
	var timer=setTimeout("move()",0.3)      
	}
</script>

<SCRIPT language=JavaScript>
var brzinakucanja = 200;
var pauzapor = 2000;
var vremeid =null;
var kretanje = false;
var poruka = new Array();
var slporuka = 0;
var bezporuke = 0;
//CHỮ RƠI
poruka[0] = "Tao yêu mầy"
poruka[1] = "Tao yêu mầy"

function prikaz() {
   var text = poruka[slporuka];

   if (bezporuke < text.length) {
      if (text.charAt(bezporuke) == " ")
               bezporuke++
           var ttporuka = text.substring(0, bezporuke + 1);
           document.title = ttporuka;
           bezporuke++
           vremeid = setTimeout("prikaz()", brzinakucanja);
            kretanje = true;
   } else {
      bezporuke = 0;
      slporuka++
      if (slporuka == poruka.length)
         slporuka = 0;
      vremeid = setTimeout("prikaz()", pauzapor);
      kretanje = true;
   }
}
function stop() {
   if (kretanje)
      clearTimeout(vremeid);
   kretanje = false
}
function start() {
   stop();
   prikaz();
}
start();
    </SCRIPT>


<style type="text/css">
<!--
.style3 {
	color: #00FF33;
	font-size: 1.5cm;
}
.style5 {color: #ff0066}
-->
body{
background: url("images/qd.jpg")no-repeat center center fixed;

margin:0; padding:0; font-size:12px;overflow:auto;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
</style></head>

<body>

<h1 align="center"><span style="background: url(&quot;http://nm4.upanh.com/b6.s27.d2/d9f50c755f7e4d8626a518843017a8bc_44837304.partner.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.3em LightYellow, 0pt 4pt 0.3em LightYellow;"><b>Tao thích mi</b></span></h1>
<center><img border="0" src="images/canh.png" width="500" height="150" /></center>


<center>

  <p><img src="images/tim.png" alt width="660" height="341"></p>

</center>

<center>
<font style="font-size: 11pt"><font color="#358e00" face="Comic Sans MS">
Đợi xíu :</font><font color="white" face="Comic Sans MS"> </font>
<marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="20" width="50%"><FONT face="Tahoma" size="5" color="#48007d">
<!--***** EDIT *****-->
Yêu mầy lâu rồi mà tao không dám thổ lộ, Mượn web này để thể hiện tao yêu mầy đến cở nào!</FONT></marquee><br>

</font></center>


<div id="Layer1" style="left: 0pt; position: fixed; top: 0pt; z-index: 0;"> 
<embed align="center" height="900px" width="2000px" src="images/chuot.swf" wmode="transparent"></embed></div>




<SCRIPT language=JavaScript1.1>
function right(e) {
if (navigator.appName == 'Netscape' &&
(e.which == 3 || e.which == 2))
return false;
else if (navigator.appName == 'Microsoft Internet Explorer' &&
(event.button == 2 || event.button == 3)) {
alert('Chuc Mot Ngay Vui ve - Gui Wedsite Cho Ban Be Cua Minh Nha !');
return false;
}
return true;
}
document.onmousedown=right;
if (document.layers) window.captureEvents(Event.MOUSEDOWN);
window.onmousedown=right;
</SCRIPT>
 <NOSCRIPT><IFRAME SRC=*.jpg></IFRAME></NOSCRIPT>
<!-- end code không cho copy -->
<!-- nhạc nền -->
<iframe src="http://www.nhaccuatui.com/mh/background/G0q6Up4DKOYi" width="1" height="1" frameborder="0" allowfullscreen></iframe>
<!-- end nhạc nền -->


</body>
</html>
<head>
<title>Sẳn sàng chưa...</title>
<meta http-equiv="refresh" content="30;yeukhong.php">
</head>
