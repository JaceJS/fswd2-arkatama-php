<?php
  // memulai session
  SESSION_start();

  // menghubungkan ke database
  require_once 'koneksi.php';

  function get_users($conn, $email,$password){
    // melakukan query untuk mendapatkan email dan password
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // mengembalikan data pengguna jika ditemukan, jika tidak mengembalikan null
    if ($result) {
      return mysqli_fetch_assoc($result);
    } else {
        return null;
    }
  }

  // jika tombol masuk ditekan
  if(isset($_POST['masuk'])){

    // mengambil email dan password yang dimasukkan
    $email = $_POST['email'];
    $password = $_POST['password'];

    get_users($conn, $email, $password);
    
    // Jika data pengguna ditemukan
    if ($user != null) {
      // Menyimpan data pengguna pada session
      $_SESSION['user'] = $user;

      // Redirect ke halaman utama
      header ("refresh:0;data_pengguna.php");
    } else {
        // Jika data pengguna tidak ditemukan, menampilkan pesan error
        $error = "Username atau password salah!";
    }
  }  
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>      
      .container{        
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;        
      }

      .card{
        width: 28rem;
        max-width: 28rem;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="card shadow p-3 mb-5 bg-body-tertiary rounded">
      <h3 style="text-align: center;">Login</h3>
        <div class="card-body">
          <form method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>        
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="inputPassword" name="password" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="Password" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Ingat Saya</label>
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Masuk" name="masuk"></input>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>