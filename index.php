<?php include_once '../includes/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Login</h3>
        </div>
        <div class="card-body">
          <form id="loginForm" method="post" action="">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
          <p class="text-center mt-3">Belum punya akun? <a href="register.php" id="signupLink">Daftar disini</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Custom JavaScript -->
<script src="../assets/js/scripts.js"></script>

</body>
</html>

<?php
// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Proses validasi login (contoh sederhana, cocokkan dengan data yang ada di file CSV)
  $file = fopen('../data/users.csv', 'r');
  $loggedIn = false;

  while (($line = fgetcsv($file)) !== FALSE) {
    list($storedUsername, $storedPassword) = $line;
    if ($storedUsername == $username && $storedPassword == $password) {
      $loggedIn = true;
      break;
    }
  }

  fclose($file);

  if ($loggedIn) {
    // Redirect ke halaman dashboard atau halaman setelah login sukses
    header('Location: dashboard.php');
    exit;
  } else {
    echo '<script>alert("Username atau password salah.");</script>';
  }
}
?>
