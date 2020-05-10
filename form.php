<form action="<?php echo BASE_URL . "process.php"; ?>" method="POST">

    <?php

    // Checking the notif value
    $notif = isset($_GET['notif']) ? $_GET['notif'] : false;

    // Mention an user if username or password are incorrect
    if ($notif == true) {
        echo "<div class='notif'>Username or Password are incorrect</div>";
    }

    ?>

    <div id="signin_form">
        <div class="element_form">
            <h2>Let's Connect With Us</h2>
        </div>

        <div class="element_form">
            <img src="<?php echo BASE_URL . "img/account.png"; ?>" id="icon">
            <input type="text" name="username" placeholder="Username">
        </div>

        <div class="element_form">
            <img src="<?php echo BASE_URL . "img/password.png"; ?>" id="icon">
            <input type="password" name="password" placeholder="Password">
        </div>

        <div class="element_form">
            <input type="checkbox" value="keep">
            <label>Keep me signed in</label>
        </div>

        <div class="element_form">
            <input type="submit" value="Sign In">
        </div>
    </div>
</form>