<?php echo 'login'; require __DIR__ . '/partials/header.php';?>
<form action="register.php" method="POST">
    <div style="margin-bottom: 1rem;">
        <label for="login">login</label><br>
        <input name='login' type="text" >
    </div>
    <div >
        <label for="password">password</label><br>
        <input name='password' type="password">
    </div>
</form>