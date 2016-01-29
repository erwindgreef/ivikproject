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

                    echo "<h3>" . $_SESSION['messages'][$_GET['id']]["title"] . "</h3>";
                    echo "<p>" . $_SESSION['messages'][$_GET['id']]["content"] . "</p>";
                    echo "</br>";

                ?>
                <nav>
                    <ul class="pager">
                        <?php
                            pager("messages");
                        ?>
                    </ul>
                    <a href="index.php"><button style="margin-top: 0px;" type="button" class="btn btn-primary">Terug naar alle berichten</button></a>
                </nav>

            </div>
        </div>
    </body>
</html>
