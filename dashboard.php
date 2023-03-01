<?php 
    session_start() ;
    if(isset($_SESSION['user'])){
    } else {
        header('location: login.php');
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div>
        <h1>This is login page</h1>
        <a href="./logout.php">Logout</a>
        <h2>Description Video about Project: </h2> <button><a href="https://drive.google.com/drive/u/0/my-drive">Click Here</a></button>
    </div>
</body>
</html>

<?php 
session_abort();
?>