<?php

if(isset($_GET['url']))
{
    $url = $_GET['url'];
    switch($url){

        case 'user';
            include 'user.php';
            break;

        case 'mahasiswa';
        include 'mahasiswa.php';
        break;

        case 'tambah_mahasiswa';
        include 'tambah_mahasiswa.php';
        break;

        case 'edit_mahasiswa';
        include 'edit_mahasiswa.php';
        break;

        case 'dosen';
        include 'dosen.php';
        break;

        case 'tambah_dosen';
        include 'tambah_dosen.php';
        break;
        
    }
}
else
{
    ?>
   <?php include 'home.php';?>
    <?php
}



?>