<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?PHP
    // THIS IS VARIABLE
    $num=5;
    //ITA ARRAY
    $NUMBERS = array(1,2,3,4,5,6,7,8,9,101,1025,2121,1321,213,221,321,3213414,646,4);
        echo$NUMBERS [5];
        $size =count($NUMBERS);
        echo"<p>Array numbers is size : $size</p>";
        for($count=0;$count < $size;$count++)
        {
            echo"<p>$NUMBERS[$count]</p>";
        }


    ?>
</body>
</html>