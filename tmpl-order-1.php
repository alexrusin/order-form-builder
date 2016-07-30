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
