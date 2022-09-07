<?php

class Qcm {
    private array $questions = [];
    private array $appreciations;

    public function ajouterQuestion(Object $question){
        array_push($this->questions, $question);
        // $this->questions[] = $question;
    }
    public function getQuestions(){
        return $this->questions;
    }
    public function setAppreciation(array $appreciations): void{
        $this->appreciations = $appreciations;
    }

    public function generer(){
        if(isset($_POST) && !empty($_POST)){

        }
        else{
            echo "<form method= 'post'>";
            foreach ($this->questions as $i => $question) {
            echo $question -> getQuestion() . "<br><br>";
            
                foreach ($question->getReponses() as $j => $reponse) {
                    echo "<input type = 'radio' name = '" . $i . "' value = '" . $j . "'><label for = '" . $j . "'>".$reponse->getReponse()."</label>";
                }
        }   
        echo "<input type = 'submit' value = 'Envoyer'></form>";
    }
    }

}

