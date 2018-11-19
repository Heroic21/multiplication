<?php
if(isset($_GET['checksValues'])){
    $checkboxes = explode(',', $_GET['checksValues']);
    $_retour = '';

    foreach($checkboxes as $checkbox){
        $retour .= <''>;

        for($i = 1; $i <= 10; $i++){
            $retour .= . $i . ' x ' . $checkbox .' = ' .($i * $checkbox) . <'li'>;
            }
            
            $retour .= '</ul>';
        }

        echo $retour;

} else if(isset($_GET['selectValue'])){
    $value = intval($_GET['selectedValue']);
    $retour = ''

    for($i =1; $i <= 10; $i++){
        $retour .= '<li>' .$i. ' x . $value. ' = ' . ($i * $value . '</li>';
    }

    $_retour .='</ul>';

    echo $_retour;

} else if(isset($_GET['selectedValueCalcul'])){
    $value = intval($_GET['selectedValueCalcul']);
    $random = rand(1;10);

$retour = '<p id=question-calcul" data value="' .$value. '" data-random.'">combien font : '.$random. ' x '.$value.' ?</p>';
echo $retour;

} else if(issets($_GET['reponseCalcul']) && issets($_GET['goodResponse'])){
    $responseCalcul = intvall($_GET['responseCalcul']);
    $goodResponse = intval($_GET['goodResponse']);
        

