<?php
include "./_lib/entities/peminjaman.php";
?>
<h1>
    Halaman Pinjam
</h1>

<div class="card card-default">
    <div class="card-header">
        <a href="?page=peminjaman/tambah" class="btn btn-primary float-right"> <i class="fa fa-plus"></i> Tambah</a>

        <div class="card-title">
            Table Peminjaman
        </div>
    </div>
    <div class="card-body">
        <table class="table dataTable">
            <thead>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Judul Buku</th>
                <th>Lama Pinjam</th>
            </thead>
            <tbody>
                <?php foreach (getAll() as $key => $pinjam) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="?page=pinjam/show&id=<?php echo $pinjam['id'] ?>" class="btn btn-info"><i class="fa fa-info"></i></a>
                                <a href="?page=pinjam/edit&id=<?php echo $pinjam['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin Menghapus Data Ini?')" href="?page=peminjaman/hapus&id=<?php echo $pinjam['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </div>
                        </td>
                        <td><?php echo $pinjam['nama'] ?></td>
                        <td><?php echo $pinjam['judul_buku'] ?></td>
                        <td><?php echo $pinjam['lama_pinjam'] ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>
</div>

