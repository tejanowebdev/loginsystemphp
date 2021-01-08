<?php
    include_once 'header.php'
?>

    <div class="container text-center py-5">
        <div class="row">
            <div class="col-12">
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
                    }
                ?>


                <h1>Hello World!</h1>
                <p class="text">Here is an important paragraph that explains eveeryting...</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm bg-secondary p-5 m-2 text-light text-center">
            One of three columns
            </div>
            <div class="col-sm bg-secondary p-5 m-2 text-light text-center">
            One of three columns
            </div>
            <div class="col-sm bg-secondary p-5 m-2 text-light text-center">
            One of three columns
            </div>
        </div>
    </div>


<?php
    include_once 'footer.php'
?>