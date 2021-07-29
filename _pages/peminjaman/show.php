<?php
include "./_lib/entities/peminjaman.php";
$id = $_GET['id'];
$anggota = getById($id);
?>
<h1>Halaman Detail</h1>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=peminjaman/edit&id=<?php echo $pinjam['id'] ?>" class="btn btn-warning float-right"><i class="fa fa-edit"></i> Edit</a>
        <div class="card-title">
            Detail Peminjaman
        </div>
    </div>
    <div class="card-body">
        <dl>
            <dt>Nama</dt>
            <dd> <?php echo $pinjam['nama'] ?> </dd>
            <dt>Alamat</dt>
            <dd> <?php echo $pinjam['alamat'] ?> </dd>
            <dt>No Handphone</dt>
            <dd> <?php echo $pinjam['no_hp'] ?> </dd>
            <dt>Kode Buku</dt>
            <dd> <?php echo $pinjam['kode_buku'] ?> </dd>
            <dt>Judul Buku</dt>
            <dd> <?php echo $pinjam['judul_buku'] ?> </dd>
            <dt>Penerbit</dt>
            <dd> <?php echo $pinjam['penerbit'] ?> </dd>
            <dt>Pengarang</dt>
            <dd> <?php echo $pinjam['pengarang'] ?> </dd>
            <dt>Lama Pinjam</dt>
            <dd> <?php echo $pinjam['lama_pinjam'] ?> </dd>
        </dl>
    </div>
</div>

