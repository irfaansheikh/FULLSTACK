function validate(){
	var name=document.getElementById("fname").value;
	var pattern=/^[A-Za-z]{5,100}$/
	
if(name=="" || name.search(pattern)==-1)
	{
		document.getElementById("error").innerHTML="<font color='red'>Required field is empty or contains any integers </font>";
		/* document.getElementById("error").style.color="red"; */
		
	} 
	else
		{
		document.getElementById("error").innerHTML="<font color='green'>success </font>";
		/* document.getElementById("error").style.color="red"; */
		
	} 
}