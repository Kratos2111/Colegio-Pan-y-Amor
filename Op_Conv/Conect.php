<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host = 'localhost:3308';
        $user = 'brandon';
        $pass = '12345';
        $db = 'bd_aragon';
        try{
            $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo "Connected succesfully"; 
        }catch(PDOException $e){
            echo "Connection failed". $e->getMessage();
        }
        $conn = null;
    ?>  
</body>
</html>


