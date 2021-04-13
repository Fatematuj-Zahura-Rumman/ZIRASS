$(document).ready(function(){
	//hide log in and open signup
	$("#signup").click(function(){
		$("#first").slideUp("slow",function(){
			$("#second").slideDown("slow");
		});

	});

	$("#signin").click(function(){
		$("#second").slideUp("slow",function(){
			$("#first").slideDown("slow");
		});

	});
});

