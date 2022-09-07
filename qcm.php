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
            echo "<form>";
            foreach ($this->questions as $i => $question) {
            echo $question -> getQuestion();
            
                foreach ($question->getReponses() as $j => $reponse) {
                    echo $reponse->getReponse();
                }
        }
    }
    }

}

