<?php
//CONSTANTS
/*
-They are created using the *const* keyword or *define* Function
Use Uppercase for constant names
*/

$constants = get_defined_constants();
const PI = 3.1415; //Float
define ("EARTH_IS_FLAT", false); //Boolean
const UNKNOWN = null ; //Null
define ("APP_ENV", "dev"); //String
const MAX_SESSION_TIME = 60 * 60;//Integer
define ("MIN_SESSION_TIME", 10*10);//Integer
const APP_LANGUAGES = ["de", "en"];//Array
define ("BETTER_APP_LANGUAGES", ["lu","de"]);//Array

echo PI;
echo "<br>";
echo EARTH_IS_FLAT;
echo UNKNOWN;
echo MAX_SESSION_TIME;
echo "<br>";
echo MIN_SESSION_TIME;
echo "<br>";
print_r (APP_LANGUAGES);
echo "<br>";
print_r (BETTER_APP_LANGUAGES);
echo "<br>";

//Define constant using another constant
const TAU = PI * 2;
define ("EARTH_IS_ROUND", !EARTH_IS_FLAT); 
define ("MORE_UNKNOWN", UNKNOWN);
define ("MAX_SESSION_TIME_IN_MINUTES", MAX_SESSION_TIME/60);
define ("APP_ENV_UPPERCASE", strtoupper(APP_ENV));//String manipulation
const APP_FUTURE_LANGUAGES = [-1 => "es"] + APP_LANGUAGES;//Array manipulation
define ("APP_BETTER_FUTURE_LANGUAGES", array_merge(["fr"], BETTER_APP_LANGUAGES));

echo TAU;
echo "<br>";
echo MAX_SESSION_TIME_IN_MINUTES;
echo "<br>";
echo APP_ENV_UPPERCASE;
echo "<br>";
print_r (APP_FUTURE_LANGUAGES);
echo "<br>";
print_r (APP_BETTER_FUTURE_LANGUAGES);
echo "<br>";

//Conditional Defines
defined ("PI") || define ("PI", 3.1415); //Define PI if its not defined
 
//Class Constants
//Constants can be defined inside classes using a const keyword
//Iseful to store types of items

/**
 * Checking If Constant is defined
 */

 define ("GOOD", false);

 if (defined ("GOOD"))
 {
    print "GOOD is defined";
    echo "<br>";

    if (GOOD) {
        print "GOOD is true";//Does not print anything, GOOD is false
    }
    
 }

 $newConstants = get_defined_constants(); //Gets all defined constants

 $myConstants = array_diff_assoc($newConstants, $constants);
 //var_export($myConstants); // Prints all CONSTANTS

 //MAGIC CONSTANTS

 //__FUNCTION__ Returns only the function
 //__METHOD__ Returns the class and function name

 class Trick
 {
    public function doit()
    {
        echo __FUNCTION__;
        echo "<br>";
    }

    public function doitagain ()
    {
        echo __METHOD__;
        echo "<br>";
    }
 }

 $obj = new Trick ();
 $obj -> doit() ; //Output Function name
 $obj -> doitagain() ; //Output class name and function name

 /*
     __CLASS__ and get_class() - Returns the name of the class where it was defined
     get_class($this) and get_called_class() - returns both the name of class and which was instantiated
  */

  class Definition_Class 
  {
   public function say (){
    echo '__CLASS__ value: ' . __CLASS__. "<br>";
    echo 'get_called_class() value: ' . get_called_class() . "<br>";
    echo 'get_class($this) value: ' . get_class($this) . "<br>";
    echo 'get_class() value: ' . get_class() . "<br>";
   } 
  }

  class Actual_Class extends Definition_Class {}

  $c = new Actual_Class();
  $c -> say ();



?>