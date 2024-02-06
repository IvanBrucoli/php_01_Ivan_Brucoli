<?php


//* Accettare una stringa in input
//* Minimo 8 caratteri
//* Deve contenere almeno un numero
//* Deve contenere almeno una lettera maiuscola
//* Deve contenere almeno un carattere speciale





function lng($psw)
{
    if (strlen($psw) >= 8) {
        return true;
    } else {
        echo "la password non è abbastanza lunga \n";
        return false;
    }
}




function Num($psw)
{
    for ($i = 0; $i < strlen($psw); $i++) {
        if (is_numeric($psw[$i])) {
            return true;
            break;
        }
    }
    echo "Manca un carattere numerico \n";
    return false;
}


function Upper($psw)
{
    for ($i = 0; $i < strlen($psw); $i++) {
        if (ctype_upper($psw[$i])) {
            return true;
            break;
        }
    }
    echo "Manca un carattere maiuscolo \n";
    return false;
}


function Special($psw)
{

    $special_char = ["!", "@", "%", "^", "&", "*", "?"];

    for ($i = 0; $i < strlen($psw); $i++) {
        if (in_array($psw[$i], $special_char)) {
            return true;
            break;
        }
    }
    echo "Manca un carattere speciale \n";
    return false;
}



function FinalCheck($_password)
{
    $checklng = lng($_password);
    $checkNum = Num($_password);
    $checkUpper = Upper($_password);
    $checkSpecial = Special($_password);
    $counter = 0;

        if ($checklng== false){
            return false;}
        elseif ($checkNum == false){
            return false;}
        elseif ($checkUpper == false){
            return false;}
        elseif ($checkSpecial == false){
            return false;}

        else {
            echo ("Password valida");
        return true;}
    }

    $counter = 0;

    do{$_password = readline("Inserisci una password");
        $counter++;
        if($counter==3){
            echo "hai finito i tentativi \n";
        }
    }while(FinalCheck($_password)==false && $counter<3);


//! es media

    $_numbers = [25,16,48,52,37,24,80,18,20];

$index=0;
$arr=0;

foreach($_numbers as $_number){
        if ($_number %2 ==0){
                $index++;
                $arr+=$_number;
            }
        }
        
        echo 'la media è' . $arr / $index;