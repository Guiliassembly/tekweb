<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test form</title>
</head>
<body>
    <?php
        if(isset($_POST['guess'])) 
        {
            echo "hi";
            //$variabel = 6000;
            // if($_POST['guess'] < $variabel)
            // {   
            //     echo "nomernya tralu kecil";
            // }elseif($_POST['guess'] > $variabel)
            // {
            //     echo "nomernya tralu besar";
            // }elseif($_POST['guess'] == $variabel)
            // {
            //     echo "Tebakan benar";
            // }
            
        }
    ?>
    <p>Guessing game...</p>
    <form method="post">
        <p><label>Input Guess</label>
        <input type="text" name="guess" id="guess"/></p>
        <input type="submit"/>
    </form>

    


</body>
</html>