//Henry Keena
//Date: 10/14/2018
//Assignment: ISTE240 Exercise 6 – JavaScript Part 2



//Functions/Methods For JSEX06a

function jsStyle()
{
	document.getElementById("text").innerHTML = "\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0\xa0I Move";
}

//Functions/Methods For JSEX06b

function howmany()
{
	var form = document.forms["regForm"];
	var formLeng = form.getElementsByTagName("input").length;
	var textIn = form.getElementsByType("text").length;
	alert("Text Inputs: "+textIn+"\nForm Inputs: "+formLeng);
}

//Functions/Methods For JSEX06c

function colorchanger()
{
	var div = document.getElementById("colorBack");
	var color = document.getElementById("mySelect").value;
	
	div.style.backgroundColor = color;
}

//Functions/Methods For JSEX06d

function blackColorOn()
{
	var textColorChange = document.getElementById("rb");
	textColorChange.style.color = "black";
}


function redColorOn()
{
	var textColorChange = document.getElementById("rb");
	var color = document.getElementById("mySelect").value;
	textColorChange.style.color = color;
}

//Functions/Methods For JSEX06e

function divide()
{
	var op1 = parseInt(document.getElementById("firstoperand").value);
	var op2 = parseInt(document.getElementById("secondoperand").value);
    	var res = op1 / op2;
    	console.log(res);
	var result = document.createTextNode(res);
    	var restext = document.getElementById("result");

	restext.appendChild(result);
}

function multiply() 
{
	var op1 = parseInt(document.getElementById("firstoperand").value);
	var op2 = parseInt(document.getElementById("secondoperand").value);
	var res = op1 * op2;
    	console.log(res);
	var result = document.createTextNode(res);
    	var restext = document.getElementById("result");

	

	restext.appendChild(result);
	
}
