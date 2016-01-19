<?php
session_start();
include '/functions.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <?php include "../bootstrap.php"; ?>        
        <title></title>
    </head>
    <body>
        <div class="container">
            <header>
                <?php include '../templates/header.php'; ?>
                <h1>Update message</h1>
            </header>
            <aside></aside>
            
            <div class="col-md-8">
                <form method="POST" action="edit.php?message=<?php echo $_GET['message']; ?>">
                    <div class="form-group">
                        <div class="form-group">
                        <label for="content">Title</label>
                        <textarea name="title" class="form-control" rows="1" placeholder="title"><?php updateMessage("title"); ?></textarea>
                        <span class="help-block" style="color: red"><?php formError("title"); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" placeholder="content"><?php updateMessage("content"); ?></textarea>
                        <span class="help-block" style="color: red"><?php formError("content"); ?></span>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </body>
</html>