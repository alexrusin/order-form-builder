var fs = require('fs');
var jq = require('jquery');
var jsdom = require('jsdom');

var data = fs.readFileSync('newsletter-07-20-16.php');
var file = data.toString();

var titles = [];
var skus = [];
var images = [];
var newsletterTitle;
var shippingDate;

var destFile = 'order-07-20-16.php';

///unique function
Array.prototype.unique = function() {
	return this.reduce(function(previous, current, index, array) {
		previous[current.toString() + typeof(current)] = current;
		return array.length - 1 == index ? Object.keys(previous).reduce(function(prev, cur) {
			prev.push(previous[cur]);
			return prev;
		}, []) : previous;
	}, {});
};


///////////////////////

jsdom.env(
	file, ["http://code.jquery.com/jquery.js"],
	function(err, window) {
		var $ = window.$;
		$(".dvd-data-title").each(function() {
			titles.push($(this).text());
		});
		$(".dvd-data-barcode").each(function() {
			skus.push($(this).text());
		});

		$(".dvd-data-barcode").each(function() {
			skus.push($(this).text());
		});

		$(".dvd-data-zoom a").each(function() {
			images.push($(this).attr('href'));
			images = images.unique();
		});

		shippingDate = $(".style2").text();
		newsletterTitle = $("title").text();
	}
);


setTimeout(function() {
			//console.log(titles);
			// console.log(skus);
			// console.log(shippingDate);
			// console.log(newsletterTitle);
			// console.log(images);
			var titlesString = JSON.stringify(titles);

			var output = "<? $order_title = array(" + titlesString.substring(1, titlesString.length - 1) + "); $order_quantity = " + titles.length + ";";

			fs.writeFileSync(destFile, output);

			var tmpl = fs.readFileSync('tmpl-order-1.php');
			tmpl = tmpl.toString();
			fs.appendFileSync(destFile, tmpl);

			output = "\n $mail->Subject = 'Order Form -"+ newsletterTitle+"'; $mail->Body = $body; $mail->AltBody = $bodyalt; $mail->Send();}?>"	;	
			fs.appendFileSync(destFile, output);

			tmpl = fs.readFileSync('tmpl-order-2.php');
			tmpl = tmpl.toString();
			fs.appendFileSync(destFile, tmpl);

			output = "<span class=\"style2\">"+shippingDate+"</span></td></tr></table></div></div><div id=\"body-dvd\">";
			fs.appendFileSync(destFile, output);
			output='';
			for (i = 0; i<titles.length; i++){
				if(i===0){
					output += '<div class="body-dvd-sep"><img src="http://www.teamlegenddirect.com/mailer/images/featured-dvds.jpg" width="650" height="48" /></div>';
				} else if (i===3){
					output += '<div class="body-dvd-sep"><img src="http://www.teamlegenddirect.com/mailer/images/4-hour-dvds.jpg" width="650" height="48" /></div>';
				} else if (i===11){
					output += '<div class="body-dvd-sep"><img src="http://www.teamlegenddirect.com/mailer/images/16-hour-dvds.jpg" width="650" height="48" /></div>';
				}
				output += '<table class="dvd-data" border="0" cellpadding="0" cellspacing="0"><tr height="465"><td colspan="2" align="center">';
				output += '<img src="'+images[i]+'" width="597" height="410"></td></tr><tr height="33"><td align="left">';
				output += '<span class="dvd-data-title-label">DVD TITLE:</span><span class="dvd-data-title">'+titles[i]+'</span> </td><td align="right">';
				output += '<div class="dvd-data-zoom"><a href="'+images[i]+'" target="_blank"><img src="http://www.teamlegenddirect.com/mailer/images/zoom-boxcovers.gif" width="23" height="23" border="0" /></a><a href="'+images[i]+'" target="_blank">ENLARGE IMAGE</a>';
				output += '</div></td></tr><tr height="33"><td align="left"><span class="dvd-data-barcode-label">BAR CODE:</span><span class="dvd-data-barcode">'+skus[i]+'</span><td align="right">';
				output += '<div class="dvd-data-order">Order Quantity:<input type="text" maxlength="16" name="Item_' + (i+1).toString()+'" size="8" value=""></div></td></tr></table>';

			}

			output +='</div><div id="body-footer-sep"></div> <div id="footer"> If you need any special instruction or any other notes, please enter it here<br />For example, a P.O number, a phone number or email where we can contact you...<br />';
      		output +='<br /> <textarea rows="5" cols="68" name="notes"></textarea><br /><br />When ready to place the order, press the submit button:<br /><br /><input type="submit" name="submit" value=" Submit/Place my Order ">';
   			output +='</div> </form> <br /></div></body></html>';
   			fs.appendFileSync(destFile, output);


		}, 2000);