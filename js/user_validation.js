// JavaScript Document
function validateForm() {
	var message = "";
    var firstName = document.forms["form1"]["firstName"].value;
   	if (firstName==null ||firstName == "") {
        message+="Name must be filled out \n";
   		
	}
	var lastName = document.forms["form1"]["lastName"].value;
   	if (lastName==null ||lastName == "") {
		message+="last Name must be filled out \n";
        
	}
	var weight = document.forms["form1"]["weight"].value;
   	if (weight==null ||weight == "") {
		message+="weight must be filled out \n";
	}
	var height = document.forms["form1"]["height"].value;
   	if (height==null ||height == "") {
		message+="height must be filled out \n";
	}
	var phoneNumber = document.forms["form1"]["phoneNumber"].value;
   	if (phoneNumber==null ||phoneNumber == "") {
		message+="phone Number must be filled out \n";
	}
	var email = document.forms["form1"]["email"].value;
   	if (email==null ||email == "") {
		message+="email must be filled out \n";
	}
	var password = document.forms["form1"]["password"].value;
   	if (password==null ||password == "") {
		message+="password must be filled out \n";
	}
	var age = document.forms["form1"]["age"].value;
   	if (age==null ||age == "") {
		message+="age must be filled out \n";
	}
	
	var radios = document.forms["form1"]["gender"].value;
	/*var formValid = false;

	var i = 0;
    while (!formValid && i < radios.length) {
        if (radios[i].checked) formValid = true;
        i++;        
    }

   if (!formValid){
   message+="gender must be filled out \n";
   }
*/   
	
	if(message!=''){
		alert(message);
		return false;
	}
}