<?php require __DIR__ . '/partials/header.php';?>
<form method="POST">
    <h1>REGISTER PAGE</h1>
    <div style="margin-bottom: 1rem;">
        <label for="login">login</label><br>
        <input name='login' type="text" >
    </div>
    <div >
        <label for="password">password</label><br>
        <input name='password' type="password">
    </div>
    <input type="submit">
</form>
<div>
    <h2>Already have an account? <a href="login">Log In</a></h2>
</div>