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
  <body class="warna2" style="height: 125vh;">
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
        <a class="nav-link active me-4" href="/UTS PEMWEB/project.php">Projects📸</a>
        <a class="nav-link me-4" href="/UTS PEMWEB/contact.php">Contact📱</a>
      </div>
    </div>
  </div>
  
</nav>

<div class="container">
            <div class="row text-center mb-3 text-white">
                <div class="col">
                  <h4 class="text display-4 font2">Projects📸</h4>
                    <h5 class="font3"><?php echo ucwords($data[3]['Text']);?></h5>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="gambar card project-tile">
                        <img src="<?php echo ucwords($data[3]['Foto']);?>" class="card-img-top" alt="Project 1" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ucwords($data[4]['Nama']);?>📸</h5>
                            <p class="card-text"><?php echo ucwords($data[4]['Text']);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="gambar card project-tile">
                        <img src="<?php echo ucwords($data[4]['Foto']);?>" class="card-img-top" alt="Project 2" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ucwords($data[5]['Nama']);?>📸</h5>
                            <p class="card-text"><?php echo ucwords($data[5]['Text']);?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="gambar card project-tile">
                        <img src="<?php echo ucwords($data[5]['Foto']);?>" class="card-img-top" alt="Project 3" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo ucwords($data[6]['Nama']);?>🛠</h5>
                            <p class="card-text"><?php echo ucwords($data[6]['Text']);?></p>
                        </div>
                    </div>
                </div>
  </div>
</div>

<div class="container-fluid d-flex justify-content-center align-items-center">
<a class="btn btn-outline-dark" href="/UTS PEMWEB/contact.php">⏭ Next page ⏭ </a>
</div>
<footer>
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-8 mb-8"></ul>
    <p class="text-center text-muted text-down"> © 2021 made by Irhamsyah</p>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>