<?php require 'partials/head.php'; ?>

<div class="login-box">
    <h1>USER LOGIN</h1>
    <h2>Welcome!</h2>
    <form method="POST" action="/names">
        <label>Username</label>
        <input name="name" type="text" placeholder="Username">
        <label>Password</label>
        <input name="password" type="password" placeholder="Password" Required>

        <button type="Submit">Log In</button>
        <button><a href="signUp">Sign Up</a></button>
    </form>


</div>

<?php require 'partials/footer.php'; ?>