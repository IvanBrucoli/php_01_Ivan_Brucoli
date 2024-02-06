<?php

//! primo es

// $_numbers = [25,16,48,52,37,24,80,18,20];

// $index=0;
// $arr=0;

// foreach($_numbers as $_number){
    //     if ($_number %2 ==0){
        //         $index++;
        //         $arr+=$_number;
        //     }
        // }
        
        // echo 'la media è' . $arr / $index;
        
        
        //!es 2

        // $users = [ ['name' => 'Pippo','surname' => 'Pluto','gender' => 'M'],
        // ['name' => 'Sasso','surname' => 'Pluto','gender' => 'M'],
        // ['name' => 'Minnie','surname' => 'Pluto','gender' => 'F'],
        // ['name' => 'Paperino','surname' => 'Paperis','gender' => 'N'],
        // ['name' => 'Pippo','surname' => 'Pippa','gender' => 'F'],
        // ['name' => 'Topolino','surname' => 'Marino','gender' => 'M'],
        // ['name' => 'Valentino','surname' => 'Rossi','gender' => 'M'],];


        // foreach ($users as $user){
        //     $gender= $user['gender'];
        //     switch ($gender) {
        //         case $gender=="M":
        //            echo"Buongiorno Sig. " .$user['name']." ".$user['surname']. "\n";
        //             break;
        //             case $gender=="F":
        //                 echo"Buongiorno Sig.ra " .$user['name']." ".$user['surname']. "\n";
        //                  break;
        //         default:
        //         echo"Buongiorno " .$user['name']." ".$user['surname']. "\n";
        //             break;
        //     }
        // }


            //! es 3

        for($i = 1; $i < 101; $i++){
            if ($i %3==0 && $i %5==0){
                echo "HACKADEMY \n";
            } elseif ($i %3!=0 && $i %5==0){
                echo "JAVASCRIPT \n";
            } elseif ($i %3==0 && $i %5!=0){
                echo "PHP \n";
            } else {
                echo "$i \n";
            }
        }
