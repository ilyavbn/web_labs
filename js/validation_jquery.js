function validate_jQuery(f)
{
var name_validate =  /^[a-z0-9_-]{3,15}$/ ;
var email_validate =  /[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/ ;
var pass_validate =  /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/ ;
var valid = true;
 var name = $("#username_input").val();
 if( name.match(name_validate) == null )
 {
     valid = false;
 }

 var email = $("#email_input").val();
 if( email.match(email_validate) == null  )
 {
     valid = false;
 }

 var password = $("#pass_input").val();
 if( password.match(pass_validate) == null )
 {
     valid = false;
 }
    if(valid){
        f.submit();
    }else {
        $("#help__button").click();
    }
    return valid;
}
