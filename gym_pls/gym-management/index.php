<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Your CSS file -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="background:url('images/4.jpg'); background-size: cover;">
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card " style="margin-top: 100px;opacity: 0.7; background-color: #cb77b5;" >
            <div class="card-body " style="font-weight:bold;">
              <center>
              <h5 style="">Admin Login</h5><br>
              <form class="form-group" method="POST" action="func.php">
                <div class="row">
                  <div class="col-md-4"><label>Username: </label></div>
                  <div class="col-md-8 mb-3"><input type="text" name="username" class="form-control" placeholder="enter username" required/></div><br><br>
                  <div class="col-md-4"><label>Password: </label></div>
                  <div class="col-md-8 mb-3"><input type="password" class="form-control" name="password" placeholder="enter password" required/></div><br><br><br>
                </div>
                <center>
    <!-- Login Button -->
    <input type="submit" id="inputbtn" name="login_submit" value="Login" class="btn btn-primary" style="background-color: #ff35cb; border: none;">

    <!-- Register Link -->
    <br><br>
    <a href="register.php">
        <button type="button" class="btn btn-light" style="background-color: transparent; border: 0; color:blue; cursor:pointer; " >Do not have an Account? Register Here!</button>
    </a>
</center>

              </form>
            
              
            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>