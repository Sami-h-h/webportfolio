

<?php require("login.class.php") ?>
<?php 
	if(isset($_POST['submit'])){
		$user = new LoginUser($_POST['username'], $_POST['password']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sami's tavern</title>
    <link rel="stylesheet" href="/assets/css/style1.css">
</head>
<body>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- 
    <div class="Header">
        <h1>WELCOME</h1>
    </div> -->

    <div class="wrapper" >
        <div class="form-box login">
            <h2>Login</h2>
            <form ction="#" method="post" enctype="multipart/form-data" autocomplete="off" >
                <div class="input-box">

                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="text" name="username"  >
                <label>Username</label>
            </div>
            <div class="input-box">

                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="text" name="password">
                    <label>Password</label>
                    </div>
                    <div class="remember-forget">
                        <label> <input type="checkbox"> Remember me</label>
                        <a href="#"> Forgot Password?</a>
                    </div>

                    <button type="submit" class="btn" name="submit">Login</button>
                    <div class="login-register">
                        <p>Don't have an account?<a href="index.php" class="register-link">Register</a></p>
                    </div>


            </form>


        </div>

       


    </div>

    <script src="/assets/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>