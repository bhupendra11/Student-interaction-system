
//name="myForm" onsubmit="return(validate());"
//<script src="main.js"></script>
function validate()
{
	var x = document.forms["myForm"]["collegeid"].value;
    if (x == null || x == "") {
        alert("Enter your college id!?");
        return false;
    }
 
    var x = document.forms["myForm"]["name"].value;
    if (x == null || x == "") {
        alert("Full name must be filled out");
        return false;
    }
   
     var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	var x = document.forms["myForm"]["password"].value;
    if (x == null || x == "") {
        alert("Enter a password.");
        return false;
    }
   
  
}
