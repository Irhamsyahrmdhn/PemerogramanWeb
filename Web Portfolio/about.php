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

<body class="warna2" style="height: 150vh;">
  <nav class="navbar navbar-expand-lg navbar-light p-3">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold " href="#">My Portofolio🚀</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link me-4" href="/UTS PEMWEB">Home🏡</a>
        <a class="nav-link active me-4" href="/UTS PEMWEB/about.php">About Me🙋‍♂️</a>
        <a class="nav-link me-4" href="/UTS PEMWEB/sklis.php">Skilis💻</a>
        <a class="nav-link me-4" href="/UTS PEMWEB/project.php">Projects📸</a>
        <a class="nav-link me-4" href="/UTS PEMWEB/contact.php">Contact📱</a>
      </div>
    </div>
  </div>
</nav>

<div class="container-fluid mt-2">
    <div class="row justify-content-center align-items-center">
        <h4 class="text display-4 font2 text-center mb-3 text-dark">About Me🙋‍♂️</h4>
        <div class="col-lg-5 d-flex justify-content-center align-items-center p-3">
            <img src="<?php echo ucwords($data[1]['Foto']);?>" alt="" class="gambar img-thumbnail rounded; " width="50%" height="50%">
        </div>
        <div class="col-md-7 d-flex justify-content-center align-items-center p-3"> 
        <h2 class="text font2 justify"><?php echo ucwords($data[0]['Text']);?></h2>
        </div>
        <div class="text col-md-7 d-flex justify-content-center align-items-center p-3"> 
        <h2 class="font2 justify"><?php echo ucwords($data[2]['Text']);?></h2>
        </div>
        <div class="col-lg-5 d-flex justify-content-center align-items-center p-3">
            <img src="<?php echo ucwords($data[2]['Foto']);?>" alt="" class=" gambar img-thumbnail rounded; " width="50%" height="50%">
        </div>
    </div>
</div>
<div class="container-fluid d-flex justify-content-center align-items-center">
<a class="btn btn-outline-dark" href="/UTS PEMWEB/sklis.php">⏭ Next page ⏭ </a>
</div>
<footer>
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-8 mb-8"></ul>
    <p class="text-center text-muted text-down"> © 2021 made by Irhamsyah</p>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>