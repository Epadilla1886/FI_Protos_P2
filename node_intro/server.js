const data = require("./data.js");

//PART 1:
//create a webserver to serve the contents of your html folder
//refer to your slides for details on how to do this
//load express into the code
//use express to make a webserver
//use that webserver and the express function to make a static routing to your html folder
//make the server listen to a connection on port 3000

//PART 2:
//make an endpoint to handle the path 'dataserver' and use the
//callback function specified below:
	//make an array, outputData, to store your records
	//loop through the records one at a time, from beginning to end
		//make a new array to store your message details
		//store the current record's userName into the message array's name
		//store the current record's messageText into the message array's message field
		//store the current record's timeStamp into the message array's timestamp field
		//push the mesage array into the outputData array
	//end of loop

	//create an object to store your output values, call it output
		//store a key of success in the output array, with a value of true
		//store a key of messages in the output array, with a value of the outputData from above
	//end of array

	//convert the output object from above into JSON

	//respond to the client request by using the
	// response object and sending the data outputJson
	// refer to your slides for details!
	// https://docs.google.com/presentation/d/e/2PACX-1vTOaV0wMI00kRI8qP9_Ej6FI1kiOnmDU36jInpipsAk9ZOxeVekwpinvSwNixmLyVBOxE65izdalQT9/pub?start=false&loop=false&delayms=3000&slide=id.p
