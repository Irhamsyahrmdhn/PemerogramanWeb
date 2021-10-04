<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <?php 

  $jalur = $namalengkap = $ttl = $nik = $JK = $agama = $Status = $alamat
   = $Kodepos = $email = $AS = $TL = $NMayah = $NMibu = $alamatortu = $Kodeposortu = $emailortu = 
   $pekerjaanayah = $pendidikanibu = $prodi1 = $prodi2 = $Sinfo = $gelombang = "";

  if (isset($_POST['tombol'])) {
    $jalur = $_POST["jalurpenerimaan"];
    $namalengkap = $_POST["nama"];
    $ttl = $_POST["TTL"];
    $nik = $_POST["NIK"];
    $JK = $_POST["jenisKelamin"];
    $agama = $_POST["agama"];
    $Status = $_POST["status"];
    $alamat = $_POST["status"];
    $Kodepos = $_POST["kodepos"];
    $email = $_POST["email"];
    $AS = $_POST["asalsekolah"];
    $TL = $_POST["tahunlulus"];
    $NMayah = $_POST["ayah"];
    $NMibu = $_POST["ibu"];
    $alamatortu = $_POST["alamatortu"];
    $Kodeposortu = $_POST["kodeposortu"];
    $emailortu = $_POST["emailortu"];
    $pendidikanayah = $_POST["pendidikanayah"];
    $pendidikanibu = $_POST["pendidikanibu"];
    $Statusayah = $_POST["statusayah"];
    $Statusibu = $_POST["statusibu"];
    $pekerjaanayah = $_POST["pekerjaanayah"];
    $pekerjaanibu = $_POST["pekerjaanibu"];
    $prodi1 = $_POST["prodi1"];
    $prodi2 = $_POST["prodi2"];
    $Sinfo = $_POST["info"];
    $gelombang = $_POST["gelombang"];

    echo "<p> Jalur Penerimaan : " . $jalur . "</p>";
    echo "<p> Nama Lengkap : " . $namalengkap . "</p>";
    echo "<p> Tempat tanggal lahir : " . $ttl . "</p>";
    echo "<p> Nomor Induk Kependudukan : " . $nik . "</p>";
    echo "<p> jenisKelamin : " . $JK . "</p>";
    echo "<p> Agama : " . $agama . "</p>";
    echo "<p> status : " . $Status . "</p>";
    echo "<p> Alamat lengkap : " . $alamat . "</p>";
    echo "<p> Kode pos : " . $Kodepos . "</p>";
    echo "<p> Email : " . $email . "</p>";
    echo "<p> Asal sekolah : " . $AS . "</p>";
    echo "<p> Tahun lulus : " . $TL . "</p>";
    echo "<p> Nama Ayah : " . $NMayah . "</p>";
    echo "<p> Nama Ibu : " . $NMibu . "</p>";
    echo "<p> Alamat Orang tua : " . $alamatortu . "</p>";
    echo "<p> Kode pos  : " . $Kodeposortu . "</p>";
    echo "<p> Email : " . $emailortu . "</p>";
    echo "<p> Pendidikan Ayah : " . $pekerjaanayah . "</p>";
    echo "<p> Pendidikan Ibu : " . $pekerjaanibu . "</p>";
    echo "<p> Status Ayah : " . $Statusayah . "</p>";
    echo "<p> Status Ibu : " . $Statusibu . "</p>";
    echo "<p> Pekerjaan Ayah : " . $pekerjaanayah . "</p>";
    echo "<p> Pekerjaan Ibu : " . $pekerjaanibu . "</p>";
    echo "<p> Pilihan Program Studi 1 : " . $prodi1 . "</p>";
    echo "<p> Pilihan Program Studi 2 : " . $prodi2 . "</p>";
    echo "<p> Sumber Informasi : " . $Sinfo . "</p>";
    echo "<p> Pilihan Gelombang : " . $gelombang . "</p>";
  }
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>