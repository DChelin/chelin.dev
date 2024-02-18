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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', Sans-Serif;
            background-color: #101010;
            color: #fffefe;
            padding: 25px;
        }

        h1{
            color: #fc0000;
        }

        .btn{
            color: #fffefe;
            background-color: #fc0000;
            border-color: #fc0000;
            font-family: 'Montserrat', Sans-Serif;
            margin-top: 15px;
        }

        .btn:hover{
            color: #fffefe;
            background-color: #660000;
            border-color: #660000;
            font-family: 'Montserrat', Sans-Serif;
        }

    </style>

</head>

<body>
    <table align="left">
        <tr>
            <td><h1>Password Generator</h1></td><br>
        </tr>
        <tr>
            <td>Please note that a random 8 character password will be generated if no option is selected.</td>
        </tr>
        <tr>
            <td>
                <form class = "" action="" method="post">
                    <input class="form-control" type="text" id="passwordOutput" name="result" value="<?php echo(@$result); ?>">
                    <button class="btn btn-primary" onclick="copyToClipboard()">Copy to Clipboard</button><br><br>
                    <input type="checkbox" name="valueone" value="6" onclick="uncheckOthers(this)"> 6 Characters<br>
                    <input type="checkbox" name="valuetwo" value="10" onclick="uncheckOthers(this)"> 10 Characters<br>
                    <input type="checkbox" name="valuethree" value="12" onclick="uncheckOthers(this)"> 12 Characters<br>
                    <input type="checkbox" name="valuefour" value="16" onclick="uncheckOthers(this)"> 16 Characters<br>
                    <input type="checkbox" name="valuefive" value="20" onclick="uncheckOthers(this)"> 20 Characters<br>
                    <input type="checkbox" name="valuesix" value="30" onclick="uncheckOthers(this)"> 30 Characters<br>
                    <input type="checkbox" name="valueseven" value="45" onclick="uncheckOthers(this)"> 45 Characters<br>
                    <input type="checkbox" name="valueeight" value="60" onclick="uncheckOthers(this)"> 60 Characters<br>
                    <input type="checkbox" name="valuenine" value="90" onclick="uncheckOthers(this)"> 90 Characters<br>
                    <input type="checkbox" name="valuenine" value="100" onclick="uncheckOthers(this)"> 100 Characters<br>
                    <input type="checkbox" name="valuenine" value="128" onclick="uncheckOthers(this)"> 128 Characters<br>
                    <input type="submit" class="btn btn-primary" name="gen" value="Generate">
                </form>
            </td>
        </tr>
    </table>

    <script type="text/javascript">
        function copyToClipboard() {
            var copyText = document.getElementById("passwordOutput");
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */
            document.execCommand("copy");
            alert("Successfully copied to clipboard");
        }

        function uncheckOthers(checkbox) {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(function (cb) {
                if (cb !== checkbox) {
                    cb.checked = false;
                }
            });
        }
    </script>

</body>
</html>
