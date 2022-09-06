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

        $this->reponses[$num];
    }
}
