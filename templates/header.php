<?php 
    //include 'message/functions.php';
?>
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
            <a class="navbar-brand" href="/message/index.php">Messageboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="<?php navActive("index"); ?>"><a href="/message/index.php">Messages<?php navCurrent("index"); ?></a></li>
                <li class="<?php navActive("create"); ?>"><a href="/message/create.php">Create<?php navCurrent("create"); ?></a></li>
            </ul> 
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

