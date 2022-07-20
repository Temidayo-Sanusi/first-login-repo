<?php require 'partials/head.php'; ?>
<h1>USER LOGIN</h1>
<h2>Welcome!</h2>
<div>
    <form method="POST" action="/names">
        <input name="name" type="text" placeholder="Username">
        <input name="password" type="password" placeholder="Password">

        <button type="Submit">Log In</button>
        <button><a href="signUp">Sign Up</a></button>
    </form>
</div>

<?php require 'partials/footer.php'; ?>