


<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/app.min.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/style.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../otika-bootstrap-admin-template/assets/img/favicon.ico' />
</head>

<body>
<?php
require 'function.php';

if (isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];



	// cek username ada atau tidak dalam databse
	$result = mysqli_query($db, "SELECT * FROM pengguna WHERE username = '$username' AND password = '$password'");

	// cek ada berapa baris username yang dikembalikan dari perintah SELECT
	if (mysqli_num_rows($result) === 1) {
		echo "<script>
    alert ('Selamat datang Admin');
    document.location.href = 'hal_admin.php';
    </script>
    ";
	} else {
		echo "<script>
    alert ('Data mengalami kegagalan! Harap ulang kembali');
    document.location.href = 'home1.php';
    </script>
    ";

		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}

if (isset($error)) :

endif;
?>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="cek_login.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Username</label>
                    <input id="email" type="text" class="form-control" name="username" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your username
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="email">Password</label>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
               
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" name="login">
                      Login
                    </button>
                  </div>
                </form>
              
              
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="registrasi.php">Create One</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="../otika-bootstrap-admin-template/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="../otika-bootstrap-admin-template/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../otika-bootstrap-admin-template/assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>