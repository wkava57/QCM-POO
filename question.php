<?php

class question
{
    private string $question;
    private array $reponses = [];
    private string $explication;




    public function __construct(string $question)
    {
        $this->question = $question;
    }
    public function setReponse(string $reponse): void
    {
        $this->reponse = $reponse;
    }
    public function getReponses()
    {
        return $this->reponses;
    }

    public function getExplication(): string
    {
        return $this->explication;
    }
    public function setExplication(string $explication): void
    {
        $this->explication = $explication;
    }
    public function getQuestion(): string
    {
        return $this->question;
    }

    public function getReponse(int $num)
    {
        foreach ($this->reponses as $i => $reponse) {
            if ($i == $num) {
                return $reponse;
            }
        }

        // return $this->reponses[$num];
    }

    public function getNumBonneReponse(): int{
        // parcourir le tableau des réponses 
        foreach ($this->reponses as $i => $reponse) {
            // si la réponse est une bonne réponse alors
            if($reponse -> getStatus() == true){
                // je retourne l'index 
                return $i;
            }
        }
    }
}
