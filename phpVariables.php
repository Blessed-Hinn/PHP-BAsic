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







?>