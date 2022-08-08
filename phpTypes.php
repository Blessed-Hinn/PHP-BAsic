<?php
/* Type Comparison
    Loose Comparison (==) only checks the value of both sides.
    Strict coparison (===) Ensure both Value and type of both sides are the same.
*/

//Loose comparison
var_dump (1 == 1);
echo "<br>";
var_dump (1 == "1");
echo "<br>";
var_dump (1 == true);
echo "<br>";
var_dump (0 == false);
echo "<br>";

//Strict Comparison
var_dump (1 === 1);
echo "<br>";
var_dump (1 === "1");
echo "<br>";
var_dump (1 === true);
echo "<br>";
var_dump (0 === false);
echo "<br>";


/*
    Boolean- Has two values, True or False
*/

$foo = true;
$bar = false;

if ($foo)
{
    echo "Value is true";
    echo "<br>";
}

/*
    Strings 
    Single Quoted - Displays anyhting as completely as it is. Nothing is interpreted.
*/

$my_string = 'Nothing is parsed, except an escap\'d or apostrophe or backslash. $foon\$m';
var_dump ($my_string);
echo "<br>";

/*
    Double qouted - Variables and escape sequences are evaluated.

*/
    $myVariable = "Testing!";
    $myVariable2 = ["Testing?", "Failure", "Success" ];
    $myString = "Variables and escape characters are parsed";
    $myString .= "$myVariable\n\n$myVariable2[2]\n\n";
    var_dump ($myString);
    echo "<br>";

/*
    Heredoc - The start of the string is delimited by <<<identifier
                and the end by identifier ;
                No whitespace allowed before or after the identifier.
    
*/

$variable1 = "Including text blocks is easier";
$my_words = <<<EOF
Everything is parsed in the same fashion as a double-quoted string
but there are advantages. $variable1; database queries and HTML output
can benefit from this formattting.
Once we hit a line containing but the identifier, the string ends.
EOF;
var_dump ($my_words);
echo "<br>";

/*
    Nowdoc - Similar to heredoc and single quoted characters. 
            the identifier at the beginning is single quoted.
*/

$my_words2 = <<<'EOF'
A similar syntax to heredoc but, similar to single quoted strings, 
nothing is parsed (not even escaped apostrophes \' and backlashes \\.)
EOF;
var_dump ($my_words2);
echo "<br>";


/* OPERATORS
*/

//Null Operators(??).

/*
    Returns its first operand if its set and not NULL, 
    otherwise it returns its secod opernad.
    Equivalent to IF statement
*/

$firstName = "John";
$lastName = "Doe";

echo $firstName ?? "Unknown" ;
echo "<br>";
echo $lastName ?? "Unknown" ;
echo "<br>";
echo $thirdName ?? "Unknown" ;
echo "<br>";

//When using string concatenation, include parentheses()

echo ($firstName ?? "Unknown"). " ". ($lastName ?? "NIL ");
echo "<br>";

/*
    Spaceship Operator (<=>)
    Used to compare expression.
    Returns (-1) when first operand is less than second operand.
    Returns (0) when first operand is equal to second operand.
    Returns (1) when first opernad is greater than second operand.
*/

print (1 <=> 1); //Returns 0
echo "<br>";
print (1 <=> 2); //Returns -1
echo "<br>";
print (2 <=> 1); //Return 1
echo "<br>";

print ("b" <=> "a"); //Return 1
echo "<br>";
print ("a" <=> "a"); //Return 0
echo "<br>";
print ("a" <=> "b"); //Return -1
echo "<br>";

/* 
    Execution Operator ('')
    Used to run shell Commands
    The output of the command will be listed and stored in a variable
*/

//List Files
$output = shell_exec(ls);
//TODO shell_exec syntax.
echo "<pre>$output</pre>" ;
echo "<br>";


/*
    Ternary Option - Equivalent to an inline if statement
    Contains : operator, and two outcomes
    <operator> ? <true value> : <false value>;
*/

function ternary()
{
$action = "action";
$action = empty($_POST['action']) ? 'default' : $_POST['action'];
/*  $action would contain 'default' if expr1 evaluates to true, otherwise
    it would contain 'action'.
*/
}



?>