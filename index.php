<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Aplikasi Toko Buku</title>
    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            //load data buku saat aplikasi dijalankan 
            loadData();
            '[=-'
            //Load form add
            $("#contentData").on("click", "#addButton", function() {
                $.ajax({
                    url: 'form-add.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //Load form edit dengan parameter Id
            $("#contentData").on("click", "#EditButton", function() {
                var Id = $(this).attr("value");
                $.ajax({
                    url: 'form-edit.php',
                    type: 'get',
                    data: {
                        Id: Id
                    },
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //button batal
            $("#contentData").on("click", "#cancelButton", function() {
                loadData();
            });

            //simpan data buku
            $("#contentData").on("submit", "#formAdd", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=save',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //edit data buku
            $("#contentData").on("submit", "#formEdit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

            //hapus data buku berdasarkan Id
            $("#contentData").on("click", "#DeleteButton", function() {
                var Id = $(this).attr("value");
                $.ajax({
                    url: 'service.php?action=delete',
                    type: 'post',
                    data: {
                        Id: Id
                    },
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });
        })

        function loadData() {
            $.ajax({
                url: 'data-buku.php',
                type: 'get',
                success: function(data) {
                    $('#contentData').html(data);
                }
            });
        }
    </script>
</head>

<body style="background-color: rgb(0, 255, 254)">
    <div align="center">
        <h2></h2>
        <div id="contentData"></div>
    </div>
</body>

</html>