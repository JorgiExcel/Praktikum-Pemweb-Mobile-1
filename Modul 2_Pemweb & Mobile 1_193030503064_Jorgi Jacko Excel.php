<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $Username = $_REQUEST["Username"];
        $Password = $_REQUEST["Password"];
        $User = strlen($Username);
        $Pass = strlen($Password);
        $x = false;

        if($user>7){
            echo "Username lebih dari 7";
            $x = true;
        }
        if (!preg_match("/[A-Z]/", $Password) ) {
            echo "Password kapital\n";
            $x = true;
        }
        if (!preg_match("/[a-z]/", $Password)) {
            echo "Password kecil\n";
            $x = true;
        }
    
        if (!preg_match("/[^a-zA-Z\d]/", $Password)) {
            echo "Password special character\n";
            $x = true;
        }
    
        if (!preg_match("/[0-9]/", $Password)) {
            echo "Password digit\n";
            $x = true;
        }
        if($Pass>10){
            echo "Password lebih dari 10";
            $x = true;
        }
        if( $x == false ){
            echo "Berhasil";
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <ul>
            <li>
                <label for="Username">Username</label>
            <input type="text" name="Username" id="Username">
            </li>
            <li>
                <label for="Password">Password</label>
            <input type="text" name="Password" id="Password">
            </li>
            <li>
            <button type="Submit">Submit</button>
            </li>
        </ul>
       
        
        
    </form>
</body>
</html>