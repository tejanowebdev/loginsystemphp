<?php
    include_once 'header.php'
?>

    <div class="container text-center py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <h1 class="my-3 text-uppercase">Log In</h1>
                <form action="includes/login.inc.php" method="post">

                    <div class="form-group">
                        <input type="text" name="uid" class="form-control my-2" id="formGroupExampleInput" placeholder="Username/Email...">
                        <input type="password" name="pwd" class="form-control my-2" id="formGroupExampleInput2" placeholder="Password...">
                        <button type="submit" class="btn btn-primary my-2" name="submit">Log In</button>
                    </div>
                
                </form>
            </div>
        </div>

        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all required fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect login credentials!</p>";
                }
            }
        ?>

    </div>



<?php
    include_once 'footer.php'
?>