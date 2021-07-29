<h1>Halaman Tambah Data</h1>

<div class="card card-default">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Pinjam
        </div>
    </div> 
    <div class="card-body">
        <form action="?page=peminjaman/store" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">No Handphone</label>
                        <input type="text" class="form-control" name="no_hp">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Kode Buku</label>
                        <input type="text" class="form-control" name="kode_buku">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Judul Buku</label>
                        <input type="text" class="form-control" name="judul_buku">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Penerbit</label>
                        <input type="text" class="form-control" name="penerbit">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Pengarang</label>
                        <input type="text" class="form-control" name="pengarang">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="" class="control-label">Lama Pinjam</label>
                        <input type="text" class="form-control" name="lama_pinjam">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>
</div>