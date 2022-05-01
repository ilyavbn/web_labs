function validate()
{
var name_validate =  /^[a-z0-9_-]{3,15}$/ ;
var email_validate =  /[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/ ;
var pass_validate =  /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/ ;
 var name = document.getElementById( "username_input" );
 if( name.value.match(name_validate) == null )
 {
    console.log(name.value);
  error = " You Have To Write Your Name. ";
  return false;
 }

 var email = document.getElementById( "email_input" );
 if( email.value.match(email_validate) == null  )
 {
    console.log(email.value);
  error = " You Have To Write Valid Email Address. ";
    console.log(email.value);
  return false;
 }

 var password = document.getElementById( "pass_input" );
 if( password.value.match(pass_validate) == null )
 {
    console.log(password.value);
  error = " Password Must Be More Than Or Equal To 8 Digits. ";
     console.log("false");
  return false;
 }

 else
 {
  return true;
 }
}
