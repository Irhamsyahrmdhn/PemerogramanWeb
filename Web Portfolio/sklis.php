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
        <a class="nav-link active me-4" href="/UTS PEMWEB/sklis.php">Skilis💻</a>
        <a class="nav-link me-4" href="/UTS PEMWEB/project.php">Projects📸</a>
        <a class="nav-link me-4" href="/UTS PEMWEB/contact.php">Contact📱</a>
      </div>
    </div>
  </div>
  
</nav>
<div class="container justify-content-center align-items-center">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-12">
                    <h4 class="text display-4 font2 justify">Skilis💻</h4>
                    <p class="font3" style="text-align: left;">Python💻</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style=" text-align: right; width: 50%; background: linear-gradient(90deg,#71F8AF,#1C7686);" 
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                    <br>
                    <p class="font3" style="text-align: left;">C++💻</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style=" text-align: right; width: 60%; background: linear-gradient(90deg,#71F8AF,#1C7686);" 
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">60%</div>
                    </div>
                    <br>
                    <p class="font3" style="text-align: left;">HTML💻</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style=" text-align: right; width: 55%; background: linear-gradient(90deg,#71F8AF,#1C7686);" 
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">55%</div>
                    </div>
                    <br>
                    <p class="font3" style="text-align: left;">CSS💻</p>
                    <div class="progress">
                    <div class="progress-bar" role="progressbar" style=" text-align: right; width: 65%; background: linear-gradient(90deg,#71F8AF,#1C7686);" 
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">65%</div>
                    </div>
                    <br>
                    <p class="font3" style="text-align: left;">Bootstrap💻</p>
                    <div class="progress">
                    <div class="progress-bar" role="progressbar" style=" text-align: right; width: 70%; background: linear-gradient(90deg,#71F8AF,#1C7686);" 
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                    <br>
                    <p class="font3" style="text-align: left;">Sony Vegas PRO📸</p>
                    <div class="progress">
                    <div class="progress-bar" role="progressbar" style=" text-align: right; width: 65%; background: linear-gradient(90deg,#71F8AF,#1C7686);" 
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">65%</div>
                    </div>
                    <br>
                    <p class="font3" style="text-align: left;">Photograpy📸</p>
                    <div class="progress">
                    <div class="progress-bar" role="progressbar" style=" text-align: right; width: 85%; background: linear-gradient(90deg,#71F8AF,#1C7686);" 
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                    <br>
                    <p class="font3" style="text-align: left;">Fixed Phone📱🛠</p>
                    <div class="progress">
                    <div class="progress-bar" role="progressbar" style=" text-align: right; width: 90%; background: linear-gradient(90deg,#71F8AF,#1C7686);" 
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                    <br>
                    <p class="font3" style="text-align: left;">Fixed Laptop/PC💻🛠</p>
                    <div class="progress">
                    <div class="progress-bar" role="progressbar" style=" text-align: right; width: 85%; background: linear-gradient(90deg,#71F8AF,#1C7686);" 
                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>    
              </div>
            </div>
    </div>
</div>
<br>
<div class="row text-center col-md-12">
    <div class="container-fluid d-flex justify-content-center align-items-center">
      <a class="btn btn-outline-dark" href="/UTS PEMWEB/project.php">⏭ Next page ⏭ </a>
    </div>
</div>

<footer>
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-8 mb-8"></ul>
    <p class="text-center text-muted text-down"> © 2021 made by Irhamsyah</p>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>