function ValidateName() { 
    let regName = /^[a-zA-Z]+ [a-zA-Z]+$/;   //Name Contains Only Chacters and Spaces between first and Last name .
    let name = document.getElementById("full_name").value;
        if (!regName.test(name)) {
            document.getElementById("nameerror").innerHTML = "Please Enter a Valid Name ";
            document.getElementById('full_name').style.borderColor = "red"; 
            return false ;
        } else {
            document.getElementById("nameerror").innerHTML = "";
            document.getElementById('full_name').style.borderColor = ""; 
            return true ;
        }
    }

function ValidateEmail() { 
    let regEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
    let email = document.getElementById("email").value ;

    if(!regEmail.test(email)){
        document.getElementById("emailerror").innerHTML = "Please Enter a Valid Email "
        document.getElementById('email').style.borderColor = "red"; 
        return false ;
    }
    else {
        document.getElementById("emailerror").innerHTML = "";
        document.getElementById('email').style.borderColor = ""; 
        return true ;
    }
}
function ValidateDate() {
    let RegDate =  /\b\d{4}-\d{2}-\d{2}\b/ ;
    let Date = document.getElementById("birthdate").value ;
    if(!RegDate.test(Date)){
        document.getElementById("birtherror").innerHTML = "Birth Date Should be in format  YYYY-MM-DD "
        document.getElementById('birthdate').style.borderColor = "red"; 
        return false ;
    }
    else {
        document.getElementById("birtherror").innerHTML = "";
        document.getElementById('birthdate').style.borderColor = ""; 
        return true ;
    }

}
//Validate Password 
function ValidatePassword() {
    let password = document.getElementById("password").value;
    const MinLength = /.{10,}/m;
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    const hasNumber = /\d/; // Should have at least one number.

    let errors = [];

    if (!MinLength.test(password)) {
        errors.push("Length Should be At Least 8 Characters");
    }

    if (!specialChars.test(password)) {
        errors.push("Should contain at least one special character");
    }

    if (!hasNumber.test(password)) {
        errors.push("Should contain at least one number");
    }

    // Display errors if any
    const errorElement = document.getElementById("passworderror");
    if (errors.length > 0) {
        errorElement.innerHTML = errors.join("<br>");
        document.getElementById('password').style.borderColor = "red"; 
        return false ;
    } else {
        errorElement.innerHTML = "<br>"; 
        document.getElementById('password').style.borderColor = "";
        return  true ;
    }
}
//Confirm Password
function ConfirmPassword()
{
    let str = document.getElementById("confirm_password").value;
    let str2 = document.getElementById("password").value;
    if(str != str2)
    {
        document.getElementById("confirmerror").innerHTML="Passwords don't match";
        document.getElementById('confirm_password').style.borderColor = "red"; 
        return false ;
    }
    else
    {
        document.getElementById("confirmerror").innerHTML="";
        document.getElementById('confirm_password').style.borderColor = ""; 
        return true ;
    }
}

function validateForm(){
    if(ValidateName()&& ValidateEmail() && ValidatePassword() && ConfirmPassword() && ValidateDate()){
        return true ;
    }
    else{
        return false ;
    }
}

























