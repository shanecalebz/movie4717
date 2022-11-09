function validateEmail(){
    var email = document.getElementById("email").value;
    email.trim();
    if(email.length > 0){ //make sure it is not empty
        var regexp = /^[\w.-]+@[A-Za-z]+(\.[A-Za-z]{2,3}|\.[A-Za-z]+\.[A-Za-z]{2,3}|\.[A-Za-z]+\.[A-Za-z]+\.[A-Za-z]{2,3})$/;
        if(regexp.test(email)){
            return true;
        }
        else{
            alert("Email entered in wrong format.");
            return false;
        }
    }
    alert("Please fill in your email.");
    return false;
}



