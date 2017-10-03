function validate() {
	var user = document.getElementById('username').value;
	var pass = document.getElementById('password').value;

	if (!(validateEmail(user))) {
		alert("Incorrect username.  Must be in the form of an email address");
		return false;
	}
	if (pass == "") {
		alert("Password cannot be blank.");
		return false;
	}
	if (!(document.getElementById('radio_free').checked)) {
		if (!(document.getElementById('radio_5').checked)) {
			if (!(document.getElementById('radio_50').checked)) {
				alert("Must select a shipping option");
				return false;
			}
		}
	}
	return true;
}

function validateEmail(email) {
    return /[^\s@]+@[^\s@]+\.[^\s@]+/.test(email);
}

function clear(){
	document.getElementById('username').value = "";
	document.getElementById('password').value = "";
	document.getElementById('radio_5').unchecked;
	document.getElementById('radio_50').unchecked;
	document.getElementById('radio_free').unchecked;
}
