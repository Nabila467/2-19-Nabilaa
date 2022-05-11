<html>
    
<?php
    include 'koneksi.php';
    
    $id_buku = $_GET['id_buku'];

    $sql = ("SELECT * FROM buku WHERE id_buku = '$id_buku'");
    $result = $db1->query($sql);

    $result= $result->fetch_assoc();

?>

    <head>
        <title><?php echo $result['judul_buku']?></title>
        <link rel="icon" type="image/x-icon" href="<?php echo './images/'.$result['gambar_buku']?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
                     
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
 
 <div class="container">
    
            <div class="row mt-5">
               
                <form action="prosesubah.php" method="POST" enctype="multipart/form-data"> 
                    <input type="hidden" name="id_buku" value="<?php echo $result['id_buku']?>"> 
                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control" value="<?php echo $result['judul_buku']?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" name="penulis" class="form-control" value="<?php echo $result['penulis']?>"></label>
                        </div>
                         <div class="mb-3">
                            <label class="form-label">Gambar Buku</label>                          
                            <input type="file" name="gambar_buku" value="" class="form-control"></label>
                            <br>
                            <img src="<?php echo './images/'.$result['gambar_buku']?>" width="100">
                        </div>  
                        <div class="mb-3">
                            <label class="form-label">Jenis Buku</label>                          
                            <select class="form-select" aria-label="Default select example" name="jenis_buku">
                                <option selected><?php echo $result['jenis_buku']?></option>
                                <option value="Romance">Romantis</option>
                                <option value="Horor">Horor</option>
                                <option value="Fantasi" >Fantasi</option>
                                <option value="Novel" name="Novel">Novel</option>
                            </select>
                        </div> 
                    <button name="simpan" value="stok" class="btn btn-warning">Simpan</button>
                </form>
            </div>
        </div>       