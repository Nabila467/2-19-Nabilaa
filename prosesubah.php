<?php
    include 'koneksi.php';
   
    $id_buku = $_POST['id_buku'];
        
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $jenis_buku = $_POST['jenis_buku'];
        $image = $_FILES['gambar_buku']['name'];
        $target = "./images/";
        $namaSementara = $_FILES['gambar_buku']['tmp_name'];
        $terupload = move_uploaded_file($namaSementara, $target.$image);

    $sql = "UPDATE buku SET judul_buku='$judul_buku', penulis='$penulis' ,gambar_buku='$image', jenis_buku='$jenis_buku' WHERE id_buku = '$id_buku'";
    
    if($db1->query($sql) === TRUE){
         header("location:index.php?pesan=ubah_sukses");
    }else{
        echo "Eror: " . $sql . "<br>" . $db1->error;
    }

    $db1->close();

?>