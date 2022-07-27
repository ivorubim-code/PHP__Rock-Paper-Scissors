<?php

// Main Game - Rock, Paper, Scissors

class php___Rock_Paper_Scissors{

  // Array with all allowed objects that the USER can choose
  private static $allowed_objects = ["rock","paper","scissors"];

  // Array with all match possibilities (USER_choice vs. CPU_choice)
  private static $decision_maker =
  [
    "rock;rock" => "It's a tie!",
    "paper;paper" => "It's a tie!",
    "scissors;scissors" => "It's a tie!",
    "scissors;rock" => "CPU is the Winner!",
    "rock;paper" => "CPU is the Winner!",
    "paper;scissors" => "CPU is the Winner!",
    "rock;scissors" => "USER is the Winner!",
    "paper;rock" => "USER is the Winner!",
    "scissors;paper" => "USER is the Winner!"
  ];

  public static function go_Match($get_user_object){

    $USER_choice = trim(strtolower($get_user_object)); // Trim and LowerCase Chars Conversion
    $CPU_choice = rand(0,2); // Randomize CPU Object

    // Checks if the object chosen by the USER exists
    if (in_array($USER_choice, self::$allowed_objects)){

      //Concatenation of decisions (USER_choice;CPU_choice)
      $CONCAT_choices = "{$USER_choice};" . self::$allowed_objects[$CPU_choice];

      // Checks if the combination [USER_choice + CPU_choice] exists
      if (isset(self::$decision_maker[$CONCAT_choices])){ 
        echo "USER: {$USER_choice} vs " . self::$allowed_objects[$CPU_choice] . " :CPU >>> Match Decision: " . self::$decision_maker[$CONCAT_choices];
      }
      else{
        echo "Unknown Combination. Algorithm Fails :'(";
      }

    }
    else{
      echo "Unknown Object. Please, use only: Rock, Paper, Scissors ;";
    }

  }

}


//print examples:

$obj = new php___Rock_Paper_Scissors();
$obj->go_Match("rock"); //print example 1 -> USER: rock vs scissors :CPU >>> Match Decision: USER is the Winner!
$obj->go_Match("water"); //print example 2 -> Unknown Object. Please, use only: Rock, Paper, Scissors ;
$obj->go_Match("sciSSors "); //print example 3 -> USER: scissors vs scissors :CPU >>> Match Decision: It's a tie!


/*

php.net documentation:

in_array -- https://www.php.net/manual/en/function.in-array
isset -- https://www.php.net/manual/en/function.isset

*/

?>