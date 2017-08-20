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
        <h1>Register at Backbone</h1>
        <form action="#" class="registerform" method="post" autocomplete="off">
        <fieldset class="names">
          <fieldset>
            <label for="fname" >First name</label>
            <input type="text" name="fname" id="fname" placeholder="First name">
          </fieldset>
          <fieldset>
            <label for="lname" >Last name</label>
            <input type="text" name="lname" id="lname" placeholder="Last name">
          </fieldset>
        </fieldset>
          <label for="email" >Email</label>
          <input type="text" name="email" id="email" placeholder="example@gmail.com">
          <label for="psw">Password</label>
          <input type="password" name="psw" id="psw" placeholder="•••••">
          <input type="checkbox" value="terms-of-service" name="terms-of-service">I agree to the <a href="#">terms of service</a>
          <button type="button" >Register</button>
        </form>


        </div>
        <footer>
            <span>&copy; All rights reserved <?php echo date('Y')?></span>
        </footer>
        </div>
      </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
