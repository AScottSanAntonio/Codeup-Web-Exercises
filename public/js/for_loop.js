'use strict'

//exercise 1//

var message;

for (var a = 1; a <= 10; a++)
{
	message = '';

	for (var b = 1; b <= a; b++)
	{

		if (a == 10)
		{
	
			message = message + 0;
		}
		else
		{
	
			message = message + a
		}
	}
	console.log(message);
}

//exercise 2//

for (var n = Math.floor(Math.random() * 10) , p = 1; p <= 10; p = p + 1 ){
	var q = n * p;
	console.log(q + " = " + n + "X" + p) 
}

//exercise 3//

for (var i = 100; i >= 5; i = i - 5) {
			console.log(i);
		}



//random exercise//



