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
                <h1>Write a message</h1>
            </header>
            <aside></aside>

            <div class="col-md-8">
                <form method="POST" action="insert.php">
                    <div class="form-group">
                        <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" rows="1" placeholder="title" value="<?php formContentSession("title"); ?>">
                        <span class="help-block" style="color: red"><?php formError("title"); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" placeholder="content"><?php formContentSession("content"); ?></textarea>
                        <span class="help-block" style="color: red"><?php formError("content"); ?></span>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>
