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
            <form class="" action="" method="post" onsubmit="generatePassword(event)">
                    <input class="form-control" type="text" id="passwordOutput" name="result" value=""><br>
                    <input type="checkbox" name="valueone" value="6"> 6 Characters<br>
                    <input type="checkbox" name="valuetwo" value="10"> 10 Characters<br>
                    <input type="checkbox" name="valuethree" value="12"> 12 Characters<br>
                    <input type="checkbox" name="valuefour" value="16"> 16 Characters<br>
                    <input type="checkbox" name="valuefive" value="20"> 20 Characters<br>
                    <input type="checkbox" name="valuesix" value="30"> 30 Characters<br>
                    <input type="checkbox" name="valueseven" value="45"> 45 Characters<br>
                    <input type="checkbox" name="valueeight" value="60"> 60 Characters<br>
                    <input type="checkbox" name="valuenine" value="90"> 90 Characters<br>
                    <input type="checkbox" name="valueten" value="100"> 100 Characters<br>
                    <input type="checkbox" name="valueeleven" value="128"> 128 Characters<br>
                    <input type="submit" class="btn btn-primary" name="gen" value="Generate">
                </form>
            </td>
        </tr>
    </table>

    <script type="text/javascript">
        function generatePassword(event) {
            event.preventDefault();
            var result = '';
            var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            var len = checkboxes.length > 0 ? parseInt(checkboxes[0].value) : 8; // Default length is 8
            var validChar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789@!&$-#~_';
            for (var i = 0; i < len; i++) {
                result += validChar.charAt(Math.floor(Math.random() * validChar.length));
            }
            document.getElementById("passwordOutput").value = result;
        }

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
