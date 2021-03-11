<html>
<head><title>Activity 10 PACAANAS</title>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(window).on('scroll', function () {
if($(window).scrollTop()) {
$('nav').addClass('black');
}
else {
$('nav').removeClass('black');
}
})
</script>
</head>
<style> 
.submit {
	height: 40px;
	width: 75px;
	overflow: auto;
}
input {
    margin: .4rem;
}

input:invalid {
  border: 2px dashed black;
}

input:valid {
  border: 2px solid red;
}
fieldset {
	border: 15px groove violet;
	width: 400px; 
	background-color: black;
}
fieldset:hover {
	background-color: cyan;
}
.p1 {
	border: 15px groove violet;
	width: 500px; 
	background-color: cyan;
}
nav {
    position: fixed;
    top: 0;
    left: 10;
    width: 100%;
    height: 100px;
    padding: 1px 100px;
    box-sizing: border-box;
    transition: .2s;
}
nav.black {
    background: pink;
    height: 100px;
    padding: 5px 100px;
}
nav ul {
    list-style: none;
    float: right;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    list-style: none;
}

nav ul li a {
    line-height: 50px;
    color: magenta;
    padding: 12px 30px;
    text-decoration: none;
    text-transform: uppercase;
    transition: .3s;
}

nav.black ul li a {
    color: red;
}

nav ul li a:focus {
    outline: none;
}
</style>
<body bgcolor="orange">
	<div style="position:relative;width:267px;height:25px;overflow:hidden;">
<div style="position:absolute;top:-276px;left:-500px">
<iframe width="300" height="300" src="https://www.youtube.com/embed/jEexefuB62c?autoplay=1">
</iframe>
</div>
</div>
	<nav>
		<ul>
			<li><a href="https://www.facebook.com/KshaSatana">Contact</a></li>
		</ul>
	</nav>
<?php act10(); ?>
<center><h1><strong>ABC Company<br></h1></strong>San Andres, Manila</center><br>
<iframe id="vid" width="800" height="400" src="https://www.youtube.com/embed/KTCmwS7XakM?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<form method="POST">
<pre> 
<p>Customer Name: <input type="text" name="fn"> <input type="text" name="mn"> <input type="text" name="ln">
Delivery Address: <input type="text" name="da"> <input type="text" name="da2"> <input type="text" name="da3">
Contact Number: <input type="text" name="cn">
Official Receipt Number: <input type="text" name="rn">
Cash Rendered: <input type="text" name="cr">
Cashier Name: <input type="text" name="cn6"> </p>
<center>
<table border="3" cellpadding="10" class= "p1">
<tr>
<th>Wholesale</th>
<th>Retail</th>
</tr>
<tr>
<td>1-25:	25, 500.70</td>
<td>1-25:	23, 000.75</td>
</tr>
<tr>
<td>26-50:	20, 000.40</td>
<td>26-50:	23, 000.75</td>
</tr>
<tr>
<td>51-100:	18, 000.30</td>
<td>51-100:	21, 000.18</td>
</tr>
<tr>
<td>101 and above 15, 500.00</td>
<td>101 and above 18,000.28</td>
</tr>
<tr>
</table></center>
Enter the form for merchandising: <input type="text" name="fm">
How many units: <input type="text" name="hu">
<table cellpadding="5">
<tr>
<th>Mode of Payment</th>
<th>Discount</th>
</tr>
<tr>
<td>A/a Cash</td>
<td>15%</td>
</tr>
<tr>
<td>B/b Check</td>
<td>10%</td>
</tr>
<tr>
<td>C/c Check</td>
<td>5%</td>
</tr>
</table>
Enter mode of payment :<input type="text" name="ep">
<table cellpadding="5">
<tr>
<th>Nature of Services</th>
<th>Discount</th>
</tr>
<tr>
<td>1 Air Flight</td>
<td>20%</td>
</tr>
<tr>
<td>2 Shipping</td>
<td>15%</td>
</tr>
<tr>
<td>3 Truck</td>
<td>10%</td>
</tr>
<tr>
<td>4 Pick Up</td>
<td>0%</td>
</tr>
</table>
Enter nature of services: <input type="char" name="es"> <br>
<center><input type="submit" name="submit" value="Submit!" style="border-color: green 20px"; class="submit";> </center>
</pre>
</form>
<hr> <hr>
<center> <strong> Our Lady Of Fatima University <br> </strong>
Km 23 Brgy. Sta. Cruz Antipolo City </center>
</pre>
</tr>
</table>
<?php
if(isset($_POST['submit']))
{
$fn = $_POST['fn'];
$mn = $_POST['mn'];
$ln = $_POST['ln'];
$da = $_POST['da'];
$da2 = $_POST['da2'];
$da3 = $_POST['da3'];
$cn = $_POST['cn'];
$rn = $_POST['rn'];
$cr = $_POST['cr'];
$cn6 = $_POST['cn6'];
$fm = $_POST['fm'];
$hu = $_POST['hu'];
$ep = $_POST['ep'];
$es = $_POST['es'];



echo "<fieldset><pre>";
echo "<br> Customer Name: " .$_POST['fn']. "," .$_POST['mn']. "," .$_POST['ln'];
echo "<br> Delivery Address: " .$_POST['da']. "," .$_POST['da2']. "," .$_POST['da3'];
echo "<br> Contact Number: " .$_POST['cn'];
echo "<br> Official Receipt Number: " .$_POST['rn'];
echo "<br> Enter the form of Merchandising: " .$fm=$_POST['fm'];
echo "<br> Enter how many units: " .$hu=$_POST['hu'];
	#switch($hu){
		if($hu>=1 && $hu<=25 && ($fm=='w'||$fm=='W')) {
			$sub=$hu*25000.70;
		}
		#break;
		elseif($hu>=1 && $hu<=25 && ($fm=='r'||$fm=='R')) {
			$sub=$hu*23000.55;
		}
		#break;
		elseif($hu>=25 && $hu<=50 && ($fm=='w'||$fm=='W')) {
			$sub=$hu*20000.40;
		}
	#break;
		elseif($hu>=25 && $hu<=50 && ($fm=='r'||$fm=='R')) {
			$sub=$hu*23000.75;
		}
	#break;
		elseif($hu>=50 && $hu<=100 && ($fm=='w'||$fm=='W')) {
			$sub=$hu*18000.30;
		}
	#break;
		elseif($hu>=50 && $hu<=100 && ($fm=='r'||$fm=='R')) {
			$sub=$hu*21000.18;
		}
	#break;
		elseif($hu>=100 && ($fm=='w'||$fm=='W')) {
			$sub=$hu*15500;
		}
	#break;
		elseif($hu>=100 && ($fm=='w'||$fm=='W')) {
			$sub=$hu*15500;
		}
	#break;
#}
echo"<br> Subtotal:" .$sub;
echo"<br> Enter Mode of Payment:" .$ep=$_POST['ep'];
	#	if (condition) {
			# code...
	#	}
	#switch($ep){
	if($ep=='a'||$ep=='A') {
		$yds=$sub*.15;
	}
	#break;
	elseif($ep=='b'||$ep=='B') {
		$yds=$sub*.1;
	}
	#break;
	elseif($ep=='c'||$ep=='C') {
		$yds=$sub*.05;
	}
	#break;
	#}
echo"<br> Your discount is:" .$yds;
echo"<br> Subtotal1:" .$sub1=$sub-$yds;
echo"<br> Enter Nature of Services:" .$es=$_POST['es'];
	#switch($es){
	if($es=='1') {
		$asd = $sub1 * 0.2;
	}
	#break;
	elseif($es=='2') {
		$asd = $sub1 * 0.15;
	}
	#breelseifak;
	elseif($es=='3') {
		$asd = $sub1 * 0.1;
	}
	#break;
	elseif($es=='4') {
		$asd = $sub1 * 0;
	}
	#break;
#}
echo"<br> Total: " .$vs= $sub1 + $asd;
echo"<br> VAT(5%):" .$vs2=$vs * 0.05;
echo"<br> Vatable Sales:" .$vs1=$vs-$vs2;
echo"<br> Cash Rendered:" .$cr=$_POST['cr'];
	#	if (condition) {
			# code...
	#	}
	#switch($vs){
		if($cr >= $vs) {
		$ch = $cr - $vs;
		$bal = 0;
		}
		#break;
		elseif($cr < $vs) {
		$bal = $vs - $cr;
		$ch = 0;
		}	
		#break;
		#}
echo"<br>Change :" .$ch;
echo"<br>Balance:" .$bal;
echo"<br>Cashier Name:" .$_POST['cn6'];
echo"<br><center>This serves as an official receipt";
echo"<br><center>Thank you and come again!</center></fieldset>";
echo"<br> Hover to see result! </br>";
}

