<?php require __DIR__ . '/partials/header.php';?>
<form method="POST">
    <div style="margin-bottom: 1rem;">
        <label for="login">login</label><br>
        <input name='login' type="text" >
    </div>
    <div style="margin-bottom: 1 rem;">
        <label for="password">password</label><br>
        <input name='password' type="password">
    </div>
    <input type="submit">
</form>
<div>
    <h2>or <a href="register">register</a> new account</h2>
</div>