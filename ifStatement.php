<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifStatement</title>
</head>
<body>
    <?php
    echo"<h2>if statement</h2>";

    $grade =255;

    if($grade>=500){
                    echo "<h3 style='color: green'> You Are Master :  $grade</h3>";


    }
elseif($grade>=250){
        echo "<h3 style='color: lightgreen'> You Passed :  $grade</h3>";}
    else{
        echo"<h3 style='color: red'>you are failed</h3>";
    }

?>
</body>
</html>