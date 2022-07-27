<?php

class php___Rock_Paper_Scissors{

  private static $allowed_objects = ["rock","paper","scissors"];

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

    $USER_choice = trim(strtolower($get_user_object));
    $CPU_choice = rand(0,2);

    if (in_array($USER_choice, self::$allowed_objects)){

      $CONCAT_choices = "{$USER_choice};" . self::$allowed_objects[$CPU_choice];

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

?>