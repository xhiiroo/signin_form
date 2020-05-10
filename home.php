<div id="menu">
    <a href='<?php echo BASE_URL . "index.php?page=home"; ?>'>Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <a href='<?php echo BASE_URL . "signout.php"; ?>'>Sign Out</a>
</div>

<div id="home_content">
    <div class="element_home">
        <?php echo "<h1>Welcome, <span>$name!</span></h1>"; ?>
    </div>

    <div class="element_home">
        <h3>Relax & Take A Trip With Us</h3>
    </div>

    <div class="element_home">
        <input type="submit" value="Get Started">
    </div>
</div>