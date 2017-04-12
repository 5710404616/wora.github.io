function phonePattern(obj){
		var phonePattern = "+662-___-___";
		autoTab(obj, phonePattern);
		}
	function cellPhonePattern(obj){
		var cellPhonePattern = "+66__-___-____";
		autoTab(obj, cellPhonePattern); 
	}
	function citizPattern(obj){
		var citizPattern = "_-____-_____-_-__";
		autoTab(obj, citizPattern); 
	}
	function autoTab(obj, patternForm){   
			var pattern = new String(patternForm);   
	        var pattern_ex = new String("-");
	        var returnText = new String("");
	        var obj_l = obj.value.length;
	        var obj_l2 = obj_l-1;
	        for(i = 0; i < pattern.length; i++){           
	            if(obj_l2 == i && pattern.charAt(i + 1) == pattern_ex){
	                returnText += obj.value+pattern_ex;
	                obj.value = returnText;
	            }
	        }
	        if(obj_l >= pattern.length){
	            obj.value = obj.value.substr(0,pattern.length);           
	        }
	}




	var fName, lName;
	// var hNum, st, cy, pro, zip
	// var ph, cPh, bd, cN;
	// var zSign, zYear, bW;


	function setFName(obj){
		fName = obj.value;
	}
	function setLName(obj){
		lName = obj.value;
	}


	// function setHouseNum(obj){
	// 	hNum = obj.value;
	// }
	// function setStreet(obj){
	// 	st = obj.value;
	// }
	// function setCity(obj){
	// 	cy = obj.value;
	// }
	// function setProvince(obj){
	// 	pro = obj.value;
	// }
	// function setZip(obj){
	// 	zip = obj.value;
	// }


	// function setPhone(obj){
	// 	ph = obj.value;
	// }
	// function setCellPhone(obj){
	// 	cPh = obj.value;
	// }
	// function setBirthDay(obj){
	// 	bd = obj.value;
	// }
	// function setId(obj){
	// 	cN = obj.value;
	// }


	// function setSign(obj){
	// 	zSign = obj.value;
	// }
	// function setYear(obj){
	// 	zYear = obj.value;
	// }
	// function setBirthWeek(obj){
	// 	bW = obj.value;
	// }

	function notice(form) {
	    alert("cookie is: Firstname = " + fName + " Lastname = " + lName);
	    storeValues(form);   
	}

	function getInput(){
		var resutl =  	"Firstname         : " + fName + "/n"
					+	"Lastname          : " + lname + "/n"

					// +	"House number      : " + hNum  + "/n"
					// +  	"Street 	       : " + st    + "/n"
					// +	"City              : " + cy    + "/n"
					// +	"Province          : " + province + "/n"
					// +  	"Zipcode           : " + zip   + "/n"

					// +	"Phone number      : " + ph    + "/n"
					// +	"Cell Phone number : " + cPh   + "/n"
					// +  	"Birthday          : " + st    + "/n"
					// +	"Citizenship       : " + cN    + "/n"

					// +	"zodiac Sign       : " + zSign + "/n"
					// +	"zodiac Year       : " + zYear + "/n"
					// +  	"Birth Day of Week : " + bW    + "/n";
		return resutl;
	}
	document.getElementById("demo").innerHTM = getInput();