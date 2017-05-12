function isTrashmail(email, returnFunction) {
	var domain = email.replace(/.*@/, "");
	
	var xhr = new XMLHttpRequest();
	xhr.open("GET", "https://www.block-trashmail.space/api/"+domain);
	xhr.onreadystatechange = function() {
		if (this.readyState === 4) {
			if (this.status === 200) {
				var ret = false;
				if (this.responseText == "1") {
					ret = true;
				}
				returnFunction(ret);
			} else {
				returnFunction(false);
			}
		}
	};
	xhr.send();
}