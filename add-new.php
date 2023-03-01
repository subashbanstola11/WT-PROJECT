
<?php
    error_reporting(0);
    $accountAdded = false;
    $loginFailed = false;
    $accEmail = '';
    if($_GET){
        if($_GET['message']=="Loginfailed"){
            $loginFailed = true;
        }
        if($_GET['message']=="accountAdded"){
            $accountAdded = true;
        }
        if($_GET['accEmail']){
            $accEmail = $_GET['accEmail'];
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add New</title>
        <?php include('./component/style.php');?>
    </head>
    <body>

        <div class="login-page">
            <div class="login-form">
                <div class="form-heading">
                    <span class="label">Register New Account</span>
                </div>
                <span class="alert <?php echo $loginFailed || $accountAdded ? ' shown ' : ''; echo $accountAdded ? ' alert-success ' : '';?>">
                    <?php 
                        if($loginFailed){
                            echo "Sorry !! Passwords didn't match";
                        }
                        if($accountAdded){
                            echo "Your account had been succesfully added !! check your mail at ".$accEmail ;
                        }
                    ?> 
                </span>
                <form   method="get" 
                        action="./controller/add-new-controller.php" enctype="multipart/form-data"
                        class="main-form">
                    <div>
                        <label class="form-controls ">
                            <span class="fc-label">Email *</span>
                            <input class="fc-input" type="email" name="email" placeholder="user@domain.com" id="" autocomplete="off"/>
                        </label>
                    </div>
                    <div>
                        <label class="form-controls ">
                            <span class="fc-label">Password *</span>
                            <input class="fc-input" type="password" name="password" placeholder="password" id="" />
                        </label>
                    </div>
                    <div>
                        <label class="form-controls <?php echo $loginFailed ? 'warning' : '' ?>">
                            <span class="fc-label">Confirm Password *</span>
                            <input class="fc-input" type="password" name="confirm" placeholder="Confirm Password" id="" />
                        </label>
                    </div>
                    <div>
                        <button class="btn btn-block btn-primary" type="submit">Register Now</button>
                    </div>
                    <div class="form-links">
                        <a href="login.php">Login Now</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>