<?php

$data = file_get_contents('data.json');
$data = json_decode($data, true);

//make an array, outputData, to store your records
//loop through the records one at a time, from beginning to end
	//make a new array to store your message details
	//store the current record's userName into the message array's name
	//store the current record's messageText into the message array's message field
	//store the current record's timeStamp into the message array's timestamp field
	//push the mesage array into the outputData array
//end of loop

//create an object/array to store your output values, call it output
	//store a key of success in the output array, with a value of true
	//store a key of messages in the output array, with a value of the outputData from above
//end of array

//convert the output array from above into JSON

//print/echo the outputJson

?>