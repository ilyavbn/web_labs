function someFunc (){
    var userName = document.getElementById('username_input').value == "";
    var emailInput = document.getElementById('email_input').value == "";
    var passInput= document.getElementById('pass_input').value == "";

    if(userName && emailInput && passInput ){
        var helpButton = document.getElementById('help__button');
        helpButton.click();

    }
}

setTimeout(someFunc,5*1000);
