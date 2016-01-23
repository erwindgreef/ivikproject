<html>
    <head>
        <meta charset="UTF-8">
        <?php 
            include "/../css/bootstrap.php"; 
            include('/../functions.php');
        ?>
        <title></title>
    </head>
    <body>
        <div class="container">
            <header>
                 <?php 
                include '/../templates/header.php'; 
                ?>
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
                        <?php
                        session_start();
                        listTable("messages"); 
                        ?>
                    </tbody>
                </table>
                <a href="create.php"><button  style="margin-top: 30px;" type="button" class="btn btn-primary">Maak een bericht</button></a>
                
            </div>
        </div>
    </body>
</html>