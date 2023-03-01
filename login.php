<?php  
    $notAuth = false;
    if($_GET) {
        $notAuth = $_GET['notAuth'] == '1' ? true : false;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('./component/style.php');?>
</head>
<body>

    <?php 
    session_start() ;
    if(isset($_SESSION['user'])){
        header('location: dashboard.php');
    }
    ?>

    <div class="login-page">
        <div class="login-form">
            <div class="form-heading">
                <span class="label">Login</span>
            </div>
            <span class="alert <?php echo $notAuth ? 'shown' : '';?>">
                <?php echo 'Please check your email and password'?> 
            </span>
            <form   method="post" 
                    action="./controller/login_controller.php" enctype="multipart/form-data"
                    class="main-form">
                <div>
                    <label class="form-controls <?php echo $notAuth ? 'warning' : '';?> ">
                        <span class="fc-label">Email *</span>
                        <input class="fc-input" type="email" name="email" placeholder="user@domain.com" id="" autocomplete="off"  />
                    </label>
                </div>
                <div>
                    <label class="form-controls <?php echo $notAuth ? 'warning' : '';?> ">
                        <span class="fc-label">Password *</span>
                        <input class="fc-input" type="password" name="password" placeholder="password" id=""/>
                    </label>
                </div>
                <div>
                    <button class="btn btn-block btn-primary" type="submit">Login Now</button>
                </div>
                <div class="form-links">
                    <a href="add-new.php">Register Now</a>
                </div>
            </form>
        </div>
    </div>
    <?php 
    session_abort();
    ?>

</body>
</html>