<?php
    //Membuat variabel
    $nama_depan = "Viky";
    $namaDepan = "Viky";
    $namaBelakang = "Hendriko";
    $umur = 19;
    $ipk = 3.96; //float
    $hadir = false; // boolean
    $sallary = null;

    //echo "Nama Lengkap : " . $nama_depan . " " . $namaBelakang;
    //echo "Nama Lengkap : $namaDepan $namaBelakang";
    echo "Nama Lengkap : ${namaDepan} ${namaBelakang}";
    echo "<br/>";
    echo "Umur : $umur Tahun";
    $umur = 21;
    echo "<br/>";
    echo "Umur Sekarang : $umur Tahun";
    unset($umur); //menghapus variabel dinamis

    //static variabel
    define("TEMPATLAHIR","Palembang");
    echo "<br/>";
    echo "Tempat Lahir : ". TEMPATLAHIR;
?>