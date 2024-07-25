<?php include_once '../includes/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
          <h3 class="text-center">Register</h3>
        </div>
        <div class="card-body">
          <form id="registerForm" method="post" action="">
            <div class="form-group">
              <label for="newUsername">Username</label>
              <input type="text" id="newUsername" name="newUsername" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="newPassword">Password</label>
              <input type="password" id="newPassword" name="newPassword" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </form>
          <p class="text-center mt-3">Sudah punya akun? <a href="index.php">Login disini</a></p>
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
// Proses registrasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $newUsername = $_POST['newUsername'];
  $newPassword = $_POST['newPassword'];

  // Simpan data pengguna ke dalam file CSV (contoh sederhana)
  $file = fopen('../data/users.csv', 'a');
  fputcsv($file, array($newUsername, $newPassword));
  fclose($file);

  // Redirect ke halaman login setelah registrasi sukses
  header('Location: index.php');
  exit;
}
?>
