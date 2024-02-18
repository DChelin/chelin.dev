<?php
//Defining the character length of the passwords and assisgning to the checkbox associated.
if(isset($_POST['gen'])){
    $result = '';
    if(isset($_POST['valueone'])){
        PassGenerator(6);
    } else if(isset($_POST['valuetwo'])){
        PassGenerator(10);
    } else if(isset($_POST['valuethree'])){
        PassGenerator(12);
    }else if(isset($_POST['valuefour'])){
        PassGenerator(16);
    }else if(isset($_POST['valuefive'])){
        PassGenerator(20);
    }else if(isset($_POST['valuesix'])){
        PassGenerator(30);
    }else if(isset($_POST['valueseven'])){
        PassGenerator(45);
    }else if(isset($_POST['valueeight'])){
        PassGenerator(60);
    }else if(isset($_POST['valuenine'])){
        PassGenerator(90);
    }else if(isset($_POST['valueeight'])){
        PassGenerator(100);
    }else if(isset($_POST['valuenine'])){
        PassGenerator(128);
    }else{
        PassGenerator(8);
    }
}
//Function to generate random password.
function PassGenerator($len){
    global $result;
    $ValidChar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@!&$-#~_';
    while (0<$len--) {
        $result.=$ValidChar[random_int(0, strlen($ValidChar)-1)];
    }
}

?>