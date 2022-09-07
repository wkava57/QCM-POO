<?php

class Qcm {
    private array $questions;
    private array $appreciations;

    public function ajouterQuestion(Object $question){
        array_push($this->questions, $question);
    }
    public function getQuestions(){
        return $this->questions;
    }
    public function setAppreciation(array $appreciations): void{
        $this->appreciations = $appreciations;
    }

}