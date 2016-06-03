var names = ['Alex', 'Alan', 'Verona', 'Katie'];

		console.log("There are " + names.length + " names in the names array");

		console.log("For loop:");

		
		for (var i = 0; i < names.length; i++) {
			console.log("The name being indexed: " + i + " is" + names[i]);
		}

		console.log("ForEach loop");

		names.forEach(function (element, index, array) {
			console.log("The name being indexed: " + index + " is " + names[i]);
		});