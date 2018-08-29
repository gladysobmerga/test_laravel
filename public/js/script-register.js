$(document).ready(function () {
    $('form').validate();

    //validate email
    $.validator.addMethod('nofreemail', function (value) { 
		value = value.trim(); //trim email and set.
		$('#email').val(value);

	    return /^[\w-.]+@?((globe)\.com\.ph|(mynt)\.xyz|(yondu)\.com)$/i.test(value); 
    }, 'Email is not allowed.');

    //validate number
    $.validator.addMethod('checkmobile', function (value) { 
		value = value.trim(); //trim email and set.
		$('#mobile').val(value);

	    return /^\s*(09)\d{9}\s*$/.test(value); 
    }, 'Invalid Format.');
    
    $('input').blur(function(){
		$('.invalid-feedback').css("display","none");
    });
    
    $('input').keyup(function(){
		$(this).removeClass("is-invalid");
    });

});

function btnDisabledLogin() {
    var emailLogin =  encodeHTML($('#email').val());
    var passwordLogin =  encodeHTML($('#password').val());
    var checkEmailLogin = validateEmail(emailLogin);
    
    // Email and password is not empty
    // No password length checker
    // Email address must be in correct format
    var checkLogin = emailLogin != '' && passwordLogin !='' && passwordLogin.length >=6 && checkEmailLogin == true;
    btnDisabled(checkLogin);
}

//REGISTER
function btnDisabledReg(){
    var nameReg =  encodeHTML($('#name').val());
    var mobileReg =  encodeHTML($('#mobile').val());
    var emailReg = encodeHTML($('#email').val());
    var passReg = encodeHTML($('#password').val());
    var passConReg = encodeHTML($('#password-confirm').val());
    var checkEmailReg = validateEmail(emailReg);
    var checkMobileReg = validateMobile(mobileReg);

    // console.log(validateMobile(mobileReg));
    // name, mobile, email and password is not empty
    // mobile number must be in correct format
    // Password length must be more than 6 characters
    // Email address must be in correct format
    var checkReg = nameReg != '' && mobileReg !='' && emailReg != '' && passReg != '' && passConReg != '' && passReg.length >=6 && passConReg.length >=6 && checkEmailReg == true && checkMobileReg == true;
    btnDisabled(checkReg);
}

//FORGOT PASSWORD
function btnDisabledForgot(){
    var emailForgot = encodeHTML($('#email').val());
    var checkEmailFor = validateEmail(emailForgot);

    //Email is not empty and is in correct format
    var checkForgot = emailForgot !='' && checkEmailFor == true;
    btnDisabled(checkForgot);
}

//RESET PASSWORD
function btnDisabledReset(){
    var emailReset = encodeHTML($('#email').val());
    var passReset = encodeHTML($('#password').val());
    var passConReset = encodeHTML($('#password-confirm').val());
    var checkEmailReset = validateEmail(emailReset);

    var checkReset =  emailReset != '' && passReset != '' && passConReset != '' && passReset.length >=6 && passConReset.length >=6 && checkEmailReset == true;
    btnDisabled(checkReset);
}

//BTN SUBMIT
function btnDisabled(a){
    if (a == true){
        $('.btn.btn-main.btn-primary').removeClass('disabled');
    }
    else{
        $('.btn.btn-main.btn-primary').addClass('disabled');
    }
}

//ESCAPE .VAL()
function encodeHTML(s) {
    return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/"/g, '&quot;');
}

//Check Email Format
//globe.com.ph || mynt.xyz || yondu.com
function validateEmail(email){
    var re = /^[\w-.]+@?((globe)\.com\.ph|(mynt)\.xyz|(yondu)\.com)$/i;
    return re.test(String(email).toLowerCase());
}

function validateMobile(mobile){
    var mo = /^\s*(09)\d{9}\s*$/;
    return mo.test(mobile);
}
