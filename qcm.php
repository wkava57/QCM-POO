<?php

class Qcm
{
    private array $questions = [];
    private array $appreciations = [];

    public function ajouterQuestion(Object $question)
    {
        array_push($this->questions, $question);
        // $this->questions[] = $question;
    }
    public function getQuestions()
    {
        return $this->questions;
    }
    public function setAppreciation(array $appreciation): Qcm
    {
        foreach ($appreciation as $key => $appr) {
            if (is_numeric($key))
                $this->appreciations[(int)$appr] = $appr;
            else {
                list($min, $max) = explode('-', $key);
                if ($min > $max)
                    list($min, $max) = array($max, $min);
                for ($i = (int)$min; $i <= $max; $i++)
                    $this->appreciations[$i] = $appr;
            }
        }
        return $this;
    }

    public function generer()
    {
        // si le _POST existe et s'il est rempli
        if (isset($_POST) && !empty($_POST)) {
            $nbBonneRep = 0;
            foreach ($this->questions as $i => $question) {
                echo '<br><br>';
                echo $question->getQuestion() . "<br><br>";

                if ($question->getNumBonneReponse() == $_POST[$i]) {
                    echo 'super';
                    // chaque fois qu'il y a une bonne réponse je rajoute un à note
                    $nbBonneRep++;
                    echo $question->getExplications();
                } else {
                    echo 'nul';
                    echo $question->getExplications();
                }
            }
            echo "<br>";
            // divise la note par le nombre de question multiplier par 20
            $note = round($nbBonneRep / count($this->questions) * 20);
            echo $note . "/20";
            if (isset($this->appreciations[$note])) {
                echo $this->appreciations[$note];
            }
        } else {
            echo "<form method= 'post'>";
            foreach ($this->questions as $i => $question) {
                echo '<br><br>';
                echo $question->getQuestion() . "<br><br>";


                foreach ($question->getReponses() as $j => $reponse) {
                    echo "<input type = 'radio' name = '" . $i . "' value = '" . $j . "'><label for = '" . $j . "'>" . $reponse->getReponse() . "</label>";
                }
            }
            echo "<input type = 'submit' value = 'Envoyer'></form>";
        }
    }
}
