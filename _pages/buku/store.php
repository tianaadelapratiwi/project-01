<?php
if ($_POST) {
    include "./_lib/entities/buku.php";
    $param = [
        'isbn' => $_POST['isbn'],
        'barcode' => $_POST['barcode'],
        'judul' => $_POST['judul'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'stok' => $_POST['stok'],
        'tersedia' => $_POST['tersedia'],
        'dipinjam' => $_POST['dipinjam'],
        'cover' => $_POST['cover'],
    ];
    store($param);

    echo "
        <script>
            console.log('Data Berhasil Disimpan');
            window.location.href = '?page=buku'
        </script>
    ";
}
