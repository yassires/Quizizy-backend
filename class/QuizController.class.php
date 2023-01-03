<?php

include_once('./class/QuizModel.class.php');

class QuizController extends QuizModel
{
  

   private $question;
   private $answer;

  
   public function __construct($question="default",$answer="default")
   {
       $this->question = $question;
       $this->answer = $answer;
     
   }
   public  function getInfoe()
   {
   return array($this->question,$this->answer);
   } 





 public function getsmt(){
    
    return $this->getAllQuestions();
 }
 
 
}

