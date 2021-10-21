<?php 
require './koneksidb.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
  </head>
  <body class="warna3" style="height: 120vh;">
  <nav class="navbar navbar-expand-lg navbar-light p-3">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold " href="#">My Portofolio🚀</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link me-4" href="/UTS PEMWEB">Home🏡</a>
        <a class="nav-link me-4" href="/UTS PEMWEB/about.php">About Me🙋‍♂️</a>
        <a class="nav-link me-4" href="/UTS PEMWEB/sklis.php">Skilis💻</a>
        <a class="nav-link me-4" href="/UTS PEMWEB/project.php">Projects📸</a>
        <a class="nav-link active me-4" href="/UTS PEMWEB/contact.php">Contact📱</a>
      </div>
    </div>
  </div>
  
</nav>
<div class="container-fluid d-flex justify-content-center align-items-center mt-5">
<div class="row justify-content-center align-items-center">
<br>
<h4 class="text display-5 font2 text-center text-dark"> 📱Contact📱 </h4>
<br>
  <div class="col-lg-3 d-flex justify-content-center align-items-center p-3 mt-4">
      <div class="" style="width: 55%;">
        <img src="<?php echo ucwords($data[6]['Foto']);?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Instagram Account</h5>
        <p class="card-text">Berikut ini adalah akun instagram portofolio photograpy yang bernama @sipenggunalensa_kit.</p>
        <a href="https://www.instagram.com/sipenggunalensa_kit/" class="btn btn-primary">Visit account</a>
        </div>
      </div>
  </div>
  <div class="col-lg-3 d-flex justify-content-center align-items-center p-3 mt-5">
      <div class="" style="width: 60%;">
        <img src="<?php echo ucwords($data[7]['Foto']);?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Linkedin Account</h5>
        <p class="card-text">Berikut ini adalah akun linkedin untuk resume saya.</p>
        <a href="https://www.linkedin.com/in/muhammad-irhamsyah-ramadhan-1790931a5/" class="btn btn-primary">Visit account</a>
        </div>
      </div>
  </div>
  <div class="col-lg-3 d-flex justify-content-center align-items-center p-3 mt-5">
      <div class="" style="width: 60%;">
        <img src="<?php echo ucwords($data[8]['Foto']);?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Github Account</h5>
        <p class="card-text">Berikut ini adalah akun github untuk repositorie code yang telah saya buat.</p>
        <a href="https://github.com/Irhamsyahrmdhn" class="btn btn-primary">Visit account</a>
        </div>
      </div>
  </div>
  <div class="col-lg-3 d-flex justify-content-center align-items-center p-3 mt-5">
      <div class="" style="width: 70%;">
        <img src="<?php echo ucwords($data[9]['Foto']);?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Gmail Account</h5>
        <p class="card-text">Berikut adalah email yang saya : Rama.irhamsyah@gmail.com</p>
        </div>
      </div>
  </div>
</div>
</div>
<br>
<footer>
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-8 mb-8"></ul>
    <p class="text-center text-muted text-down"> © 2021 made by Irhamsyah</p>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>