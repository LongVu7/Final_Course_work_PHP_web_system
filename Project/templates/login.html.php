<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" type="text/css" href="../assets/css-login/bootstrap.css"/>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
        
        <div class="col-md-3"></div>
        <div class="col-md-6 well">
                <h3 class="text-primary">Login Form</h3>
                <hr style="border-top:1px dotted #ccc;"/>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                        <?php if(isset($_SESSION['message'])): ?>
                                <div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
                        <script>
                                (function() {
                                        // removing the message 3 seconds after the page load
                                        setTimeout(function(){
                                                document.querySelector('.msg').remove();
                                        },3000)
                                })();
                        </script>
                        <?php
                                endif;
                                // clearing the message
                                unset($_SESSION['message']);
                        ?>
                        <form action="../login.php" method="POST">  
                                <h4 class="text-success">Login Form</h4>
                                <hr style="border-top:1px groovy #000;">
                                <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="name" />
                                </div>
                                <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" />
                                </div>
                                <br />
                                <div class="form-group">
                                        <button class="btn btn-primary form-control" type="submit" name="login">Login</button>
                                </div>

                                <div>Don't have an account? 
                                        <a href="register.html.php">Register here</a>
                                </div>
                        </form>
                </div>
        </div>
</body>
</html>