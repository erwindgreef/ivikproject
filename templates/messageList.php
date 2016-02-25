<html>
    <head>
        <meta charset="UTF-8">        
        <title>Messages</title>
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
                <h1>Messages</h1>
            </header>
            <div class="col-md-10">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Options</th>
                        </tr>
                    <thead>
                    <tbody>
                        <?php listTable("messages"); ?>
                    </tbody>
                </table>
                <a href="create.php"><button  style="margin-top: 30px;" type="button" class="btn btn-primary">Make a message</button></a>

            </div>
        </div>
    </body>
</html>