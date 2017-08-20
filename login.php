<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Backbone</title>

    <link rel="stylesheet" href="css/style.css?v=<?=time();?>">
</head>
<body>
    <div class="wrapper">
      <div class="body-inner">
        <div class="login">
        <img src="img/Backbone.svg" alt="Fish Backbone">
        <h1>login To Backbone</h1>
        <form action="#" class="loginform" method="post" autocomplete="off">
          <label for="email" >Email</label>
          <input type="text" name="email" id="email" placeholder="example@gmail.com">
          <label for="psw">Password</label>
          <input type="password" name="psw" id="psw" placeholder="•••••">
          <input type="checkbox" value="remember-password" name="remember-password">Remember Password
          <button type="button" >Login</button>
        </form>
        <div class="forget-password">
          <a href="#">Forget Your Password?</a>
        </div>
        <div class="register">
            <a href="#">Create New Account</a>
        </div>
        </div>
        <footer>
            <span>&copy; All rights reserved <?php echo date('Y')?></span>
        </footer>
        </div>
      </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
