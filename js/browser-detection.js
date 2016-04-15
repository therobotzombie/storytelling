function setCookie(c_name,value,exdays){var exdate=new Date();exdate.setDate(exdate.getDate() + exdays);var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());document.cookie=c_name + "=" + c_value;}

function getCookie(c_name){var c_value = document.cookie;var c_start = c_value.indexOf(" " + c_name + "="); if (c_start == -1){c_start = c_value.indexOf(c_name + "=");}if (c_start == -1){c_value = null;} else{c_start = c_value.indexOf("=", c_start) + 1;var c_end = c_value.indexOf(";", c_start);if (c_end == -1) {c_end = c_value.length;}c_value = unescape(c_value.substring(c_start,c_end));}return c_value;}
	
function delCookie(name){document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';}

$(document).ready(function() {
	// checks if the cookie already exists
	if (!getCookie('firsttime')) {
		// checks if chrome is used
		var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
		if (!(is_chrome)) {
			$("#warning").addClass("display");
			$("button.close").on("click", function() {
				$("#warning").addClass("hidden");
			});
		}
		// sets the cookie to true so there is a value and the code shouldn't run again.
		setCookie('firsttime',true);
	}
});
