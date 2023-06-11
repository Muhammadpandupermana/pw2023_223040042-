<?php 
session_start();
require('navigasi.php');
require ('functions.php');
$p=query("SELECT * FROM tampilan NATURAL JOIN kategori");
?>
<br>
<br>
<div class="container">
    <h3>Tampilan</h3>
    <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Gambar</th>
            <th scope="col">Judul</th>
            <th scope="col">Harga</th>
            <th scope="col">Kategori</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        <?php foreach ($p as $p) : ?>
          <tr>
            <th scope="row"><?=$i; ?></th>
            
            <td><img src="asset/<?=$p['gambar']; ?>" alt="Gambar 1" width="100"></td>
            <td><?=$p['judul']; ?></td>
            <td><?=$p['harga']; ?></td>
            <td><?=$p['kategori']; ?></td>
            <td>
            <a href="delete.php?id=<?= $p['id']; ?>" class="badge bg-danger text-decoration-none" onclick="return confirm('yakin dek')">Hapus</a> |
              <a href="edit.php?id=<?= $p['id']; ?>" class="badge bg-warning text-decoration-none">Ubah</a>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<br>
<br>