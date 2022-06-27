<?php
include "koneksi.php";

switch ($_GET['action'])
{

    case 'save':

        $Judul = $_POST['Judul'];
        $Penulis = $_POST['Penulis'];
        $Penerbit = $_POST['Penerbit'];
        

        $query = mysqli_query($koneksi, "INSERT INTO buku (Judul, Penulis, Penerbit) VALUES('$Judul', '$Penulis', '$Penerbit')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $Id = $_POST['Id'];
        $Judul = $_POST['Judul'];
        $Penulis = $_POST['Penulis'];
        $Penerbit = $_POST['Penerbit'];
        

        $query = mysqli_query($koneksi, "UPDATE buku SET Judul='$Judul', Penulis='$Penulis', Penerbit='$Penerbit' WHERE Id='$Id'");
        if ($query)
        {
            echo "Edit Data Berhasil";
        }
        else
        {
            echo "Edit Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'delete':

        $Id = $_POST['Id'];
        $query = mysqli_query($koneksi, "DELETE FROM buku WHERE Id='$Id'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
