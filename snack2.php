<?php
if(isset($_GET['name']) && isset($_GET['age']) && isset($_GET['email'])){
       

       $name= $_GET['name'];
       $age= $_GET['age'];
       $mail= $_GET['email'];

       if(strlen($name)>3 && is_numeric($age) ){
            if (strpos($mail, '@') && strpos($mail, '.')){
            $response='Accesso riuscito';
            }
            else{
                $response='Accesso negato';
            }
        }
        else{
            $response='Accesso negato';
        }
}
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="snack2.php" method="GET">
        <input type="text" placeholder="inserisci il nome" name="name" id="name" required>
        <input type="email" id="email" name="email"  placeholder="inserisci la mail" required>
        <input type="number" placeholder="inserisci la tua eta" name="age" id="age" required>
        <button  type="submit">Invia</button>
    </form>
    <?php if(isset($response)){?>
        <h5> <?php echo $response; ?></h5>
        <?php } ?>  
    
</body>
</html>