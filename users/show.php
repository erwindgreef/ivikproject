<html>
    <head>
        <meta charset="UTF-8">
        <?php
        include_once ('../css/bootstrap.php');
        include('../functions.php');
        ?>
        <title></title>
    </head>
    <body>
        <div class="container">
            <?php include '../templates/header.php'; ?>
            <div class="col-md-8">
                <?php
                    /**
                     * Show one messages
                     */
                    session_start();

                    echo "<h3>" . $_SESSION['users'][$_GET['id']]["name"] . "</h3>";
                    echo "<p>" . $_SESSION['users'][$_GET['id']]["aboutMe"] . "</p>";
                    echo "</br>";

                ?>
                <nav>
                    <ul class="pager">
                        <?php
                            pager("users");
                        ?>
                    </ul>
                    <a href="index.php"><button style="margin-top: 0px;" type="button" class="btn btn-primary">Back to all users</button></a>
                </nav>

            </div>
        </div>
    </body>
</html>
