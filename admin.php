<?php
        if(isset($_POST["admin"]))
        {
            session_start();
            header("location:logout.php");
        }
        ?>
    

<html>
<head>
    
     <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
    <style type="text/css">
    .box-shadow{
    box-shadow:0 0.25rem 0.75rem rgba(0,0,0,.05);
    }
        .border-bottom{
            
            border-bottom: 1px solid #161616;
        }    
        .btn
        {
        margin-top: 20px;
        margin-bottom: 20px;
        width: 20%;    
        }
        
    </style>
    </head>
    <body>
    <form action="<?php $_PHP_SELF ?>" method="post">
        <div class="container-fluid">
        <?php
        include("admin_header.php");
        ?>
           
        <h1 class="text-center">Admin's Dashboard</h1><hr width=30%> 
            <div class="jumbotron text-center " style="background:white;">
        <a href="activate.php"><button type="button" class="btn btn-outline-primary btn">Activate Account</button></a><br>
        <a href="deactivate.php"><button type="button" class="btn btn-outline-warning btn">Deactivate Account</button></a><br>   <a href="view.php"><button type="button" class="btn btn-outline-info btn">View All Users</button></a><br>
                <a href="allrides.php"><button type="button" class="btn btn-outline-secondary btn">View All Rides</button></a><br> 
        <a href="rides1.php"><button type="button" class="btn btn-outline-primary btn">Add Rides</button></a><br>    
        <button type="submit" class="btn btn-danger btn" name="admin">logout</button><br>    
        
            </div>
            </div>
        </form>
    </body>
</html>