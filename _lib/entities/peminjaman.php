<?php

include "./_lib/conn.php";

function getAll()
{
    global $conn;
    $query = "select * from pinjam";
    $statement = $conn->prepare($query);
    $statement->execute();
    return $statement->fetchAll();
}

function getById($id)
{
    global $conn;
    $param = [
        'id' => $id
    ];
    $query = "select * from pinjam where id=:id";
    $statement = $conn->prepare($query);
    $statement->execute($param);
    return $statement->fetch();
}

function store($param)
{
    global $conn;
    $query = "insert into pinjam (nama, alamat, no_hp, kode_buku, judul_buku, penerbit, pengarang, lama_pinjam) 
                values (:nama, :alamat,:no_hp, :kode_buku, :judul_buku, :penerbit, :pengarang, :lama_pinjam)";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function update($param)
{
    global $conn;
    $query = "update pinjam set nama=:nama, alamat=:alamat, no_hp=:no_hp, 
                kode_buku=:kode_buku, judul_buku=:judul_buku, penerbit=:penerbit, pengarang=:pengarang, lama_pinjam=:lama_pinjam
                where id=:id ";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}

function delete($param)
{
    global $conn;
    $query = "delete from pinjam where id=:id ";
    $statement = $conn->prepare($query);
    $statement->execute($param);
}
