<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
        <style>
            body{
                background-color:#034f84;
            }
            .container{
                height:100%;
                width:100%;
            }
            .card{
                margin-right:auto;
                margin-left:auto;
            }
            .header-text{
                margin:100px 0 30px 0;
                color:white;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <div class="header-text">
                <h1 align="center">PT. Alam Semesta Jaya</h1>
            </div>

            <div class="card col-md-5">
                <div class="card-body">
                    <?php
                        if(isset($_SESSION["msg"]))
                        {
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                    ?>
                <form class="form" action="<?php echo $base_url."login_proses.php" ?>" method="post">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
                </div>
            </div>
        </div>
    </body>
</html>    
        