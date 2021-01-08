<?php
    include_once 'header.php'
?>

    <div class="container text-center py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
            <h1 class="my-3 text-uppercase">Sign Up</h1>
            <form action="includes/signup.inc.php" method="post">

                <div class="form-group">
                    <input type="text" name="name" class="form-control my-2" id="name" placeholder="Full name...">
                    <input type="text" name="email" class="form-control my-2" id="email" placeholder="Email...">
                    <input type="text" name="uid" class="form-control my-2" id="uid" placeholder="Username name...">
                    <input type="password" name="pwd" class="form-control my-2" id="pwd" placeholder="Password...">
                    <input type="password" name="pwdrepeat" class="form-control my-2" id="pwdrepeat" placeholder="Repeat password...">
                    <button type="submit" class="btn btn-primary my-2" name="submit">Sign Up</button>
                </div>
               
            </form>
            </div>
        </div>

        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all required fields!</p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Choose proper username!</p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Incorrect email format!</p>";
                }
                else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Password don't match!</p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong!</p>";
                }
                else if ($_GET["error"] == "usernameEmailtaken") {
                    echo "<p>Username already taken</p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up!</p>";
                }
            }
        ?>
    </div>



<?php
    include_once 'footer.php'
?>