var max=-1 ;
var counter=1;

function fillTable(){
	var input = document.getElementById("userInput").value;
   
	var table =document.getElementById("table");
	var row =table.insertRow();

	var cell1 =row.insertCell(0);
	var cell2 =row.insertCell(1);

	cell1.innerHTML=counter;
	cell2.innerHTML=input;
	counter ++;	
	maxValue();
    document.getElementById("userInput")="";
 

}

 function maxValue(){
	var input = document.getElementById("userInput").value;
 	if (input>max) {
       var here = document.getElementById("num");
       here.innerHTML=input;
 	}
 	max= input; 
 	return max;
 }
