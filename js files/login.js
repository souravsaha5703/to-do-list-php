let email=document.getElementById('email');
let username=document.getElementById('username');
let pass=document.getElementById('pass');
let submitError=document.getElementById('submit-error');

function validateForm(){
    if(email.value=="" || username.value=="" || pass.value==""){
        submitError.innerHTML="Please fill all the fields";
        setTimeout(function(){submitError.style.display="none"},3000);
        return false;
    }
    return true;
}