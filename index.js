function ValidateEmail(inputText)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(inputText.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.text1.focus();
return false;
}
}

function ValidatePass(inputText)
{
    
    if(inputText.value.length < 8){
        alert("Please enter a password of more than 8 characters.");
    }
    else{
        console.log(".")
    }
}

function Checkpass() {  
    var pw1 = document.getElementById("pass");  
    var pw2 = document.getElementById("cpass");  
    if(pw1.value != pw2.value)  
    {   
      alert("Re-enter the password");  
    } else {  
      // alert("You have successfully signed up!!");  
    }  
  }  

function  Welcome(num){
  // x =  false;
  if(num==1){
    // const x = document.getElementById("login");

    document.getElementById("login").innerHTML = "Paragraph changed!";

  }

}