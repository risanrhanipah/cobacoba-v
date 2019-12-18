<?php  
  session_start(); 
    include 'koneksi.php';
    error_reporting(0); 
 ?> 
<html> 
  <head> 
    <style type="text/css">
      body {
        
            background: gainsboro;
            

      }
    </style>
      <title>Kantin Digital | Master</title> 
  </head> 
      <form method="post" enctype="multipart/form-data"> 
<body> 
   <h1><?php echo "Selamat Datang "; ?></h1> 
 <ul> 
    <li><a href="?menu=pengguna">Kelola Pengguna</a></li> 
    <li><a href="?menu=menu">Kelola Menu</a></li> 
    <li><a href="?menu=laporan">Laporan</a></li> 
    <li><a href="index.php">Logout</a></li> 
 </ul> 
   <?php  
          switch (@$_GET['menu']) { 
              case 'pengguna': 
          include 'pengguna.php'; 
              break; 
              case 'menu': 
          include 'menu.php'; 
              break; 
              case 'laporan': 
          include 'laporan.php'; 
              break; 
     default: 
          include 'pengguna.php'; 
          break; 
  } 
    ?> 
        </body> 
    </form> 
</html> 