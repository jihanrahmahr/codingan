<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style-login.css"  />
    <link rel="icon" type="image/png" href="assets/turbiditymeter.png" />
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Login Turbidinity</title>
  </head>
  <body>
    <div class="body-center" style="background-image:  url(assets/bckground.jpg);">

      <div class="center-item container col-md-5 card "  style="background-color: black;" >
        <div class="card-body">
          <h5 class="card-title mt-3 mb-4 text-warning" >Login Turbidinity</h5>
          <form action="proseslogin.php" method="post">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                name="username"
                placeholder="Masukkan username"
              />
            </div>
            <div class="mb-3">
              <input
                type="password"
                class="form-control"
                name="password"
                placeholder="Masukkan password"
              />
            </div>
 
            <form method="POST" action="proses_login.php">

            <button type="submit">Login</button>
</form>

          </form>
        </div>
      </div>
    </div>


    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
