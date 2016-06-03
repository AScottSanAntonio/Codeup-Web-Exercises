var names = ['Alex', 'Alan', 'Verona', 'Katie'];

		console.log("There are " + names.length + " names in the names array");

		console.log("Here we go...:");

		
		for (var i = 0; i < names.length; i++) {
			console.log("Here's your name: " + i + " is " + names[i]);
		}

		console.log("Here we go.. AGAIN!");

		names.forEach(function (element, index, array) {
			console.log("Heres your name: " + index + " is " + element);
		});