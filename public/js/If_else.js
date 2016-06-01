"use strict";

//Coin flip//

var flipACoin = Math.floor(Math.random()* 2)
var heads = "Heads, buy a car!"
var tails = "Tails, buy a house!"
	if (flipACoin < 1){
	console.log(heads);
}	else {
		console.log(tails)
}

//HEB Variables//

var Cameron = 180
var CameronDiscount = "Cameron DOESN'T GET A DISCOUNT"
var CameronDiscount2 = "Cameron's bill before and after the discount is 180 dollars.  He received no discount."
var Ryan = 250
var RyanDiscount ="Ryan got a discount of " + (Ryan * .35) + " dollars, his original bill was 250 dollars."
var RyanDiscount2 ="Ryan's final bill was " + (Ryan - (Ryan * .35)) + " dollars. "
var Ryandiscount3 ="Ryan does not recieve a discount, his bill is 250 dollars."
var George = 320
var GeorgeDiscount ="George got a discount of " + (George * .35) + " dollars, his original bill was 320 dollars."
var GeorgeDiscount2 ="George's final bill was " + (George - (George * .35)) + " dollars."
var GeorgeDiscount3 ="George does not receive a discount, his bill is 320 dollars."

//Camerons bill//

	if (Cameron > 200){
		console.log(CameronDiscount);
}
	else {
		(Cameron < 200);
		console.log(CameronDiscount2);
}

//Ryan's bill// 

	if (Ryan > 200) {
		console.log(RyanDiscount);
		console.log(RyanDiscount2);
}
	else {
		(Ryan < 200);
		console.log(RyanDiscount3);
}
	
//George's bill//

	if (George > 200){
		console.log(GeorgeDiscount);
		console.log(GeorgeDiscount2);
}
	else {
		(George < 200);
		console.log(GeorgeDiscount3);
	}


	
	

	
