<html>
    <head>
        <meta charset="UTF-8">
        <?php 
            include '/../css/bootstrap.php'; 
            include '/../functions.php';
        ?>
        <title></title>
    </head>
    <body>
        <div class="container">
            <header>
                 <?php 
                include '/../templates/header.php'; 
                ?>
                <h1>Users</h1>
            </header>
            <div class="col-md-10">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>About me!</th>
                            <th>Options</th>
                        </tr>
                    <thead>
                    <tbody>
                        <?php
                        session_start();
                        listTable("users"); 
                        ?>
                    </tbody>
                </table>
                <a href="create.php"><button  style="margin-top: 30px;" type="button" class="btn btn-primary">Create a user</button></a>
                
            </div>
        </div>
    </body>
</html>