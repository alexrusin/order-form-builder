<? $order_title = array(" We are more then Girlfriends","My First Huge Cock","The Best of Sativa Rose"," First Time Lesbians 6 ","Top 25 Cumshots 8","Black Knockers 4"," Get Down on It"," Black on Black"," Everyone in California has Fake Tits","Orgies","Lesbian Girlfriends","Loads of Lesbians 2","Top 100 Fucking Cumshots 2"); $order_quantity = 13;if ($_POST[submit] == ' Submit/Place my Order ') {
		for ($i = 1; $i <= $order_quantity; $i++) {
			$order[$i - 1] = intval($_POST["Item_".$i]);
			if ($order[$i - 1] < 0) { $order[$i - 1] = 0; }
		}
		send_order();
		header('Location: thankyou.html');
	}
	
function send_order() {
	global $order;
	global $order_title;
	global $order_quantity;
	
require("includes/phpmailer/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();	// set mailer to use SMTP
$mail->Host = "smtpout.secureserver.net";	// specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "test@teamlegenddirect.com";  // SMTP username
$mail->Password = "nxgfsrw"; // SMTP password

$mail->From = "webmaster@teamlegenddirect.com";
$mail->FromName = "TeamLegendDirect.com";
$mail->AddAddress("alexrusin_2000@yahoo.com", "Alex Rusin");
#$mail->AddAddress("julio@worldwidecontent.com", "Julio C. Torres");
#$mail->AddBCC("julio@worldwidecontent.com", "Julio C. Torres");

$mail->IsHTML(true);                                  // set email format to HTML

$body  = "Bill To: " . $_POST["BillTo"] . "<br />";
$body .= "Ship To: " . $_POST["ShipTo"] . "<br />";
$body .= "Terms: " . $_POST["Terms"] . "<br />";
$body .= "Ship Method: " . $_POST["ShipMethod"] . "<br /><br />";
$body .= "Notes/Comments: <br />" . nl2br($_POST[notes]) . "<br /><br />";
$body .= "List of Titles:<br /><br />";
$body .= "<ul>";
for ($i = 0; $i < $order_quantity; $i++) {
	if ($order[$i] > 0) {
		$body .= "<li>Title: " . $order_title[$i] . ", Quantity: " . $order[$i] . "</li>";
	}
}
$body .= "</ul>";

$bodyalt  = "Bill To: " . $_POST["BillTo"] . "\n";
$bodyalt .= "Ship To: " . $_POST["ShipTo"] . "\n";
$bodyalt .= "Terms: " . $_POST["Terms"] . "\n";
$bodyalt .= "Ship Method: " . $_POST["ShipMethod"] . "\n\n";
$bodyalt .= "Notes/Comments: \n" . $_POST[notes] . "\n\n";
$bodyalt .= "List of Titles:\n\n";
for ($i = 0; $i < $order_quantity; $i++) {
	if ($order[$i] > 0) {
		$bodyalt .= "   Title: " . $order_title[$i] . "\n";
		$bodyalt .= "   Quantity: " . $order[$i] . "\n\n";
	}
}

 $mail->Subject = 'Order Form -New Releases For November 18, 2015'; $mail->Body = $body; $mail->AltBody = $bodyalt; $mail->Send();}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Legend Video - New Releases For November 18, 2015</title>
<style type="text/css">
<!--
body {
	font:normal 0.75em Verdana, Arial, Helvetica, sans-serif;
	background-color:#c0c0c0;
}
* {
	/* [disabled]margin:0px; */
	padding:0px;
}
div#body-wrapper {
	width:672px;
	margin:0px auto;
	background-color:#ffffff;
}
div#header {
	text-align:center;
	color:#5c5c5c;
}
div#header #header-logo {
	margin-top:20px;
	margin-bottom:10px;
}
div#header #header-top {
	width:654px;
	background-color:#5c5c5c;
	font-size:14px;
	color:#e4ff00;
	margin:5px 9px 0px 9px;
}
div#header #header-text {
	margin:0px 9px 10px 9px;
	padding:10px;
	border:2px solid #5c5c5c;
	background-color:#ececec;
	color:#0c4d90;
	text-align:left;
	font-size:12px;
}
div#header #header-text a:link, div#header #header-text a:visited, div#header #header-text a:hover {
	text-decoration:underline;
	color:#0c4d90;
}
div#header #header-text span.footer-text-red {
	color:#ff0078;
}
div#header #header-text span.footer-link-red a:link, div#header #header-text span.footer-link-red a:visited, div#header #header-text span.footer-link-red a:hover {
	text-decoration:underline;
	color:#ff0078;
}
div#header #header-text table#billing_info tr td {
	padding:3px 0px;
}
div#body-dvd {
	margin:0px 9px;
	border-left:2px solid #5c5c5c;
	border-right:2px solid #5c5c5c
}
div#body-dvd .dvd-data {
	border-top:2px solid #0c4d90;
	background-image:url(http://www.teamlegenddirect.com/mailer/images/dvd-bg.jpg);
	width:650px;
	height:531px;
	font-size:12px;
	color:#003360;
	font-weight:bold;
}
div#body-dvd .dvd-data .dvd-data-title-label {
	margin-left:10px;
}
div#body-dvd .dvd-data .dvd-data-title {
	color:#ff0078;
}
div#body-dvd .dvd-data .dvd-data-barcode-label {
	margin-left:10px;
}
div#body-dvd .dvd-data .dvd-data-barcode {
	color:#ff0078;
}
div#body-dvd .dvd-data .dvd-data-zoom {
	margin-right:10px;
}
div#body-dvd .dvd-data .dvd-data-zoom img {
	border:0px;
}
div#body-dvd .dvd-data .dvd-data-zoom a:link, div#body-dvd .dvd-data .dvd-data-zoom a:visited, div#body-dvd .dvd-data .dvd-data-zoom a:hover {
	text-decoration:underline;
	color:#003360;
}
div#body-dvd .dvd-data .dvd-data-order {
	margin-right:10px;
}
div#body-dvd .dvd-data .dvd-data-order img {
	border:0px;
}
div#body-dvd .body-dvd-sep {
	border-top:2px solid #5c5c5c;
}
div#body-footer-sep {
	margin:0px 9px;
	border-top:2px solid #5c5c5c;
	background-color:#FFFFFF;
	width:654px;
	height:10px;
}
div#footer {
	margin:0px 9px 10px 9px;
	padding:10px;
	border:2px solid #5c5c5c;
	background-color:#ececec;
	color:#0c4d90;
	text-align:center;
	font-size:12px;
}
div#footer a:link, div#footer a:visited, div#footer a:hover {
	text-decoration:underline;
	color:#5c5c5c;
}
div#footer span.footer-text-red {
	color:#ff0078;
}
div#footer span.footer-link-red a:link, div#footer span.footer-link-red a:visited, div#footer span.footer-link-red a:hover {
	text-decoration:underline;
	color:#ff0078;
}
.style1 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div id="body-wrapper">
  <form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div id="header">
      <div id="header-logo"> <a href="http://www.teamlegenddirect.com/front.php"> <img src="http://www.teamlegenddirect.com/mailer/images/logo.jpg" width="410" height="116" border="0" /> </a> </div>
      <div id="header-text"> <b>Legend Video, Inc.</b><br />
        <br />
        7230 Coldwater Canyon<br/>
