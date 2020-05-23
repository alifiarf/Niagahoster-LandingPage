<?php
  include 'connection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=montserrat' rel='stylesheet'>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Icon Web Tab-->
    <link rel="icon" type="assets/images/logo2.jpg" href="https://i2.wp.com/igem.blog/wp-content/uploads/2018/09/niagahoster-vendor-logo.jpg?resize=480%2C270&ssl=1">

    <!-- Title Web -->
    <title>Web Hosting Indonesia | Niagahoster</title>

  </head>
  <body>
    <!-- Navbar -->
    <div class="navbar">
      <div class="container navbar-subnav">
        <div class="navbar-subnav navbar-subnav-left" >
          <div class="ribbon">
          </div>
          <a class="nav-item nav-link" href="#"><li>Gratis Ebook 9 Cara Cerdas Menggunakan Domain</li></a>
        </div>
        <div class="navbar-subnav navbar-subnav-right">
          <ul style="list-style-type: none;">
            <a class="nav-item nav-link" href="#"><li><i class="fas fa-phone-alt"></i>0274-5305505</li></a>
            <a class="nav-item nav-link" href="#"><li><i class="far fa-comments"></i>Live Chat</li></a>
            <a class="nav-item nav-link" href="#"><li><i class="fas fa-user-circle"></i>Member Area</li></a>
          </ul>         
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light navbar-fixed">
        <div class="container">
          <a class="navbar-brand" href="#"><img class="img-fluid d-none d-md-block" src="assets/images/logo.png" alt="" height="" width="50%"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link" href="#">Hosting</a>
              <a class="nav-item nav-link" href="#">Domain</a>
              <a class="nav-item nav-link" href="#">Server</a>
              <a class="nav-item nav-link" href="#">Website</a>
              <a class="nav-item nav-link" href="#">Afiliasi</a>
              <a class="nav-item nav-link" href="#">Promo</a>
              <a class="nav-item nav-link" href="#">Pembayaran</a>
              <a class="nav-item nav-link" href="#">Review</a>
              <a class="nav-item nav-link" href="#">Kontak</a>
              <a class="nav-item nav-link" href="#">Blog</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->
    
    <!-- PHP Hosting -->
    <div class="container">
      <div class="row php-hosting">
        <div class="col-lg-6">
          <h1 class="" style="">PHP Hosting</h1>
          <h3 class="">Cepat, Handal, penuh dengan modul PHP yang anda butuhkan</h4>
          <ul style="list-style: none;">
            <li><i class="fa fa-check-circle"></i> Solusi PHP untuk performa query yang lebih cepat</li>
            <li><i class="fa fa-check-circle"></i> Konsumsi memori yang lebih rendah</li>
            <li><i class="fa fa-check-circle"></i> Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
            <li><i class="fa fa-check-circle"></i> Fitur enkripsi IonCube dan Zend Guard Loaders</li>
           </ul>
        </div>
        <div class="col-lg-6" style="text-align:center;">
          <img class="img-fluid" src="assets/svg/php-hosting.svg" alt="" height="" width="90%">
        </div>
      </div>
    <hr>
    </div>
    <!-- PHP Hosting End-->

    <!-- PHP 2 -->
    <div class="container" style="margin-top:300px;margin-bottom:70px;">
      <div class="row php-2 justify-content-center" style="">
        <div class="col-10" >
          <div class="row text-center" >
            <div class="col-lg" style="position: absolute; bottom: 0; text-align:left">
              <object data="assets/svg/php-zendguard.svg" type="image/svg+xml">
                <img src="assets/svg/php-zendguard.svg" />
              </object>
              <p class="">PHP Zend Guard Loader</p>
            </div>
            <div class="col-lg" style="position: absolute; bottom: 0; text-align:center">
              <object data="assets/svg/php-composer.svg" type="image/svg+xml">
                  <img src="assets/svg/php-zendguard.svg" />
                </object>              
              <p class="">PHP Composer</p>
            </div>
            <div class="col-lg" style="position: absolute; bottom: 0; text-align:right;">
              <object data="assets/svg/php-ioncube.svg" type="image/svg+xml">
                <img src="assets/svg/php-zendguard.svg" />
              </object>
              <p class="" style="text-align: bottom;">PHP IonCube Loader</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- PHP 2 End -->

    <!-- Paket Hosting -->
    <div class="container">
      <div class="paket-hosting text-center">
        <div>
          <h3>Paket Hosting Singapura yang Tepat</h3>
          <h4>Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
        </div>
        <div class="row paket-hosting justify-content-center">
          <div class="col-10">
            <div class="row text-center">
              <div class="col-lg" id="bayi">
                <?php
                  $sql = mysqli_query($conn,"select * from hosting_package where id_package=0");
                  while($data = mysqli_fetch_array($sql)){
                  $no=1;
                ?>
                  <div class="nama-paket">
                    <h4><b><?php echo $data['name_package']; ?></b></h4>
                  </div>  
                  <div class="harga-paket">
                    <h6 class="text-muted"> <del><?php echo $data['price']; ?></del></h6>
                    <h3>Rp <b><?php echo $data['price_after_discount']; ?></b>/bln</h3>
                  </div>
                  <div class="pengguna-paket">
                    <p><b><?php echo $data['total_user']; ?></b> Pengguna Terdaftar</p>
                  </div>
                  <div class="detail-paket">
                    <p><b>0.5X RESOURCE POWER</b></p>
                    <p><b>500 MB</b> Disk Space</p>
                    <p><b>Unlimited</b> Bandwith</p>
                    <p><b>Unlimited</b> Database</p>
                    <p><b>1</b> Domain</p>
                    <p><b>Instant</b> Backup</p>
                    <p><b>Unlimited SLL</b> Selamanya</p>
                  </div>
                  <div class="">
                    <a href="#" class="btn btn-lg btn-paket">Pilih Sekarang</a>
                  </div>
                  <?php 
                  }
                  ?>
              </div>
              <div class="col-lg" id="pelajar">              
                <?php
                $sql = mysqli_query($conn,"select * from hosting_package where id_package=1");
                while($data = mysqli_fetch_array($sql)){
                $no=1;
                ?>
                  <div class="nama-paket">
                    <h4><b><?php echo $data['name_package']; ?></b></h4>
                  </div>  
                  <div class="harga-paket">
                    <h6 class="text-muted"> <del>Rp <?php echo $data['price']; ?></del></h6>
                    <h3>Rp <b><?php echo $data['price_after_discount']; ?></b>/bln</h3>
                  </div>
                  <div class="pengguna-paket">
                    <p><b><?php echo $data['total_user']; ?></b> Pengguna Terdaftar</p>
                  </div>
                  <div class="detail-paket">
                    <p><b>1 X RESOURCE POWER</b></p>
                    <p><b>Unlimited</b> Disk Space</p>
                    <p><b>Unlimited</b> Bandwith</p>
                    <p><b>Unlimited</b> POP3 Email</p>
                    <p><b>Unlimited</b> Database</p>
                    <p><b>10</b>Addon Domain</p>
                    <p><b>Instant</b> Backup</p>
                    <p><b>Domain Gratis</b> Selamanya</p>
                    <p><b>Unlimited SLL</b> Selamanya</p>
                  </div>
                  <div class="">
                    <a href="#" class="btn btn-lg btn-paket">Pilih Sekarang</a>
                  </div>
                  <?php 
                  }
                  ?>
              </div>
              <div class="col-lg hosting-package-personal " id="pesonal">
                <?php
                $sql = mysqli_query($conn,"select * from hosting_package where id_package=2");
                while($data = mysqli_fetch_array($sql)){
                $no=1;
                ?>
                <div class="ribbon ribbon-top-left">
                  <span>Best Seller</span>
                </div>
                  <div class="nama-paket" id="personal" style="">
                    <h4><b><?php echo $data['name_package']; ?></b></h4>
                  </div>  
                  <div class="harga-paket" id="personal">
                    <h6 class=""> <del>Rp <?php echo $data['price']; ?></del></h6>
                    <h3>Rp <b><?php echo $data['price_after_discount']; ?></b>/bln</h3>
                  </div>
                  <div class="pengguna-paket" id="personal">
                    <p><b><?php echo $data['total_user']; ?></b> Pengguna Terdaftar</p>
                  </div>
                  <div class="detail-paket">
                    <p><b>2 X RESOURCE POWER</b></p>
                    <p><b>Unlimited</b> Disk Space</p>
                    <p><b>Unlimited</b> Bandwith</p>
                    <p><b>Unlimited</b> POP3 Email</p>
                    <p><b>Unlimited</b> Databases</p>
                    <p><b>Unlimited</b>Addon Domaisn</p>
                    <p><b>Instant</b> Backup</p>
                    <p><b>Domain Gratis</b> Selamanya</p>
                    <p><b>Unlimited SLL</b> Selamanya</p>
                    <p><b>Private</b> Name Server</p>
                    <p><b>SpamAssasin</b> Mail Protection</p>
                  </div>
                  <div class="btn-paket-box">
                    <a href="#" class="btn btn-lg btn-paket">Pilih Sekarang</a>
                  </div>
                  <?php 
                  }
                  ?>
              </div>
              <div class="col-lg" id="bisnis">
                <?php
                $sql = mysqli_query($conn,"select * from hosting_package where id_package=3");
                while($data = mysqli_fetch_array($sql)){
                $no=1;
                ?>
                  <div class="nama-paket">
                    <h4><b><?php echo $data['name_package']; ?></b></h4>
                  </div>  
                  <div class="harga-paket">
                    <h6 class="text-muted"> <del>Rp <?php echo $data['price']; ?></del></h6>
                    <h3>Rp <b><?php echo $data['price_after_discount']; ?></b>/bln</h3>
                  </div>
                  <div class="pengguna-paket">
                    <p><b><?php echo $data['total_user']; ?></b> Pengguna Terdaftar</p>
                  </div>
                  <div class="detail-paket">
                    <p><b>3 X RESOURCE POWER</b></p>
                    <p><b>Unlimited</b> Disk Space</p>
                    <p><b>Unlimited</b> Bandwith</p>
                    <p><b>Unlimited</b> POP3 Email</p>
                    <p><b>Unlimited</b> Databases</p>
                    <p><b>Unlimited</b>Addon Domains</p>
                    <p><b>Magic Auto</b> Backup & Restore</p>
                    <p><b>Domain Gratis</b> Selamanya</p>
                    <p><b>Unlimited SLL</b> Gratis Selamanya</p>
                    <p><b>Private</b> Name Server</p>
                    <p><b>Prioritas</b> Layanan Support</p>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <p><b>SpamExpert</b> Pro Mail Protection</p>
                  </div>
                  <div class="">
                    <a href="#" class="btn btn-lg btn-paket">Pilih Sekarang</a>
                  </div>
                  <?php 
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Paket Hosting End -->

    <!-- Powerful -->
    <div class="container">
      <div class="row powerful justify-content-center">
        <div>
          <h3>Powerful dengan Limit PHP yang Lebih Besar</h3>
        </div>
        <div class="col-10 text-center">
          <table>
            <tr>
              <td><i class="fa fa-check-circle"></i></td>
              <td>max execution time 300s</td>
              <td><i class="fa fa-check-circle"></i></td>
              <td>post max size 128MB</td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle"></i></td>
              <td>max execution time 300s</td>
              <td><i class="fa fa-check-circle"></i></td>
              <td>upload max filesize 128MB</td>
            </tr>
            <tr>
              <td><i class="fa fa-check-circle"></i></td>
              <td>php memory limit 1024 MB</td>
              <td><i class="fa fa-check-circle"></i></td>
              <td>max input vars 2500</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- Powerful End-->

    <!-- Semua Paket-->
    <div class="container">
      <div class="row semua-paket justify-content-center">
        <div>
          <h3>Semua Paket Hosting Sudah Termasuk</h3>
        </div>
        <div class="col-12">
          <div class="row text-center">
            <div class="col-lg">
              <object data="assets/svg/php_semua_versi.svg" type="image/svg+xml">
                <img src="assets/svg/php_semua_versi.svg" />
              </object>
              <h4 class="">PHP Semua Versi</h4>
              <p class="">Pilih mulai dari versi 5.3 s/d PHP 7. Ubah Sesuka Anda!</p>
            </div>
            <div class="col-lg">
              <object data="assets/svg/hosting_mysql.svg" type="image/svg+xml">
                <img src="assets/svg/hosting_mysql.svg" />
              </object>
              <h4 class="">MySQL Versi 5.6</h4>
              <p class="">Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.</p>
            </div>
            <div class="col-lg">
              <object data="assets/svg/Hosting_CPanel.svg" type="image/svg+xml">
                <img src="assets/svg/Hosting_CPanel.svg" />
              </object>
              <h4 class="">Panel Hosting cPanel</h4>
              <p class="">Kelola website dengan panel canggih yang familiar di hati Anda.</p>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-lg">
              <object data="assets/svg/garansi_uptime.svg" type="image/svg+xml">
                <img src="assets/svg/garansi_uptime.svg" />
              </object>
              <h4 class="">Garansi Uptime 99.9%</h4>
              <p class="">Data center yang mendukung kelangsungan website Anda 24/7.</p>
            </div>
            <div class="col-lg">
              <object data="assets/svg/innodb.svg" type="image/svg+xml">
                <img src="assets/svg/innodb.svg" />
              </object>
              <h4 class="">Database InnoDB Unlimited</h4>
              <p class="">Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
            </div>
            <div class="col-lg">
              <object data="assets/svg/mysql_remote.svg" type="image/svg+xml">
                <img src="assets/svg/mysql_remote.svg" />
              </object>
              <h4 class="">Wildcard Remote MySQL</h4>
              <p class="">Mendukung s/d 25 max_user_connections dan 100 max_connections</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Semua Paket End -->

    <!-- Laravel -->
    <div class="container">
      <div class="laravel ">
        <div class="text-center">
          <h3>Mendukung Penuh Framework Laravel</h3>
        </div>
        <div class="row laravel">
          <div class="col-lg-7">
            <h6 class="">Tak Perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</h6>
            <ul style="list-style: none;">
              <li><i class="fa fa-check-circle"></i> Install Laravel <b>1 klik</b> dengan Softaculous Installer</li>
              <li><i class="fa fa-check-circle"></i> Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json,</b> dan <b>fileinfo.</b></li>
              <li><i class="fa fa-check-circle"></i> Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstall packages pilihan Anda.</li>
            </ul>
            <p>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
            <div class="">
              <a href="#" class="btn btn-lg btn-pilih">Pilih Hosting Anda</a>
            </div>
          </div>
          <div class="col-lg-5" style="text-align:center;">
            <object data="assets/svg/support-laravel.svg" type="image/svg+xml">
              <img src="assets/svg/support-laravel.svg" />
            </object>
          </div>
          <hr>
      </div>  
      </div>
    </div>
    <!-- Laravel End-->

    <!-- Modul -->
    <div class="container">
      <div class="row modul justify-content-center">
        <div>
          <h3>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h3>
         </div>
        <div class="col-10 text-center">
          <table>
            <tr>
              <td>IcePHP</td>
              <td>http</td>
              <td>nd_pdo_mysql</td>
              <td>stats</td>
            </tr>
            <tr>
              <td>apc</td>
              <td>huffman</td>
              <td>oauth</td>
              <td>stem</td>
            </tr>
            <tr>
              <td>apcu</td>
              <td>idn</td>
              <td>oci8</td>
              <td>stomp</td>
            </tr>
            <tr>
              <td>apm</td>
              <td>igbinary</td>
              <td>odbc</td>
              <td>suhosin</td>
            </tr>
            <tr>
              <td>ares</td>
              <td>imagick</td>
              <td>opcache</td>
              <td>sybace_ct</td>
            </tr>
            <tr>
              <td>bcmath</td>
              <td>imap</td>
              <td>pdf</td>
              <td>sysvmsg<em/td>
            </tr>
            <tr>
              <td>apc</td>
              <td>huffman</td>
              <td>oauth</td>
              <td>stem</td>
            </tr>
            <tr>
              <td>apcu</td>
              <td>idn</td>
              <td>oci8</td>
              <td>stomp</td>
            </tr>
            <tr>
              <td>apm</td>
              <td>igbinary</td>
              <td>odbc</td>
              <td>suhosin</td>
            </tr>
            <tr>
              <td>ares</td>
              <td>imagick</td>
              <td>opcache</td>
              <td>sybace_ct</td>
            </tr>
            <tr>
              <td>bcmath</td>
              <td>imap</td>
              <td>pdf</td>
              <td>sysvmsg<em/td>
            </tr>
          </table>
          <div class="">
              <a href="#" class="btn btn-lg btn-selengkapnya">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Modul End-->

    <!-- Linux -->
    <div class="container">
      <div class="linux ">
        <div class="row linux">
          <div class="col-lg-6">
            <h3>Linux Hosting yang Stabil dengan Teknologi LIVE</h3>
            <p>SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LIVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> an caching. Apache loading balancer berbasis LiteSpeed Technologies. <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda</p>
            <div class="">
              <a href="#" class="btn btn-lg btn-pilih">Pilih Hosting Anda</a>
            </div>
          </div>
          <div class="col-lg-6" style="text-align:center;">
            <img class="img-fluid" src="assets/images/image-support.png" alt="" height="" width="80%">
          </div>
        </div>
      </div>
    </div>
    <!-- Linux End -->

    <!-- Bagikan -->
    <div class="container-fluid">
      <div class="bagikan ">
        <div class="row bagikan">
          <div class="col-lg-7">
            <p><b>Bagikan jika Anda menyukai halaman ini.</b></p>
          </div>
          <div class="col-lg-3" style="text-align:left;">
            <div class="row ">
              <div class="col-lg">
                <a href="#" class="fab fa-facebook-f"></a>
                <span class="">80k</span>
              </div>
              <div class="col-lg">
                <a href="#" class="fab fa-twitter"></a>
                <span class="">450</span>
              </div>
              <div class="col-lg">
                <a href="#" class="fab fa-google"></a>
                <span class="">1900</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bagikan End -->

    <!-- Bantuan -->
    <div class="container-fluid">
      <div class="bantuan ">
        <div class="row bantuan">
          <div class="col-lg-8">
            <h3>Perlu <b>BANTUAN?</b> Hubungi  Kami : <b>0274-5305505</b></h3>
          </div>
          <div class="col-lg-3" style="text-align:left;">
            <div class="row">
              <a href="#" class="btn btn-lg btn-chat"> <i class='far fa-comments'></i> Live Chat</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bantuan End -->

    <!-- Footer -->
    <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3">
          <h5 class="footer__column-title">Hubungi Kami</h5>
          <p class="footer__contact"><a href="tel:+62742885822">0274-2885822</a><br>Senin - Minggu<br>24 Jam Non Stop</p>
          <p class="footer__address">Jl. Selokan Mataram Monjali<br>Karangjati MT/I304<br>Sinduadi, Mlati, Sleman<br> Yogyakarta<br>55284</p>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-sm-0">
          <h5 class="footer__column-title">Layanan</h5>
          <ul class="footer__menu-list">
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/domain-murah">Domain</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/hosting-indonesia">Shared Hosting</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/cloud-vps-hosting">Cloud VPS Hosting</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/promosi-transfer">Managed VPS Hosting</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/membuat-blog-weebly">Web Builder</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/ssl-murah">Keamanan SSL/HTTPS</a></li>
            <li><a class="footer__menu" href="https://www.niagaweb.co.id/">Jasa Pembuatan Website</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/afiliasi">Program Afiliasi</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
          <h5 class="footer__column-title">Service Hosting</h5>
          <ul class="footer__menu-list">
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/hosting-murah">Hosting Murah</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/hosting-indonesia">Hosting Indonesia</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/hosting-singapore">Hosting Singapore SG</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/reseller-hosting">Hosting PHP</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/wordpress-hosting">Hosting Wordpress</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/email-hosting">Hosting Laravel</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
          <h5 class="footer__column-title">Tutorial</h5>
          <ul class="footer__menu-list">
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/kb">Knowledgebase</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/blog">Blog</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/pembayaran">Cara Pembayaran</a></li>
          </ul>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-sm-6 col-lg-3">
          <h5 class="footer__column-title">Tentang Kami</h5>
          <ul class="footer__menu-list">
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/about-us">Tim Niagahoster</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/karir">Karir</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/niagapoin">Events</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/promosi">Penawaran &amp; Promo Spesial</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/kontak">Kontak Kami</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-sm-0">
          <h5 class="footer__column-title">Kenapa Pilih Niagahoster?</h5>
          <ul class="footer__menu-list">
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/hosting-terbaik">Support Terbaik</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/domain-gratis">Garansi Harga Termurah</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/hosting-indonesia#hosting-price">Domain Gratis Selamanya</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/datacenter-hosting">Datacenter Hosting Terbaik</a></li>
            <li><a class="footer__menu" href="https://www.niagahoster.co.id/review">Review Pelanggan</a></li>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
          <h5 class="footer__column-title">Newsletter</h5>
          <div class="input-group newsletter">
            <form action="" method="post" id="newsletter" class="footer__newsletter">
              <input type="email"  id="newsletter-email" class="form-control" placeholder="Email">
              <span class="input-group-btn">
                <button class="btn" type="submit">Berlangganan</button>
              </span>
            </form>
            <p class="footer__pembayaran  text-center text-md-left">Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda </p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
          <ul class="footer__social-icon-list">
              <a class="footer__social-icon" href="https://www.facebook.com/niagahoster">
              <i class="fab fa-facebook-f" alt="facebook"></i>
              </a>
              <a class="footer__social-icon" href="https://twitter.com/niagahoster">
              <i class="fab fa-twitter" alt="twitter"></i>
              </a>
              <a class="footer__social-icon" href="https://www.instagram.com/niagahoster.id">
              <i class="fab fa-google-plus-g" alt="google"></i>
              </a>
          </ul>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-md-7">
          <h5 class="footer__column-title">Pembayaran</h5>
          <p class="footer__pembayaran  text-center text-md-left">Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif! </p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-md-7">
          <p class="footer__copyright  text-center text-md-left">Copyright ©2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta. <br> Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology <br> Made with <i class="fas fa-heart"></i> by Alifia R </p>
        </div>
        <div class="col-12 col-md-5 mt-5 mt-md-0">
          <div class="footer__privacy-policy  text-center text-md-right">
            <a href="https://www.niagahoster.co.id/syarat-dan-ketentuan">Syarat dan Ketentuan</a>
            <span>|</span>
            <a href="https://www.niagahoster.co.id/kebijakan-privasi">Kebijakan Privasi</a>
          </div>
        </div>
      </div>
    </div>
    </footer>
    <!-- Footer End -->

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  </body>
</html>