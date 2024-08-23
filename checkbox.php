<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="checkbox" name="pizza" value="Pizza">
    pizza<br>
    <input type="checkbox" name="burger" value="Burger">
    burger<br>
    <input type="checkbox" name="roll" value="Roll">
    roll<br>
    <input type="submit" name="submit">
    
    
    </form>

    
</body>
</html>
<?php
if(isset($_POST["submit"])){

    if(isset($_POST["pizza"])){
        echo "you select pizza <br>";
    }
    if(isset($_POST["burger"])){
        echo "you select burger <br>";
    }
    if(isset($_POST["roll"])){
        echo "you select roll <br>";
    }
else{
    echo "please select one food";
}    
   
}

?>
