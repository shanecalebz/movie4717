var priceArray = [0.0]
		var abc = disabled;
function checkbox(){
	
	var checkboxes = document.querySelectorAll('input[type=checkbox]') ;
	var checkboxesChecked = [];
	
	for (var i=0;i<checkboxes.length;i++){
		if(checkboxes[i].checked){
		checkboxesChecked.push(checkboxes[i].value);
		}
	}
	
	document.getElementById("show").value = checkboxesChecked;
	
	document.getElementById("seatquan").innerHTML = checkboxesChecked.length;
	
	priceArray[0] = 12.5* checkboxesChecked.length;
	document.getElementById("movietotal").innerHTML = priceArray[0].toFixed(2);
	
	
	
}
function alertEmail(){
	alert("An email acknowledgement will be sent to you shortly");
}