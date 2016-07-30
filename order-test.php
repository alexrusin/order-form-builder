<?
	$order = array(0, 0, 0, 0, 0, 0, 0, 0);
	$order_title = array(
		'Perverted #6', 
		'Anal Hitters', 
		'Anal Invaders',
		'Mocha Honeyz Orgy #3',
		'Dirty Souble Stuffed Sluts #1',
		'I Luv Titties #1',
		'Absolute Filth',
		'Cock Smokers'
	);
	$order_quantity = 8;

	if ($_POST[submit] == ' Submit/Place my Order ') {
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

$mail->Subject = 'Order Form - New Releases for August 25, 2008';
$mail->Body    = $body;
$mail->AltBody = $bodyalt;

$mail->Send();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Legend Video - New Releases For August 25, 2008</title>
<style type="text/css">
<!--
body {
	font:normal 0.75em Verdana, Arial, Helvetica, sans-serif;
	background-color:#c0c0c0;
}
* {
	margin:0px;
	padding:0px;
}
div#body-wrapper {
	width:672px;
	margin:0px auto;
	background-color:#ffffff;
}
div#header {
	text-align:center;
	color:#0072ff;
}
div#header #header-logo {
	margin-top:20px;
	margin-bottom:10px;
}
div#header #header-top {
	width:654px;
	background-color:#0c4d90;
	font-size:14px;
	color:#e4ff00;
	margin:5px 9px 0px 9px;
}
div#header #header-text {
	margin:0px 9px 10px 9px;
	padding:10px;
	border:2px solid #0c4d90;
	background-color:#d3e9ff;
	color:#0c4d90;
	text-align:left;
	font-size:12px;
}
div#header #header-text a:link, div#header #header-text a:visited, div#header #header-text a:hover {
	text-decoration:underline;
	color:#0c4d90;
}
div#header #header-text span.footer-text-red {
	color:#ff0000;
}
div#header #header-text span.footer-link-red a:link, div#header #header-text span.footer-link-red a:visited, div#header #header-text span.footer-link-red a:hover {
	text-decoration:underline;
	color:#ff0000;
}
div#header #header-text table#billing_info tr td {
	padding:3px 0px;
}
div#body-dvd {
	margin:0px 9px;
	border-left:2px solid #0c4d90;
	border-right:2px solid #0c4d90;
}
div#body-dvd .dvd-data {
	border-top:2px solid #0c4d90;
	background-image:url(images/dvd-bg.jpg);
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
	color:#ff0000;
}
div#body-dvd .dvd-data .dvd-data-barcode-label {
	margin-left:10px;
}
div#body-dvd .dvd-data .dvd-data-barcode {
	color:#ff0000;
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
	border-top:2px solid #0c4d90;
}
div#body-footer-sep {
	margin:0px 9px;
	border-top:2px solid #0c4d90;
	background-color:#FFFFFF;
	width:654px;
	height:10px;
}
div#footer {
	margin:0px 9px 10px 9px;
	padding:10px;
	border:2px solid #0c4d90;
	background-color:#d3e9ff;
	color:#0c4d90;
	text-align:center;
	font-size:12px;
}
div#footer a:link, div#footer a:visited, div#footer a:hover {
	text-decoration:underline;
	color:#0c4d90;
}
div#footer span.footer-text-red {
	color:#ff0000;
}
div#footer span.footer-link-red a:link, div#footer span.footer-link-red a:visited, div#footer span.footer-link-red a:hover {
	text-decoration:underline;
	color:#ff0000;
}
-->
</style>
</head>
<body>
<div id="body-wrapper">
  <form action="order-test.php" method="POST">
    <div id="header">
      <div id="header-logo"> <a href="http://www.teamlegenddirect.com/front.php"> <img src="images/logo.jpg" width="410" height="116" border="0" /> </a> </div>
      <div id="header-text"> <b>Legend Video, Inc.</b><br />
        <br />
        9145 Owensmouth Ave. Chatsworth, CA 91311<br />
        Phone: 818-734-4200<br />
        Fax: 818-734-4140   Bruce Fax: 818-734-4185<br />
        <br />
        <table id="billing_info" width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="15%"> Bill To: </td>
            <td width="85%"><input type="text" maxlength="256" name="BillTo" size="64" value="">
            </td>
          </tr>
          <tr>
            <td> Ship To: </td>
            <td><input type="text" maxlength="256" name="ShipTo" size="64" value="">
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
        <table width="654px" border="0" cellpadding="0" cellspacing="5">
          <tr>
            <td align="left"> Shipping Date: August 25, 2008 </td>
            <td align="right"> Street Date: September 2, 2008 </td>
          </tr>
        </table>
      </div>
    </div>
    <div id="body-dvd">
      <div class="body-dvd-sep"><img src="images/new-releases.jpg" /></div>
      <table class="dvd-data" border="0" cellpadding="0" cellspacing="0">
        <tr height="465">
          <td colspan="2" align="center"><img src="boxcovers/93-small.jpg" width="597" height="410" /> </td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-title-label">DVD TITLE:</span> <span class="dvd-data-title">Perverted #6</span> </td>
          <td align="right"><div class="dvd-data-zoom"><a href="http://www.teamlegenddirect.com/mailer/boxcovers/93-large.jpg" target="_blank"><img src="images/zoom-boxcovers.gif" border="0" /></a> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/93-large.jpg" target="_blank">ENLARGE IMAGE</a> </div></td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span> <span class="dvd-data-barcode">738388311073</span> </td>
          <td align="right"><div class="dvd-data-order"> Order Quantity:
              <input type="text" maxlength="16" name="Item_1" size="8" value="">
            </div></td>
        </tr>
      </table>
      <table class="dvd-data" border="0" cellpadding="0" cellspacing="0">
        <tr height="465">
          <td colspan="2" align="center"><img src="boxcovers/94-small.jpg" width="597" height="410" /> </td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-title-label">DVD TITLE:</span> <span class="dvd-data-title">Anal Hitters</span> </td>
          <td align="right"><div class="dvd-data-zoom"> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/94-large.jpg" target="_blank"><img src="images/zoom-boxcovers.gif" border="0" /></a> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/94-large.jpg" target="_blank">ENLARGE IMAGE</a> </div></td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span> <span class="dvd-data-barcode">738388311066</span> </td>
          <td align="right"><div class="dvd-data-order"> Order Quantity:
              <input type="text" maxlength="16" name="Item_2" size="8" value="">
            </div></td>
        </tr>
      </table>
      <table class="dvd-data" border="0" cellpadding="0" cellspacing="0">
        <tr height="465">
          <td colspan="2" align="center"><img src="boxcovers/95-small.jpg" width="597" height="410" /> </td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-title-label">DVD TITLE:</span> <span class="dvd-data-title">Anal Invaders</span> </td>
          <td align="right"><div class="dvd-data-zoom"> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/95-large.jpg" target="_blank"><img src="images/zoom-boxcovers.gif" border="0" /></a> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/95-large.jpg" target="_blank">ENLARGE IMAGE</a> </div></td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span> 738388311059<span class="dvd-data-barcode"></span> </td>
          <td align="right"><div class="dvd-data-order"> Order Quantity:
              <input type="text" maxlength="16" name="Item_3" size="8" value="">
            </div></td>
        </tr>
      </table>
      <table class="dvd-data" border="0" cellpadding="0" cellspacing="0">
        <tr height="465">
          <td colspan="2" align="center"><img src="boxcovers/96-small.jpg" width="597" height="410" /> </td>
        </tr>
        <tr height="33">
          <td width="416" align="left"><span class="dvd-data-title-label">DVD TITLE:</span> <span class="dvd-data-title">Mocha Honeyz Orgy #3</span> </td>
          <td width="234" align="right"><div class="dvd-data-zoom"> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/96-large.jpg" target="_blank"><img src="images/zoom-boxcovers.gif" border="0" /></a> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/96-large.jpg" target="_blank">ENLARGE IMAGE</a> </div></td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span> <span class="dvd-data-barcode">738388311004</span> </td>
          <td align="right"><div class="dvd-data-order"> Order Quantity:
              <input type="text" maxlength="16" name="Item_4" size="8" value="">
            </div></td>
        </tr>
      </table>
      <div class="body-dvd-sep"><img src="http://www.teamlegenddirect.com/mailer/images/4-hour-dvds.jpg" width="650" height="48" /></div>
      <table class="dvd-data" border="0" cellpadding="0" cellspacing="0">
        <tr height="465">
          <td colspan="2" align="center"><img src="boxcovers/97-small.jpg" width="597" height="410" /> </td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-title-label">DVD TITLE:</span> <span class="dvd-data-title">Dirty Souble Stuffed Sluts #1</span> </td>
          <td align="right"><div class="dvd-data-zoom"> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/97-large.jpg" target="_blank"><img src="images/zoom-boxcovers.gif" border="0" /></a> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/97-large.jpg" target="_blank">ENLARGE IMAGE</a> </div></td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span> <span class="dvd-data-barcode">738388508725</span> </td>
          <td align="right"><div class="dvd-data-order"> Order Quantity:
              <input type="text" maxlength="16" name="Item_5" size="8" value="">
            </div></td>
        </tr>
      </table>
      <table class="dvd-data" border="0" cellpadding="0" cellspacing="0">
        <tr height="465">
          <td colspan="2" align="center"><img src="boxcovers/98-small.jpg" width="597" height="410" /> </td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-title-label">DVD TITLE:</span> <span class="dvd-data-title">I Luv Titties #1</span> </td>
          <td align="right"><div class="dvd-data-zoom"> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/98-large.jpg" target="_blank"><img src="images/zoom-boxcovers.gif" border="0" /></a> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/98-large.jpg" target="_blank">ENLARGE IMAGE</a> </div></td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span> <span class="dvd-data-barcode">738388508688</span> </td>
          <td align="right"><div class="dvd-data-order"> Order Quantity:
              <input name="Item_6" type="text" id="Item_6" value="" size="8" maxlength="16">
            </div></td>
        </tr>
      </table>
      <div class="body-dvd-sep"><img src="images/8-hour-dvds.jpg" width="650" height="48" /></div>
      <table class="dvd-data" border="0" cellpadding="0" cellspacing="0">
        <tr height="465">
          <td colspan="2" align="center"><img src="boxcovers/99-small.jpg" width="597" height="410" /> </td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-title-label">DVD TITLE:</span> <span class="dvd-data-title">Absolute Filth</span> </td>
          <td align="right"><div class="dvd-data-zoom"> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/99-large.jpg" target="_blank"><img src="images/zoom-boxcovers.gif" border="0" /></a> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/99-large.jpg" target="_blank">ENLARGE IMAGE</a> </div></td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span> <span class="dvd-data-barcode">738388508503</span> </td>
          <td align="right"><div class="dvd-data-order"> Order Quantity:
              <input type="text" maxlength="16" name="Item_7" size="8" value="">
            </div></td>
        </tr>
      </table>
      <table class="dvd-data" border="0" cellpadding="0" cellspacing="0">
        <tr height="465">
          <td colspan="2" align="center"><img src="boxcovers/100-small.jpg" width="597" height="410" /> </td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-title-label">DVD TITLE:</span> <span class="dvd-data-title">Cock Smokers</span> </td>
          <td align="right"><div class="dvd-data-zoom"> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/100-large.jpg" target="_blank"><img src="images/zoom-boxcovers.gif" border="0" /></a> <a href="http://www.teamlegenddirect.com/mailer/boxcovers/100-large.jpg" target="_blank">ENLARGE IMAGE</a> </div></td>
        </tr>
        <tr height="33">
          <td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span> <span class="dvd-data-barcode">738388508800</span> </td>
          <td align="right"><div class="dvd-data-order"> Order Quantity:
              <input name="Item_8" type="text" id="Item_6" value="" size="8" maxlength="16">
            </div></td>
        </tr>
      </table>
    </div>
    <div id="body-footer-sep"></div>
    <div id="footer"> If you need any special instruction or any other notes, please enter it here<br />
      For example, a P.O number. A phone number or email where we can contact you...<br />
      <br />
      <textarea rows="5" cols="68" name="notes"></textarea>
      <br />
      <br />
      When ready to place the order, press the submit button:<br />
      <br />
      <input type="submit" name="submit" value=" Submit/Place my Order ">
    </div>
  </form>
  <br />
</div>
</body>
</html>