North Hollywood, CA 91605<br />
        Phone: 818-308-1015<br />
        Fax: 818-765-7464<br />
        <br />
        <table id="billing_info" width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="15%"> Bill To: </td>
            <td width="85%"><input type="text" maxlength="264" name="BillTo" size="64" value="">
            </td>
          </tr>
          <tr>
            <td> Ship To: </td>
            <td><input type="text" maxlength="264" name="ShipTo" size="64" value="">
            </td>
          </tr>
          <tr>
            <td> Terms: </td>
            <td><input type="text" maxlength="128" name="Terms" size="32" value="">
            </td>
          </tr>
          <tr>
            <td> Ship Method: </td>
            <td><input type="text" maxlength="128" name="ShipMethod" size="64" value="">
            </td>
          </tr>
        </table>
      </div>
<div id="header-top">
<table width="654px" border="0" cellpadding="0"cellspacing="5">
<tr>
<td align="left"><span class="style2">Shipping Date: November 18, 2015</span></td></tr></table></div></div><div id="body-dvd"><div class="body-dvd-sep"><img src="http://www.teamlegenddirect.com/mailer/images/featured-dvds.jpg" width="650" height="48" /></div><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/wearemorethangirlfrieds.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title"> We are more then Girlfriends</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/wearemorethangirlfrieds.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/wearemorethangirlfrieds.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603727</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_1" size="8" value=""></div></td></tr></table><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/myfirsthugecock.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title">My First Huge Cock</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/myfirsthugecock.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/myfirsthugecock.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603444</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_2" size="8" value=""></div></td></tr></table><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/thebestofsativarose.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title">The Best of Sativa Rose</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/thebestofsativarose.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/thebestofsativarose.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603758</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_3" size="8" value=""></div></td></tr></table><div class="body-dvd-sep"><img src="http://www.teamlegenddirect.com/mailer/images/4-hour-dvds.jpg" width="650" height="48" /></div><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/firsttimelesbians6.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title"> First Time Lesbians 6 </span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/firsttimelesbians6.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/firsttimelesbians6.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603741</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_4" size="8" value=""></div></td></tr></table><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/top25cumshots8.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title">Top 25 Cumshots 8</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/top25cumshots8.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/top25cumshots8.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603765</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_5" size="8" value=""></div></td></tr></table><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/blackknockers4.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title">Black Knockers 4</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/blackknockers4.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/blackknockers4.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603772</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_6" size="8" value=""></div></td></tr></table><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/getdownonit.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title"> Get Down on It</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/getdownonit.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/getdownonit.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603789</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_7" size="8" value=""></div></td></tr></table><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/blackonblack.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title"> Black on Black</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/blackonblack.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/blackonblack.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603796</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_8" size="8" value=""></div></td></tr></table><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/everyoneincalihasfaketits.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title"> Everyone in California has Fake Tits</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/everyoneincalihasfaketits.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/everyoneincalihasfaketits.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603802</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_9" size="8" value=""></div></td></tr></table><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/orgies.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title">Orgies</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/orgies.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/orgies.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603819</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_10" size="8" value=""></div></td></tr></table><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/lesbiangirlfriends.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title">Lesbian Girlfriends</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/lesbiangirlfriends.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/lesbiangirlfriends.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388604151</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_11" size="8" value=""></div></td></tr></table><div class="body-dvd-sep"><img src="http://www.teamlegenddirect.com/mailer/images/16-hour-dvds.jpg" width="650" height="48" /></div><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/loadsoflesbians2.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title">Loads of Lesbians 2</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/loadsoflesbians2.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/loadsoflesbians2.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603826</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_12" size="8" value=""></div></td></tr></table><table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center"><img src="http://www.teamlegenddirect.com/mailer/boxcovers/top100fuckingcumshots2.jpg" width="597" height="410"></td></tr><tr height="33"><td align="left"><span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title">Top 100 Fucking Cumshots 2</span> </td><td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/top100fuckingcumshots2.jpg" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="http://www.teamlegenddirect.com/mailer/boxcovers/top100fuckingcumshots2.jpg" target="_blank">ENLARGE IMAGE</a></div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">738388603833</span><td align="right"><div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_13" size="8" value=""></div></td></tr></table></div><div id="body-footer-sep"></div> <div id="footer"> If you need any special instruction or any other notes, please enter it here<br />For example, a P.O number, a phone number or email where we can contact you...<br /><br /> <textarea rows="5" cols="68" name="notes"></textarea><br /><br />When ready to place the order, press the submit button:<br /><br /><input type="submit" name="submit" value=" Submit/Place my Order "></div> </form> <br /></div></body></html>