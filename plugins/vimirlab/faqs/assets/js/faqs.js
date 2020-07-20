$(document).ready(function(e){
	
	$('.faq-que-ans .que-ans .faq-ans').hide();
	$('.faq-que-ans .que-ans a').on('click', function(e){
		var currentId = $(this).attr('href');
		
		$(".faq-que-ans .que-ans .faq-ans").slideUp();
		
		if($(this).hasClass('active')) {
			$('.faq-que-ans .faq-ans' + currentId).slideUp();
		}else {
			$('.faq-que-ans .faq-ans' + currentId).slideDown();
		}
		$(this).toggleClass('active');
		
		e.preventDefault();
	});
	
	$('.send-button').on('click', function(e){
		
		var user_email = document.getElementById("user_email").value;
		if (user_email =='') {
			document.getElementById("error_email").innerHTML = "Email Id is Required";
			return false;
		}
		
		document.getElementById("error_email").style.display = "none";
		sessionStorage.setItem("user_email", user_email);
	});
});

function openCat(evt, catId) {
	var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	
	tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	
	document.getElementById(catId).style.display = "inline-block";
	evt.currentTarget.className += " active";
}