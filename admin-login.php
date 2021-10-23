<?php  include 'aa.php'; ?>


<!DOCTYPE html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> 
    <link href = "formstyle.css" rel = "stylesheet" type = "text/css"> 
    <title>Admin Login</title>  
</head>  
  <body>
  
<div class="container">  
<p class="login-text" style="font-size: 2rem; font-weight: 800;">Admin Login</p>  
            <form role="form" method="post" action="" class="login-email">  
                    
                    <div class="input-group"  >  
                        <input class="form-control" placeholder="Username" name="username" type="text" >  
                    </div>  
                    <div class="input-group">  
                        <input class="form-control" placeholder="Password" name="password" type="password" value="">  
                    </div>  
                    <div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
            </form>  
</body>  
</html>  
  
