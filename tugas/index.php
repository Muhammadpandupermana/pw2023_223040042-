<?php 
$satu = "Topi" ;
$dua = "Bundar" ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1a</title>
</head>
<body>
    <h2><i>
        <?php
        echo "\"$satu saya $dua, $dua $satu saya.\"";
        ?>
    </i></h2>
</body>
</html>

<?php 
$aku =42  ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1b</title>
</head>
<body>
    <?php 
    echo "Aku adalah angka <b>$aku</b><br>";
    echo "Jika aku dikali 5, maka aku sekarang menjadi <b>" .($aku *=5) ."</b><br>";
    echo "Jika aku dibagi 2, maka aku sekarang menjadi <b>" .($aku /=2) ."</b><br>";
    echo "Jika aku ditambah 75, maka aku sekarang menjadi <b>" .($aku +=75) ."</b><br>";
    echo "Jika aku dikurang 20, maka aku sekarang menjadi <b>" .($aku -=20) ."</b><br>";
    
    
    
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>1c</title>
    <style>
        .box1 {
            display: flex;
             flex-wrap : wrap;
        }

        .box {
            height: 100px;
            width: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: salmon;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="box1">
        <div class="box">
        <p>1</p>
        </div>
    </div>
    <div class="box1">
        <div class="box">
        <p>2</p>
        </div>
        <div class="box">
        <p>2</p>
        </div>
    </div>
    <div class="box1">
        <div class="box">
        <p>3</p>
        </div>
        <div class="box">
        <p>3</p>
        </div>
        <div class="box">
            <p>3</p>
        </div>
    </div>
</body>
</html>