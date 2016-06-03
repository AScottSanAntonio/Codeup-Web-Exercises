"use strict";

	var message2 = "";

	do {
		message2 = prompt("what is your name?");

		} while (message2 == "" || message2 == null);

		alert("Thank you, " + message2);

	var message3 = ";"

	do { 
		message3 = confirm("Do you enjoy Pizza?  You cannot leave alive unless you bow to our bread and cheese based overlords, do you submit?");

	} while (message3 == "no"){
		if (message3) {
			alert("Good...Good...");
			console.log(message3);
		} else {
			alert("CRIMINAL SCUM, PAY WITH YOUR BLOOD.")
		}
	}









// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.