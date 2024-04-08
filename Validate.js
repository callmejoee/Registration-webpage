function ValidateName() { 
    let regName = /^[a-zA-Z]+ [a-zA-Z]+$/;   //Name Contains Only Chacters and Spaces between first and Last name .
    let name = document.getElementById("fname_id").value;
    let icon = document.getElementById('nameIcon');
        if (!regName.test(name)) {
            document.getElementById("nameerror").innerHTML = "Please Enter a Valid Name <i class='fa-solid fa-circle-xmark'></i>";
            document.getElementById('fname_id').style.borderColor = "red"; 
            icon.style.display = 'none'; // Hide the icon
            return false ;
        } else {
            document.getElementById("nameerror").innerHTML = "";
            document.getElementById('fname_id').style.borderColor = "green"; 
            icon.style.display = 'inline'; // Show the icon
            return true ;
        }
    }

function ValidateUserName() {
    let userRegex = /^[a-zA-Z0-9_]+$/ ;
    let username = document.getElementById('uname_id').value ;
    let icon = document.getElementById('nameIcon2');
    if (!userRegex.test(username)) {
        document.getElementById("usererror").innerHTML = "Please Enter a Valid User Name <i class='fa-solid fa-circle-xmark'></i>";
        document.getElementById('uname_id').style.borderColor = "red"; 
        icon.style.display = 'none'; // Hide the icon
        return false ;
    } else {
        document.getElementById("usererror").innerHTML = "";
        document.getElementById('uname_id').style.borderColor = "green"; 
        icon.style.display = 'inline'; // Show the icon
        return true ;
    }
}

function ValidateEmail() { 
    let regEmail =  /^\S+@\S+\.\S+$/; 
    let email = document.getElementById("email_id").value ;
    let icon = document.getElementById('nameIcon3');

    if(!regEmail.test(email)){
        document.getElementById("emailerror").innerHTML = "Please Enter a Valid Email <i class='fa-solid fa-circle-xmark'></i> "
        document.getElementById('email_id').style.borderColor = "red"; 
        icon.style.display = 'none'; // Hide the icon
        return false ;
    }
    else {
        document.getElementById("emailerror").innerHTML = "";
        document.getElementById('email_id').style.borderColor = "green"; 
        icon.style.display = 'inline'; // Show the icon
        return true ;
    }
}
//Validate Password 
function ValidatePassword() {
    let password = document.getElementById("password_id").value;
    const MinLength = /.{10,}/m;
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    const hasNumber = /\d/; // Should have at least one number.
    let icon = document.getElementById('nameIcon4');

    let errors = [];

    if (!MinLength.test(password)) {
        errors.push("Length Should be At Least 8 Characters <i class='fa-solid fa-circle-xmark'></i>");
    }

    if (!specialChars.test(password)) {
        errors.push("Should contain at least one special character <i class='fa-solid fa-circle-xmark'></i>");
    }

    if (!hasNumber.test(password)) {
        errors.push("Should contain at least one number <i class='fa-solid fa-circle-xmark'></i>");
    }

    // Display errors if any
    const errorElement = document.getElementById("passworderror");
    if (errors.length > 0) {
        errorElement.innerHTML = errors.join("<br>");
        document.getElementById('password_id').style.borderColor = "red"; 
        icon.style.display = 'none';
        return false ;
    } else {
        errorElement.innerHTML = "<br>"; 
        document.getElementById('password_id').style.borderColor = "green";
        icon.style.display = 'inline';
        return  true ;
    }
}
//Confirm Password
function ConfirmPassword()
{
    let str = document.getElementById("password2_id").value;
    let str2 = document.getElementById("password_id").value;
    let icon = document.getElementById('nameIcon5');

    if(str != str2)
    {
        document.getElementById("confirmerror").innerHTML="Passwords don't match <i class='fa-solid fa-circle-xmark'></i>";
        document.getElementById('password2_id').style.borderColor = "red"; 
        icon.style.display = 'none';
        return false ;
    }
    else
    {
        document.getElementById("confirmerror").innerHTML="";
        document.getElementById('password2_id').style.borderColor = "green"; 
        icon.style.display = 'inline';
        return true ;
    }
}

function ValidatePhone() {
    let regularnumber = /^\d{11}$/;
   let phone = document.getElementById('phone').value ;
   let icon =  document.getElementById('nameIcon6');
   if (!regularnumber.test(phone)) {
    document.getElementById("PhoneError").innerHTML = "Phone number Should Be 11  <i class='fa-solid fa-circle-xmark'></i>";
    document.getElementById('phone').style.borderColor = "red"; 
    icon.style.display = 'none'; // Hide the icon
    return false ;
} else {
    document.getElementById("PhoneError").innerHTML = "";
    document.getElementById('phone').style.borderColor = "green"; 
    icon.style.display = 'inline'; // Show the icon
    return true ;
}
}

function ValidateAddress() {
    const addressRegex = /^[a-zA-Z0-9\s,'-]*$/; //Allowed: letters, digits, spaces, commas, apostrophes, and hyphens only
    let Address = document.getElementById('address_id').value ;
    let icon =  document.getElementById('nameIcon7');
    if (!regularaddress.test(Address)) {
     document.getElementById("AddressError").innerHTML = "Please Enter Valid Address  <i class='fa-solid fa-circle-xmark'></i>";
     document.getElementById('address_id').style.borderColor = "red"; 
     icon.style.display = 'none'; // Hide the icon
     return false ;
 } else {
     document.getElementById("AddressError").innerHTML = "";
     document.getElementById('address_id').style.borderColor = "green"; 
     icon.style.display = 'inline'; // Show the icon
     return true ;
 }


}

function validateForm(){
    if(ValidateName()&& ValidateEmail() && ValidatePassword() && ConfirmPassword() && ValidateUserName() && ValidatePhone() &&ValidateAddress()){
        return true ;
    }
    else{
        return false ;
    }
}

