function act10(){
   print "            <div class=\"info\">  <div class =\"four_1\">      
<div class = \"headnested_3\" align=\"left\">      <img src= \"https://scontent.fmnl2-1.fna.fbcdn.net/v/t1.0-9/137553357_2736636229986345_9104598712704374059_o.jpg?_nc_cat=110&ccb=1-3&_nc_sid=09cbfe&_nc_eui2=AeGEo9CJ9zfZOj2RU9FR3KjNFc9juZBcHdoVz2O5kFwd2k5EiDaekqsUrPsyBUyjPSzbbAlQio-PW5gBAE1w-lI1&_nc_ohc=HNu8Ktk6EkMAX9qJzIe&_nc_ht=scontent.fmnl2-1.fna&oh=e49f5250d0512b14d1bf0a0ba47af6ff&oe=6070ED0E\" width=\"100\" height=\"100\" align = \"left\"  class = \"something\" border = \"solid\ >      
</div>      <div class =\"headnested_1\" align 
=\"left\">      </div>      <div class = 
\"headnested_1\" style = \"font-size:12px\">               
<font size = 2 color = black>Student No. : 1940CPT-87</font></br>               <font size = 2 color = black>Student Name: JOHN AIRAH PACAANAS</font></br>              <font size = 2 color = black>Course: BTVTE Major in Computer Programming Technology\n"; 
print "</font></br>               <font size = 2 color 
= black>College: College of Industrial Technology 
</font></br>      </div></div> <div class=\"one\"  style = \"background-color: #EEE8AA\" >    <h1 align=\"center\" style = \"color: green\">Activity 10</h1>      <hr style=\"width:100%;text-align:left;marginleft:0\"><br>   <div align=\"center\" class=\"form-schedule\" > <table  align = \"center\" width = \"700\" ><td align = \"left\"><font size = 2 color = black>"; 
};
echo "<br><br>";
print "   <p align=\"center\">Copyright © 2021. Pacaanas John Airah</p>\n"; 
?>
</body>
</html>
