function validate(){
	var name=document.getElementById("fname").value;
	var pattern=/^[A-Za-z]{5,100}$/
	
if(name=="" || name.search(pattern)==-1)
	{
		document.getElementById("error").innerHTML="<font color='red'>Enter Alphabet only </font>";
		/* document.getElementById("error").style.color="red"; */
		
	} 
	else
		{
		document.getElementById("error").innerHTML="<font color='green'>success </font>";
		/* document.getElementById("error").style.color="red"; */
		
	} 
}

	var name=document.getElementById("password").value;
	var pattern=/^[A-Za-z]{5,100}-[0-9]{3,5}-[#$%^&*]$/
	
if(pass=="" || pass.search(pattern)==-1)
	{
		document.getElementById("error").innerHTML="<font color='red'>invalid </font>";
		/* document.getElementById("error").style.color="red"; */
		
	} 
	else
		{
		document.getElementById("error").innerHTML="<font color='green'>success </font>";
		/* document.getElementById("error").style.color="red"; */
		
	} 
}



