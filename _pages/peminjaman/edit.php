<?php
include "./_lib/entities/peminjaman.php";
$id = $_GET['id'];
$anggota = getById($id);
?>

<h1>Halaman Edit Data</h1>

<div class="card card-default">
    <div class="card-header">
        <div class="card-title">
            Edit Data Anggota
        </div>
    </div>
    <div class="card-body">
        <form action="?page=peminjaman/update&id=<?php echo $pinjam['id'] ?>" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $pinjam['nama'] ?>">
                    </div>
                </div>
                
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Alamat</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $pinjam['alamat'] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">No Handphone</label>
                        <input type="text" class="form-control" name="no_hp" value="<?php echo $pinjam['no_hp'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Kode Buku</label>
                        <input type="text" class="form-control" name="kode_buku" value="<?php echo $pinjam['kode_buku'] ?>">
                    </div>
                </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Judul Buku</label>
                        <input type="text" class="form-control" name="judul_buku" value="<?php echo $pinjam['judul_buku'] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" value="<?php echo $pinjam['penerbit'] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Pengarang</label>
                        <input type="text" class="form-control" name="pengarang" value="<?php echo $pinjam['pengarang'] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Lama Pinjam</label>
                        <input type="text" class="form-control" name="lama_pinjam" value="<?php echo $pinjam['lama_pinjam'] ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>