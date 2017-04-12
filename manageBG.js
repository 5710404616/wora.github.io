


$('#btn').click(function(){
	// var dob = new Date('11/01/2000');
	if ($('select').val() != ""){
	var dob = new Date("01/01/2010");
	var today = new Date();
	var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
		if (age <= 13){
			$('body').css("background","url(http://www.clipartkid.com/images/753/our-team-provides-a-wide-array-of-services-concerning-art-outsourcing-cM9vQT-clipart.jpg) no-repeat center center fixed");
			$('body').css("background-color", "	#FF8C00")
		}
		else {
			var value = $("form input[type='radio']:checked").val();
				if (value === "female"){
					$('body').css("background","url(http://www.moremusicgroup.com/wp-content/uploads/2016/02/google-play-gradient-amazing-hd-cool-wallpapers-for-desktop-background.jpg) no-repeat center center fixed");
					$('body').css("background-color", "#FF7F50");
				}
				else if (value === "male"){
					$('body').css("background","url(https://vkozar.pp.ua/img/bg.jpg) no-repeat center center fixed");
					$('body').css("background-color", "#6495ED");
				}
			}
		// $('#name').fadeOut(1300).hide(1000);
		// $('#form1').slideUp(1500).delay(5000).slideDown(4000);
		// $('#n').html("Firstname: " + $('#firstname').val() + " Lastname: " + $('#lastname').val() + "<br><br>");
			// $(document).ready(function(){
    		// $('#btn').click(function(){
        // $("#motto").load("motto/"+ '$('select').val()' + ".txt");
   			// });
		// });
		// $('#motto').html("<p> คำขวัญประจำจังหวัด" + $('select').val() + "<br></p>").css("text-align", "center").fadeIn(1200).delay(4800).fadeOut(3800);


	}
	// alert("age " + age);
});