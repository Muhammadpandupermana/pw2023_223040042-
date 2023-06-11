<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: login.php");
  exit;
}
require ('navigasi.php');
require ('functions.php');
$d= query("SELECT * FROM tampilan NATURAL JOIN kategori");
$kategori= query("SELECT * FROM kategori");

if(isset($_POST['cari'])){
  $d = cari ($_POST['keyword']);

}
?>

<div class="row">
  <div class="col-md-6">
    <form action="" method="GET">
      <div class="input-group mb-3 my-3">
        <select class="form-select col-md-4" name="kategori" id="kategori" aria-label="Floating label select example">
          <option selected>pilih kategori</option>
          <?php foreach ($kategori as $k): ?>
          <option value="<?=$k['id_kategori']; ?>"><?=$k['kategori']; ?></option>
          <?php endforeach; ?>
        </select>
        <input type="search" class="form-control col-md-8" placeholder="Cari..." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword" autofocus autocomplete="off">
        <button class="btn btn-primary" type="submit" name="cari" id="search-button">Button</button>
      </div>
    </form>
  </div>
   </div>
<div id="search-container">
    <?php foreach ($d as $d) : ?>
      <div class="card mb-1 card-detail ">
        <div class="row g-0">
          <div class="col-md-4">
            <input type="hidden" name="id">
            <img src="asset/<?=$d['gambar']; ?>" class="img-fluid " alt="...">
          </div>
          <div class="col-md-7">
            <div class="card-body mx-5">
            <a href="isi_detail.php?id=<?=$d['id']; ?>" class="btn link-color detail"><?=$d['judul']; ?></a>
              <div>
                <li>
                  <?=$d['kategori']; ?>
                </li>
              </div>
              <br>
              <p class="card-text"><?=$d['harga']; ?></p>
              <br>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <script src="js/script.js"></script>