function validateName(){
    var name = document.getElementById("name").value;
    name.trim(); //remove any whitespace from both ends of the string
    if(name.length > 0){ //make sure it is not empty
        var regexp = /^([A-Za-z]\s?)*$/;
        if(regexp.test(name)){
            return true;
        }
        else{
            alert("Name has incorrect format, please enter alphabetical symbols separated with a blankspace.");
            return false;
        }
    }
    alert("Please fill in your name.");
    return false;
}



function validateEmail(){
	var email = document.getElementById("email").value;
	email.trim();
	if(email.length > 0){ //make sure it is not empty
		var regexp = /^([\w\.-])+@([\w]+\.){1,3}([A-z]){2,3}$/;
		if(regexp.test(email)){
			return true;
		}
		else{
			alert("Email entered in wrong format.");
			return false;
		}
		alert("Please fill in your Email.");
		return false;
	}
}