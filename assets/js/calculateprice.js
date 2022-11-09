var priceArray = [0.0,0.0,0.0];

function calculatePrice(id)
{
    switch(id){
        case 1:
            priceArray[0] = 12.50*getQuantity(id);
            document.getElementById("BlackTotal").innerHTML = priceArray[0].toFixed(2);
			//for displaying subtotal prices by putting the previous value into Subtotal: and .toFixed is to round the prices to 2 decimal places 
            break;
        case 2:
            priceArray[1] = 12.50*getQuantity(id);
		    document.getElementById("SmileTotal").innerHTML = priceArray[1].toFixed(2);
            break;
        case 3:
            priceArray[2] = 12.50*getQuantity(id);
		    document.getElementById("mrsharryTotal").innerHTML = priceArray[2].toFixed(2);
            break;
    }
    calculateTotal();//for displaying total price by putting the total values in the array into Total:
	
}
function calculateTotal()
{
    document.getElementById("totalPrice").innerHTML = (priceArray[0] + priceArray[1] + priceArray[2]).toFixed(2);
	
}
function getQuantity(id)// to get qty that customer ordered
{
    switch(id){
        case 1:
            return document.getElementById("BlackQuan").value;
			break;
        case 2:
            return document.getElementById("SmileQuan").value;
			break;
        case 3:
            return document.getElementById("mrsharryQuan").value;
			break;
    }
	
}

 function myFunc() {
     document.getElementById("reset").reset();
 }