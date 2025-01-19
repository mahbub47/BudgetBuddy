var emailError = document.getElementById('email1-error');
var passError = document.getElementById('pass1-error');
var registerError = document.getElementById('register-error');
var nameError = document.getElementById('name-error');
var conPassError = document.getElementById('con-pass-error');

function validateName(){
    var name = document.getElementById('username').value;

    if(name.length == 0){
        alert("please enter your name");
        return false;
    }

    if(!name.match(/^([A-Z]{1}[a-z]+ ?)*$/)){
        alert("Enter a valid name");
        return false;
    }
    return true;
}

function validateEmail(){
    var email = document.getElementById('email').value;

    if(email.length == 0){
        alert("Enter email");
        return false;
    }

    if(!email.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/)){
        alert("Enter a valid email")
        return false;
    }

    return true;
}

function validatePass() {
    var pass = document.getElementById('password').value;

    if(pass.length == 0){
        alert("Enter password");
        return false;
    }

    if(!pass.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/)){
        alert("Enter a valid password");
        return false;
    }
    return true;
}

function validateConPass() {
    var pass = document.getElementById('password').value;
    var conPass = document.getElementById('confirmPassword').value;

    if(!(pass === conPass)){
        alert("password did not match");
        return false;
    }
    return true;
}

function validateForm(){
    if(!validateEmail() || !validatePass() || !validateName() || !validateConPass()){
        alert("Something went wrong");
        return false;
    }else{
        return true;
    }
}