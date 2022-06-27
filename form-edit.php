<?php
include "koneksi.php";
$Id = $_GET['Id'];
$query = mysqli_query($koneksi, "SELECT * FROM buku WHERE Id='$Id'") or die(mysqli_error($koneksi));
$result = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Edit Buku</title>
</head>

<body>
    <form method="POST" id="formEdit">
        <table>
            <div class="container" style="margin-top: 100px; ">
                <div class="card mt-5 ">
                    <h1 class="text-center mt-5">Formulir Tambah Buku</h1>
                    <div class="card-body">
                        <div class="form-group">
                            <tr>
                                <td>Judul Buku</td>
                                <td>
                                    <input type="hidden" name="Id" id="Id" class="form-control" required="" value="<?php echo $result['Id']; ?>" />
                                    <input type="text" name="Judul" id="Judul" class="form-control" required="" value="<?php echo $result['Judul']; ?>" />
                                </td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>Penulis Buku</td>
                                <td>
                                    <input type="text" name="Penulis" id="Penulis" class="form-control" required="" value="<?php echo $result['Penulis']; ?>" />
                                </td>
                            </tr>
                        </div>
                        <div class="form-group">
                            <tr>
                                <td>Penerbit Buku</td>
                                <td>
                                    <input type="text" name="Penerbit" id="Penerbit" class="form-control" required="" value="<?php echo $result['Penerbit']; ?>" />
                                </td>
                            </tr>
                        </div>
                        <tr>
                            <td></td>
                            <td>

                                <input type="submit" name="simpan" class="btn btn-primary" id="simpan" value="Simpan" />
                                <button type="button" id="cancelButton" class="btn btn-danger" onclick="history.back()">Batal</button>
                            </td>
                        </tr>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </table>
    </form>