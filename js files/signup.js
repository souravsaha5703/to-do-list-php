let nameError=document.getElementById('name-error');
let emailError=document.getElementById('email-error');
let userError=document.getElementById('username-error');
let passError=document.getElementById('pass-error');
let cpassError=document.getElementById('conpass-error');
let submitError=document.getElementById('submit-error');
let validpass=document.getElementById('validpass');

const min=3;
const max=25;
const isBetween = (length, min, max) => length < min || length > max ? false : true;

const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

function validateName(){
    var fullname=document.getElementById('fullname').value.trim();
    if(fullname==""){
        nameError.innerHTML="Name Cannot be empty";
        return false;
    }
    if(!fullname.match(/^[a-zA-Z]+ [a-zA-Z]+$/)){
        nameError.innerHTML="Please write full name";
        return false;
    }
    nameError.innerHTML='<i class="fa-solid fa-circle-check"></i>';
    return true;
}
function validateEmail(){
    let email=document.getElementById('email').value.trim();
    if(email==""){
        emailError.innerHTML="Email cannot be empty";
        return false;
    }
    if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        emailError.innerHTML='Email is invalid';
        return false;
    }
    emailError.innerHTML='<i class="fa-solid fa-circle-check"></i>';
    return true;
}
function validateUser(){
    let username=document.getElementById('username').value.trim();
    if(username==""){
        userError.innerHTML="Username cannot be empty"
    }
    if(!isBetween(username.length,min,max)){
        userError.innerHTML="Username must be between 3 and 25 characters";
        return false;
    }
    userError.innerHTML='<i class="fa-solid fa-circle-check"></i>';
    return true;
}
function validatePass(){
    let pass=document.getElementById('pass').value.trim();
    if(pass==""){
        passError.innerHTML="Password cannot be empty";
    }
    if(!isPasswordSecure(pass)){
        passError.innerHTML="Password must has at least 8 characters that include at least 1 lowercase character, 1 uppercase characters, 1 number, and 1 special character in (!@#$%^&*)";
        return false;
    }
    passError.style.display="none";
    validpass.style.display="block";
    return true;
}
function validateForm(){
    if(!validateName() || !validateEmail() || !validateUser() || !validatePass()){
        let pass=document.getElementById('pass').value.trim();
        let cpass=document.getElementById('cpass').value.trim();
        if(pass===cpass){
            cpassError.innerHTML="Password not match";
            return false;
        }
        submitError.innerHTML="Please fill all the fields";
        setTimeout(function(){submitError.style.display='none';},3000);
        return false;
    }
    return true;
}