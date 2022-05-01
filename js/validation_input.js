function validate(f)
{
var name_validate =  /^[a-z0-9_-]{3,15}$/ ;
var email_validate =  /[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/ ;
var pass_validate =  /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/ ;
var valid = true;
 var name = document.getElementById( "username_input" );
 if( name.value.match(name_validate) == null )
 {
     valid = false;
 }

 var email = document.getElementById( "email_input" );
 if( email.value.match(email_validate) == null  )
 {
     valid = false;
 }

 var password = document.getElementById( "pass_input" );
 if( password.value.match(pass_validate) == null )
 {
     valid = false;
 }
    if(valid){
        f.submit();
    }else {
        var helpButton = document.getElementById('help__button');
        helpButton.click();
    }
    return valid;
}
