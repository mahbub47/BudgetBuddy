function validateEmail(){
    var email = document.getElementById('email').value;

    if(email.length == 0){
        alert("Enter email");
        return false;
    }

    if(!email.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/)){
        alert("Enter valid email");
        return false;
    }
    return true;
}

function validatePass(){
    var pass = document.getElementById('pass').value;

    if(pass.length == 0){
        alert("Enter password")
        return false;
    }

    if(!pass.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/)){
        alert("enter a valid password");
        return false;
    }
    return true;
}

function validateForm(){
    if(!validateEmail() || !validatePass()){
        return false
    }
    return true;
}