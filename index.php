<?php include('koneksi/koneksi.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <?php include('includes/head.php'); ?>
  </head>
  <body>

    <?php include('includes/navigasi.php'); ?>

    <?php 
    //pemanggilan konten halaman index
    if(isset($_GET["include"])){
      $include = $_GET["include"];
      if($include=="detail-buku"){
        include("include/detailbuku.php");
      }else if($include=="detail-blog"){
        include("include/detailblog.php");
      }else if($include=="daftar-buku-kategori"){
        include("include/daftarbukukategori.php");
      }else{    
        include("include/index.php");
      }
    }else{
      include("include/index.php");
    }
    ?>

    
    <?php include('includes/footer.php'); ?>

    <?php include('includes/script.php'); ?>

  </body>
</html>