function add(){
	var n1=document.getElementById("num1").value;
	var n2=document.getElementById("num2").value;
	var sum=parseInt(n1)+parseInt(n2);
	document.getElementById("sum").innerHTML=sum;
}
function sub(){
	var n1=document.getElementById("num1").value;
	var n2=document.getElementById("num2").value;
	var sub=parseInt(n1)-parseInt(n2);
	document.getElementById("sum").innerHTML=sub;
}