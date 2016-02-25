<html>
    <head>
        <meta charset="UTF-8">
        <?php
        include '../css/bootstrap.php';
        include '../functions.php';
        session_start();
        ?>
        <title></title>
    </head>
    <body>
        <div class="container">
            <header>
                <?php include '../templates/header.php'; ?>
                <h1>New user</h1>
            </header>
            <aside></aside>

            <div class="col-md-8">
                <form method="POST" action="insert.php">
                    <div class="form-group">
                        <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?php formContentSession("name"); ?>">
                        <span class="help-block" style="color: red"><?php formError("name"); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="about me">About me</label>
                        <textarea name="aboutMe" class="form-control" placeholder="About me"><?php formContentSession("aboutMe"); ?></textarea>
                        <span class="help-block" style="color: red"><?php formError("aboutMe"); ?></span>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
