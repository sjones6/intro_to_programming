<?php


// A single line comment


/*

Start like that ^

A multi-line
comment.
None of this
is 
processed by the server.

End like this > */


/*************************
* A Few Basics
**************************/

//Print something out
echo("Hey! I'm going to be printed on the screen.");



//You can stop PHP processing like this:

?>

<h1>This is actually HTML. Right in the middle of my PHP file.</h1>


<?php

//But start PHP again like this

//You can also echo without the parentheses
echo "Now this is PHP again!";


//End every statement should end with a semi-colon (;)


//Something else you should know:

var_dump('This is going to not only print out, but tell you about what it\'s printing');