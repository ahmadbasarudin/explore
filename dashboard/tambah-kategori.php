<?php require_once("header.php"); ?>
        <main>
          <div class="main-edit">
           <h3 id="judul-form-news"><strong>Tambah Kategori</strong></h3>
<?php
    if($pesan_error !== "") echo "<div class=\"alert alert-danger\">$pesan_error</div>";
                        
?>
            <form class="form-vertical" action="" method="post" id="edit-berita" enctype="multipart/form-data">
            <div class="form-group form-news">
                <label class="col-sm-3 control-label">Nama Kategori</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_kategori" placeholder="">
                </div>
            </div>
            <div class="col-sm-8">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-primary" name="tambah_kategori">Tambah</button>
            </div>
            </form>            
            </div>
        </main>
    </div>
</body>
</html>