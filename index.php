<?php
    $string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
    $dico = explode("\n", $string);

    //Combien de mots contient ce dictionnaire ?
    echo 'Il y a ', count($dico), ' mot dans ce dico.','</br>','</br>';

    //Combien de mots font exactement 15 caractères ?
    $mots15 = array();
    foreach ($dico as $mot) {
        if (strlen($mot) == 15) {
        array_push($mots15, $mot);
        }
    }
    echo 'Il y a ',count($mots15), ' mots qui font exactement 15 caractères','</br>','</br>';  

    //Combien de mots contiennent la lettre « w » ?
    $mot_w = array();

    foreach ($dico as $mot) {
        if (strpos($mot, "w") !== false) {
            array_push($mot_w, $mot);
        }
    }
    echo 'Il y a ',count($mot_w), ' mots qui contiennent la lettre « w ».','</br>','</br>';

    //Combien de mots finissent par la lettre « q » ?
    $mots_q = array();
    foreach ($dico as $mot) {
        if (substr($mot, -1) == "q") {
            array_push($mots_q, $mot);
        }
    }
    echo 'Il y a ',count($mots_q), ' mots qui finissent par la lettre « q ».','</br>','</br>';

?>