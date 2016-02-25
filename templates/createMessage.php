<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
    </head>
    <body>
        <div class="container">
            <header>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>">Messageboard</a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="/messages/index.php">Messages<span class="sr-only">(current)</span></a></li>
                                <li><a href="/users/index.php">Users</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="/users/index.php">New User</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
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

