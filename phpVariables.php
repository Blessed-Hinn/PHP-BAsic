<?php

/**VARIABLES
 * Variable Variable
 * These are Variables that can be accessed through other Variable
 */

 $variableName = 'foo';
 $foo = 'bar';

 //Output is bar in both cases
 echo "<br>";
 echo $foo;
 echo "<br>";
 echo $$variableName ;//It access $variableName, then access $foo which is in $variableName, outputing bar
 echo "<br>"; 

 $name = 'benny';
 $benny = 'Hinn' ; 

 echo $name ; 
 echo "<br>";
 echo $$name ;//Access $name, then access $benny which is in $name
 echo "<br>";

 /**
  * Variables variable are important in mapping functions
  */

  function add($a, $b)
  {
        $result = $a + $b;
        return ($result);
  }

  $addNumbers = 'add' ;
  echo $addNumbers(4,4);
  echo "<br>";

  $array["foo"] = "bar" ;
  $array["baz"] = "quux" ;
  $array[42] = "hello" ;
  echo $array["foo"] ;
  echo $array["baz"] ;
  echo $array[42] ;

  $unset_int = 25;
  echo "<br>";
  var_dump($unset_int) ;
  echo "<br>";
  $unset_float = 25.25 ;
  var_dump ($unset_float);
  echo "<br>";

  /**
   * GLOBAL Variables can be accesed from any scope
   * Static variables can be acceed from any scope
   */

   //Accessing the variables from the global scope

   $amount_of_log_calls = 0;
  
  
   function log_message($message){

      //Accessing Global Variables
           // global $amount_of_log_calls;//Accessing the global variable
            $GLOBALS['amount_of_log_calls'] += 1; //Accessing the variable using $GLOBALS
            echo $GLOBALS['amount_of_log_calls'];
            echo "<br>";
            //$amount_of_log_calls += 1;//This change to the global variable is permanent

            echo $message;
   }
   
   echo $amount_of_log_calls;
   echo "<br>";
   log_message("First Log Message");
   echo "<br>";
   //echo $amount_of_log_calls;
   echo "<br>";
   log_message("Second Log Message");
   echo "<br>";
   //echo $amount_of_log_calls;

   /* Super Global Variables
      They Can be accesed from anywhere in the Scope without using "global" Keyword
      include:
      $_GLOBALS-Reference to all variables available in global scope
      $_SERVER - Server and execution environment information
      $_POST - HTTP POST variables
      $_GET - HTTP GET variables
      $_REQUEST - HTTP Request variables
      $_SESSION - Session variables
      $_COOKIE - HTTP Cookies
      $_ENV - Environment variables 
      $_FILES - HTTP File upload variables
   */

   /* GLOBAL */

   $myGlobal = "global" ;

   function test ()
   {
      $myLocal = "local" ;

      var_dump($myLocal);
      echo "<br>";
      var_dump($GLOBALS["myGlobal"]);
      echo "<br>";
   }

   test();
   var_dump($myGlobal);
   echo "<br>";
   var_dump($myLocal);//Will print NULL, it is not globally scoped
   echo "<br>";


   $myGlobal = "global" ;

   function test2 ()
   {
      $GLOBALS["myLocal"] = "local" ;//Making $myLocal a global variable
      $myLocal = $GLOBALS["myLocal"] ;

      var_dump($myLocal);
      echo "<br>";
      var_dump($GLOBALS["myGlobal"]);
      echo "<br>";
   }

   test2();
   var_dump($myGlobal);
   echo "<br>";
   var_dump($myLocal);
   echo "<br>";

  //Cookie

  setcookie ("myVar", "myVal", time() + 3600); //Setting a cookie, myVar is the name, myVal is the value, time() rep the expiry time.
  echo $_COOKIE["myVar"];
  echo "<br>";

  //Destroying the cookie
  setcookie ("myVar", "", time() -1); //Destroying the cookie, setting the time value to one in the past
  var_dump ($_COOKIE["myVar"]); // Returns Null
  echo "<br>";

  echo "<pre>";
  //print_r($_SERVER);
  echo "</pre>";
  echo "-----------------------------------------------------";
  echo "<br>";

   //Outputting Arrays and Objects

   $myObject = new stdClass();
   $myObject ->myValue = "Hello World";
   $myArray = ["hello","World"];
   $myString = "Hello world";
   $myInt = 42;

   // Using print_r we can view the data the array holds
   //echo $myObject;
   //echo $myArray;

   print_r($myObject);
   echo "<br>";
   print_r($myArray);
   echo "<br>";
   print_r($myArray);
   echo "<br>";
   print_r($myString);
   echo "<br>";
   print_r($myInt);
   echo "<br>";

   //header('Content-Type: text/plain; charset=utf-8');//Output as a plain text
   //var_export Outputs valid PHP Code
   var_export($myArray);
   echo "<br>";
   var_export($myString);
   echo "<br>";
   var_export($myInt);
   echo "<br>";

  
                                    






?>