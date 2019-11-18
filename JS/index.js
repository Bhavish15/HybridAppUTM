
$(document).on("ready", function(){
	//Creating DB
	databaseHandler.createDatabase();


});

function addUser(){

	//Get value
	var Fname = $("#fname").val();
	var Lname = $("#lname").val();
	var Uname = $("#uname").val();
	var Dob =  $("#dob").val();
	var Gender;

	if($("#rbMale").is(":checked"))
	{

		 Gender = "Male";

	}	

	else if ($("#rbFemale").is(":checked"))
	{

		Gender ="Female";

	}	

	else if ($("#rbOther").is(":checked")) {

		Gender ="Other";


	}

	var Password =  $("#password").val();

	//Insert in database
	AddUserHandler.addUser(Fname, Lname, Uname, Dob, Gender, Password);

	//Clear texbox and radio buttons
	$("#fname").val("");
	$("#lname").val("");
	$("#uname").val("");
	$("#dob").val("");
	$(".rdGender").val("");
	$("#password").val("");
}