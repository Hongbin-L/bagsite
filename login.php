<?php

include('server.php');
include('includes/header.php');

?>
<div class="login-bg">
    <?php
    include('includes/errors.php');
    ?>
<span class="login-bgc">&nbsp;</span>
<div class="login">
<h2>Login!</h2>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

<div class="login-input_field">
<input type="text" placeholder="User Name" name="UserName" value="<?php 
if(isset($_POST['UserName'])) echo $_POST['UserName']; ?>">
    </div>
<div class="login-input_field">
<input type="password" placeholder="Password" name="Password">
    </div>


<button type="submit" class="btn" name="login_user">Login</button>

<button type="button" class="btn" onclick="window.location.href = '<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' ">RESET</button>
<br>
</form>
    </div>
    <div class="signup">
    <p>Not a member yet?  <a href="register.php">Sign Up!</a></p>
        </div>
    </div>
<?php

include('includes/footer.php');

?>
