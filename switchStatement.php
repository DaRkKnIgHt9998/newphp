<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>switch statement</h1>

    <?php
        $grade='B';
        switch($grade)
        {    case "A":
            echo'<h2 style="color : green">YOU ARE SUPER STAR</h2>';
            break;
            case"B":
                echo'<h2 style="color : yellow">YOU DID WELL</h2>';
            break;
            case "C":
              echo'<h2 style="color : orange">YOU ARE PASSED BUT NEED MORE PRACTICE</h2>';
             break;

            default:
             echo'<h2 style="color : RED">YOU ARE FAILED....</h2>';
             break;
        }

?>
</body>
</html>