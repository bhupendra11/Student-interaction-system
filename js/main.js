
//name="myForm" onsubmit="return(validate());"
//<script src="main.js"></script>
function validateLogin()
{
   
     var x = document.forms["myForm"]["inputEmail"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	var x = document.forms["myForm"]["inputPassword"].value;
    if (x == null || x == "") {
        alert("Enter a password.");
        return false;
    }
   
  
}

function validateRegister()
{
    var x = document.forms["myForm"]["userName"].value;
    if (x == null || x == "") {
        alert("Full name must be filled out");
        return false;
    }
   
     var x = document.forms["myForm"]["inputEmail"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	var x = document.forms["myForm"]["inputPassword"].value;
    if (x == null || x == "") {
        alert("Enter a password.");
        return false;
    }
   
  
}




function validatePostingQuestion()
{
    
   
     var x = document.forms["myForm"]["que"].value;
		if (x == null || x == "") {
        alert("Enter Your Question!!");
        return false;
    }
	
   
  
}
function validatePostingAnswer()
{
    
   
     var x = document.forms["myForm"]["Answer"].value;
		if (x == null || x == "") {
        alert("Enter Your Answer!!");
        return false;
    }
	
   
  
}



