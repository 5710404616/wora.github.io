
	// function setCookie(cName,cValue) {
	//    		var d = new Date();
	//    		d.setTime(d.getTime() + (1*24*60*60*1000)); // 1 days expires
	//   		var expires = "expires=" + d.toGMTString();
	//     	document.cookie = cName + "-" + escape(cValue) + ";" + expires + ";path=/";
	// }
	var today = new Date();
  	var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

  	function setCookie(name, value)	{
    	document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  	}

	function storeValues(form) {

	    setCookie("Firstname", form.fname.value);
	    setCookie("Lastname", form.lname.value);

	    setCookie("House number", form.houseNum.value);
	    setCookie("Street", form.street.value);
	    setCookie("City", form.city.value);
	    setCookie("Province", form.province.value);
	    setCookie("Zipcode", form.zipcode.value);

	    setCookie("phone number", form.phoneNum.value);
	    setCookie("cell Phone number", form.cellPhoneNum.value);
	    setCookie("Birthday", form.bday.value);
	    setCookie("Citizenship number", form.cNum.value);

	    setCookie("zodiac Sign", form.zodiacSign.value);
	    setCookie("zodiac Year", form.zodiacYear.value);
	    setCookie("Birth Day of Week", form.bWeek.value);
	    return true;
	}

	


	

	function getCookie(name) {
  	  	var re = new RegExp(name + "=([^;]+)");
   		var value = re.exec(document.cookie);
    	return (value != null) ? unescape(value[1]) : null;
  	}