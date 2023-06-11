<?php 
session_start();
require ('functions.php');
require ('navigasi.php');
$id=$_GET['id'];
$d=query("SELECT * FROM tampilan NATURAL JOIN kategori WHERE id='$id'");
?>
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

                        <div class="row mt-5">
    <div class="col-md-5">
        <div class="card bg-light">
            <div class="card-body text-center"> <!-- Tambahkan class "text-center" untuk mengatur teks di tengah -->
                <img src="asset/<?= $d['gambar']; ?>" alt="" class="img-fluid border" style="width: 300px;"> <!-- Tambahkan class "img-fluid" untuk responsif dan style untuk mengatur lebar gambar -->
            </div>
            <div class="mx-5">
                <h5 class="card-title"><?= $d['judul']; ?></h5>
                <p class="card-text"><?= $d['kategori']; ?></p>
                <p class="card-text mb-5">Rp. <?= $d['harga']; ?></p>
                <div class="social-icons wa">
                <i class="card-text">Untuk pembelian screencapture lalu bisa dikirim ke WhatsApp atau Instagram</i>
                    <a href="https://wa.link/your-link" target="_blank"><i class="wasap fab fa-whatsapp"></i></a> <!-- Tambahkan ikon WhatsApp -->
                    <a href="https://www.instagram.com/your-account" target="_blank"><i class=" ig fab fa-instagram"></i></a> <!-- Tambahkan ikon Instagram -->
                </div>
            </div>
        </div>
    </div>
</div>


                    