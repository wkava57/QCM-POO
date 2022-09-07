<?php 

include('./qcm.php');
include('./question.php');
include ('./reponse.php');



$qcm = new Qcm();
 
$question1 = new Question('Et paf, ça fait ...');
$question1->ajouterReponse(new Reponse('Des mielpops'));
$question1->ajouterReponse(new Reponse('Des chocapics', Reponse::BONNE_REPONSE));
$question1->ajouterReponse(new Reponse('Des actimels'));
$question1->setExplications('Et oui, la célèbre citation est « Et paf, ça fait des chocapics ! »');
$qcm->ajouterQuestion($question1);

$qcm->setAppreciation(array('0-10' => 'Pas top du tout ...',
                            '10-20' => 'Très bien ...'));
$qcm->generer();