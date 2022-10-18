<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="with=device-widht, initial scale=1.0">
    <title>BSI Foundation | <?php echo $judul; ?> </title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    
    <script>
        $(document).ready(function(){
          $('.slider').bxSlider();
        });
    </script>
</head>
<body>
    <section class="header"> <!--ini buat daftar menu nya-->
        <nav>
            <div class="nav-menu">
                <a href="<?php echo base_url()?>visitor"><img src="<?php echo base_url()?>assets/img/logo.png"></a>
                <ul>
                    <li><a href="<?php echo base_url().'visitor'?>">BERANDA</a></li>
                    <li class="dropdown"><a href="#">KONSERVASI</a>
                        <ul class="isi-dropdown">
                            <li><a href="<?php echo base_url().'visitor/orangutan'?>">Orangutan</a></li>
                            <li><a href="<?php echo base_url().'visitor/komodo'?>">Komodo</a></li>
                            <li><a href="<?php echo base_url().'visitor/bacusa'?>">Badak Bercula Satu</a></li>
                            <li><a href="<?php echo base_url().'visitor/harimau'?>">Harimau Sumatera</a></li>
                            <li><a href="<?php echo base_url().'visitor/gajah'?>">Gajah Sumatera</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">TENTANG KAMI</a>
                        <ul class="isi-dropdown">
                            <li><a href="<?php echo base_url().'visitor/visimisi'?>">Visi Misi</a></li>
                            <li><a href="<?php echo base_url().'visitor/sejarah'?>">Sejarah</a></li>
                            <li><a href="<?php echo base_url().'visitor/relawan'?>">Relawan</a></li>
                            <li><a href="<?php echo base_url().'visitor/lokasi'?>">Lokasi Kami</a></li>
                            <li><a href="<?php echo base_url().'visitor/kontak'?>">Hubungi Kami</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">PUBLIKASI</a>
                        <ul class="isi-dropdown">
                            <li><a href="<?php echo base_url().'visitor/berita'?>">Berita Terikini</a></li>
                            <li><a href="<?php echo base_url().'visitor/galeri'?>">Galeri Foto</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">BERPARTISIPASI</a>
                        <ul class="isi-dropdown">
                            <li><a href="<?php echo base_url().'partisipasi/donasi'?>">Donasi</a></li>
                            <li><a href="<?php echo base_url().'partisipasi/adopsi'?>">Adopsi</a></li>
                            <li><a href="<?php echo base_url().'partisipasi/kabar'?>">Dapatkan Kabar Terbaru</a></li>
                            <li><a href="<?php echo base_url().'partisipasi/toko'?>">Kunjungi Toko Kami</a></li>
                            <li><a href="<?php echo base_url().'partisipasi/dafrel'?>">Jadilah Relawan Kami</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url().'partisipasi/donasi'?>">DONASI</a></li>
                    <li><a href="<?php echo base_url().'autentifikasi'?>"><i class="fa fa-user"></i></a></li>
                </ul>
            </div>
        </nav>
    </section>