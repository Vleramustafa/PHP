<?php
    include('header.php');  // Include header
?>

<div class="signin-container">
    <h2>Sign In</h2>
    <form action="authenticate.php" method="POST">
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required placeholder="Enter your email">
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required placeholder="Enter your password">
        </div>

        <button type="submit" class="btn">Sign In</button>
    </form>
    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
</div>

<?php
    include('footer.php');  // Include footer
?>
