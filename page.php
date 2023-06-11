<?php 
session_start();
if(!isset($_SESSION['login'])){
  header("Location: login.php");
  exit;
}
require ('navigasi.php');
require ('functions.php');
$d= query("SELECT * FROM tampilan");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>web</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&family=Saira&display=swap" rel="stylesheet">
    
  </head>
  <body>

    <!-- banner -->
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner align-items-center">
        <div class="carousel-item active">
          <img src="asset/b.ls.jpg" class="d-block w-100 h-100" alt="lost vape" />
        </div>
        <div class="carousel-item">
          <img src="asset/b.sk.jpg" class="d-block w-100 h-100" alt="smok" />
        </div>
        <div class="carousel-item">
          <img src="asset/b.gp.jpg" class="d-block w-100 h-100" alt="geek vape" />
        </div>
        <div class="carousel-item">
          <img src="asset/b.u.jpg" class="d-block w-100 h-100" alt="Uwell" />
        </div>
        <div class="carousel-item">
          <img src="asset/b.vp.jpg" class="d-block w-100 h-100" alt="Voopo" />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- akhir banner -->

    <!-- column -->
    <div id="search-container">
        <section id="Liquid">
            <div class="mt"></div>
            <p class="p1">Liquid</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($d as $item): ?>
                    <?php if ($item['id_kategori'] == 1): ?>
                      <input type="hidden" name="id">
                        <input type="hidden" name="kategori" value="<?= $item['id_kategori']; ?>">
                        <div class="col">
                            <div class="card w-75">
                                <img src="asset/<?= $item['gambar']; ?>" class="card-img-top" alt="bequ" />
                                <div class="card-body">
                                <a href="isi_detail.php?id=<?=$item['id']; ?>" class="btn link-color detail"><?=$item['judul']; ?></a>
                                    <p class="card-text">Rp. <?= $item['harga']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <div class="row mt-5">
    <div class="col-md-6">
      <form action="" method="GET">
        <div class="input-group mb-5">
            <a href="detail.php" class="btn btn-primary" style="margin:auto;">cari lebih banyak</a>
        </div>
      </form>
    </div>
  </div>

        <section id="Device">
            <div class="mt"></div>
            <p class="p1">Device</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($d as $item): ?>
                    <?php if ($item['id_kategori'] ==2 ): ?>
                      <input type="hidden" name="id">
                        <input type="hidden" name="kategori" value="<?= $item['id_kategori']; ?>">
                        <div class="col">
                            <div class="card w-75">
                                <img src="asset/<?= $item['gambar']; ?>" class="card-img-top" alt="bequ" />
                                <div class="card-body">
                                <a href="isi_detail.php?id=<?=$item['id']; ?>" class="btn link-color detail"><?=$item['judul']; ?></a>
                                    <p class="card-text">Rp. <?= $item['harga']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <section id="Atomizer">
            <div class="mt"></div>
            <p class="p1">Atomizer</p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($d as $item): ?>
                    <?php if ($item['id_kategori'] ==3 ): ?>
                      <input type="hidden" name="id">
                        <input type="hidden" name="kategori" value="<?= $item['id_kategori']; ?>">
                        <div class="col">
                            <div class="card w-75">
                                <img src="asset/<?= $item['gambar']; ?>" class="card-img-top" alt="bequ" />
                                <div class="card-body">
                                <a href="isi_detail.php?id=<?=$item['id']; ?>" class="btn link-color detail"><?=$item['judul']; ?></a>
                                    <p class="card-text">Rp. <?= $item['harga']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>
</div>
      <!-- akhir liquid -->
      <!-- footer -->
      <footer>
        <div class="container-3">
          <small>Copyright &copy; 2022 - Muhammad Pandu Permana</small>
        </div>
      </footer>
    
    <!-- akhir footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        duration:'3000'
      });
    </script>
    <script type="text/javascript" src="vanilla/vanilla-tilt.min.js"></script>
    <script src="js/script.js"></script>
</body>
  </body>
</html>
