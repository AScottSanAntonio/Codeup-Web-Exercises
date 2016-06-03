	var myNameIs = 'Alex'; 
			
			function sayHello(name) {
				console.log("Hello, " + name + "!");
			}

			
			sayHello(myNameIs);

			
			var random = Math.floor((Math.random()*100)+1);

			console.log("Random number is: " + random.toString());
			
			
			function isOdd(numberToTest) {
				(numberToTest % 2 === 1) ? console.log("Number was odd") : console.log("Number was even")
			}