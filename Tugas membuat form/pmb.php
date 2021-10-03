<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Tugas Form</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark d-flex justify-content-center">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Universitas Pembangunan Jaya</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Pendaftaran</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container bg-white rounded mt-4 p-3">

      <h2 class="text-center my-4 pb-3  border-3">Data Profil Mahasiswa</h2>
      <form action="konfirmasipmb.php" method="post">

      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">Jalur Penerimaan Mahasiswa Baru
          <select name="jalurPenerimaan" class="form-select mt-2">
            <option selected>Pilih Jalur Penerimaan</option>
            <option value="TA 2022/2023 RATA-RATA RAPOR">TA 2022/2023 RATA-RATA RAPOR</option>
            <option value="TA 2022/2023 PERINGKAT KELAS">TA 2022/2023 PERINGKAT KELAS</option>
            <option value="TA 2022/2023 UJIAN SARING MASUK (USM)">TA 2022/2023 UJIAN SARING MASUK (USM)</option>
        </select>
        </div>
        <div class="col-md-6 mb-2">
          <label for="">Nama Lengkap (Sesuai Akte Kelahiran)
          <input type="text" class="form-control mt-2" name="name" placeholder="Nama Lengkap">
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12 col-md-6 mb-2">
          <label for="">Tempat & Tanggal Lahir
          <input type="text" class="form-control mt-2" name="TTL" placeholder="Tempat, DD/MM/YYYY">
        </div>
        <div class="col-12 col-md-6 mb-2">
          <label for="">Nomor Induk Kependudukan (KTP / KK)
          <input type="text" class="form-control mt-2" name="NIK" placeholder="NIK">
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12 col-md-4 mb-2">
          <label for="">Jenis Kelamin
          <select name="jenisKelamin" class="form-select mt-2">
            <option selected>Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        </div>
        <div class="col-12 col-md-4 mb-2">
          <label for="">Agama
          <select name="agama" class="form-select mt-2">
            <option selected>Agama</option>
            <option value="Islam">Islam</option>
            <option value="Katolik">Katolik</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
        </select>
        </div>
        <div class="col-12 col-md-4 mb-2">
          <label for="">Status
          <select name="status" class="form-select mt-2">
            <option selected>Status</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
        </select>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-12 mb-2">
          <label for="">Alamat Lengkap
          <textarea class="form-control mt-2" name="alamat" placeholder="Jl. Abcd No. 00, RT/01 RW/02" style="height: 100px;"></textarea>
        </div>
        <div class="col-md-6 mt-4 mb-2">
          <label for="">Kode Pos
          <input type="text" class="form-control mt-2" name="kodepos" placeholder="15xxx">
        </div>
        <div class="col-md-6 mt-4 mb-2">
          <label for="">Email
          <input type="email" class="form-control mt-2" name="email" placeholder="yourname@example.com">
        </div>
      </div>

      <h3 class="mt-5  border-2 pb-3 text-center">Data Sekolah Asal Calon Mahasiswa</h3>

      <div class="row mt-4">
        <div class="col-md-6">
          <label for="">Asal Sekolah
          <input type="text" name="asalsekolah" class="form-control mt-2" placeholder="SMA / SMK">
        </div>
        <div class="col-md-6">
          <label for="">Tahun Lulus
          <input type="number" name="tahunlulus" class="form-control mt-2" placeholder="YYYY">
        </div>
      </div>

      <h3 class="mt-5  border-2 pb-3 text-center">Data Orang Tua Calon Mahasiswa</h3>

      <div class="row mt-4">
        <div class="col-md-6 mb-4">
          <label for="">Nama Ayah
          <input type="text" name="ayah" class="form-control mt-2" placeholder="Nama Ayah">
        </div>
        <div class="col-md-6 mb-4">
          <label for="">Nama Ibu
          <input type="text" name="ibu" class="form-control mt-2" placeholder="Nama Ibu">
        </div>
        <div class="col-12 mb-2">
          <label for="">Alamat Lengkap
          <textarea class="form-control mt-2" name="alamatortu" placeholder="Jl. Abcd No. 00, RT/01 RW/02" style="height: 100px;"></textarea>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 mt-4 mb-2">
          <label for="">Kode Pos
          <input type="text" class="form-control mt-2" name="kodeposortu" placeholder="15xxx">
        </div>
        <div class="col-md-6 mt-4 mb-2">
          <label for="">Email
          <input type="email" class="form-control mt-2" name="emailortu" placeholder="yourname@example.com">
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">Pendidikan Terakhir Ayah
          <select name="pendidikanayah" class="form-select mt-2">
            <option selected>Pilih</option>
              <option value="A - Tidak Tamat SD">A - Tidak Tamat SD</option>
              <option value="B - Tamat SD">B - Tamat SD</option>
              <option value="C - Tamat SMP">C - Tamat SMP</option>
              <option value="D - Tamat SMA">D - Tamat SMA</option>
              <option value="E - Diploma (D1/D2)">E - Diploma (D1/D2)</option>
              <option value="F - Sarjana (D3)">F - Sarjana (D3)</option>
              <option value="G - Sarjana (D4/S1)">G - Sarjana (D4/S1)</option>
              <option value="H - Pascasarjana (S2)">H - Pascasarjana (S2)</option>
              <option value="I - Doktoral (S3)">I - Doktoral (S3)</option>
          </select>
        </div>
        <div class="col-md-6 mb-2">
          <label for="">Pendidikan Terakhir Ibu
          <select name="pendidikanibu" class="form-select mt-2">
            <option selected>Pilih</option>
              <option value="A - Tidak Tamat SD">A - Tidak Tamat SD</option>
              <option value="B - Tamat SD">B - Tamat SD</option>
              <option value="C - Tamat SMP">C - Tamat SMP</option>
              <option value="D - Tamat SMA">D - Tamat SMA</option>
              <option value="E - Diploma (D1/D2)">E - Diploma (D1/D2)</option>
              <option value="F - Sarjana (D3)">F - Sarjana (D3)</option>
              <option value="G - Sarjana (D4/S1)">G - Sarjana (D4/S1)</option>
              <option value="H - Pascasarjana (S2)">H - Pascasarjana (S2)</option>
              <option value="I - Doktoral (S3)">I - Doktoral (S3)</option>
          </select>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">Status Ayah
          <select name="statusayah" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
        </select>
        </div>
        <div class="col-md-6 mb-2">
          <label for="">Status Terakhir Ibu
          <select name="statusibu" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Belum Menikah">Belum Menikah</option>
            <option value="Menikah">Menikah</option>
        </select>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">Pekerjaan Ayah
          <input type="text" name="pekerjaanayah" class="form-control mt-2" placeholder="Nama Ayah">
        </div>
        <div class="col-md-6 mb-2">
          <label for="">Pekerjaan Ibu
          <input type="text" name="pekerjaanibu" class="form-control mt-2" placeholder="Nama Ibu">
        </div>
      </div>

      <h3 class="mt-5  border-2 pb-3 text-center">Peminatan Program Studi</h3>

      <div class="row mt-4">
        <div class="col-md-6 mb-2">
          <label for="">Pilihan Program Studi 1
          <select name="prodi1" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Arsitektur">Arsitektur</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Komunikasi">Komunikasi</option>
            <option value="Desain Produk">Desain Produk</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Psikologi">Psikologi</option>
        </select>
        </div>
        <div class="col-md-6 mb-2">
          <label for="">Pilihan Program Studi 2
          <select name="prodi2" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Informatika">Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Arsitektur">Arsitektur</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            <option value="Komunikasi">Komunikasi</option>
            <option value="Desain Produk">Desain Produk</option>
            <option value="Akuntansi">Akuntansi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Psikologi">Psikologi</option>
        </select>
        </div>
        <div class="col-12 mt-3 mb-2">
          <label for="">Sumber Informasi</label>
          <div class="form-check form-check-inline mt-2">
            <select name="info" id="" class="form-select mt-2">
              <option selected>Pilih Sumber</option>
              <option value="Internet">Internet</option>
              <option value="Majalah">Majalah</option>
              <option value="Brosur">Brosur</option>
              <option value="Radio">Radio</option>
              <option value="Spanduk">Spanduk</option>
              <option value="Orang Tua">Orang Tua</option>
              <option value="Teman">Teman</option>
              <option value="Pameran">Pameran</option>
              <option value="Pihak Sekolah">Pihak Sekolah</option>
              <option value="Lainnya ...">Lainnya ...</option>
            </select>
          </div>
        </div>

      <h3 class="mt-5  border-2 pb-3 text-center">Ujian Saringan Masuk</h3>

      <div class="row mt-4">
        <div class="col-12 mb-2">
          <label for="">Pilihan Gelombang
          <select name="gelombang" class="form-select mt-2">
            <option selected>Pilih</option>
            <option value="Gelombang 1">Gelombang 1</option>
            <option value="Gelombang 2">Gelombang 2</option>
            <option value="Gelombang 3">Gelombang 3</option>
            <option value="Gelombang 4">Gelombang 4</option>
        </select>
        </div>
        <p class="lead fs-6 text-center mt-3"><i class="bi bi-geo-alt-fill"></i>  Universitas Pembangunan Jaya - Jl. Cendrawasih Raya Blok B7/P, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413.</p>
      </div>

      <div class="row mt-3">
        <div class="col-12 d-flex justify-content-center">
          <button class="btn btn-outline-dark">Submit</button>
        </div>
      </div>
      </form>

      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>